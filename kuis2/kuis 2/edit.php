<?php
session_start();
include "koneksi/db.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION["user_id"];

if (isset($_POST["simpan"])) {
    $username = $_POST["username"];
    mysqli_query($conn, "UPDATE users SET username = '$username' WHERE id = $user_id");
    echo "Username berhasil diubah!<br><br>";
}
$result = mysqli_query($conn, "SELECT * FROM users WHERE id = $user_id");
$user = mysqli_fetch_assoc($result);
?>

<form method="post">
    Username baru: <input type="text" name="username" value="<?= $user['username'] ?>">
    <button type="submit" name="simpan">Simpan</button><br><br>
    <a href="dashboard.php"> <button type="button">back</button>
</form>

<a href="logout.php">Logout</a>
