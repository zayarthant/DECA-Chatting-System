<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "chat";

$connect = new mysqli($host,$user,$pass,$db_name);
if ($connect->connect_error)
    die("Connection failed: " . $conn->connect_error);

function isme($name){
	if($name == $_SESSION["ChatLogin"])
		echo"w3-right w3-light-green me-hide-so";
}
?>