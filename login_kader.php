<?php
session_start();
include 'koneksi.php'; // 

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 
    $query = mysqli_query($koneksi, "SELECT * FROM login_kader WHERE username='$username'");
    if (mysqli_num_rows($query) == 1) {
        $user = mysqli_fetch_assoc($query);
        if (password_verify($password, $user['password'])) {
            // 
            $_SESSION['id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('Password salah');</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Kader</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
        <h1>Login Kader</h1>
            <form method="POST" action="dashboard.php">
        <div class="form-group">
            <input type="text" placeholder="username" required>
        </div>
        <div class="form-group">    
            <input type="password" placeholder="password" required>
        </div>
        <div class="form-group">
            <input type="submit" name="login" value="Login">
        </div>
    </div>
</body>
</html>