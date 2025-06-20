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
        <form action="dashboard.html" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required placeholder="Masukkan Username">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required placeholder="Masukkan Password">

        <button type="submit">Login</button>
    </form>
    <div class="footer">
        Belum punya akun? <a href="register.html">Daftar di sini</a>
    </div>
</div>
</body>
</html>