
<?php 
$kj =  $_GET['varname'];
	$result = mysql_query("Select * from animals where name=\"$kj\"", $db);
	if (!$result) {
		die("Database query failed: " . mysql_error());
	}
	
	?>