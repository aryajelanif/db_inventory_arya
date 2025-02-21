<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">


    <h1>Tambah Barang Baru</h1>
    <form action="simpan.php" method="POST">
        <label for="">ID JENIS</label>
        <input type="number" name="id_jenis" class="form-control" id="jenis">
        <br>
        <label for="">NAMA JENIS</label>
        <input type="text" name="nama_jenis" class="form-control" id="jenis">
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
   
</form>
</body>
</html>