<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	$user="root";
	$password="";
	$host="localhost";		
	$database="products";

	$conn = mysqli_connect($host,$user,$password,$database);
	
	$id = $_GET['id'];
	$viewUser = "SELECT * FROM user WHERE userID='$id'";
	$getUser = $conn->query($viewUser);
	$user = mysqli_fetch_assoc($getUser);
	extract($user);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PhoneZZZ.com</title>
</head>
<style>
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    color: black;
    font-weight: strong;
}
.bg {
    background-image: url(images/Backgrounds.jpg);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
input[type=text], input[type=password] {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.cancelbtn {
  background-color: #7B0703;
    width: 10%;
      float: left;
  width: 50%;
}
button:hover {
    opacity: 0.8;
}
.container {
    padding: 50px;
}
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
.close1 {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
.topnav{
  text-align: center;
}
.navigation-bar {
    width: 100%;  /* i'm assuming full width */
    height: 80px; /* change it to desired width */
/* change to desired color */
}
.logo {
    display: inline-block;
    vertical-align: top;
    width: 50px;
    height: 50px;
    margin-right: 20px;
    margin-top: 15px;    /* if you want it vertically middle of the navbar. */
}
.navigation-bar > a {
    vertical-align: top;
    padding-right: 10px;
    padding-left: 10px;
    margin-right: 10px;
    margin-left: 20px;
    height: 80px;        /* if you want it to take the full height of the bar */
    line-height: 80px;    /* if you want it vertically middle of the navbar */
    color: white;
    text-decoration: none;
    font-weight: bold;
}
.navigation-bar > a:hover{
    vertical-align: top;
    padding-right: 10px;
    padding-left: 10px;
    margin-right: 10px;
    margin-left: 20px;
    height: 80px;        /* if you want it to take the full height of the bar */
    line-height: 80px;    /* if you want it vertically middle of the navbar */
    color: #010B23;
    text-decoration: none;
    font-weight: bold;
}
.formbg {
  padding-top: 1em;
  padding-bottom: 1em;
  background-color:  #f0f5f5;
  border:2px solid #112A54;
  padding-right: 1em;
  padding-left: 1em;
}
.topheader{
  width: 100%;  /* i'm assuming full width */ /* change it to desired width */
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #DACFDB;/* change to desired color */
  color: white;
}
.footerbg{
  width: 100%;  /* i'm assuming full width */ /* change it to desired width */
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: #C3C3C3;
  color: white;
}
.reset{
    width: 100%;  /* i'm assuming full width */ /* change it to desired width */
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: #C3C3C3;
  color: white;
}
</style>
<script language="JavaScript" type="text/javascript" src="view/js/registration.js"></script>
</head>
    <div class="topheader"><center><img src="food9.png"></center><center><h1>COMPARE PHONE ZZZZ</h1></center></div>
      <body bgcolor="#51025B">
        <div class="container">
        <center><nav class="navigation-bar">
            <a href="#">ADMIN &nbsp;</a>
            <a href="#">HOME</a>
            <a href="#">PRODUCTS</a>
            <a href="#" style="color:#2997C1;" >USER PAGE</a>
            <a href="#">LOG OUT</a>

        </nav></center>
<br><br><br>
<form class="formbg" name="updateForm" method="post" action="updateUserAccess.php">
  <center><h1>USER PROFILE</h1></center>
    <br><br>
      <center>
         <center>
       <table  border=1 style="width:50%" align="center">
	   
	<tr>
    <td align="right"><b>ID: </b></td>
    <td><input type="text" name="userid" style="width:90%;" value="<?php echo $user['userID']?>" readonly><br></td>
    </tr>
	
    <tr>
    <td align="right"><b>Name: </b></td>
    <td><input type="text" name="name" style="width:90%;" value="<?php echo $user['userName']?>" readonly><br></td>
    </tr>
    
    <tr>
    <td align="right"><b>Email: </b></td>
    <td><input type="text" name="email" style="width:90%;" value="<?php echo $user['userEmail']?>" readonly><br></td>
    </tr>

	<tr>
    <td align="right"><b>Give Access: </b></td>
    <td><input type="radio" name="access" value="0" <?php if($user['userAccess']==0) echo "checked" ?> >Yes<br>
        <input type="radio" name="access" value="1" <?php if($user['userAccess']==1) echo "checked" ?> >No<br>
	</td>
    </tr>
    <br>
	<input type="hidden" name="passID" value="<?php echo $user['userID']?>"> <!-- hidden input to hold userID to pass to another page-->
	<!-- tak perlu pun gil nak belajar -->
    <tr align="center">
    <td>&nbsp;  </td>
    <td><br>
    <center>
	<input type="submit" name="updateA" style="border:1px solid; background:#00778F; height:40px; width:105px; border-radius:3px; color:#FFF;" value="Update"></center>
    </td>
    </tr>
    
    </table>
    </center>
	</form>
</div>

<script>
</script>
        <footer>
          <div class="footerbg">
            <center><p>Copyright &copy; 2019 | MobilePhone</p></center>
          </div>
        </footer>
</body>
</html>