<html>
    <head><title>Form UTS 10522010 Rayvanka Azrifany N N</title></head>
    <body>
        <p>NIM: 10522010<br>Nama: Rayvanka Azrifany Nurviana Najmi</p>
        <h2><b>FORM PENGIRIMAN BARANG</b></h2>
        <form method="POST" name="input" action="cobaproses.php">
            Nama Pengirim : <input type="text" name="nama"><br>
            No Telepon : <input type="text" name="telp"><br>
            Tujuan Pengiriman :
            <select name="tujuan">
                <option value="">-=Pilih=-</option>
                <option value="Bandung">Bandung</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Semarang">Semarang</option>
            </select><br>
            Nama Pengirim : 
            <input type="radio" name="jenis" value="REGULER">REGULER
            <input type="radio" name="jenis" value="EKSPRES">EKSPRES<br>
            Berat Barang : <input type="text" name="berat"><br>
            Asuransi : 
            <select name="asuransi">
                <option value="">-=Pilih=-</option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select><br><br>
            <input type="submit" name="input" value="Submit"> |
            <input type="reset" value="Reset">
        </form>
    </body>
    </html>