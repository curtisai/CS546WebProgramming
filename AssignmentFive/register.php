<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
   <script language="javascript">
	function signUpCheck() {
		var firstName = document.forms["signUp"]["firstName"].value;
		var lastName = document.forms["signUp"]["lastName"].value;
		var userName = document.forms["signUp"]["userName"].value;
		var password = document.forms["signUp"]["password"].value;
		if (firstName == null || firstName == "" ||
		    lastName == null || lastName == "" ||
		    username == null || username == ""  ||
		    password == null || password == "") {
			alert("All contents must be filled!");
			return false;
		}
	}
	</script>

	<?php
	if(!empty($_GET['errno']))
	{
		$errno=$_GET['errno'];
		if($errno==1)
		{
			echo "<br/><font color='red' size=3>UserName already exists!</font>";
 	    }
    }
 ?>

	<div style="border: 1px solid;width:800px;height:500px;">
	<form name = "signUp" method="post" action="registerManage.php"  onsubmit="return signUpCheck()">
	<table>
	<tr><td>First Name:</td>
	<td><input type="text" name="firstName"  size="30" maxlength="10" id="firstName"/></td>
	</tr>
	<tr><td>Last Name:</td>
	<td><input type="text" name="lastName" size="30" maxlength="10" id="lastName"/></td>
	</tr>
	<tr><td>username:</td>
	<td><input type="text" name="userName"  size="30"  id="userName"/></td>
	</tr>
	<tr><td>password:</td>
	<td><input type="password" name="password" id="password" /></td>
	</tr>
	<tr><td colspan="2" align="center" >
	<input type="submit" value="submit"/>
	</td>
	</tr>
	</table>
	<br/>
	<a href="login.php">Already an user? Click here!</a>
	</form>
	</div>

</body>
</html>