<!DOCTYPE html>
<html>
<head>
	<title>Ayurveda Pharmacovigilance Portal </title>
  <script type="text/javascript">
    function myFunction() {
      var userid=document.getElementById("userid").value;
      if(userid=="")
      {
        swal("Please enter userid!");
        return false;
      }
      swal("Congratulation", "You have successfully registered", "success");
      return true;
    }
  </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
		<div id="outer">
		<div id="navbar">
		<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #1FD625;">
	  <a class="navbar-brand" href="index.php">Ayurveda</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>
	</div>
	<!-- Registration From -->
	<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="images/logo.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Please, fill the form wisly.</p>
                        <a href="login.php"><input type="submit" name="" value="Login"/><br/></a>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Public</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Employee</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Public User</h3>
                                <div class="row register-form">
                                	<form class="form-inline" action="dblogic.php?pageno=1" method="post" enctype="multipart/form-data">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" name="First Name" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" name="Last Name" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="Password" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" name="CPassword" required="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" value="male" name="Gender"checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" value="female" name="Gender">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" name="Email" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="12" class="form-control" placeholder="Your Phone *" value="" name="Mobile_Num" required="" />
                                        </div>DOB:
                                        <div class="form-group">
                                            <input type="date" class="form-control"  value="" name="DOB" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Unique Username *" value="" name="User_ID" id="userid" />
                                        </div>
                                        <input type="submit" onclick=" return myFunction()" class="btnRegister"  value="Register" />
                                    </div>
                                </form>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Employee</h3>
                                <div class="row register-form">
                                	<form class="form-inline" action="dblogic.php?pageno=2" method="post" enctype="multipart/form-data">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" name="First_Name" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" name="Last_Name"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" name ="Email"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="12" minlength="10" class="form-control" placeholder="Phone *" value="" name="Mobile_Num"/>
                                            <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="Gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="Gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="Password"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" name="CPassword" />
                                        </div>
                                        DOB:
                                        <div class="form-group">
                                            <input type="date" class="form-control"  value="" name="DOB" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Unique Username *" value="" name="User_ID" />
                                        </div>
                                        
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</div>
	<!-- Footer -->
	<div id="footer">
			<footer class="container-fluid bg-grey py-5">
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 ">
               <div class="logo-part">
                  <span style="font-size: 3vw; font-family: Impact">Ayurveda</span>
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
                        <li> <a href="#"> Service</a> </li>
                        <li> <a href="#"> Team</a> </li>
                        <li> <a href="#"> Help</a> </li>
                        <li> <a href="#contact1"> Contact</a> </li>
                     </ul>
                  </div>
                  <div class="col-md-6 px-4">
                     <ul>
                        <li> <a href="#"> Fax</a> </li>
                        <li> <a href="#"> Terms</a> </li>
                        <li> <a href="#"> Policy</a> </li>
                        <li> <a href="#"> Refunds</a> </li>
                        <li> <a href="#"> Paypal</a> </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-6 ">
               <h6> Newsletter</h6>
               <div class="social">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
               </div>
               <form class="form-footer my-3">
                  <input type="text"  placeholder="search here...." name="search">
                  <input type="button" value="Go" >
               </form>
               <p>Designed, Developed and Hosted by LateCommerce</p>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</body>
</html>