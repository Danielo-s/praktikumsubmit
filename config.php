<?php
$db_host = "mysqlpraktikumsubmit.mysql.database.azure.com";
$db_user = "Danielo";
$db_pass = "@Karol010305";
$db_name = "praktikumdb";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>