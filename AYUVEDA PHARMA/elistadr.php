<?php
	include("edashboard.php");
	include("conn.php");
	$showtbl = "SELECT * FROM tblname";
	$result = $conn->query($showtbl);
?>
	 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table>
 <tr>
  <th>Report Name</th> 
  <th>Type Report</th> 
  <th>Serious</th>
  <th>Seriousness</th>
  <th>Country</th>
  <th>State</th>
  <th>Patient Name</th>
  
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "ayurveda");
  // Check connection
  if ($conn->ayurveda_error) {
   die("Connection failed: " . $conn->ayurveda_error);
  } 
  $sql = "SELECT * FROM report1";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Report_Name"]. "</td><td>" . $row["Type_Report"] . "</td><td>"
. $row["Serious"]. "</td><td>" . $row["Seriousness"]. "</td><td>". $row["Country"]. "</td><td>". $row["Resource"]. "</td><td>". $row["Patient_Name"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<?php
	include("edashfoot.php");
?>