<?php

require_once ('db.php');

$email = $_POST['emailAdd'];
$password = $_POST['pass'];

$sql = "SELECT * from `admins` WHERE Email = '$email' AND password = '$password'";
$sqlid = "SELECT id from `admins` WHERE Email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $sql);
$id = mysqli_query($conn , $sqlid);

$id = "";
if(mysqli_num_rows($result) == 1){
	
	$admin = mysqli_fetch_array($id);
	$id = ($admin['id']);
	
	header("Location: ../Admin/index.html");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>