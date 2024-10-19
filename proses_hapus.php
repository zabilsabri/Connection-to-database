<?php
include 'conn.php';

$id = $_GET['id'];

$query = $conn->prepare('DELETE FROM users WHERE id = ?');
$query->bind_param('s', $id);

if($query->execute()){
    header('Location: home.php');
} else {
    echo 'Error: ' . $delete->error;
}