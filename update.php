<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Update an Entry</title>
	<link rel="stylesheet" href="update.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
	<div class="title">
		<h3>Update an Entry</h3>
	</div>
	<div class="form-container">
	<form action="update.php" method="POST">
		<div class="input-field">	
			<input type="text" name="update_criteria" placeholder="Vehicle Number Plate" required>
		</div>
		<div class="get-btn">
			<input type="submit" name="Get" value="Get">
		</div>
	</form>
	</div>
	<div class="backbtn">
		<a href="homePage.php" class="btn"><i class="fa fa-home"></i>Home</a>
	</div>

</body>

</html>

<?php
require("connect.php");
//getnumber
$id = $_POST['update_criteria'];
echo $id;

if (isset($_POST['Get'])){
	$getVeh = "SELECT * FROM details WHERE numberplate = '$id'";
	$getVehQuery = mysqli_query($conn,$getVeh);
	if (mysqli_num_rows($getVehQuery) > 0){
		while($row = mysqli_fetch_assoc($getVehQuery)) {
			$firstName = $row["firstname"];
        	$lastName = $row["lastname"];
        	$vehType = $row["vehicletype"];
			$brand = $row["brand"];
			$model = $row["model"];
			$numberplate = $row["numberplate"];
			$regNo = $row["regnumber"];
			$phoneNo = $row["phonenumber"];
			$emailId = $row["emailid"];
			$regDate = $row["regdate"];
			echo $firstname;
		}
	}
}

?>