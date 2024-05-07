<?php
$host = '127.0.0.1';  // Host database (localhost)
$username = 'root';    // Username database
$password = '';        // Password database (kosong jika tidak ada)
$database = 'beauty_care'; // Nama database

// Buat koneksi ke database menggunakan mysqli
$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Jika koneksi berhasil, bisa tambahkan pesan konfirmasi
echo "Koneksi ke database berhasil.";

// Sebaiknya hilangkan echo di atas saat produksi
?>
