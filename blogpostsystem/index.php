<?php
session_start();
if(isset($_SESSION['user1']))
{
	echo "you are already login";
	exit();
}
?>
<html lang="en_US">
<head>
	<title> User Login</title>
</head>
<body>
	<h1> User Login</h1>
	<form action="blogs.php" method="post">
	<table align="center>
		<tr>
			<td colspan="2">Username</td><td><input type="text" name="user" required="required"/></td>
		</tr>
		<tr>
			<td colspan="2">Email</td><td><input type="email" name="Email" required="required"/></td>
		</tr>
		<tr>
			<td>Password</td><td><input type="password" name="Password" required="required"/></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="login" value="login"></td>
		</tr>
	</table>
	</form>
		
</body>
</html>

