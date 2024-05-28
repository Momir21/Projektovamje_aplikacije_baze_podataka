<?php

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "baza";

$conn = new mysqli($servername, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Konekcija nije uspela". $conn->connect_error);
}
?>