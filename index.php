<html>
<head>
<title>Creating MySQL Tables</title>
</head>
<body>

<?php
$dbhost = 'aajvbbd50ptip2.cyjkiyb0dtjx.us-west-2.rds.amazonaws.com:3306';
$dbuser = 'netsol';
$dbpass = 'sf#DD445';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = mysql_select_db( 'ebdb' , $conn );


if (!$sql) {
  die('Could not select: ' . mysql_error());
}

$result = mysql_fetch_array(mysql_query("select * from test"));
print_r($result);
    
mysql_close($conn);
?>
</body>
</html>