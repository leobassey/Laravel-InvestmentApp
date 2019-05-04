@extends('layouts.masterpage')
@section('title', 'Edit next of kin')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
      <h1>
  
       Edit next of kin
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> dashboard</a></li>
        <li><a href="{{route('profile')}}">Profile</a></li>
        <li class="active">Edit next of kin</li>
      </ol>
    </section>
    <section class="content container-fluid">

        <p class="mt-5"></p>

        <section class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit next of kin</div>
                    <div class="card-body">
                            
                            <div class="">
                          
             <form method="POST" class="mt-3" action="{{route('updatenextofkin', $nextofkinDetails->email)}}" style="margin-left:150px">
                             @csrf
                                <div class="form-group">
                                    <label for="firstname">Fullname:</label>
                                    <input type="text" class="form-control" id="nname" placeholder="Enter name" name="nname" value="{{$nextofkinDetails->nname}}" style="width:67%">
                                </div>
                                 <div class="form-group">
                                    <label for="lastname">Relationship:</label>
                                    <input type="text" class="form-control" id="relationship" placeholder="Enter relationship"  name="relationship" value="{{$nextofkinDetails->relationship}}" style="width:67%">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Contact No:</label>
                                    <input type="text" class="form-control" id="nphone" placeholder="Enter phone" name="nphone" value="{{$nextofkinDetails->nphone}}" style="width:67%">
                                </div>
                                 <div class="form-group">
                                    <label for="phone">Email address:</label>
                                    <input type="text" class="form-control" id="nemail" placeholder="Enter email" name="nemail" value="{{$nextofkinDetails->nemail}}"style="width:67%">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                     <input type="text" name="naddress" placeholder = "Enter address" class="form-control" id="naddress" value="{{$nextofkinDetails->naddress}}" style="height: 72px; width:67%">
                                        
                                    
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