<?php
include 'dbconnect.php';

if (isset($_POST['submit'])) {
    $kategori = $_POST['add_genre'];
    
    $query = mysqli_query($conn, "INSERT INTO Kategori (kategori) VALUES ('$kategori')");
    
    if ($query) {
        header("Location: index.php");
    } else {
        echo "Gagal menambah kategori: " . mysqli_error($conn);
    }
}
?>