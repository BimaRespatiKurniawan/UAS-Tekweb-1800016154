<?php
	$koneksi = mysqli_connect
	(
		"localhost",
		"root",
		"",
		"bima_libr_16154"
	);

	if (isset($_POST['save'])){
		$Id_Buku = $koneksi -> real_escape_string($_POST['Id_Buku']);
		$Judul_Buku = $koneksi -> real_escape_string($_POST['Judul_Buku']);
		$Pengarang = $koneksi -> real_escape_string($_POST['Pengarang']);
		$Kategori = $koneksi -> real_escape_string($_POST['Kategori']);
		$Tahun_Terbit = $koneksi -> real_escape_string($_POST['Tahun_Terbit']);
		$Stok = $koneksi -> real_escape_string($_POST['Stok']);
	
	$SQL = $koneksi -> prepare ("INSERT INTO Buku (Id_Buku,Judul_Buku,Pengarang,Kategori,Tahun_Terbit,Stok) values (?,?,?,?,?,?)");
	$SQL -> bind_param("ssssss",$Id_Buku,$Judul_Buku,$Pengarang,$Kategori,$Tahun_Terbit,$Stok);
	$SQL -> execute();
		
		if(!$SQL){
			echo $mysqliconn -> error;
		}
		else {
			echo "Pengajuan Berhasil, Silahkan Tunggu Email dari kami ^_^";
			echo '<script type="text/javascript">
  				alert("Pengajuan Berhasil, Silahkan Tunggu Email dari kami ^_^ Untuk Next Test");
				</script>';
		}
}
header("location:../index.php");
?>
