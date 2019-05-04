<style type="text/css">
        h1
{
font-size: 22px;
margin-top: 10px;

}
.av_btn 
{
    background: #295e1e;
    padding: 0 25px;
    color: #ffffff;
    line-height: 40px;
    border-radius: 5px;
    margin: 22px 35px 0 0;
    font-weight: bold;
    font-size: 18px;
        padding-top: 9px;
    padding-bottom: 9px;

}
.av_btn:hover
{

    color:#fff;
}
.bg-success
{
    background-color: #738d32;
    color: #fff;
}
</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

   

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="font-size: 26px">
        <span class="sr-only">Toggle navigation</span>
      </a>

<!--<div class="d-flex justify-content-center">-->
  <span class="system_name text-center col-md-8 justify-content-center">
  <!--<img src="images/logo.png" style="width: 50px; margin-top: -8px; margin-left: 0px">-->
  <span style="font-family:; font-size: 26px;">
 <div class="role">
   <div class="col-md-6">
    <a href="packages.php" class="left av_btn">+ Create Investment</a>
   </div>
   <div class="col-md-6">
    <?php
                     $date = date('l, F d, Y');
                        echo $date;
     ?>
   </div>
 </div>
  </span>
   </span>
<!--</div>
       <!--<span style="margin-left: 0%">jhkfjhfgjhkgf</span>-->
    
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 message(s)</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <!--<a href="#">
                      
                     
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                    
                      <p>Why not buy a new awesome theme?</p>
                    </a>-->
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <!--<li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>-->
                
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          
              
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              @if(empty($userDetails->imageurl))
  <img src="images/default_avatar.jpg" alt="Image" width="30px" style="border-radius:50px;"/>
 
  
 @else
  <img src="{{ asset('profileImage/' . $userDetails->imageurl) }}" width="30px" style="border-radius:50px;"/>

 @endif
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"> Hello {{ Auth::user()->firstname }}  </span>
            </a>
            <ul class="dropdown-menu dropdown-usermenu pull-left">
                            <li>
                                <a href="{{route('profile')}}">
                                    Personal Details
                                    </a>
                            </li>
                            <li>
                                <a href="#">
                                    Update password
                                    </a>
                            </li>
                            <li><a href="{{route('logout')}}"><i class="fa fa-sign-out  pull-right"></i> Log Out</a></li>
                        </ul>
          </li>
          
          
        </ul>
      </div>
    </nav>
  </header>