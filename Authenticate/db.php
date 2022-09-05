<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "odc_project";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Database Connection Failed";
}

?>