<?php
require("connect.php");
error_reporting(0);
$searchInput = $_POST['box'];
$getVeh = "SELECT * FROM details WHERE numberplate = '$searchInput'";
$getVehQuery = mysqli_query($conn,$getVeh);
$deleteRecord = "DELETE FROM `details` WHERE numberplate = '$searchInput'";
$deleteRecordQuery = mysqli_query($conn,$deleteRecord);
if(mysqli_num_rows($getVehQuery) > 0) {
	while ($row = mysqli_fetch_assoc($deleteRecordQuery)){
		$numberplate = $row['numberplate'];
		echo $numberplate;
		if($searchInput==$numberplate){
			echo '<script>alert("Successfully Deleted")</script>';
		}else
			echo '<script>alert("No Record found")</script>';
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Delete a Vehicle Record</title>
	<link rel="stylesheet" href="searchPage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<h3>Delete a Record</h3>
	<div class="container">
		<form action="DeleteRecord.php" method="POST">
		<input type="text" name="box" placeholder="Enter NumberPlate no" required>
	</div>
	<div class="searchbtn">
		<input type="submit" name="search" value="Delete" onclick="myFunction()">
	</div>
	</form>
	<div class="backbtn">
		<a href="homePage.php" class="btn"><i class="fa fa-home"></i>Home</a>
	</div>
<script>
function myFunction() {
  var txt;
  var r = confirm("Are you sure you want to Delete the Record.");
  if (r == true) {
    txt = header('Location : deleteRecord.php');
  } else {
    txt = header('Location : deleteRecord.html');
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>

</body>
</html>