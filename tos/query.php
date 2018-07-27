<!Doctype html>
<html>
<head>
<link rel="icon" type="img/x-icon" href="fav.png">
<title>We-Express Blog</title>
</head>
<body>
<?php
$dbserver='localhost';
$dbuser="root";
$dbpass="";
$dbname='test';
$connection = new mysqli ($dbserver, $dbuser, $dbpass, $dbname);
if(mysqli_connect_error()) die (mysqli_connect_error());
$query = "SELECT * FROM user";
$result = $conn->query($query);
if (!$result) die($conn->error){
	
}
$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j){
$result->data_seek($j);
echo 'id: ' . $result->fetch_assoc()['id'] . '<br>';
$result->data_seek($j);
echo 'username: ' . $result->fetch_assoc()['username'] . '<br>';
$result->data_seek($j);
echo 'password: ' . $result->fetch_assoc()['password'] . '<br>';

}
$result->close();
$conn->close();
?>