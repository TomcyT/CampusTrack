<?php
session_start();

$userEmail = $_POST['email'];
$userPassword = $_POST['password'];

$adminEmail = "admin";
$adminPassword = "admin";
if ($userEmail==$adminEmail and $userPassword==$adminPassword) {
	header('Location: homePage.php');
}	
else{

	header('Location: index.html');
}
?>