<html> 
    <head> 
        <title>Latihan Digitalent</title> 
        <link rel="stylesheet" type="text/css" href="style.css">
    </head> 
    <body>

     <?php
        $pokok=$_POST['nominal']/$_POST['waktu'];
        $bunga=0.02*$_POST['nominal'];
        $cicilan=$pokok+$bunga;
        $hasil=round($cicilan,0);        
     ?>

        <div class="perhitungan">
            <h2 class="judul">HASIL <br> PERHITUNGAN CICILAN</h2> 
            <form method="POST" action="index.html"> 
                  <label class="tulisan">Nominal Pinjaman (Rupiah) :</label> 
                  <input type="text" value="<?php echo $_POST['nominal']; ?>" class="bil">
                  <p>
                  <label class="tulisan">Lama Pinjaman (Bulan) :</label>
                  <input type="text" value="<?php echo $_POST['waktu']; ?>" class="bil"> 
                  <p>
                  <label class="tulisan">Cicilan yang dibayarkan (Bulan) :</label>
                  <input type="text" value="<?php echo $hasil; ?>" class="bil"> 
                  <center>
                  <p>
                 <a class="tombol" href="index.html" style="text-decoration:none" onclick = "return confirm('Apakah anda yakin akan kembali?');"> Back </a> 
            </form>
        </div>
  </body> `
</html>