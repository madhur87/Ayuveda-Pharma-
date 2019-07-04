<?php

session_start();
if ($_SESSION['Password'] == "")
{
	header("location:login.php");
}
else
{
	// Logged In
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php echo $_SESSION['FirstName']; ?> <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="dblogic.php?pageno=4"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="edashhome.php"><i class="fa fa-fw fa-paper-plane-o " id="side-gly"></i><span> Home</span></a>
                </li>
                <li>
                    <a href="elistadr.php"><i class="fa fa-fw fa-paper-plane-o " id="side-gly"></i><span> List ADR Report</span></a>
                </li>
                <li>
                    <a href="esendreport.php"><i class="fa fa-fw fa fa-question-circle" id="side-gly"></i><span> Send Report</span></a>
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

                