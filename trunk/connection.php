<!DOCTYPE html>
<?php 
$db = mysql_connect("localhost","root","razr"); 
	if (!$db) {
		die("Database connection failed due username password error" . mysql_error());
	}
	
	$db_select = mysql_select_db("zoopedia",$db);
	if (!$db_select) {
		die("Database selection also failed due to db name error " . mysql_error());
	}
	
	
	
	?>