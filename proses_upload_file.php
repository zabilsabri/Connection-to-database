<?php

if ($_FILES["file_upload"]["error"] === UPLOAD_ERR_OK) {

    $nama_direktori = 'uploads';
    if (!is_dir($nama_direktori)) {
        mkdir($nama_direktori);
    }

    $nama_file = $_FILES["file_upload"]["name"];
    $lokasi_sementara = $_FILES["file_upload"]["tmp_name"];
    $lokasi_tujuan = "uploads/" . $nama_file;
    
    if (move_uploaded_file($lokasi_sementara, $lokasi_tujuan)) {
        echo "File berhasil diunggah.";
    } else {
        echo "Gagal mengunggah file.";
    }
}
