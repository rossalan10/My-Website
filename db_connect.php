<?php
// variables to connect to the database
	$host = "localhost";
	$username = "u939875983_root";
	$user_pass = "12345";
	$database_in_use = "u939875983_test";

// create a database connection
	$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
// echo $mysqli->host_info . "<br>";

?>
