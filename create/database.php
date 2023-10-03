<?php 

    // membuat variabel database
    $namaServer = 'localhost';
    $namaPengguna = 'root';
    $kataSandi = '';


    // koneksi ke database
    $koneksi = new mysqli($namaServer, $namaPengguna, $kataSandi);

    if($koneksi->connect_error)
    {
        echo "Koneksi Galal";
    } else{
        echo "Koneksi Berhasil";
    }

    // proses membuat database dengan perintah SQL
    $sql = "CREATE DATABASE courses";

    // notifikasi jika database berhasil / gagal dibuat
    if ($koneksi->query($sql) === TRUE) {
        echo "<h1>Database berhasil dibuat!</h1>";
    } else {
        echo "<h1>Database gagal dibuat!</h1>";
    }
    


?>