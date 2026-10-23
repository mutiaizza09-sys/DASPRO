<?php 
include 'dbconnect.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu Resto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="bootstrap4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="js/jquery.dataTables.min.css">
</head>
<body>
    <div style="padding: 20px;">
        <h2>Crud Menu Resto</h2>
        <hr>
        <div class="row">
            <div class="col-sm-8">
                <h3>Tabel Daftar Menu</h3>
                <table class="table table-striped table-hover dtable1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama menu</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = mysqli_query($conn, "SELECT Menu.*, Kategori.kategori 
                                                      FROM Menu 
                                                      JOIN Kategori ON Menu.id_kategori = Kategori.id_kategori");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr role="row" class="odd">
                            <td class="sorting_1"><?= $no++; ?></td>
                            <td><?= $data['nama_menu']; ?></td>
                            <td><?= $data['deskripsi']; ?></td>
                            <td><?= $data['kategori']; ?></td>
                            <td><?= $data['harga']; ?></td>
                            <td>
                                <a href="editform.php?id=<?= $data['id_menu']; ?>" class="btn btn-success" role="button">Edit</a>
                                <a href="delete.php?id=<?= $data['id_menu']; ?>" class="btn btn-danger" role="button" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-4">
                <h3>Form Tambah Menu</h3>
                <form role="form" action="insert.php" method="post">
                    <div class="form-group">
                        <label>Nama menu</label>
                        <input type="text" name="judul_bk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi menu</label>
                        <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <div class="input-group custom-go-button">
                            <div class="form-select-list">
                                <select class="form-control custom-select-value" name="genre_bk" required>
                                    <?php
                                    $kat = mysqli_query($conn, "SELECT * FROM Kategori");
                                    while ($k = mysqli_fetch_array($kat)) {
                                    ?>
                                    <option value="<?= $k['id_kategori']; ?>"><?= $k['kategori']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-white" data-toggle="modal" data-target="#myModal">Tambah Kategori</button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="harga_bk" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-warning btn-block">Tambah Menu</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Kategori -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="insert_kategori.php">
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control" name="add_genre" placeholder="Enter Genre" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dtable1').DataTable();
        });
    </script>
</body>
</html>