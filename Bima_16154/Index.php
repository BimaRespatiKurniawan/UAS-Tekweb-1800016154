<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bima Library</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="css/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles1.css" rel="stylesheet" />
    </head>
	   <body id="page-top">
       <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#">Bima Library Book</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#"></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">^_^</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="input.php">Tambah Buku</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Log-Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
		<div class="container text-center">
			<h2 class="text-white mt-0">Daftar Buku </h2>
			<div align="center"><table class="table" border="0" cellspacing="10" align="center">
			<tr>
				<th>No</th>
				<th>Id Buku</th>
				<th>Judul Buku</th>
				<th>Pengarang</th>
				<th>Kategori</th>
				<th>Tahun Terbit</th>
				<th>Stok Buku</th>
				<th>Opsion</th>
			</tr>
			<?php
			$koneksi = mysqli_connect ("localhost","root","","bima_libr_16154");
			$data = mysqli_query ($koneksi, "SELECT * From buku");
			$no = 1;
			while ($row = mysqli_fetch_array($data))
			{
				?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['Id_Buku']; ?></td>
				<td><?php echo $row['Judul_Buku']; ?></td>
				<td><?php echo $row['Pengarang']; ?></td>
				<td><?php echo $row['Kategori']; ?></td>
				<td><?php echo $row['Tahun_Terbit']; ?></td>
				<td><?php echo $row['Stok']; ?></td>
			<?php
			echo "<td><a href='Edit.php?Id_Buku=$row[Id_Buku]'>Edit</a> | <a onclick='return konfirmasi()' href='Sys/delete.php?Id_Buku=$row[Id_Buku]'>Delete</a></td>";
			?>			
			  </tr>
				<?php
					}
				?>
			</table></div><br><br>
            </div>
        </section>
 
       <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 1800016154 -  Bima Respati Kurniawan</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Data Ini ?");
 if (tanya == true) return true;
 else return false;
 }</script>