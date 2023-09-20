<!DOCTYPE html>
<html>
<head>
    <title>Membuat login multi user level dengan PHP dan MySQLi - www.malasngoding.com</title>
    <link rel ="stylesheet" type="text/css" href="style.css">
</head>
<body>

     <h1>membuat login multi user level dengan PHP dan MySQLi <br/> www.malasngoding.com</h1>

      <?php
      if(isset($_GET['pesan'])){
          if($_GET['pesan']=="gagal"){
             echo "<div class='alert'>username dan password tidak sesuai !</div>";
          }
      }
?>
<div class="kotak_login">
<p class="tulisan_login"></p>

<form action="cek_login.php" method="post">
    <label>Username</label>
    <input type="text" name="username" class="from_login" placeholder="username .." required="required">

    <label>Password</label>
    <input type="password" name="password" class="form_login" placeholder="Password .." required="required">

<input type="submit" class="tombol_login" value="LOGIN">

    <br/>
    <br/>
    <center>
        <a class="link" href="https://www.malasngoding.com">kembali</a>
    </center>
</from>
</div>
</body>
</html>
