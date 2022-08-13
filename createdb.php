<?php
include 'config.inc.php';

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error)
{
	die("Connection Failed: " . $conn->connect_error);
}

$sql1 = "Create database sqlinjectiondemo"; 

$sql2 = "CREATE TABLE users (
		id INT(6) AUTO_INCREMENT PRIMARY KEY NOT NULL,
		username varchar(50) NOT NULL,
		password varchar(50) NOT NULL,
		emailadd varchar(50) NOT NULL
		)Engine=InnoDb";



if($conn->query($sql2) === True)
	echo "Database Created successfully";
else
	echo "Error creating database: " . $conn->error;

$conn->close();
?>