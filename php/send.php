<?php
	include"config.php";
	if(isset($_POST["Message"])):
		$Name = mysqli_real_escape_string($connect, $_SESSION["ChatLogin"]);
		$Message = mysqli_real_escape_string($connect, $_POST["Message"]);
		$query = "INSERT INTO Data (Name,Message) VALUES ('$Name','$Message')";
		$connect->query($query);
	endif;
?>