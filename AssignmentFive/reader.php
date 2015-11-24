<?php
include_once 'settings.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<?php
 session_start();
 $userName = $_SESSION["username"];
?>

<div id="body">
	<table width="80%" border="1">
    <tr>
    <th colspan="4">your uploads...<label><a href="uploader.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>Title</td>
    <td>View</td>
    </tr>

    <?php
   
	$sql="SELECT * FROM blog_table WHERE username = '$userName'";
	$result_set=$conn->query($sql);
    if($result_set->num_rows > 0){
        while($row = $result_set->fetch_assoc()){
            ?>
        <tr>
        <td><?php echo $row['name']; ?></td>
        <td><a href="download.php?id=<?php echo $row['id'];?>">view</a> </td>
        </tr>
        <?php
        }
    }
	?>
    </table>
    
</div>
<label><a href="logout.php">Log Out.</a></label>
</body>
</html>