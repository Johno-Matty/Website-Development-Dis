<?php 
include_once 'header.php'	
?>
<?php
//    session_start();
	include 'includes/dbh.php';
	$id = $_GET["drillID"];
?>
<?php 

$sql = "SELECT * FROM drills WHERE ID='$drillID';";

$result = mysqli_query($connection, $sql);

$resultCheck = mysqli_num_rows($result);



 
echo '<div class="text-box">';
echo '<h1>'.$row['drillName'].'</h1></div>';
?>