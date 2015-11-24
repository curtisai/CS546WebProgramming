<!DOCTYPE html>
<html>
<head>
	<title>Assignment 5: Better Blog</title>
	<script>
	function validateForm() {
		var x = document.forms["loginPage"]["username"].value;
		var y = document.forms["loginPage"]["password"].value;
		if (x == null || x == "" || y == null || y == "") {
			alert("Login info must be filled out both!");
			return false;
		}
	}
	</script>
</head>
<body>
<form name = "loginPage" action = "loginManage.php" method = "POST">
<h1>Assignment Five: Better Blog</h1>
<table>
 <tr><td>UserName:</td><td><input type="text" name="username"/></td></tr>
 <tr><td>Password:</td><td><input type="password" name="password"/></td></tr>
 <tr><td><input type="submit" value="Login"/></td></tr>
</table>
</form>
<?php 
 if(!empty($_GET['errno']))
 {
 	$errno=$_GET['errno'];
 	if($errno==1)
 	{
 		echo "<br/><font color='red' size=3>The UserName or Password is wrong</font>";
 	}
 }
 ?>
 <a href="register.php">New User? Click here to sign up</a>
</form>
</body>
</html>