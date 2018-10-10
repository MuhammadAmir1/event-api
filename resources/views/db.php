<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
 $conn = mysqli_connect("localhost", "root", "") or die ("Could not connect: ". mysqli_connect_error());
echo "Connected to MySQL<br>";
$db = 'passport1';
mysqli_query($conn, "CREATE DATABASE $db") or die (mysqli_error($conn));
echo "Database ". $db." created successfully.<br>";

?>
</body>
</html>