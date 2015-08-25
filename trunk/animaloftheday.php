<!DOCTYPE html>
<?php 
include 'connection.php';
	
	$result = mysql_query("SELECT * FROM animals ORDER BY RAND(" . date("Ymd") . ") LIMIT 1", $db);
	if (!$result) {
		die("Database query failed: " . mysql_error());
	} 
	while ($row = mysql_fetch_array($result)) {
		$kj= $row[1];
	}
header( 'Location: http://localhost/zoo/animalspecimen.php?varname='.$kj);

?>
