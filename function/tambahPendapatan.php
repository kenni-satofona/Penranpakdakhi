<?php 
    require 'functions.php';
    
    if (empty($_POST['tanggal']) || empty($_POST['sumber']) || empty($_POST['sumber']) || empty($_POST['jumlah']) || empty($_POST['username'])) {
        echo '{"status" : "Error", "Message" : "tanggal, sumber, sumber, jumlah, and username is required!"}';
        exit();
    }

    // tambah data
    $tanggal = htmlspecialchars($_POST["tanggal"]);
    $sumber = htmlspecialchars($_POST["sumber"]);
    $sumber = htmlspecialchars($_POST["sumber"]);
    $jumlah = htmlspecialchars($_POST["jumlah"]);
    $username = $_POST['username'];

    // query insert data
    $query = "INSERT INTO pendapatan VALUES ('', '$tanggal', '$sumber', '$sumber', '$jumlah', '$username')";
    
    if (mysqli_query($koneksi, $query)) {
        echo '{"Status" : "Succes", "Message" : "Data berhasil ditambahkan!"}';
    } else {
        echo '{"Status" : "Error", "Message" : '.mysqli_error($koneksi).'}';
    }
?>