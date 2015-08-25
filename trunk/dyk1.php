<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include 'connection.php';
	
		
$result = mysql_query("SELECT * FROM animals ORDER BY RAND() LIMIT 1", $db);
	if (!$result) {
		die("Database query failed: " . mysql_error());
	} 
	while ($row = mysql_fetch_array($result)) {
		$kj= $row[1];
		$kj1=$row[8];
		$kj2=$row[10];
	}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>
<title>Did You Know???</title>

</head>

<body style=" background:url(images/bg.jpg); background-position:center;width:700px; height:500px; overflow:hidden;" >
<table width="700" border="0">
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<h2 class="p2">
&nbsp;&nbsp;&nbsp;&nbsp;
<?php 
echo $kj;
?></h2><br></td>
  </tr>
  <tr>
    <td>
<p class="text-1">
&nbsp;&nbsp;&nbsp;&nbsp;
<?php 
echo $kj1;
?>
</p>
<br></td>
  </tr>
  <tr>
    <td style="text-wrap:normal;"> &nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php 
echo $kj2;
?>" width="675" height="300" alt="didyouknow"  /></td>
  </tr>
</table>






</body>
</html>