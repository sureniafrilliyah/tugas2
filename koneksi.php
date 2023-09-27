<?php 
$koneksi = mysqli_connect("localhost","root","","db_website");

// Chek connection
if (mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}

?>
