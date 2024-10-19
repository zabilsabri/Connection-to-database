<?php
include 'conn.php';

$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = $id";
$user = $conn->query($query);

$result = $user->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="proses_edit.php" method="POST">
        <label for="id">User ID:</label>
        <input type="text" id="id" name="id" value="<?= $result['id']; ?>">
        <br>
        <label for="">Nama</label>
        <input type="text" name="nama" value="<?= $result['nama']; ?>">
        <br>
        <label for="">NIM</label>
        <input type="text" name="nim" value="<?= $result['nim']; ?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>