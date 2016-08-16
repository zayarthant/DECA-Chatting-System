<?php 
	include"php/config.php"; 
	if(!isset($_SESSION["ChatLogin"])){
		header("Location: login.php");
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
		<script src="js/ajax.js"></script>
	</head>
	<body class="w3-white">
		<section id="Message_Dysplay"></section>
		<section id="Message_Send_Box">
				<input type="text" id="To_Send_Message" class="w3-col s10 m11 l11" placeholder="Enter Message Here"/>
				<button type="submit" id="Send_BTN" class="fa fa-comment w3-btn w3-blue w3-col s2 m1 l1"></button>
		</section>
	</body>
</html>