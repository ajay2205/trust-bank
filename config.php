<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trust";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE trust";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "";
}


// Again making connection with database name specified to tell which database to use
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("");
}

// sql to create table transaction
$sql = "CREATE TABLE `transaction` (
	`sno` int(3) NOT NULL AUTO_INCREMENT,
	`sender` text NOT NULL,
	`receiver` text NOT NULL,
	`balance` int(8) NOT NULL,
	`datetime` datetime NOT NULL DEFAULT current_timestamp(),
	PRIMARY KEY (sno)
  )";
	
	if ($conn->query($sql) === TRUE) {
	  echo "";
	} else {
	  echo "";
	}

// sql to create table users
$sql = "CREATE TABLE `users` (
	`id` int(3) NOT NULL AUTO_INCREMENT,
	`name` text NOT NULL,
	`email` varchar(30) NOT NULL,
	`balance` int(8) NOT NULL,
	PRIMARY KEY (id)
  )";

if ($conn->query($sql) === TRUE) {
	echo "";
  } else {
	echo "";
  }


  // sql to update table users
  $sql = "INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
  (1, 'Rahul', 'rahul@gmail.com', 7000),
  (2, 'Ritik', 'ritik@gmail.com', 20000),
  (3, 'Abhinav', 'abhinav@gmail.com', 50000),
  (4, 'Kritika', 'kritika@gmail.com', 45000),
  (5, 'Shlok', 'shlok@gmail.com', 53000),
  (6, 'Deepak', 'Deepak@gmail.com', 58000),
  (7, 'Nitin', 'nitin@gmail.com', 50000),
  (8, 'Aryan', 'aryan@gmail.com', 75000),
  (9, 'Kartik', 'kartik@gmail.com', 92000),
  (10, 'Pankaj', 'pankaj@gmail.com', 100000);";

if ($conn->query($sql) === TRUE) {
	echo "";
  } else {
	echo "";
  }
?>