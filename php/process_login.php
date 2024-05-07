<?php
// Include file koneksi.php untuk menghubungkan ke database
include 'koneksi.php';

// Memulai session
session_start();

// Ambil data yang dikirimkan melalui form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query SQL untuk mencari user berdasarkan username dan password
$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = $koneksi->query($query);

// Periksa hasil query
if ($result->num_rows > 0) {
    // Jika user ditemukan, set session login dan redirect ke halaman home
    $_SESSION['login'] = true;
    header("Location: /spa-html/index.html");
    exit();
} else {
    // Jika user tidak ditemukan, redirect kembali ke halaman login
    header("Location: /spa-html/login/login.html");
    exit();
}

// Tutup koneksi database
$koneksi->close();
?>
