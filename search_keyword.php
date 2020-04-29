<head>
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href="main.css" rel="stylesheet" />
  <script>

  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
  
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
  </body>

<?php

include "db_connect.php";
$keywordfromform = $_GET["keyword"];

// if there are things to see that meet the querry, display them
echo "<h2>Looking for staff members named <em>$keywordfromform</em></h2>";
$res = $mysqli->query("SELECT StaffID, Staff_Name, Staff_Description FROM olympus_staff_table WHERE Staff_Name LIKE '%". $keywordfromform ."%'");
echo "Select returned $res->num_rows rows of data<br>";

?>

<div id="accordion">

<?php
while($row = $res->fetch_assoc()) {
	//	echo "StaffID = $row[StaffID], Staff_Name = $row[Staff_Name], Staff_Description = $row[Staff_Description] <br>";
		echo "<h3> $row[Staff_Name] </h3>";
		echo "<div><p>   $row[Staff_Description]   </p></div>";
}

?>
</div>