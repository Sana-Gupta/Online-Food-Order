<?php

function Connect()
{
	$dbhost = "127.0.0.1:3307";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "foodorder";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>