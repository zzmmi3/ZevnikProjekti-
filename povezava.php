<?php
$host     = 'localhost';
$user     = 'root';
$password = '';
$database = 'spet_zevci';

$link = mysqli_connect($host, $user, $password, $database);
if (!$link) {
    die("Povezovanje ni mogoče: " . mysqli_connect_error());
}
mysqli_set_charset($link, 'utf8mb4');