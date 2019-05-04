@extends('layouts.masterpage')
@section('title', 'Edit bank details')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
      <h1>
  Edit bank details
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> dashboard</a></li>
        <li><a href="{{route('profile')}}">Profile</a></li>
        <li class="active">Edit bank details</li>
      </ol>
    </section>
    <section class="content container-fluid">

        <p class="mt-5"></p>

        <section class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit bank details</div>
                    <div class="card-body"
                            
                            <div class="">
                          
                            <form method="POST" class="mt-3" action="{{route('updatebankdetails', $bankDetails->email)}}" style="margin-left:150px">
                             @csrf
                                <div class="form-group">
                                    <label for="firstname">Account Name:</label>
                                    <input type="text" class="form-control" id="accountname" placeholder="Enter account name" name="accountname" value="{{$bankDetails->accountname}}"  style="width:67%">
                                </div>
                                 <div class="form-group">
                                    <label for="lastname">Bank Name:</label>
                                    <input type="text" class="form-control" id="bankname" placeholder="Enter bank name"  name="bankname" value="{{$bankDetails->bankname}}"  style="width:67%">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Account Type:</label>
                                    <input type="text" class="form-control" id="accounttype" placeholder="Enter account type" name="accounttype" value="{{$bankDetails->accounttype}}"  style="width:67%">
                                </div>
                                 <div class="form-group">
                                    <label for="phone">Account No:</label>
                                    <input type="text" class="form-control" id="accountno" placeholder="Enter account no" name="accountno" value="{{$bankDetails->accountno}}"  style="width:67%">
                                </div>
                                 
                                
                                
                              
                                <button type="submit" class="btn btn-info" style="background-color: #53d192; border: solid 1px #53d192" id="submit" name="submit">Save Changes</button>
                                 <a href = "{{route('profile')}}" class="btn btn-success">Back</a>
                            </form>
                             </div>
 </div>
  </div>
   </div>
    </div>
     </div>
                        </section>            

    </section>

  </div>

@endsection