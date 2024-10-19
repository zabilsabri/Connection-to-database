<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        th, td{
            border: solid
        }
    </style>
</head>
<body>
    <a href="input.php">Tambah</a>
    <a href="input_file.php">Upload File</a>
    <table style="border: solid" >
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Action</th>
        </tr>
        <?php
            include 'conn.php';

            $query = "SELECT * FROM users";
            $user = $conn->query($query);
            
            while($row = $user->fetch_assoc()){
                $nama = $row['nama'];
                $nim = $row['nim'];
                $id = $row['id'];
        ?>

        <tr>
            <td><?php echo $nama ?></td>
            <td><?php echo $nim ?></td>
            <td><a href="edit.php?id=<?= $id ?>">Edit</a><a href="proses_hapus.php?id=<?= $id ?>">Hapus</a></td>
        </tr>

        <?php } ?>

    </table>
</body>
</html>