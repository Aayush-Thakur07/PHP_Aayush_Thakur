<?php

include("connection.php");

$id =  $_GET["id"];

$qry = "delete from student where id = '$id';";

$result = mysqli_query($connect, $qry);

if($result)
{
	?> <script> alert("Account Deleted"); </script> <?php
	session_start();
	session_destroy();
	header("location:index.php");
}
else
{

?> <script> alert("Account Could not deleted"); </script> <?php

}

?>