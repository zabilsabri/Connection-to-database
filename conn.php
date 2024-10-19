<?php

$server_name = 'localhost';
$username = 'root';
$password = '';
$database = 'pertemuan_7';

$conn = new mysqli($server_name, $username, $password, $database);

if($conn->connect_error){
    die("Koneksi Gagal: " . $conn->connection_error);
}