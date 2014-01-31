<?php
	include_once "db.php";
	$idd = mysql_fetch_array(mysql_query("SELECT id FROM photos ORDER BY id DESC"));
	$id = $idd[0] + 1;
	
	//error_reporting(0);
for($i=0;$_FILES["upload_file"]["name"][$i]==true;$i++)
{

$fileName = $_FILES["upload_file"]["name"][$i]; // The file name
$fileTmpLoc = $_FILES["upload_file"]["tmp_name"][$i]; // File in the PHP tmp folder
$fileType = @$_FILES["upload_file"]["image/png||image/jpg"][$i];  // The type of file it is
$fileSize = $_FILES["upload_file"]["size"][$i]; // File size in bytes
$fileErrorMsg = $_FILES["upload_file"]["error"][$i]; // 0 = false | 1 = true
$kaboom = explode(".",$_FILES["upload_file"]["name"][$i]); // Split file name into an array using the dot
$fileExt = end($kaboom); // Now target the last array element to get the file extension

$moveResult= move_uploaded_file($fileTmpLoc, "photos/$fileName");
	mysql_query("INSERT INTO photos VALUES ($id, '$fileName', 3)");
	$id++;

unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
}
header("Location: $_SERVER[HTTP_REFERER]");
?>