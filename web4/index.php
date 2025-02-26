<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PERPUSTAKAAN</h1>
    <?php

    $nama = "Fariz Taufik Syahbana";
    $nim = "124240150";
    echo "Nama : $nama <br>";
    echo "NIM : $nim <br>";
    $tanggal = date("d, F, Y");
    echo "Praktikum Tanggal : $tanggal <br>";
    ?>
    <h2>Form Pendaftaran</h2>
    <form action="keluaran.php" method = "post">
        Nama : <input type="text" name="nama" placeholder="Masukkan Nama"><br>
        Password : <input type="password" name="password" placeholder="Masukkan Password"><br>
        <input type="submit" value="Kirim">
        <input type="reset" value="Reset">
    </form>
</body>
</html>