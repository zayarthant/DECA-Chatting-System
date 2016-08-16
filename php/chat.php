<?php
	include"config.php";
	$query = "SELECT * FROM ( SELECT * FROM Data ORDER BY Date DESC LIMIT 30) sub ORDER BY id ASC";
	$result = $connect->query($query);
	while($row = $result->fetch_array()):
?>
<section class="Message_Dysplay_Box w3-col s10 m10 l10 <?php isme($row["Name"]); ?>">
	<p><?php echo $row["Message"]; ?></p>
	<span class="master">
		<span class="Name"><?php echo $row["Name"]." - "; ?></span>
		<span class="Date"><?php echo date("g:i a", strtotime($row["Date"])); ?></span>
	</span>
</section>
<?php 
	endwhile;
	$row_result = $connect->query("SELECT * FROM Data");
	$just_row =$row_result->num_rows;
	if(isset($_SESSION["just_row"]) && $_SESSION["just_row"] != $just_row){
		echo '<audio autoplay><source src="sound/msg.ogg" type="audio/ogg"><source src="sound/msg.mp3" type="audio/mp3"></audio>';
	}
	$_SESSION["just_row"] = $just_row;
?>