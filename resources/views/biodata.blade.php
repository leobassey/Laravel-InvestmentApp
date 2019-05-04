@extends('layouts.masterpage')
@section('title', 'Edit personal details')
@section('content')
<style>
.formControl{
    width:67%;
}
</style>

<div class="content-wrapper">
    <section class="content-header">
      <h1>
 
        Edit personal details
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> dashboard</a></li>
        <li><a href="{{route('profile')}}">Profile</a></li>
        <li class="active">Edit personal details</li>
      </ol>
    </section>
    <section class="content container-fluid">

        <p class="mt-5"></p>

        <section class=" ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Edit personal details</div>
                    <div class="card-body">
                            
                            <div class="">
                          
    <form method="POST" class="mt-3" action="{{route('updatebiodata', $getUser->email)}}" style="margin-left:150px">
                             @csrf
                                <div class="form-group">
                                    <label for="firstname">First Name:</label>
        <input type="text" class="form-control" id="firstname" placeholder="Enter first name" readonly name="firstname" value="{{$getUser->firstname}}" style="width:67%">
                                </div>
                                 <div class="form-group">
                                    <label for="lastname">Last Name:</label>
                                    <input type="text" class="form-control" id="lastname" placeholder="Enter last name"readonly  name="lastname" value="{{$getUser->lastname}}" style="width:67%">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="{{$getUser->phone}}" style="width:67%">
                                </div>
                                 <div class="form-group">
                                    <label for="gender">Gender:</label>
                                    <input type="text" class="form-control" id="gender" placeholder="Enter gender" name="gender" value="{{$getUser->gender}}" style="width:67%">
                                </div>
                                 <div class="form-group">
                                    <label for="phone">Date Of Birth:</label>
                                    <input type="date" class="form-control" id="birth" placeholder="Enter date of birth" name="birth" value="{{$getUser->birthdate}}" style="width:67%">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                     <input type="text" name="address" placeholder = "Enter address" class="form-control" id="address" value="{{$getUser->address}}" style="height: 72px; width:67%">
                                        
                                    
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