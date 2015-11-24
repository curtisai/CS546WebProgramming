<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
error_reporting(~0);

session_start();
$userName = $_SESSION["username"];
require_once 'settings.php';
if(isset($_POST['inputTitle'])&&isset($_POST['inputContent'])){
	$blogTitle = $_POST['inputTitle'];
	$blogContent = $_POST['inputContent'];
	$entireBlog = "<!DOCTYPE html><html><head><title>".$blogTitle."</title><body><h1>".$blogTitle."</h1>".$blogContent."</body></html>";
	$entireBlog = addslashes($entireBlog);
	$entireOrigin = $_POST['originTitle'].$_POST['originContent'];
	$sql="INSERT INTO blog_table(formatted,original, name, username) VALUES('$entireBlog','$entireOrigin', '$blogTitle', '$userName')";
	


	if($conn->query($sql)){
		$_SESSION["username"] = $userName;

		?>
		<script>
		alert('successfully uploaded');
        window.location.href='uploader.php?success';
        </script>
		<?php
	}
	else{
		?>
		<script>
		alert('error while uploading');
        window.location.href='uploader.php?fail';
        </script>
		<?php
	}
}
?>
