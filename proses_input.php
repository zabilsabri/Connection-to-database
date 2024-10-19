<?php
include 'conn.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

    $in = $conn->prepare("INSERT INTO users (nama, nim) VALUES (?, ?)");
    $in->bind_param('ss', $nama, $nim);

    if($in->execute()){
        $conn->close();
        header('Location: home.php');
    } else {
        $conn->close();
        echo "Error: " . $in->error;
    }

}