<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP</h1>
    <?php
        // Percabangan If
        $uang = 20000;

        if ($uang < 300000) {
            echo "Anda Masih Belum Cukup Uangnya <br>";
        } else {
            echo "Anda Sudah Cukup Uangnya <br>";
        }

        // Percabangan If Else
        $uang = 20000;

        if ($uang < 300000) {
            echo "Anda Masih Belum Cukup Uangnya <br>";
        } else if ($uang == 300000) {
            echo "Anda Sudah Cukup Uangnya <br>";
        } else {
            echo "Anda Sudah Banyak Uangnya <br>";
        }

        //Percabangan Switch Case
        $bahasa = "Jawa";
        switch ($bahasa) {
            case "Indonesia":
                echo "Selamat Datang <br>";
                break;

            case "Sunda" :
                echo "Wilujeng Sumping <br>";
                break;

            case "Jawa" :
                echo "Sugeng Rawuh <br>";
                break;
            }

        // Ternary Operator
        $uang = 20000;
        $uang < 300000 ? $status = "Anda Masih Belum Cukup Uangnya <br>" : $status = "Anda Sudah Cukup Uangnya <br>";
        echo $status;
        
        // NESTED IF
        $uang = 20000;
        $umur = 20;

        if ($umur > 17) {
            if ($uang > 300000) {
                echo "Anda Sudah Cukup Uangnya <br>";
            } else {
                echo "Anda Masih Belum Cukup Uangnya <br>";
            }
        } else {
            echo "Anda Belum Dewasa <br>";
        }

        // FOR
        $event = "Ramadhan";

        if ($event == "Ramadhan") {
            for ($hari = 5; $hari <= 5; $hari++) {
                echo "Ramadhan telah masuk hari ke - $hari <br>";
            }
        }

        // While
        $event = "Ramadhan";
        $hari = 1;

        if ($event == "Ramadhan") {
            while ($hari <= 30) {
                echo "Hari Puasa ke $hari <br>";
                $hari++;
            }
        }
        echo "<hr>";
        
        
        
        // Do While
        $event = "Ramadhan";
        $hari = 5;
        $status = true;

        echo " Sisa hari puasa : <br>";
        if ($event == "Ramadhan") {
            do {
                echo "Hari Puasa ke $hari <br>";
                $hari++;
                if ($hari > 30) {
                    $status = false;
                }
            } while ($status);
        }
        echo "<hr>";

        //Array
        $takjil = ["Kurma", "Es Buah", "Es Campur", "Es Kacang", "Es Teler"];
        echo "Takjil yang ada di bulan Ramadhan di Hari Ini : $takjil[3] <br>";

        for ($i = 0; $i < count($takjil); $i++) {
            echo "Takjil hari ke - " .$i+1 .  $takjil[$i] . "<br>";
        }
        echo "<hr>";

        //Array Assosiatif
        $tarawih = [
            "Hari" => 1,
            "Jumlah Rakaat" => 8,
            "Imam" => "Ustadz Abdul Somad"
        ];

        echo "Tarawih hari ke - " . $tarawih["Hari"] . " Jumlah Rakaat : " . $tarawih["Jumlah Rakaat"] . " Imam : " . $tarawih["Imam"] . "<br>";
        echo "<hr>";

        //Array Multidimensi
        $tarawih = [
            [
                "Hari" => 1,
                "Jumlah Rakaat" => 8,
                "Imam" => "Agus"
            ],
            [
                "Hari" => 2,
                "Jumlah Rakaat" => 8,
                "Imam" => "Gus Miftah"
            ],
            [
                "Hari" => 3,
                "Jumlah Rakaat" => 8,
                "Imam" => "Gus Samsudin"
            ]
        ];
       
        foreach ($tarawih as $traweh) {
            echo "Tarawih hari ke - " . $traweh["Hari"] . "<br>";
            echo "Jumlah Rakaat : " . $traweh["Jumlah Rakaat"] . "<br>";
            echo "Imam : " . $traweh["Imam"] . "<br>";
            echo "<hr>";
        }

        //Function
        if (isset ($_POST['takjil'])) {
            $takjil = $_POST['takjil'];
            echo "Takjil yang anda pilih : <br>";
            foreach ($takjil as $takjil) {
                echo $takjil . "<br>";
            }
        } else {
            echo "Pilih Takjil dulu <a href=\"form.php\">Pilih Takjil</a>";
        }
    ?>
</body>
</html>