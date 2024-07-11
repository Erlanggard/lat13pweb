<?php
$host = 'localhost:3306';
$user = 'root';
$password = '';
$dbname = 'lat13pweb';

$k = new mysqli($host, $user, $password, $dbname);

if ($k->connect_error) {
    die("Koneksi gagal: " . $k->connect_error);
}
?>
