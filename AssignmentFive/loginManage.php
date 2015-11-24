<?php
require_once 'settings.php';
$username=$_POST['username'];
$password=md5($_POST['password']);


if(!$conn)
  {die("Connection error".mysql_errno());}

 $mysql_get_password=mysqli_query($conn,"SELECT password FROM userInfo where username = '$username'" );
 if($row=mysqli_fetch_assoc($mysql_get_password))
{
	if($row['password']==$password)
	{   
		session_start();
		$_SESSION["username"] = $username;
		header("Location: reader.php");//?username=$username");
        exit();
	}
}
	header("Location:login.php?errno=1");
	exit();

mysqli_free_result($mysql_get_password);
mysqli_close($conn);
 
?>