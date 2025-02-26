<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>SUBMIT BERHASIL</h1> -->
    <?php
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    // if ($nama == "Fariz Taufik Syahbana" && $password == "123") {
    //     header("Location: landing.php");
    // } else {
    //     echo "Nama atau Password yang anda masukkan salah";
    // }
    ?>
    <form action="landing.php">
        <input type="text" name="nama" value="<?php echo $nama; ?>" hidden>
        <input type="password" name="password" value="<?php echo $password; ?>" hidden>
        <input type="submit" value="Kirim">
        
    </form>
</body>
</html>