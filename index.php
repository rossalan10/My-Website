<!doctype html>
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


		<h2>Home Page</h2>
<?php
	
	include "db_connect.php";

	// include "search_all_staff_members.php";
?>

	<form class="form-horizontal" action="search_keyword.php">
<fieldset>

<!-- Form Name -->
<legend>Search for a name for staff members</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search Input</label>
  <div class="col-md-5">
    <input id="keyword" name="keyword" type="search" placeholder="e.g. Ryan" class="form-control input-md" required="">
    <p class="help-block">Enter a name to search for staff members</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Single Button</label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Search</button>
  </div>
</div>

</fieldset>
</form >

<form class="form-horizontal" action="add_staff_member.php">
<fieldset>

<!-- Form Name -->
<legend>Add a staff member</legend>

<!-- Text input-->
<div class="form-group" >
  <label class="col-md-4 control-label" for="newstaffmember">Staff Member</label>  
  <div class="col-md-5">
  <input id="newstaffmember" name="newstaffmember" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Enter a name to add to staff members</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newstaffdescription">Staff Member Description</label>  
  <div class="col-md-5">
  <input id="newstaffdescription" name="newstaffdescription" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Enter a description of the staff member you want to add</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Add the new staff member</button>
  </div>
</div>

</fieldset>
</form>



<?php
	// include "search_keyword.php";

$mysqli->close();

?>

	</body>
	<footer>©2020 Rossco's Website</footer>

</html>