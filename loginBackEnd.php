<?php
	$user="root";
	$password="";
	$host="localhost";
	$database="products";
	
	$conn = mysqli_connect($host,$user,$password,$database);
	
	session_start();
	$adminID = "12345";
	$adminPass = "123";
	
	if(isset($_SESSION['login_user'])) {
		header("Location: index.php"); 
	}
	
	if($_SERVER["REQUEST_METHOD"]=="POST") {
		$myid = mysqli_real_escape_string($conn, $_POST['id']);
		$mypassword = mysqli_real_escape_string($conn, $_POST['password']);
		
		$sql = "SELECT * FROM user WHERE userID = '$myid' AND userPassword = '$mypassword' AND userAccess = 0";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		
		$count = mysqli_num_rows($result);  
		
		if($myid==$adminID && $mypassword==$adminPass)
		{
			echo "<script type= 'text/javascript'>alert('Welcome!');</script>";
			$_SESSION['login_user'] = $myid;
			$_SESSION['last_action'] = $_SERVER['REQUEST_TIME'];
			header("location: index.php"); //change to admin mainpage
		}
		else if($count==1)
		{
			echo "<script type= 'text/javascript'>alert('Welcome!');</script>";
			$_SESSION['login_user'] = $myusername;
			$_SESSION['last_action'] = $_SERVER['REQUEST_TIME'];
			header("location: index.php"); //change to user mainpage
		} 
		else 
		{
			echo "<script type= 'text/javascript'>alert('Error: Wrong username and password combination or access not granted.'); window.location = 'login.php';</script>";
		}
	}
?>