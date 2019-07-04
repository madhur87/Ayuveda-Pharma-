<?php

// error_reporting(0);
session_start();
$pageno=$_REQUEST['pageno'];
include("conn.php");
switch ($pageno) {
	case 1: // Registration for public
			$First_Name = $_POST['First_Name'];
			$Last_Name = $_POST['Last_Name'];
			$Password = $_POST['Password'];
			$CPassword = $_POST['CPassword'];
			$Gender = $_POST['Gender'];
			$Email = $_POST['Email'];
			$Mobile_Num = $_POST['Mobile_Num'];
			$DOB = $_POST['DOB'];
			$User_ID = $_POST['User_ID'];

			$ins_qy = "INSERT INTO Public(FirstName, LastName, Password, CPassword, Gender, Email, MobileNum, DOB, UserID) VALUES ('$First_Name', '$Last_Name', '$Password', '$CPassword', '$Gender', '$Email', '$Mobile_Num', '$DOB', '$User_ID')";
			if($conn->query($ins_qy)==TRUE)
			{
				// echo "Inserted data Successfuly";
				header("location:login.php");
			}
			else
			{
				echo "Error ".$ins_qy."<br/>".$conn->error;
			}
		break;
	case 2:	// Registration for Employee
			$First_Name = $_POST['First_Name'];
			$Last_Name = $_POST['Last_Name'];
			$Password = $_POST['Password'];
			$CPassword = $_POST['CPassword'];
			$Gender = $_POST['Gender'];
			$Email = $_POST['Email'];
			$Mobile_Num = $_POST['Mobile_Num'];
			$DOB = $_POST['DOB'];
			$User_ID = $_POST['User_ID'];

			$ins_qy = "INSERT INTO employee(FirstName, LastName,Email, MobileNum, Gender, Password, CPassword, DOB, UserID) VALUES ('$First_Name', '$Last_Name', '$Email','$Mobile_Num', '$Gender', '$Password', '$CPassword', '$DOB', '$User_ID')";
			if($conn->query($ins_qy)==TRUE)
			{
				// echo "Inserted data Successfuly";
				header("location:login.php");
			}
			else
			{
				echo "Error ".$ins_qy."<br/>".$conn->error;
			}
		break;
		case 3: // Login for Public and Employee
			$UserID = $_POST['UserID'];
			$Password = $_POST['Password'];
			$myopt = $_POST['Select'];
			if($myopt=="Public")
			{
				$lgn_qy= "SELECT ID, UserID, Password, FirstName FROM public WHERE UserID ='$UserID' AND Password = '$Password'";
				// echo "Successfuly login in public";
				$res = $conn->query($lgn_qy);
				$_SESSION['Password'] = $Password;
				if($row = $res->fetch_assoc())
				{
					$UserID = $row['UserID'];
					$_SESSION['Password'] = $row['Password'];
					$_SESSION['FirstName'] = $row['FirstName'];
					$_SESSION['ID'] = $row['ID'];
					header("location:pdashhome.php");
				}
				else
				{
					header("location:login.php?msg=Invalid_UserId?or?Password");
				}
			}
			else
			if($myopt=="Employee")
			{	
				$lgn_qy= "SELECT ID, UserID, Password, FirstName  FROM Employee WHERE UserID ='$UserID' AND Password = '$Password'";
				$res = $conn->query($lgn_qy);
				$_SESSION['Password'] = $Password;
				if($row = $res->fetch_assoc())
				{
					$_SESSION['ID'] = $row['ID'];
					$UserID = $row['UserID'];
					$_SESSION['Password'] = $row['Password'];
					$_SESSION['FirstName'] = $row['FirstName'];
					header("location:edashhome.php");
				}
				else
				{
					header("location:login.php?msg=Invalid_UserId?or?Password");
				}
				// echo "Successfully login in Employee";
			}
			else
			{
				header("location:login.php?msg=Please_Select_User_Type");
			}
		break;
		case 4:
			$Report_Name = $_POST['Report_Name'];
			$Type_Report = $_POST['Type_Report'];
			$Serious = $_POST['Serious'];
			$Seriousness = $_POST['Seriousness'];
			$Country = $_POST['Country'];
			$Resource = $_POST['Resource'];
			$Patient_Name = $_POST['Patient_Name'];
			$Ethinicity = $_POST['Ethinicity'];
			$IPD_OPD = $_POST['IPD_OPD'];
			$Age = $_POST['Age'];
			$Address = $_POST['Address'];
			$Gender = $_POST['Gender'];
			$Date_T = $_POST['Date_T'];
			$Report_Type = $_POST['Report_Type'];
			$Medicine = $_POST['Medicine'];
			$Batch_no = $_POST['Batch_no'];
			$Daily_Dose = $_POST['Daily_Dose'];
			$Administration = $_POST['Administration'];
			$Start_Date = $_POST['Start_Date'];
			$End_Date = $_POST['End_Date'];
			$Reason = $_POST['Reason'];
			$material = $_POST['material'];
			$Expiry = $_POST['Expiry'];
			$Label_Product = $_POST['Label_Product'];
			$Treatment_OPT = $_POST['Treatment_OPT'];
			$Adjuvant = $_POST['Adjuvant'];
			$Restriction = $_POST['Restriction'];
			$Consumed = $_POST['Consumed'];
			$Information = $_POST['Information'];
			$Treatment_Provide = $_POST['Treatment_Provide'];
			$Recovered = $_POST['Recovered'];
			$Fatal = $_POST['Fatal'];
			$Servere = $_POST['Servere'];
			$DOB_Death = $_POST['DOB_Death'];
			$Reappeard = $_POST['Reappeard'];
			$Reaction = $_POST['Reaction'];
			$Patient_Admit = $_POST['Patient_Admit'];
			$Laboratory = $_POST['Laboratory'];
			$disorder = $_POST['disorder'];
			$Drug_Reaction = $_POST['Drug_Reaction'];
			$Type_Staff = $_POST['Type_Staff'];
			$FName = $_POST['FName'];
			$FAddress = $_POST['FAddress'];
			$Contact = $_POST['Contact'];
			$EmailID = $_POST['EmailID'];
			

			$ins_qy = "INSERT INTO report1(Report_Name, Type_Report,Serious, Seriousness, Country, Resource, Patient_Name ,Ethinicity ,IPD_OPD,Age,Address,Gender,Date_T,Report_Type,Medicine,Batch_no,Daily_Dose,Administration,Start_Date,End_Date,Reason,material,Expiry,Label_Product,Treatment_OPT,Adjuvant,Restriction,Consumed,Information,Treatment_Provide,Recovered,Fatal,Servere,DOB_Death,Reappeard,Reaction,Patient_Admit,Laboratory,disorder,Drug_Reaction,Type_Staff,FName,FAddress,Contact,EmailID) VALUES ('$Report_Name', '$Type_Report', '$Serious','$Seriousness', '$Country', '$Resource', '$Patient_Name' ,'$Ethinicity' ,'$IPD_OPD','$Age','$Address','$Gender','$Date_T','$Report_Type','$Medicine','$Batch_no','$Daily_Dose',$Administration','$Start_Date','$End_Date','$Reason','$material','$Expiry','$Label_Product','$Treatment_OPT','$Adjuvant','$Restriction','$Consumed','$Information','$Treatment_Provide','$Recovered','$Fatal','$Servere','$DOB_Death','$Reappeard','$Reaction','$Patient_Admit','$Laboratory','$disorder
			','$Drug_Reaction','$Type_Staff','$FName','$FAddress','$Contact','$EmailID')";
			if($conn->query($ins_qy)==TRUE)
			{
				// echo "Inserted data Successfuly";
				header("location:screport.php");
			}
			else
			{
				echo "Error ".$ins_qy."<br/>".$conn->error;
			}
	default:
		# code...
		break;
}
?>