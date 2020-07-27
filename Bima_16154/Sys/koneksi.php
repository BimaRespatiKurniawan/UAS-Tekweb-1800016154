<?php
$koneksi = mysqli_connect
		(
			"localhost",
			"root",
			"",
			"bima_libr_16154"
		);
if (mysqli_connect_errno())
	{
		echo "koneksi gagal"
		.mysqli_connect_error();
	}
	else {
		echo "koneksi berhasil";
	}
?>