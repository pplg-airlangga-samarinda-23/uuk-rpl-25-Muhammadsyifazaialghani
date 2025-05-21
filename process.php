<?php
session_start();
require_once 'koneksi.php';

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $role = $_POST['role'];

    if ($role == 'admin') {
        if ($username == "admin" && $password == "admin123") {
            $_SESSION['admin'] = true;
            $_SESSION['role'] = 'admin';
            header("Location: dashboard.php");
            exit();
        } else {
            $message = "<div class='error-message'><span class='icon-error'><i class='fas fa-times-circle'></i></span> Login gagal!<br><a href='login.php' class='btn-ok'>Kembali</a></div>";
        }
    }
}
?>