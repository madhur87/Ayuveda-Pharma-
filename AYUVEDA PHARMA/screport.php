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
  <script type="text/javascript">
    function myFunction() {
      swal({
  title: "Are you sure?",
  text: "Do you want to go Home page?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("You are directed to users home page!", {
      icon: "warning",
    // location.replace("pdashhome.php");

    });
    location.replace("pdashhome.php");
    
  } else {
    swal("Please, fill the form");
  }
});
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
                    <a href="pdashhome.php" onclick="return myFunction()"><i class="fa fa-fw fa-user-plus" id="side-gly"></i>  <span> Home</span></a>
                </li>
                <li>
                    <a href="#report"><i class="fa fa-fw fa-user-plus" id="side-gly"></i>  <span> Report Info</span></a>
                </li>
                <li>
                    <a href="#patient"><i class="fa fa-fw fa-user-plus" id="side-gly"></i>  <span> Patient</span></a>
                </li>
                <li>
                    <a href="#desciption"><i class="fa fa-fw fa-user-plus" id="side-gly"></i>  <span> Description and List of all ASU Drugs</span></a>
                </li>
                <li>
                    <a href="#suspected"><i class="fa fa-fw fa-user-plus" id="side-gly"></i>  <span> Detail of Suspected ASU Medicine</span></a>
                </li>
                <li>
                    <a href="#treatement"><i class="fa fa-fw fa-user-plus" id="side-gly"></i>  <span> Treatment and Outcome</span></a>
                </li>
                <li>
                    <a href="#others"><i class="fa fa-fw fa-user-plus" id="side-gly"></i>  <span> Other Details</span></a>
                </li>
                <li>
                    <a href="#identification"><i class="fa fa-fw fa-user-plus" id="side-gly"></i>  <span> Identification of the reporter</span></a>
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
                    <center><h2>Standerd Case Report</h2></center>
                    <hr class="style-six">
   <form  action="dblogic.php?pageno=4" method="post" enctype="multipart/form-data">
   	<!-- Report Information -->
   	<div>
   		<div class="col-sm-12 col-md-12 well" id="content">
  <div class="form-row">
  	<div style="background-color: #1FD625;"><h4 style="font-size: 1.2vw; font-family: Impact; padding:6px;" >
      <a name="report"></a>Report Information</h4></div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Report Title</label>
      <input type="text" class="form-control" id="inputEmail4" name="Report_Name" placeholder="Report Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Type of Report</label>
      <select id="inputState" class="form-control" name="Type_Report">
        <option selected>Choose...</option>
        <option>Operation</option>
      </select>
    </div>
  </div>
  	<div class="form-row">
  		<div class="form-group col-md-4">
    		<label for="inputAddress">Serious</label>
    		<div class="form-check form-check-inline">
  			<input class="form-check-input" type="radio" name="Serious" id="inlineRadio1" value="Yes".checked>
  			<label class="form-check-label" for="inlineRadio1" name="Serious">Yes</label>
			</div>
			<div class="form-check form-check-inline">
  			<input class="form-check-input" type="radio" name="Serious" id="inlineRadio2" value="No".checked>
  			<label class="form-check-label" for="inlineRadio2" name="Serious" >No </label>
			</div>
  		</div>
  		<div class="form-group col-md-4">
    		<label for="inputAddress">Reason for seriousness:</label>
      			<div class="form-check">
        		<input class="form-check-input" type="checkbox" id="gridCheck1" name="Seriousness" value="Death".checked>
        		<label class="form-check-label" for="gridCheck1" >Death
        		</label></div>
        		<div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck1" name="Seriousness" value="Hospitalization".checked>
        		<label class="form-check-label" for="gridCheck1" >Hospitalization/prolonged
        		</label></div>
        		<div class="form-check">
        		<input class="form-check-input" type="checkbox" id="gridCheck1" name="Seriousness" value="Congenital-anomaly".checked>
        		<label class="form-check-label" for="gridCheck1" >Congenital-anomaly
        		</label></div>
      	</div>
  		<div class="form-group col-md-4">
      	<div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="Seriousness" value="Life-threatening".checked>
        <label class="form-check-label" for="gridCheck1" >
          Life-threatening
        </label></div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="Seriousness" value="Disabling".checked>
        <label class="form-check-label" for="gridCheck1" >
          Disabling
        </label></div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="Seriousness" value="Disabling".checked>
        <label class="form-check-label" for="gridCheck1" >
          Disabling
        </label></div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="Seriousness" value="Other Medically Imporatant Condtion".checked>
        <label class="form-check-label" for="gridCheck1" >
          Other Medically Imporatant Condtion
        </label></div>
      	</div>
  	</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Country of Occurance</label>
      <select id="inputState" class="form-control" name="Country">
        <option selected>Choose...</option>
        <option>India</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Country of Primary Resource</label>
      <select id="inputState" class="form-control" name="Resource">
        <option selected>Choose...</option>
        <option>UP</option>
        <option>UK</option>
      </select>
    </div>
  </div>
</div>
</div>
<!-- For patient -->
	<div>
	<div class="col-sm-12 col-md-12 well" id="content">
		<div style="background-color: #1FD625;"><h4 style="font-size: 1.2vw; font-family: Impact; padding:6px;" ><a name="patient"></a>Patient/Consumer identification (please complete or tick boxes below as appropriate)</h4></div>
		<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="inputEmail4" name="Patient_Name" placeholder="Patient Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Patient Record Number(PRN)</label>
      <input type="number" class="form-control" id="inputEmail4" name="Record_Name" placeholder="Enter PRN">
    </div>
  </div>
    <div class="form-row">
      <div class="form-group col-md-4">
          <label for="inputEmail4">Ethinicity</label>
          <input type="text" class="form-control" id="inputEmail4" name="Ethinicity" placeholder="Ethinicity">
      </div>
      <div class="form-group col-md-4">
          <label for="inputEmail4">IPD / OPD</label>
          <input type="text" class="form-control" id="inputEmail4" name="IPD_OPD" placeholder="Report Name">
      </div>
      <div class="form-group col-md-4">
          <label for="inputEmail4">Age</label>
          <input type="number" class="form-control" id="inputEmail4" name="Age" placeholder="Report Name">
      </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Address</label>
      <input type="text" class="form-control" id="inputEmail4" name="Address" placeholder="Enter Full Address">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Gender</label>
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1" value="Male".checker>
      <label class="form-check-label" for="inlineRadio1">Male</label>
      </div>
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="Gender" id="inlineRadio2" value="Female".checker>
      <label class="form-check-label" for="inlineRadio2">Female</label>
      </div>
      </div>
  </div>
	</div>
</div>

<!-- For Desciption and list of ASU drugs -->
	<div>
		<div class="col-sm-12 col-md-12 well" id="content">
		<div style="background-color: #1FD625;"><h4 style="font-size: 1.2vw; font-family: Impact; padding:6px;" ><a name="desciption"></a>Description of the suspected Adverse Reaction(Please complete bo below)</h4></div>
		<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Date and time of initial observation</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="Report Name" name ="Date_T">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Type of Report</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Report Name" name="Report_Type">
    </div>
  </div>
  <div class="form-row">
  	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Medicine Name</th>
      <th scope="col">Manufacturer Batch No.</th>
      <th scope="col">Daily Dose</th>
      <th scope="col">Form Route of administration</th>
      <th scope="col">Starting Date</th>
      <th scope="col">Stopped Date</th>
      <th scope="col">Reason for Use</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">
      <input type="text" class="form-control" id="inputtext1" name="Medicine">
    </td>
      <td><input type="text" class="form-control" id="inputtext2" name="Batch_no"></td>
      <td><input type="text" class="form-control" id="inputtext3" name="Daily_Dose"></td>
      <td><input type="text" class="form-control" id="inputtext4" name="Administration"></td>
      <td><input type="date" class="form-control" id="inputtext5" name="Start_Date"value="Start_Date"></td>
      <td><input type="date" class="form-control" id="inputEmail4" name="End_Date"></td>
      <td><input type="text" class="form-control" id="inputEmail4" name="Reason"></td>
    </tr>
    <tr>
      <td scope="row">
      <input type="text" class="form-control" id="inputEmail4">
    </td>
      <td><input type="text" class="form-control" id="inputEmail4"></td>
      <td><input type="text" class="form-control" id="inputEmail4"></td>
      <td><input type="text" class="form-control" id="inputEmail4"></td>
      <td><input type="date" class="form-control" id="inputEmail4"></td>
      <td><input type="date" class="form-control" id="inputEmail4"></td>
      <td><input type="text" class="form-control" id="inputEmail4"></td>
    </tr>
    <tr>
      <td scope="row">
      <input type="text" class="form-control" id="inputEmail4">
    </td>
      <td><input type="text" class="form-control" id="inputEmail4"></td>
      <td><input type="text" class="form-control" id="inputEmail4"></td>
      <td><input type="text" class="form-control" id="inputEmail4"></td>
      <td><input type="date" class="form-control" id="inputEmail4"></td>
      <td><input type="date" class="form-control" id="inputEmail4"></td>
      <td><input type="text" class="form-control" id="inputEmail4"></td>
    </tr>
    <tr>
      <td scope="row">
      <input type="text" class="form-control" id="inputEmail4">
    </td>
      <td><input type="text" class="form-control" id="inputEmail4"></td>
      <td><input type="text" class="form-control" id="inputEmail4"></td>
      <td><input type="text" class="form-control" id="inputEmail4"></td>
      <td><input type="date" class="form-control" id="inputEmail4"></td>
      <td><input type="date" class="form-control" id="inputEmail4"></td>
      <td><input type="text" class="form-control" id="inputEmail4"></td>
    </tr>
  </tbody>
</table>
  </div>
	</div>	
	</div>
	<!-- Details of suspected -->
		<div id="suspected">
			<div class="col-sm-12 col-md-12 well" id="content">
			<div style="background-color: #1FD625;"><h4 style="font-size: 1.2vw; font-family: Impact; padding:6px;" ><a name="suspected"></a>Brief details of the suspected ASU Medicine</h4></div>
			<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Composition of the formulatoion/ Part and form of the raw material used</label>
      <input type="text" class="form-control" id="inputEmail4" name="material">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Expiry date if any</label>
      <input type="date" class="form-control" id="inputEmail4" name="Expiry">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Remaining part of Drug/ Product lable</label>
      <input type="text" class="form-control" id="inputEmail4" name="Label_Product">
    </div>
  </div>
  <div class="form-row">
    <label class="form-check-label" for="inlineRadio1">Please tick (any one)</label>
      <div class="form-group col-md-12">
        <div class="form-group col-md-3">
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Treatment_OPT" id="inlineRadio1" value="Ayurveda".checked>
        <label class="form-check-label" for="inlineRadio1">Ayurveda</label>
        </div>
        </div>
      <div class="form-group col-md-3">
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Treatment_OPT" id="inlineRadio1" value="Siddha".check>
        <label class="form-check-label" for="inlineRadio1">Siddha</label>
        </div>
        </div>
      <div class="form-group col-md-3">
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Treatment_OPT" id="inlineRadio1" value="Unani".checked>
        <label class="form-check-label" for="inlineRadio1">Unani</label>
        </div>
        </div>
      <div class="form-group col-md-3">
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Treatment_OPT" id="inlineRadio1" value="Any Other".checked>
        <label class="form-check-label" for="inlineRadio1">Any Other</label>
        </div>
        </div>
      </div>
  	   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Adjuvant</label>
      <input type="text" class="form-control" id="inputEmail4" name="Adjuvant">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Dietary restriction if any</label>
      <input type="text" class="form-control" id="inputEmail4" name="Restriction">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Whether the drug is consumed under</label>
      <select id="inputState" class="form-control" name="Consumed">
        <option>medical supervision</option>
        <option>used as self medication</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Any other relevant information</label>
      <input type="text" class="form-control" id="inputEmail4" name="Information">
    </div>
  </div>
</div>
</div>
</div>

<!-- Treatement and Outcome -->
	<div>
		<div class="col-sm-12 col-md-12 well" id="content">
			<div style="background-color: #1FD625;"><h4 style="font-size: 1.2vw; font-family: Impact; padding:6px;" ><a name="treatement"></a>Treatment provided for suspected adverse reaction and outcome of the Suspected adverse reaction</h4></div>
			<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Treatment provided for suspected adverse reaction</label>
      <input type="text" class="form-control" id="inputEmail4" name="Treatment_Provide">
    </div>
  </div>
  <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputAddress">Recovered</label>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Recovered" id="inlineRadio1" value="Yes".checked>
        <label class="form-check-label" for="inlineRadio1">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Recovered" id="inlineRadio2" value="No".checked>
        <label class="form-check-label" for="inlineRadio2">No </label>
      </div>
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Fatal</label>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Fatal" id="inlineRadio1" value="Yes".checker>
        <label class="form-check-label" for="inlineRadio1">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Fatal" id="inlineRadio2" value="No".checked>
        <label class="form-check-label" for="inlineRadio2">No </label>
      </div>
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Severe</label>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Servere" id="inlineRadio1" value="Yes".checked>
        <label class="form-check-label" for="inlineRadio1">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="Servere" id="inlineRadio2" value="No".checked>
        <label class="form-check-label" for="inlineRadio2">No </label>
      </div>
    </div>
  </div>
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputEmail4">if Fatal, Date of death</label>
      <input type="date" class="form-control" id="inputEmail4" name="DOB_Death">
    </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Reaction reappeard after re introduction</label>
          <input type="date" class="form-control" id="inputEmail4" name="Reappeard">
        </div>
   </div>
   <div class="form-row">
     <div class="form-group col-md-12">
          <label for="inputEmail4">Reaction abated after drug stopped or dose reduced</label>
          <input type="text" class="form-control" id="inputEmail4" name="Reaction">
        </div>
   </div>
  	   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Was the patient admitted to hospital? If yes, give name and address of hospital</label>
      <input type="text" class="form-control" id="inputEmail4" name="Patient_Admit">
    </div>
  </div>
	</div>
	<!-- Others -->
	<div>
		<div class="col-sm-12 col-md-12 well" id="content">
			<div style="background-color: #1FD625;"><h4 style="font-size: 1.2vw; font-family: Impact; padding:6px;" ><a name="others"></a>Other's Detail</h4></div>
			<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Any laboratory Investigations done which provides suspicion of drugs involvement</label>
      <input type="text" class="form-control" id="inputEmail4" name="Laboratory">
    </div>
  </div>
      <div class="form-row">
        <label for="inputAddress">Wether the patient is suffring with any chronic disorder</label>

        <div class="form-group col-md-12">
            <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" id="gridCheck1" value ="Hepatic".checker name="disorder">
            <label class="form-check-label" for="gridCheck1">Hepatic
            </label></div>
            <div class="form-check col-md-2">
              <input class="form-check-input" type="checkbox" id="gridCheck1" name="disorder" value="Renal".checker>
            <label class="form-check-label" for="gridCheck1">Renal
            </label></div>
            <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" id="gridCheck1" name="disorder" value="Cardiac".checker>
            <label class="form-check-label" for="gridCheck1">Cardiac
            </label></div>
            <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" id="gridCheck1" name="disorder" value="Diabetes".checker>
            <label class="form-check-label" for="gridCheck1">Diabetes
            </label></div>
            <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" id="gridCheck1" name="disorder" value="Malnutrition".checker>
            <label class="form-check-label" for="gridCheck1">Malnutrition
            </label></div>
            <div class="form-check col-md-2">
            <input class="form-check-input" type="checkbox" id="gridCheck1" name="disorder" value="Any Other".checker>
            <label class="form-check-label" for="gridCheck1">Any others
            </label></div>
        </div>
      </div>
  	   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">H/O previous allergies/Drug reaction</label>
      <input type="text" class="form-control" id="inputEmail4" name="Drug_Reaction">
    </div>
  </div>
 </div>
	</div>
	<!-- Identification of the reporter -->
	<div>
		<div class="col-sm-12 col-md-12 well" id="content">
			<div style="background-color: #1FD625; "><h4 style="font-size: 1.2vw; font-family: Impact; padding:6px;" ><a name="identification"></a>Identification of the reporter</h4></div>
			<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Type (Please Select)</label>
      <select id="inputState" class="form-control" name="Type_Staff" >
        <option>Nurse</option>
        <option>Doctor</option>
        <option>Pharmcist</option>
        <option>Health Worker</option>
        <option>Patient</option>
        <option>Attendant</option>
        <option>Manufacturer</option>
        <option>Distribor</option>
        <option>Supplier</option>
        <option>Student</option>
        <option>Any Other</option>

      </select>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Please Enter Full Name" name="FName">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Address</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Please Enter Full Name" name="FAddress">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Mobile Number</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="Please Enter Full Name" name="Contact">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="Email" class="form-control" id="inputEmail4" placeholder="Please Enter your valid email" name="EmailID">
    </div>
  </div>
		</div>
	</div>
	<div class="col-md-8">
	</div>
	<div class="col-md-4">
  		<button type="submit" class="btn btn-primary">Submit</button>
  		<button type="reset" class="btn btn-danger">Reset</button>
	</div>

</form>
</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
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