<?php
	$user="root";
	$password="";
	$host="localhost";		
	$database="products";

	$conn = mysqli_connect($host,$user,$password,$database);
	
	$update = "UPDATE user SET  userAccess = '".$_POST["access"]."' WHERE userID='".$_POST["userid"]."'";
	mysqli_query($conn,$update) or die("ERROR :".mysqli_error($conn)); 
	echo "<script type= 'text/javascript'>alert('User access succesfully updated!');window.location = 'manageUser.php';</script>";
?>