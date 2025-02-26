<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $hari = date("1");
    if ($hari == "Sunday") {
        echo "Minggu";
    } elseif ($hari == "Monday") {
        echo "Senin";
    } elseif ($hari == "Tuesday") {
        echo "Selasa";
    } elseif ($hari == "Wednesday") {
        echo "Rabu";
    } elseif ($hari == "Thursday") {
        echo "Kamis";
    } elseif ($hari == "Friday") {
        echo "Jumat";
    } elseif ($hari == "Saturday") {
        echo "Sabtu";
    }
    ?>
</body>
</html>