<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
error_reporting(~0);
  require_once 'settings.php';
  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $userName=$_POST['userName'];
  $password=md5($_POST['password']);
  echo "string";
  
  $resultSet = mysqli_query($conn,"SELECT * FROM userInfo where username='$userName'");
  $getRows = mysqli_affected_rows($conn);
  echo $getRows;
  if($getRows >= 1){
    header("Location:register.php?errno=1");
   }
   else{
    $sql = "INSERT INTO `userInfo` (`username`, `firstname`, `lastname`,`password`) VALUES ('$userName','$firstName','$lastName','$password')";
    if ($conn->query($sql) === TRUE) {
    echo "Sucess!";
    echo "<br/>";
    echo "<a href='login.php'>Click here to login.</a>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
   }

  
 
?>