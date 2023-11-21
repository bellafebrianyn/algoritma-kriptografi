<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "data_kesehatan";

$connect = new mysqli($hostname, $username, $password, $db);
if ($connect->connect_error) {
    die('Connection Failed : ' . $connect->connect_error);
}
