<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="loginpage.css
	">
</head>
<body>
	<div id="outer">
		<div id="navbar">
		<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #1FD625;">
	  <a class="navbar-brand" href="index.php">Ayurveda Pharmacovigilance</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	    </ul>
	   
	  </div>
	</nav>
	</div>
		
<br/>
<br/>
<br/>
	
	<div class="row">
		
<div class="col-md-6 col-md-offset-3" id="login">  

<form action="dblogic.php?pageno=3" method="post">
 <div class="form-group">
 	<center> <b id="login-name" style="color: white;">Login Here </b> </center>
                                            <select class="form-control" name="Select">
                                                <option class="hidden"  selected disabled>Please select your user type?</option>
                                                <option name="myopt1" value="Public">Public</option>
                                                <option name="myopt2" value="Employee">Employee</option>
                                            </select>
                                        </div>
<div class="form-group">
<label class="user"> UserName  </label>
<div class="input-group">
	<span class="input-group-addon" id="iconn"> <i class="glyphicon glyphicon-user"></i></span>
<input type="text" class="form-control" id="text1" name="UserID" placeholder="username">
</div>
	
</div>

<div class="form-group">
<label class="user"> Password </label>
<div class="input-group">
	<span class="input-group-addon" id="iconn1"> <i class="glyphicon glyphicon-lock"></i></span>
<input type="Password" class="form-control" id="text2" name="Password" placeholder=" Enter Password">
</div>
</div>

<div class="form-group">

<input type="submit" class="btn btn-success" id="btn" value="Login" style="border-radius:0px;">
<input type="reset" class="btn btn-danger" id="btn" value="Reset" style="border-radius:0px;">

    </div>
    <br/><br/><br/>
    <a href="#" style="color: white; font-size: 15px; float: right; margin-right: 10px;"> Forget Password </a>
    <a href="register.php" style="color: white; font-size: 15px; float: right; margin-right: 10px;">Register </a>
</form>
</div>
</div>
</div>
<!-- Footer -->
	<!-- Footer -->
	<div id="footer">
			<footer class="container-fluid bg-grey py-5">
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 ">
               <div class="logo-part">
                  <span style="font-size: 2vw; font-family: Impact">Ayurveda Pharmacovigilance</span>
                  <p>AYUSH BHAWAN, B Block,
					GPO Complex, INA, NEW DELHI - 110023</p>
                  <p>Citizens can make call on following Telephone numbers for the matter related to CVC
Call Centre - 1800-11-0180,1964
Complaint Cell - 011-24600216</p>
               </div>
            </div>
            <div class="col-md-6 px-4">
               <h6> About the Ministry</h6>
               <p>The Ministry of AYUSH was formed on 9th November 2014 to ensure the optimal development and propagation of AYUSH systems of health care.</p>
               <a href="#" class="btn-footer"> More Info </a><br>
               <a href="#contact1" class="btn-footer"> Contact Us</a>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 px-4">
               <h6> Help us</h6>
               <div class="row ">
                  <div class="col-md-6">
                     <ul>
                        <li> <a href="#crausal"> Home</a> </li>
                        <li> <a href="#About"> About</a> </li>
                       
                        <li> <a href="#contact1"> Contact</a> </li>
                     </ul>
                  </div>
                  
               </div>
            </div>
           
               
               <p>Designed, Developed and Hosted by LateCommerce</p>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</body>
</html>