<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kursus";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
 die("gagal koneksi : " . mysqli_connect_error());
}
