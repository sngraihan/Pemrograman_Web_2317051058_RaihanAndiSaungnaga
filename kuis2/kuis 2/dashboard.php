<?php
session_start();
include "koneksi/db.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION["user_id"];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id = $user_id");
$user = mysqli_fetch_assoc($result);
?>

<h2>Profil Pengguna</h2>
<p>Username: <?= htmlspecialchars($user['username']) ?></p>
<p>Foto profile: </p>
<img src="eskrim.jpg" alt="gambar eskrim" width="150" height="150"><br><br>


<form method="post">
    <a href="edit.php"> <button type="button">Edit</button>
    <a href="logout.php"> <button type="button">logout</button>
</form>
