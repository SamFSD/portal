<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db		= "study";
	
$con = new mysqli($dbhost, $dbuser, $dbpass, $db);
// Check  database connection
if ($con->connect_error) 
{
    die("Connection failed: " . $con->connect_error);
} 

?>