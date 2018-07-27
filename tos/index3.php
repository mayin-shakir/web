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
if(mysqli_connect_error()){
 die (mysqli_connect_error());
}
echo "success";
$username= 'bimbo';
$password=md5('sunni');
add_user($connection, $username, $password);
function add_user($connection,$un,$pw){
$query= "INSERT INTO user VALUES (null,'$un','$pw')";
$result=$connection->query($query);
if (!$result) die ($connection->error);	
}
?>
