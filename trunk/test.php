<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database Connection </title>
</head>

<body>

<?php
//Step3
$result = mysql_query("SELECT * FROM animls", $db);
	if (!$result) {
		die("Database query failed: " . mysql_error());
	}
	
	while ($row = mysql_fetch_array($result)) {
		echo $row[1]." ".$row[2]."<br />";
	}
	
	
?>



</body>
</html>


<?php
	mysql_close($db);
?>
