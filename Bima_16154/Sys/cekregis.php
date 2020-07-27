<?php
	$koneksi = mysqli_connect
	(
		"localhost",
		"root",
		"",
		"bima_libr_16154"
	);

	if (isset($_POST['daftar'])){
		$username = $koneksi -> real_escape_string($_POST['username']);
		$password = $koneksi -> real_escape_string($_POST['password']);
	
	$SQL = $koneksi -> prepare ("INSERT INTO user (Username,Password) values (?,?)");
	$SQL -> bind_param("ss",$username,$password);
	$SQL -> execute();
		
		if(!$SQL){
			echo $mysqliconn -> error;
		}
		else {
			echo "Pengajuan Berhasil, Silahkan Tunggu Email dari kami ^_^";
		}
}
header("location:../login.php");
?>
