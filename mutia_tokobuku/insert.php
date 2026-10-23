<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tooko Buku</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="bootstrap4/js/bootstrap.min.js"></script>
</head>
<body>
    
<?php
    include "dbconnect.php";
?>

<div  class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
    <h3>Tambah Data Buku</h3>
    <form role="from" action="simpan.php" method="post">
        <input type="hidden" name="id_bk" value="">
        <div class="from-group">
            <label> Judul Buku</label>
            <input type="text" name="judul_bk" class="form-control">
        </div>

        <div class="form-group"> 
            <label>Penerbit Buku</label> 
            <input type="text" name="terbit_bk" class="form-control" value="<?php echo $row['penerbit_buku']; ?>">           
        </div>

        <div class="form-group"> 
            <label>Genre Buku</label> 
            <select class="form-control custom-select-value" name="genre_bk" require> 
            <?php
            $query ="SELECT * FROM genre";
            $result_genre=mysqli_query($koneksi,$query);
            while ($data = mysqli_fetch_assoc($result_genre)) {
            ?> 
                <option value="<?php echo $data['id_genre'];?>" <?php if($row['id_genre']==$data['id_genre']) echo 'selected'?>> 
                    <?php echo $data['genre_buku']; ?>c 
                </option> 
            <?php } ?> 
            </select> 
        </div> 
        <div class="form-group"> 
            <label>Harga Buku</label> 
            <input type="text" name="harga_bk" class="form-control">           
        </div> 
        <button type="submit" class="btn btn-success btn-block">Update Buku</button>  
    </form>
</div>
</body>
</html>
