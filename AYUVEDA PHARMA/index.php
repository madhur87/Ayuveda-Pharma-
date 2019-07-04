<!DOCTYPE html>
<html>
<head>
	<title>Ayurveda Pharmacovigilance</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="ayurveda.css
	">
</head>
<body>
	<div id="outer">
		<!-- Navbar -->
		<div id="navbar">
		<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #1FD625;">
	  <a class="navbar-brand" href="#">Ayurveda Pharmacovigilance</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#About">About Us</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#contact1">Contact Us</a>
	      </li>
	      
	         
	      <li class="nav-item">
	        <a class="nav-link" href="login.php">Log In</a>
	      </li>
	    
	    <li class="nav-item">
	    	<a class="nav-link" href="register.php">Registration</a>
	    </li>
	</ul>
	  </div>
	</nav>
	<!-- Crausal -->
		<div id="crausal">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="images/2.jpg" alt="First slide" style="height: 600px;">

		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="images/4.jpg" alt="Second slide" style="height: 600px;">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="images/3.jpg" alt="Third slide" style="height: 600px;">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		</div>
		</div>
		<div id="About">
				<center><span id="head">About Us</span></center>
				<div id="row">
					<div id="left" class="col-sm-6 float-left">
						<img src="images/6.jpg" class="img-fluid" alt="Responsive image">
					</div>
					<div id="right" class="col-sm-6 float-left" float="left">
						<div class="jumbotron">
					  <h1 class="display-4">Ministry of Ayush</h1>
					  <p class="lead">The Ministry of AYUSH was formed on 9th November 2014 to ensure the optimal development and propagation of AYUSH systems of health care.</p>
					  <hr class="my-4">
					  <p>Earlier it was known as the Department of Indian System of Medicine and Homeopathy (ISM&H) which was created in March 1995 and renamed as Department of Ayurveda, Yoga and Naturopathy, Unani, Siddha and Homoeopathy (AYUSH) in November 2003.</p>
					  </div>
				</div>
				</div>
				<div>
				</div>
		</div>
		<div id="contact1">
			<center><span id="head">Contact Us</span></center>
			<div id="row">
				<div class="container contact-form">
            <div class="contact-image">
                <img src="images/logo2.jpg" alt="rocket_contact"/>
            </div>
            <form method="post">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
			</div>
			</div>
		</div>
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
               <a href="#row" class="btn-footer"> More Info </a><br>
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
		</div>
	</div>

<!-- Smooth Scrolling -->
<script>
			// Select all links with hashes
		$('a[href*="#"]')
		  // Remove links that don't actually link to anything
		  .click(function(event) {
			// On-page links
			if (
			  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
			  && 
			  location.hostname == this.hostname
			) {
			  // Figure out element to scroll to
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			  // Does a scroll target exist?
			  if (target.length) {
				// Only prevent default if animation is actually gonna happen
				event.preventDefault();
				$('html, body').animate({
				  scrollTop: target.offset().top
				}, 1000, function() {
				  // Callback after animation
				  // Must change focus!
				  var $target = $(target);
				  $target.focus();
				  if ($target.is(":focus")) { // Checking if the target was focused
					return false;
				  } else {
					$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
					$target.focus(); // Set focus again
				  };
				});
			  }
			}
		  });
	</script>
</body>
</html>