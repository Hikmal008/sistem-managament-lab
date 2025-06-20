<?php
include "koneksi.php";

$pesan = "";

if(isset($_POST['regis'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = mysqli_query(mysql: $koneksi, query: "SELECT * FROM user WHERE username = '$username'");
    if(mysqli_num_rows(result: $cek) > 0){
        $pesan = "USERNAME SUDAH DIGUNAKAN!";
    }else{
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO user (email, username, password) VALUES ('$email','$username','$passwordHash')";
        $insert = mysqli_query(mysql: $koneksi, query: $query);

        if($insert){
            $pesan = "REGISTRASI BERHASIL! SELAMAT DATANG";
        } else{
            $pesan = "REGISTRASI GAGAL: ". mysqli_error(mysql: $koneksi);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Sistem Management Laboratorium</title>
    <link rel="stylesheet" href="regis.css">
</head>
<body>
    <div class="form-container">
        <h2>Form Registrasi</h2>
        <form action="#" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="regis">Daftar</button>
        </form>
    </div>
</body>
</html>
