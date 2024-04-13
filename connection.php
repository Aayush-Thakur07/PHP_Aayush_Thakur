<?php


$connect = mysqli_connect("localhost","root", "", "collegedb");

if(!$connect)
{
	echo "Database not connected, contact to system administrators";
}
?>