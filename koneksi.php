<?php
// koneksi.php

$host = "localhost";
$username = "root"; // Sesuaikan dengan username database kamu (default XAMPP: root)
$password = "";     // Sesuaikan dengan password database kamu (default XAMPP: kosong)
$database = "DB_UAS_PBO_TI1C_DeaAmelianaSaputri"; // Sesuai database di Tahap 1

// Membuat koneksi menggunakan MySQLi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>