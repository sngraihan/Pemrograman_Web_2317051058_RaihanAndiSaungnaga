<!DOCTYPE html>
<html>

<head>
    <title>Form Input</title>
</head>

<body>

    <form method="post" action="tampil.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="usia">Usia:</label>
        <input type="number" name="usia" id="usia" required><br><br>

        <label for="npm">NPM:</label>
        <input type="text" name="npm" id="npm" required><br><br>

        <label for="alamar">Alamat:</label>
        <input type="text" name="alamat" id="alamat" required><br><br>

        <input type="submit" value="Kirim">
    </form>

</body>

</html>