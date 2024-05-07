<?php
// Mulai session
session_start();

// Hapus session 'login'
unset($_SESSION['login']);

// Redirect ke halaman login
header("Location: login/login.html");
exit();
?>
