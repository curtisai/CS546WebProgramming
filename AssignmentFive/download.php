<?php
include_once 'settings.php';
if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database
$id    = $_GET['id'];
$sql = "SELECT * FROM blog_table WHERE id = '$id'";
$result_set=$conn->query($sql) or die('Error, query failed');
$row = $result_set->fetch_assoc();

//header("Content-type: html");
echo $row['formatted'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>DownloadPage</title>
</head>
<body>
<label><a href="logout.php">Log Out.</a></label>
</body>
</html>