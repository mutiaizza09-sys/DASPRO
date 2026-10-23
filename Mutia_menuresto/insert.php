<?php
include 'dbconnect.php';

$nama       = $_POST['judul_bk'];
$deskripsi  = $_POST['deskripsi'];  
$harga      = $_POST['harga_bk'];
$kategori   = $_POST['genre_bk'];

$query = mysqli_query($conn, "INSERT INTO Menu (nama_menu, deskripsi, harga, id_kategori) 
                              VALUES ('$nama', '$deskripsi', '$harga', '$kategori')");

if ($query) {
    header("Location: index.php");
} else {
    echo "Gagal menambah data: " . mysqli_error($conn);
}
?>