<?php
$koneksi=mysqli_connect("localhost","root","","bima_libr_16154");

$Id_Buku=$_GET['Id_Buku'];

$result= mysqli_query($koneksi, "SELECT * from Buku where Id_Buku='$Id_Buku'");

while($ro = mysqli_fetch_array($result))
{
	$Id_Buku = $ro['Id_Buku'];
	$Judul_Buku = $ro['Judul_Buku'];
	$Pengarang = $ro['Pengarang'];
	$Kategori = $ro['Kategori'];
	$Tahun_Terbit = $ro['Tahun_Terbit'];
	$Stok = $ro['Stok'];
}
?>
	<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bima Library</title>
    <link rel="stylesheet" href="css/Login.css"> 
    <link rel="icon" type="image/x-icon" href="css/img/favicon.ico" /
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
  <body>


    <div id="login">
      <div class="body">

          <h2>Edit Data Buku</h2>

          <form class="form" name="update_data" action="edit.php" method="post">
            <input class="user" type="hidden" name="Id_Buk" value="<?php echo $Id_Buku;?>" required><br>
            <input class="user" type="text" name="Judul" value="<?php echo $Judul_Buku;?>" required><br>
	    <input class="user" type="text" name="Peng" value="<?php echo $Pengarang;?>" required><br>
	    <input class="user" type="text" name="Kat" value="<?php echo $Kategori;?>" required><br>		
	    <input class="user" type="text" name="Thn" value="<?php echo $Tahun_Terbit;?>" Required><br>
	    <input class="user" type="text" name="Stok" value="<?php echo $Stok;?>" Required><br>
            <input class="log-in" type="submit" onclick="myFunction()" name="update" value="Update Sekarang">
            <p><a href="index.php">Kembali Ke Menu Utama  </a> 
          </form>
      </div>
    </div>

  </body>
</html>


<script tipe="text/Javascript">
function myFunction() {
 alert("Data Berhasil Di Update");
   <?php

	$koneksi=mysqli_connect("localhost","root","","bima_libr_16154");

	if(isset($_POST['update']))
	{
	   $id_p=$_POST['Id_Buk'];
	   $jud=$_POST['Judul'];
	   $peng=$_POST['Peng'];
	   $kat=$_POST['Kat'];
	   $thn=$_POST['Thn'];
	   $stok=$_POST['Stok'];

	  $result= mysqli_query($koneksi, "update Buku set Judul_Buku='$jud',Pengarang='$peng',Kategori='$kat',Tahun_Terbit='$thn',Stok='$stok' where Id_Buku='$id_p'");
	  header("location: index.php");
	}
      ?>
}
</script>

	