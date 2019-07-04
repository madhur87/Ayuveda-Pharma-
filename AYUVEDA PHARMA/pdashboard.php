<?php
session_start();
if ($_SESSION['Password'] == "")
{
	header("location:login.php");
}
else
{
	// Logged In\
	// echo $_SESSION['ID'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<script type="text/javascript">
    function myFunction() {
      swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm) {
  if (isConfirm) {
  	
    // location.href("dblogic.php?pageno=4");
    swal("Deleted!", "Your imaginary file has been deleted.", "success");
  } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});
	// alert("hello");
	// swal("Cancelled", "Your imaginary file is safe :)", "error");
	return false;
    }
  </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="pdashboard.css">
	<script src="pdashboard.js"></script>
</head>
<body>
	<div id="outer">
	<div>
		<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="pdashboard.php">
                <span style="font-family:'Impact'; font-size: 2vw; margin: 20px;" >Ayurveda</span>
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome <?php echo $_SESSION['FirstName']; ?> <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="peditpro.php?id=<?php $_SESSION['ID'];?>"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="dblogic.php?pageno=4" onclick="return myFunction()"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="pdashhome.php"><i class="fa fa-fw fa-user-plus" id="side-gly"></i>  <span> Home</span></a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search" id="side-gly"></i><span>Reporting Handling</span> <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-search" id="side-gly"></i><span>New Report</span> <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-2" class="collapse">
                        <li><a href="screport.php"><i class="fa fa-angle-double-right"></i>Standard Case</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Parent-Child Case</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Send Report</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> List Report</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-paper-plane-o " id="side-gly"></i><span> Exit</span></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >

            	<div class="col-sm-12 col-md-12 well" id="content">
                    <!-- <h1>Welcome Admin!</h1> -->

                