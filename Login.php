<?php
	if(isset($_GET["Login"]) && !empty($_GET["Username"])){
		include "php/config.php";
		$_SESSION["ChatLogin"] = $_GET["Username"];
		header("Location: index.php");
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width = device-width"/>
		<title> DECA Chatting System </title>
		<link rel="stylesheet" href="css/font-awesome.css"/>
		<link rel="stylesheet" href="css/w3.css"/>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="shortcut icon" href="icon.png"/>
	</head>
	<body class="w3-container w3-center">
		<h4 class="w3-padding-hor-32">
			<span class="deca w3-text-blue">DECA</span><br/>
			<span class="timenew w3-text-indigo">Chatting System</span>
		</h4>
		<form action="Login.php" method="GET">
			<input name="Username" type="text" class="w3-input w3-large" placeholder="Enter Your Name" required/><br/>
			<button name="Login" type="submit" class="fa fa-key w3-btn w3-blue w3-xlarge"> Login</button>
		</form>
	</body>
</html>
