<?php
// variables to connect to the database
	$host = "127.0.0.1";
	$username = "root";
	$user_pass = "";
	$database_in_use = "test";

// create a database connection
	$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
// echo $mysqli->host_info . "<br>";

?>