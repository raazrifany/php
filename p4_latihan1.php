<html>
    <head><title>Latihan if else</title></head>
    <body>
        <?php
            $totalPembelian = 250000;

            if($totalPembelian < 100000){
                $diskon = 0;
            }else if($totalPembelian >= 100000 && $totalPembelian < 200000){
                $diskon = $totalPembelian * 0.1;
            }else if($totalPembelian >= 200000 && $totalPembelian < 300000){
                $diskon = $totalPembelian * 0.2;
            }else if($totalPembelian >= 300000){
                $diskon = $totalPembelian * 0.3;
            }

            $bayar = $totalPembelian - $diskon;

            echo"Total Pembelian = $totalPembelian<br>";
            echo"Diskon = $diskon<br>";
            echo"Total yang harus dibayar = $bayar<br>";
        ?>
    </body>
</html>