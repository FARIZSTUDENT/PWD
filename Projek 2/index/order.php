<?php
$menu = [
    "Nasi Goreng" => 20000,
    "Mie Ayam" => 18000,
    "Ayam Geprek" => 22000,
    "Es Teh Manis" => 5000,
    "Es Jeruk" => 7000
];

$pesanan = $_POST["pesanan"] ?? [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["item"])) {
    $item = $_POST["item"];
    $harga = $menu[$item]; // Ambil harga langsung dari menu
    $pesanan[$item] = ["harga" => $harga, "jumlah" => ($pesanan[$item]["jumlah"] ?? 0) + 1];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan - Dapoer Ian</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/styleorder.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Menu Dapoer Ian</h2>
        <form method="POST">
        <div class="row d-flex justify-content-center">
                <?php foreach ($menu as $item => $harga): ?>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="../images/<?php echo strtolower(str_replace(' ', '_', $item)); ?>.jpg" class="card-img-top" alt="<?php echo $item; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item; ?></h5>
                                <p class="card-text">Rp<?php echo number_format($harga, 0, ',', '.'); ?></p>
                                <button type="submit" name="item" value="<?php echo $item; ?>" class="btn btn-primary">Tambah</button>
                                <?php foreach ($pesanan as $key => $value): ?>
                                    <input type="hidden" name="pesanan[<?php echo $key; ?>][harga]" value="<?php echo $value["harga"]; ?>">
                                    <input type="hidden" name="pesanan[<?php echo $key; ?>][jumlah]" value="<?php echo $value["jumlah"]; ?>">
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </form>
        <h3>Pesanan Anda:</h3>
        <form action="receipt.php" method="POST">
            <ul class="list-group">
                <?php if ($pesanan): ?>
                    <?php foreach ($pesanan as $item => $detail): ?>
                        <li class="list-group-item">
                            <?php echo "$item x{$detail['jumlah']} - Rp" . number_format($detail['harga'] * $detail['jumlah'], 0, ',', '.'); ?>
                            <input type="hidden" name="pesanan[<?php echo $item; ?>][harga]" value="<?php echo $detail["harga"]; ?>">
                            <input type="hidden" name="pesanan[<?php echo $item; ?>][jumlah]" value="<?php echo $detail["jumlah"]; ?>">
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li class="list-group-item">Belum ada pesanan.</li>
                <?php endif; ?>
            </ul>
            <div class="mb-3 mt-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="meja" class="form-label">Nomor Meja:</label>
                <input type="number" id="meja" name="meja" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Konfirmasi Pesanan</button>
        </form>
    </div>
</body>
</html>