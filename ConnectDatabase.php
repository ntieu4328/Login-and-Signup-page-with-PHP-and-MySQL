<?php

$uname = $_POST['uname'];
$psw = $_POST['psw'];

// Creating variables that are used to log in to the database. This should only be used if the database is on localhost.
// My database I made on phpmyadmin is named register
$host = "localhost";
$dbname = "register";
$username = "root";
$password = "";

// This is to connect to the database. The login information has to be in this order.
$mysqli = new mysqli($host, $username, $password, $dbname);

// If there's a connection error then it returns an error.
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
