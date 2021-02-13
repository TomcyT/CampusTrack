<?php
require 'connect.php';

//

$searchInput = $_POST['box'];

if (isset($_POST['search'])){
	$getVeh = "SELECT * FROM details WHERE numberplate = '$searchInput'";
	$getVehQuery = mysqli_query($conn,$getVeh);
	if (mysqli_num_rows($getVehQuery) > 0) {
		while ($row = mysqli_fetch_assoc($getVehQuery)) {
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
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Search a vehicle</title>
	<link rel="stylesheet" href="searchPage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<h3>Search For a Vehicle</h3>
	<div class="container">
		<form action="searchPage.php" method="POST">
		<input type="text" name="box" placeholder="Search By Vehicle Number Plate" required>
	</div>
	<div class="searchbtn">
		<input type="submit" name="search" value="Search">
	</div>
	</form>
	<div class="backbtn">
		<a href="homePage.php" class="btn"><i class="fa fa-home"></i>Home</a>
	</div>
	<div class="table">
		<table border="2" cellpadding="100" cellspacing="50" style="width: 50%; border-collapse: collapse;margin: 20px auto;position: absolute;top: 60%;left: 50%;transform: translate(-50%, -50%); box-shadow: 5px 1px 40px #96C4D8;">
      <thead>
        <tr>
          <th>Name</th>
          <th>Vehicle Type</th>
          <th>Brand</th>
          <th>Model</th>
          <th>Number Plate</th>
          <th>Registration Number</th>
          <th>Phone Number</th>
          <th>Email ID</th>
          <th>Registration Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $firstName.$lastName?></td>
          <td><?php echo $vehType ?></td>
          <td><?php echo $brand ?></td>
          <td><?php echo $model ?></td>
          <td><?php echo $numberplate ?></td>
          <td><?php echo $regNo ?></td>	
          <td><?php echo $phoneNo ?></td>
          <td><?php echo $emailId ?></td>
          <td><?php echo $regDate ?></td>
        </tr>
      </tbody>
    </table>
	</div>
</body>
</html>
