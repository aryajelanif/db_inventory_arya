<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container" class="mb-3">


    <h1>Tambah Barang Baru</h1>
    <?php
    $id_barang = $_GET['id_barang'];
    include '../../config/koneksi.php';
    $query=mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");
    $result=mysqli_fetch_array($query);
    ?>
    <form action="proses_edit.php?id_barang=<?php echo $result['id_barang']?>" method="POST">
        <label for="exampleInputPassword1">ID BARANG</label>
        <input type="number"  class="form-control" id="exampleInputEmail1"class="form-number"value="<?php 
        echo $result['id_barang']?>" name="id_barang">
        <br>
        <label for="exampleInputPassword1" >ID JENIS</label>
        <input type="text"  class="form-control" id="exampleInputEmail1"class="form-text"value="<?php 
        ['id_jenis']?>" name="id_jenis">
        <br>
        <label for="exampleInputPassword1" >NAMA BARANG</label>
        <input type="text"  class="form-control" id="exampleInputEmail1"class="form-text"value="<?php 
        ['nama_barang']?>" name="nama_barang">
        <br>
        <label for="exampleInputPassword1" >HARGA</label>
        <input type="number"  class="form-control" id="exampleInputEmail1"class="form-number"value="<?php 
        echo $result['harga']?>" name="harga">
        <br>
        <label for="exampleInputPassword1" >STOK</label>
        <input type="number"  class="form-control" id="exampleInputEmail1"class="form-number"value="<?php 
        echo $result['stok']?>" name="stok">
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div>

</body>
</html>