<?php
$koneksi=mysqli_connect("localhost","root","","bima_libr_16154");

$Id_Buku=$_GET['Id_Buku'];

$result= mysqli_query($koneksi, "DELETE from Buku where Id_Buku='$Id_Buku'");
header("location: ../index.php");

?>