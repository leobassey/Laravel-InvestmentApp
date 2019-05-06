@extends('layouts.masterpage')
@section('title', 'Profile')
@section('content')


<style type="text/css">
    .btn-success
    {
        background-color: #25afac;
        border: solid 1px #25afac;

    }
    .modal-header
    {
        height: 30px;
        border-bottom: none;
        background: white;
       color: #53d192;
    }
    .modal-header .close {
    margin-top: -26px;
    color: #53d192;
   
}
.close
{
    opacity: 1;
}
.wizard-card .picture input[type="file"] 
{
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
}
    .wizard-card .picture
 {
    width: 106px;
    height: 106px;
    background-color: #999999;
    /* border: 4px solid #CCCCCC; */
    color: #FFFFFF;
    /* border-radius: 50%; */
    margin: 5px auto;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
}
.wizard-card .picture-container 
{
    position: relative;
    cursor: pointer;
    text-align: center;
}
.image-container {
  min-height: 100vh;
  background-position: center center;
  background-size: cover;
}
.wizard-card .picture-src {
  width: 100%;
}
.alert-success {
    border-color: none;
}
</style>
<div class="content-wrapper">
     <section class="content-header">
      <h1>
       User Profile
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> dashboard</a></li>
        <li><a href="{{route('profile')}}">Profile</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>
    <section class="content container-fluid">

        <p class="mt-5"></p>
        @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
        @endforeach

    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong style="color:green"> {{ session()->get('success') }}</strong>
</div>
@endif


      
               
                  

       <section class="panel-create mr-5">
                            
                            <div class="panel-body">

                                <div class="container">
                                <div class="row">

            
                            <div class="col-md-2 mb-5 ">

  @if(empty($userDetails->imageurl))
  <img src="images/default_avatar.jpg" alt="Image" width="120px" style="margin-top:28px;"/>
  <a href="#" style="color:#53d192;" data-target ="#endorse" data-toggle = "modal">Change Profile Image</a>
  
 @else
  <img src="{{ asset('profileImage/' . $userDetails->imageurl) }}" width="120px" style="margin-top:28px; border-radius:5px;"/>
<a href="#" style="color:#53d192;" data-target ="#endorse" data-toggle = "modal">Change Profile Image</a>
 @endif
                              
                                     </div>

                                     <div class="col-md-4">
                                    
                                         <p class = "title-details mb-4"><h3>Personal Details:</h3></p>
                                         <hr>
                                         <div class="row">
                                             <div class="col-md-4 mb-1">
                                                Name:
                                             </div>
                                             <div class="col-md-7">
                                             {{$userDetails->firstname}} {{$userDetails->lastname}}
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4 mb-1">
                                               Gender:
                                             </div>
                                             <div class="col-md-7">
                                            {{$userDetails->gender}}
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4 mb-1">
                                                Birth Date:
                                             </div>
                                             <div class="col-md-7">
                                            {{$userDetails->birthdate}}

                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4 mb-1">
                                                Phone:
                                             </div>
                                             <div class="col-md-7">
                                             {{$userDetails->phone}}
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4 mb-1">
                                                Email:
                                             </div>
                                             <div class="col-md-7">
                                             {{$userDetails->email}}
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4 mb-1">
                                               Address:
                                             </div>
                                             <div class="col-md-7 mb-4">
                                             {{$userDetails->address}}
                                             </div>
                                        </div>
                                        
                                        <div class="row">
                                             

                                        <div class="row">
                                        <div class="col-md-12 mt-4">
                                        <a href = "{{route('editbiodata')}}" class="btn btn-success">Edit Personal Details</a>
                                        </div>
                                        </div>
                                        
                                     </div>
                                    
</div>
                                     <div class="col-md-5">
                                         <p class = "title-details "><h3>Bank Details:</h3></p>
                                         <hr>
                                        <div class="row">
                                             <div class="col-md-4 mb-1">
                                                Bank Name:
                                             </div>
                                             <div class="col-md-8">
                                            {{$userDetails->bankname}}
                                           
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4 mb-1">
                                                Account Name:
                                             </div>
                                             <div class="col-md-8">
                                              
                                              {{$userDetails->accountname}}
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4 mb-1">
                                                Account No:
                                             </div>
                                             <div class="col-md-8">
                                              
                                               {{$userDetails->accountno}}
                                             </div>
                                        </div>
                                          <div class="row">
                                             <div class="col-md-4 mb-1">
                                                Account Type:
                                             </div>
                                             <div class="col-md-8">
                                              
                                                {{$userDetails->accounttype}}
                                             </div>
                                        </div>
                                        

                                        <div class="row">
                                        <div class="col-md-4 mt-4">
                                        <a href = "{{route('editbankdetails')}}" class="btn btn-success">Edit Bank Details</a>
                                        </div>

            
                                        </div>



                                 </div>





                            </div>

<hr>
<div class="row">
    <div class="col-md-2 mb-5 ">
                                        
                                     </div>

                                     <div class="col-md-4">
                                         <p class = "title-details mb-4"><h3>Next of Kin Details:</h3></p>
                                         <hr>
                                         <div class="row">
                                             <div class="col-md-4 mb-1">
                                                Name:
                                             </div>
                                             <div class="col-md-8">
                                             

                                    {{$userDetails->nname}}
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4 mb-1">
                                                Relationship:
                                             </div>
                                             <div class="col-md-8">
                                              
                                               {{$userDetails->relationship}}
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4 mb-1">
                                                Phone:
                                             </div>
                                             <div class="col-md-8">
                                             
                                               {{$userDetails->nphone}}
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4 mb-1">
                                                Email:
                                             </div>
                                             <div class="col-md-8">
                                              
                                               {{$userDetails->nemail}}
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4 mb-1">
                                               Address:
                                             </div>
                                             <div class="col-md-8">
                                               
                                               {{$userDetails->naddress}}
                                             </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-md-5 mt-4 mb-5">
                                        <a href = "{{route('editnextofkin')}}" class="btn btn-success">Edit Next Of Kin Details</a>
                                        </div>

                                     
                                        </div>
                                        
                                     </div>
                                    


</div>


                        </section>

    </section>

  </div>


    <!--=====================================
       EDORSE DIALOG FORM
=====================================-->

     <div class="modal fade" id="endorse" tabindex="-1" role="dialog" aria-labelledby="register form" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header modal-color text-white">
           
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <!-- registration form -->
              <div class = "d-flex justify-content-md-center mt-2">
              <h1 class="mb-5">Upload profile Image</h1>
            
              </div>
              <div class = "d-flex justify-content-md-center">
         
              <div class="picture-container mt-5">
              <form method="POST" enctype="multipart/form-data" action="{{route('updateprofileimage', $userDetails->email)}}">
                 @csrf
                                          <div class="picture">
                                              <img src="img/default-avatar.png" class="picture-src mb-5" id="wizardPicturePreview" title="" width="200" height="200" />
                            <input type="file" id="wizard-picture"  name="image" style="background-color:silver;color: #fff" required="">
                                          </div>
                                          <!--<h6>Choose Passport</h6>-->
                                      </div>
              </div>
            
          </div>
        
        
           <div class="d-flex justify-content-md-center mb-5">
            <h5 class="mb-3"><button type="submit" class="btn-support mb-3" id="share" style="margin-left: 3px; font-size: 14px; opacity: 1; background-color: #53d192; padding-right: 10px; padding-left: 10px; padding-bottom: 10px;padding-top: 10px; border: solid 1px #53d192; color: #fff; font-weight: bold;" name="upload" id="upload">Save Profile Image</button></h5>

            </form>
        
        </div>
          </div>
        </div>
      </div>



<!--=====================================
       EDORSE DIALOG CONFIRMATION
=====================================-->

<script type="text/javascript">
$("#wizard-picture").change(function(){
        readURL(this);
    });
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

</script>

@endsection