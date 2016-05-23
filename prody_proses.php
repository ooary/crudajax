<?php
	
	include("con.php");


	$prody = mysqli_real_escape_string($con,$_POST['name']);

	//query

	$query =mysqli_query($con,"INSERT INTO prody SET name = '$prody' ");

?>

