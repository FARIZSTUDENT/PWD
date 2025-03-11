<?php
$nama = htmlspecialchars($_POST['nama']);
$meja = htmlspecialchars($_POST['meja']);
$pesanan = $_POST["pesanan"] ?? [];
$total = 0;

// Hitung total harga pesanan
$daftar_pesanan = [];
foreach ($pesanan as $item => $detail) {
    $subtotal = $detail["harga"] * $detail["jumlah"];
    $total += $subtotal;
    $daftar_pesanan[$item] = ["jumlah" => $detail["jumlah"], "harga" => $detail["harga"], "subtotal" => $subtotal];
}

// Diskon 10% jika total ≥ Rp50.000
$diskon = ($total >= 50000) ? $total * 0.1 : 0;
$pajak = $total * 0.1;
$total_bayar = $total - $diskon + $pajak;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Total Pesanan - Dapoer Ian</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/styleorder.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Total Pesanan</h2>
        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
        <p><strong>Nomor Meja:</strong> <?php echo $meja; ?></p>
        <h4>Pesanan:</h4>
        <ul>
            <?php foreach ($daftar_pesanan as $item => $detail): ?>
                <li><?php echo $item; ?> x<?php echo $detail["jumlah"]; ?> 
                    - Rp<?php echo number_format($detail["subtotal"], 0, ',', '.'); ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <p><strong>Subtotal:</strong> Rp<?php echo number_format($total, 0, ',', '.'); ?></p>
        <p><strong>Diskon (10% jika ≥ Rp50.000):</strong> -Rp<?php echo number_format($diskon, 0, ',', '.'); ?></p>
        <p><strong>Pajak (10%):</strong> Rp<?php echo number_format($pajak, 0, ',', '.'); ?></p>
        <h3><strong>Total Bayar:</strong> Rp<?php echo number_format($total_bayar, 0, ',', '.'); ?></h3>

        <a href="index.html" class="btn btn-primary">Kembali ke Beranda</a>
    </div>
</body>
</html>
