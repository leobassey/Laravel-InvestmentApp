<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <!--<link rel="stylesheet" href="dist/css/AdminLTE.min.css">-->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->

  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="css/datatables.css">
   <link rel="stylesheet" href="css/custom.css">

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>




    <link rel="stylesheet"  href="vendor/datatables/datatables.min.css">  
    <link rel="stylesheet"  href="vendor/datatables/style.css"> 
    <script src="vendor/datatables/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="vendor/datatables/datatables.min.js" type="text/javascript"></script>  
   
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <style type="text/css">
          .system_name{
            margin-top: 15px;
            font-size: 20px;
          }
          .dropdown-menu li a
          {
            padding: 12px 20px;
          }
        </style>

        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>
<body>
@include('layouts.shared.header')
@include('layouts.shared.sidebar')

@yield('content')

@include('layouts.shared.footer')

</body>
</html>