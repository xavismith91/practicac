<?php

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "personal";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
	die("Error de conexión" . $conn->connect_error);
}
