<?php
include("loginBackEnd.php");
?>
<html>
<head><title>Log In</title>
</head>
<body>
	<br><br><br>
	<center>
	<h3>LOG IN</h3>
	<form name="login" action="loginBackEnd.php" method="post">
	<table>
	<tr><td>
	<table>
		<tr>
		<td>ID:</td>
		<td><input name="id" type="text" required></td><br>
		</tr>
		<tr>
		<td>Password:</td>
		<td><input name="password" type="password" required></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td colspan="2" style="text-align:center">
				<a href=\"index.php?id=" . getElementById("id") . "\"><button type="submit" name="submit">Login</button></a> &nbsp;
				<button type="reset">Clear</button> &nbsp;
			</td>
		</tr>
	</table>
	</center><br>
	</td></tr>
	</table>
	</form>
</body>
</html>