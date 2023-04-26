<?php
include 'api.php';
if(isset($_GET['remid'])){
	$id = $_GET['remid'];
    $sql ="delete from reg where id='{$id}'";
	$result=mysqli_query($con,$sql);
	if($result){
		//echo "deleted successfully";
		//echo "deletes successfully";
		header('location:index.php');
	}
	else{
		die(mysqli_error($con,$sql));
	}
}




?>