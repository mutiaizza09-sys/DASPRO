<?php
include 'dbconnect.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM Menu WHERE id_menu = $id");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu Resto - Edit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="bootstrap4/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-warning" style="padding-top: 20px; padding-bottom: 20px;">
        <h3>Update Data Resto</h3>
        <form role="form" action="edit.php" method="post">
            <input type="hidden" name="id_menu" value="<?= $data['id_menu']; ?>">
            
            <div class="form-group">
                <label>Nama Menu</label>
                <input type="text" name="judul_bk" class="form-control" value="<?= $data['nama_menu']; ?>" required>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="3" required><?= $data['deskripsi']; ?></textarea>
            </div>

            <div class="form-group">
                <label>Kategori Menu</label>
                <select class="form-control custom-select-value" name="genre_bk" required>
                    <?php
                    $kat = mysqli_query($conn, "SELECT * FROM Kategori");
                    while ($k = mysqli_fetch_array($kat)) {
                        $selected = ($k['id_kategori'] == $data['id_kategori']) ? "selected" : "";
                    ?>
                    <option value="<?= $k['id_kategori']; ?>" <?= $selected; ?>><?= $k['kategori']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga_bk" class="form-control" value="<?= $data['harga']; ?>" required>
            </div>

            <button type="submit" class="btn btn-success btn-block">Update Menu</button>
            <a href="index.php" class="btn btn-secondary btn-block mt-2">Kembali</a>
        </form>
    </div>

    <?php
    mysqli_close($conn);
    ?>
</body>
</html>