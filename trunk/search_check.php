<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
$kw=$_POST['keyword'];
$all=$_POST['all'];
header( 'Location: http://localhost/zoo/search.php?varname1='.$kw.'&varname2='.$all);

?>





<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document

</title>
</head>

<body>
<?php 
$kw=$_POST['keyword'];
echo 'http://localhost/zoo/search.php?varname='.$kw;
?>

</body>
</html>

