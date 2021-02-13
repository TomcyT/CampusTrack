



<?php
require("connect.php");
//getdata
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$regNumber = $_POST['regNumber'];
$phoneNo = $_POST['phoneNo'];
$emailId = $_POST['emailId'];
$licenseNumber = $_POST['licenseNumber'];
$veh = $_POST['veh'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$userType = $_POST['userType'];


//echo "$firstName / $lastName / $veh / $licenseNumber / $regNumber / $phoneNo / $emailId<br>";

if(isset($_POST['register'])){

	$write = "INSERT INTO `details`(`id`, `firstname`, `lastname`,`usertype`,`vehicletype`,`brand`,`model`,`numberplate`, `regnumber`, `phonenumber`, `emailid`) VALUES (NULL, '$firstName','$lastName','$userType','$veh','$brand','$model','$licenseNumber','$regNumber','$phoneNo','$emailId')";
	
	$writequery = mysqli_query($conn,$write);

	if($writequery){
		header('Location:addNewEntry.html');
		echo '<script>alert("New Entry Added Successfully")</script>';
	}else
		echo "Error";
}
?>