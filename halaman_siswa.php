<!DOCTYPE html>
<html>
<head>
    <title>Halaman Siswa</title>
</head>
<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
}

?>
<h1>Halaman siswa</h1>

<p>Halo<b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level'];?></b>.</p>
<a href="logout.php">LOGOUT</a> ok

<br/>
<br/>

<a>Membuat Login Multi Level Dengan PHP</a>
</body>
</html>
