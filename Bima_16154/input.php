<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bima Library</title>
    <link rel="stylesheet" href="css/input.css"> 
    <link rel="icon" type="image/x-icon" href="css/img/favicon.ico" />
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
  <body>

    <div id="login">
      <div class="body">

          <h2>Data Buku Baru</h2>

          <form class="form" action="Sys/prosesinput.php" method="post">
	    <input class="user" type="text" name="Id_Buku" placeholder="Masukkan Id Buku" required><br>
            <input class="user" type="text" name="Judul_Buku" placeholder="Masukkan Judul Buku" required><br>
            <input class="user" type="text" name="Pengarang" placeholder="Pengarang" required><br>
	    <input class="user" type="text" name="Kategori" placeholder="Kategori" required><br>
	    <input class="user" type="text" name="Tahun_Terbit" placeholder="Tahun Terbitan Buku" required><br>		
	    <input class="user" type="text" name="Stok" placeholder="Stok Buku"><br>	
            <input class="log-in" type="submit" name="save" value="Input Data">
            <p><a href="index.php">Kembali Ke Menu Utama  </a> 
          </form>
      </div>
    </div>

  </body>
</html>