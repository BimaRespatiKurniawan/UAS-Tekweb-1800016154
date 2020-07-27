<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bima Library</title>
    <link rel="stylesheet" href="css/Loginreal.css"> 
    <link rel="icon" type="image/x-icon" href="css/img/favicon.ico" />
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
  <body>

    <div id="login">
      <div class="body">

          <h2>Log-in</h2>

          <form class="form" action="Sys/ceklogin.php" method="post">
            <input class="user" type="text" name="username" placeholder="Masukkan Username" title="Mohon Isi Dengan Benar" required><br>
            <input class="user" type="password" name="password" placeholder="Masukkan Password" required><br>
            <input class="log-in" type="submit" onclick="myFunction()" name="bayar" value="Login">
            <p><a href="Sys/Register.php"> Belum Punya akun? Daftar Sekarang  </a> </p>
          </form>
      </div>
    </div>

  </body>
</html>

