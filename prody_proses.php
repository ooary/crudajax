<?php
	
	include("con.php");

if($_POST['type']=="insert")
	:
	$prody = mysqli_real_escape_string($con,$_POST['name']);

	//query

	$query =mysqli_query($con,"INSERT INTO prody SET name = '$prody' ");
endif;
if($_POST['type']=="delete")
	:
	$id = mysqli_real_escape_string($con,$_POST['id_prody']);

	//query

	$query =mysqli_query($con,"DELETE FROM prody where id ='$id' ");
	if($query){
		echo "1";
	}
	else
	{
		echo "0";
	}
endif;
	
?>

