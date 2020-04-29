<html>	
	<head>
		<Title>Lets make a website: HomePage</Title>
		<link href="main.css" rel="stylesheet" />
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>



	<body>

		<header>
			<nav>
				<img src="https://i.gyazo.com/48c0d67f237709e78e9260816df22ae5.png">
				<ul>
					<li><a href="index.php">Home Page</li>
					<li><a href="page2.php">Contact Me</a></li>
				</ul>
			</nav>
		</header>


</html>

<?php

include "db_connect.php";
$new_staff_member = $_GET["newstaffmember"];
$new_staff_description = $_GET["newstaffdescription"];

$new_staff_member = addslashes($new_staff_member);
$new_staff_description = addslashes($new_staff_description);


// if there are things to see that meet the querry, display them
echo "<h2>Trying to add a new staff member: $new_staff_member : $new_staff_description</h2>";
$sql = "INSERT INTO olympus_staff_table (StaffID, Staff_Name, Staff_Description) VALUES (null, '$new_staff_member', '$new_staff_description' )";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));
?>

<h4>Succefully Added!</h4>

<a href="index.php">Return to main page</a>