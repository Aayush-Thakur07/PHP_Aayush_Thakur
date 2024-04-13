<?php

if(isset($_POST["upload_btn"]))
{


$filename =  $_FILES["photo"]["tmp_name"];
$orgname = $_FILES["photo"]["name"];
$destination = "uploads/$orgname";	

$allowtypes = array('jpg','png','jpeg');
$ext =  pathinfo($destination, PATHINFO_EXTENSION);
if(in_array($ext, $allowtypes))
{
	$filesize = $_FILES["photo"]["size"];
	if($filesize<500000)
	{
		if(move_uploaded_file($filename, $destination))
		{
			echo "Photo uploaded";
		}
		else
		{
			echo "Something went wrong";
		}
	}
	else
	{
		echo "Photo size not proper";
	}
}
else
{
	echo "please upload jpg, png file only";
}




}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post" enctype="multipart/form-data">
	Photo - <input type="file" name="photo"> 
	<button type="submit" name="upload_btn"> Upload </button>
</form>
</body>
</html>