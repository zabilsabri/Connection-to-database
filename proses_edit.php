<?php
include 'conn.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $id = $_POST['id'];

    $query = $conn->prepare("UPDATE users SET nama = ?, nim = ? WHERE id = ?");
    $query->bind_param('ssi', $nama, $nim, $id);

    if($query->execute()){
        header('Location: home.php');
    } else {
        echo 'Error: ' . $query->error;
    }
}
