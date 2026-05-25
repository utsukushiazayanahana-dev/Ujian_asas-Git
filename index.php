<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO tb_users (username, email, password) VALUES ('$username', '$email', '$password')";

    if (mysqli_query($koneksi, $sql)) {
        echo "Registrasi berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Registerasi akun</h2>
        <form action="" method="POST">
            <label>Username</label><br>
            <input type="text" name="username"><br>
            <label>Email</label><br>
            <input type="text" name="email"><br>
            <label>Password</label><br>
            <input type="text" name="password"><br>
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>