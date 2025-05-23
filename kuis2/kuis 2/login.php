<?php
session_start();
include "koneksi/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION["user_id"] = $user["id"];
        header("Location: dashboard.php");
    } else {
        echo "Username atau password salah!";
    }
}
?>

<h2>Login Pengguna</h2>


<form method="post"> 
    Username: <input type="text" name="username"><br><br> 
    Password: <input type="password" name="password"><br><br> 
    <input type="submit" value="Login"> </form>
    <a href="register.php"> <button type="button">Daftar Akun</button>
</a>