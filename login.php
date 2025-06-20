<?php
    session_start();
    include "koneksi.php";

    $pesaneror = "";

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query(mysql: $koneksi, query: "SELECT * FROM user WHERE username = '$username'");

        if(mysqli_num_rows(result: $result) === 1 ) {
            $row = mysqli_fetch_array(result: $result) ;

            if (password_verify($password, $row['password'])) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                echo "<script>alert('Selamat datang " . $row['email'] . ". Anda Berhasil Login!'); window.location. href='dashboard.php';</script>";
            } else {
                $pesaneror = "Password Salah!!";
            }
        } else {
            $pesaneror = "Username Tidak Ditemukan";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login Lab Management</h2>
        <form action="dashboard.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required placeholder="Masukkan Username">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required placeholder="Masukkan Password">

        <button type="submit" name="login">Login</button>
    </form>
    <div class="footer">
        Belum punya akun? <a href="regis.php">Daftar di sini</a>
    </div>
</div>
</body>
</html>