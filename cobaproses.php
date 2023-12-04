<?php
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $tujuan = $_POST['tujuan'];
    $jenis = $_POST['jenis'];
    $berat = intval($_POST['berat']);
    $asuransi = $_POST['asuransi'];

    if($jenis == "REGULER"){
        if($tujuan == "Bandung"){
            $harga = $berat * 10000;
        }else if($tujuan == "Jakarta"){
            $harga = $berat * 20000;
        }else if($tujuan == "Semarang"){
            $harga = $berat * 30000;
        }
    }else if($jenis == "EKSPRES"){
        if($tujuan == "Bandung"){
            $harga = $berat * 12000;
        }else if($tujuan == "Jakarta"){
            $harga = $berat * 24000;
        }else if($tujuan == "Semarang"){
            $harga = $berat * 35000;
        }
    }

    $bAsuransi = $harga * 0.07;
    $total = $harga + $bAsuransi;

    echo"
        <h2>FORM PENGIRIMAN BARANG</h2>
        Nama Pengirim: $nama<br>
        No Telepon : $telp<br>
        Tujuan Pengiriman: $tujuan<br>
        Jenis Pengiriman : $jenis<br>
        Berat Barang: $berat Kg<br>
        Asuransi : $asuransi<br><br>
        BAYAR : Rp.$harga<br>
        BIAYA ASURANSI : Rp.$bAsuransi<br>
        <b>TOTAL BAYAR : Rp.$total</b>
    ";
?>