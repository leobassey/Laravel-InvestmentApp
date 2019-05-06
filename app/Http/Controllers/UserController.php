<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Wallet;
use App\Wallet_Transaction;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    
   public function signup()
   {
   		return view('register');
   }
   public function postSignup(Request $request)
   {
   		$this->validate($request, [

   			'email' => 'required|string|max:255|email|unique:users',
   			'password' => 'required|min:8',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'firstname' =>'required|string|max:255',
            'othername' => 'required|string|max:255',
            'phone' =>'required'
   		]);


            $firstname = $request['firstname'];
            $lastname = $request['othername'];
            $phone = $request['phone'];
	   		$email = $request['email'];
		   	$password = $request['password'];

	   		$encriptedPassword = bcrypt($password);
		   	$user = new User();
            $user->firstname = $firstname;
            $user->lastname = $lastname;
            $user->phone = $phone;
		   	$user->email = $email;
		   	$user->password = $encriptedPassword;
           

		   	if($user->save())
            {

                 $pin = rand(1, 1000000);
                 $pin = substr($pin, -4);


               // Create a user virtual wallet with 0.00 balance
               $wallet = new Wallet();
               $wallet->WalletPin = $pin;
               $wallet->UserEmail = $email;
               $wallet->balance = 0.00;
               $wallet->save();
            }

         

		   	// Login the registered user
		   	 Auth::login($user);

		   	// After successful registration, redirect the user to the dashbard route
	   		//return redirect()->back();

	   		return redirect()->route('dashboard');
	   	
   }
   public function login()
   {
   		return view('login');
   }

   public function postLogin(Request $request)
   {
   		$this->validate($request, [

   			'email' => 'required|email',
   			'password' => 'required'


   		]);

   	if(Auth::attempt(['email' =>$request['email'], 'password' =>$request['password']]))
   		{
              $user = User::where('email', $request->email)->first();
          
               if($user->active == 1)
            {
               return redirect()->route('dashboard');
            }
            else
            {
                return redirect()->back();
            }
   		}
   		else
   		{
   			echo "Invalid username and or password";
   			return redirect()->back();
   			
   		}

         // former

       /*  if(Auth::attempt(['email' =>$request['email'], 'password' =>$request['password']]))
         {
            $user = User::where('email', $request->email)->first();
          
            if($user->role == 1)
            {
               return redirect()->route('dashboard');
            }
            else
            {
               return redirect()->route('user-dashboard');
            }

            
         }
         else
         {
            echo "Invalid username and or password";
            return redirect()->back();
            
         }*/
         
   		
   }

   public function dashboard()
   {
   	 return view('dashboard');
   }

   public function logout()
   {
   		Auth::logout();
   		return redirect()->route('login');
   }

   public function getUserDashboard()
   {
      return view('user');
   }

   public function getStudent()
   {
      $students = Student::all();
      return view('student', compact('students'));
   }

   // get profile page
   public function profile()
   {
     $user = Auth::user();
     $email = $user->email;
     $userDetails = User::whereemail($email)->FirstOrFail();
      return view('profile', compact('userDetails'));
   }

   // get form to edit personal details
   public function editbiodata()
   {
     $user = Auth::user();
     $email = $user->email;
  
     $getUser = User::whereemail($email)->FirstOrFail();
     return view('biodata', compact('getUser'));
   
   }

   // post form to save personal details
   public function updatebiodata(Request $request, $email)
   {
     $user = Auth::user();
     $email = $user->email;
     $userToUpdate = User::whereemail($email)->FirstOrFail();
     $userToUpdate->firstname = $request->get('firstname');
     $userToUpdate->lastname = $request->get('lastname');
     $userToUpdate->phone = $request->get('phone');
     $userToUpdate->gender = $request->get('gender');
     $userToUpdate->birthdate = $request->get('birth');
     $userToUpdate->address = $request->get('address');

     $userToUpdate->save();
     return redirect('/profile')->with('success', 'Personal details updated successfully');

   }


  // get form to edit bank details
   public function editbankdetails()
   {
     $user = Auth::user();
     $email = $user->email;
     $bankDetails = User::whereemail($email)->FirstOrFail();
     return view('bank', compact('bankDetails'));
   }

   // post form to save bank details

   public function updatebankdetails(Request $request, $email)
   {
     $user = Auth::user();
     $email = $user->email;
     $userToUpdate = User::whereemail($email)->FirstOrFail();
     $userToUpdate->accountname = $request->get('accountname');
     $userToUpdate->bankname = $request->get('bankname');
     $userToUpdate->accountno = $request->get('accountno');
     $userToUpdate->accounttype = $request->get('accounttype');
    

     $userToUpdate->save();
     return redirect('/profile')->with('success', 'Bank details updated successfully');
   }

// get form to edit next of kin
   public function editnextofkin()
   {
     $user = Auth::user();
     $email = $user->email;
     $nextofkinDetails = User::whereemail($email)->FirstOrFail();
     return view('nextofkin', compact('nextofkinDetails'));
   }

   // post form to save next of kin

   public function updatenextofkin(Request $request, $email)
   {

     $user = Auth::user();
     $email = $user->email;
     $userToUpdate = User::whereemail($email)->FirstOrFail();
     $userToUpdate->nname = $request->get('nname');
     $userToUpdate->relationship = $request->get('relationship');
     $userToUpdate->nphone = $request->get('nphone');
     $userToUpdate->nemail = $request->get('nemail');
     $userToUpdate->naddress = $request->get('naddress');
    

     $userToUpdate->save();
     return redirect('/profile')->with('success', 'Next of kin details updated successfully');

   }

   // Update profile image
   public function updateprofileimage(Request $request, $email)
   {
      request()->validate([

         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

       ]);
     $user = Auth::user();
     $email = $user->email;
     $userToUpdate = User::whereemail($email)->FirstOrFail();
     $oldImageUrl = $userToUpdate->imageurl;


        if($request->hasFile('image'))
        {
           $file = $request->file('image');
           $name=$file->getClientOriginalName();
           $file->move('profileImage',$name);
           $userToUpdate->imageurl = $name;
        }
       $userToUpdate->save();
       
    //  $usersImage = public_path("profileImage/{$oldImageUrl}"); // get previous image from folder
     // if($usersImage !==null)   
    //  {
     // unlink($usersImage);
    //  }

     return redirect('/profile')->with('success', 'Profile image updated successfully');

     }

// return view to fund wallet

  public function wallet()
  {
    $user = Auth::user();
    $email = $user->email;
    $transactionLists = Wallet_Transaction::whereuser_email($email)->get();


    $walletUser = Wallet::whereEmail($email)->FirstOrFail();
    return view('wallet', compact('transactionLists', 'walletUser'));
  }

  // Endpoint to insert into wallet and transaction log table after Paystack payment

  public function walletendpoint(Request $request)
  {

    $data = json_decode($request->get('data'));
    $amount = $data->walletamount;
    $transactionId = $data->transactionResponse;

    $user = Auth::user();
    $email = $user->email;
    $walletDetails = Wallet::whereEmail($email)->FirstOrFail();
    $walletBalance = $walletDetails->Balance;
    $walletBalance +=$amount;
    $walletDetails->Balance = $walletBalance;

    if($walletDetails->save())
    {
      $wallet_transaction = new Wallet_Transaction();
      $wallet_transaction->transaction_Id = $transactionId;
      $wallet_transaction->user_email = $email;
      $wallet_transaction->amount =$amount;
      $wallet_transaction->log_message = "Wallet credit via Paystack";
      $wallet_transaction->transaction_type ="Credit";
      $wallet_transaction->save();
    }

   // Insert into wallet transaction log
  
   return response()->json($walletDetails);

        // dd($walletDetails);
       //  if($messages = "success")
      //{
      // $response = Response::json($message, 200);
      //}
      // Insert into transactio log table
     //  dd($walletBalance);
    //return view('walletendpoint');



  }

}

