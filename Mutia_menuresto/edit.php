<?php
include 'dbconnect.php';

$id          = $_POST['id_menu'];
$nama        = $_POST['judul_bk'];
$deskripsi   = $_POST['deskripsi']; 
$harga       = $_POST['harga_bk'];
$kategori    = $_POST['genre_bk'];

$query = mysqli_query($conn, "UPDATE Menu SET 
    nama_menu = '$nama', 
    deskripsi = '$deskripsi', 
    harga = '$harga', 
    id_kategori = '$kategori' 
    WHERE id_menu = $id");

if ($query) {
    header("Location: index.php");
} else {
    echo "Gagal update data: " . mysqli_error($conn);
}
?>