<html>
    <head><title>Latihan variable, tipe data, & operator</title></head>
    <body>
        <?php
            echo"<u>Luas Segitiga</u><br>";
            $alas = 167;
            $tinggi = 140;
            $luasSegitiga = $alas * $tinggi;
            echo"Alas : $alas<br>";
            echo"Tinggi : $tinggi<br>";
            echo"Luas Segitiga = $luasSegitiga<br><br>";

            echo"<u>Luas Lingkaran</u><br>";
            $phi = 3.14159;
            $r = 100;
            $luasLingkaran = $phi * $r * $r;
            echo"Jari-jari : $r<br>";
            echo"Luas Lingkaran = $luasLingkaran<br><br>";
            
            echo"<u>Luas Persegi Panjang</u><br>";
            $panjang = 127;
            $lebar = 312;
            $luasPersegiPanjang = $panjang * $lebar;
            echo"Panjang : $panjang<br>";
            echo"Lebar : $lebar<br>";
            echo"Luas Persegi Panjang = $luasPersegiPanjang<br><br>";
        ?>
    </body>
</html>