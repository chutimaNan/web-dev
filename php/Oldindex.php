<?php

echo 'Hello from Docker2';

$host = 'db'; // service name from docker-compose.yml
$user = 'devuser';
$password = 'devpass';
$db = 'test_db';

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
	echo 'connection failed' . $conn->connection_error;
}
echo 'Successfully connected to MYSQL';
?>
