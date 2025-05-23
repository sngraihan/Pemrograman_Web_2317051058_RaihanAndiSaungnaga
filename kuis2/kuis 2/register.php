<?php
include "koneksi/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
    header("Location: login.php");
}
?>

<h2>Daftar</h2>
<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Daftar"><br><br>
    <a href="login.php"> <button type="button">Login</button>
</form>