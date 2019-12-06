<?php
	$user="root";
	$password="";
	$host="localhost";		
	$database="products";

	$conn = mysqli_connect($host,$user,$password,$database);
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}
	
	$delete = "DELETE FROM user WHERE userID='$_GET[id]';";
	mysqli_query($conn,$delete) or die("ERROR :".mysqli_error($conn)); 
	echo "<script type= 'text/javascript'>alert('User successfully deleted!');window.location = 'manageUser.php';</script>";
?>