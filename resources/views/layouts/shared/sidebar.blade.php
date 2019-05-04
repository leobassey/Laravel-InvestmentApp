<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/default_avatar.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>School Admin</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><a href="{{route('dashboard')}}" style="padding: 7px 7px 7px 7px; font-weight: bold; font-size: 18px">User dashboard</a></li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="#"><i class="fa fa-th"></i> <span>Manage Students</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="viewStudents.php"><i class="fa fa-circle-o"></i>All Students</a></li>
            <li><a href="promotion.php"><i class="fa fa-circle-o"></i>Promote Students</a></li>
             <li><a href="addcomments.php"><i class="fa fa-circle-o"></i>Add Comments</a></li>
          </ul>
        </li>


        <li><a href="viewParents.php"><i class="fa fa fa-book"></i>Manage Parents</a></li>

          <li class="treeview">
          <a href="#"><i class="fa fa-book"></i> <span>Manage Teachers</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>


         <li class="treeview">
          <a href="#"><i class="fa fa-th"></i> <span>Manage Subjects</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--<li><a href="#"><i class="fa fa-circle-o"></i>Subjects</a></li>-->
            <li><a href="viewclasssubjects.php"><i class="fa fa-circle-o"></i>Class Subjects</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-edit"></i> <span>Manage Marks</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="nurserytermmarks.php"><i class="fa fa-circle-o"></i>Nursery term mark</a></li>
             <li><a href="nurserymidtermmarks.php"><i class="fa fa-circle-o"></i>Nursery mid-term mark</a></li>

            <li><a href="primaryterm.php"><i class="fa fa-circle-o"></i>Primary term mark</a></li>
            <li><a href="primarymidterm.php"><i class="fa fa-circle-o"></i>Primary mid-term mark</a></li>
            <li><a href="secondaryterm.php"><i class="fa fa-circle-o"></i>Secondary term mark</a></li>
            <li><a href="secondarymidterm.php"><i class="fa fa-circle-o"></i>Secondary mid-term mark</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#"><i class="fa fa-book"></i> <span>Report Cards</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="nurseryterm.php"><i class="fa fa-circle-o"></i>Nursery term report</a></li>
            <li><a href="nurserymidterm.php"><i class="fa fa-circle-o"></i>Nursery mid-term report</a></li>
            <hr>
            <li><a href="term.php"><i class="fa fa-circle-o"></i>Primary term report</a></li>
            <li><a href="midterm.php"><i class="fa fa-circle-o"></i>Primary mid-term report</a></li>
            <li><a href="primaryfinal.php"><i class="fa fa-circle-o"></i>Primary third term report</a></li>

            <hr>
             <li><a href="jsmidterm.php"><i class="fa fa-circle-o"></i> JSS mid-term report</a>
             <li><a href="ssmidterm.php"><i class="fa fa-circle-o"></i> SS mid-term report</a>


             <li><a href="jsterm.php"><i class="fa fa-circle-o"></i> JSS term report</a>
             <li><a href="ssterm.php"><i class="fa fa-circle-o"></i> SS term report</a>
           
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->