<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?=base_url('Admin')?>">Admin</a>
        <a href="<?=base_url('Admin/logout')?>" class="btn btn-danger ml-auto" title="">Logout</a>
    </nav>
    <!-- <?php var_dump($barang) ?> -->
    <div class="row col-md-8 col-10 mx-auto shadow rounded my-4 p-5">
        <form method="post" action="<?= base_url('Admin/update')?>" class="w-100">
            <input type="hidden" name="id" value="<?=$barang['id']?>">
            <div class="form-group">
                <label for="exampleFormControlInput1">Kode Barang</label>
                <input type="text" value="<?=$barang['kode']?>" required="" name="kode" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Barang</label>
                <input type="text" value="<?=$barang['nama']?>" required="" name="nama" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Spesifikasi Barang</label>
                <!-- <input type="text" value="<?=$barang['spesifikasi']?>" required="" name="spesifikasi" class="form-control" id="exampleFormControlInput1" > -->
                <textarea name="spesifikasi" class="form-control" id="exampleFormControlInput1" required=""><?=$barang['spesifikasi']?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tgl Masuk</label>
                <input type="date" value="<?=$barang['tgl_masuk']?>" required="" name="tgl_masuk" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Supplier</label>
                <input type="text" value="<?=$barang['suplier']?>" required="" name="suplier" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Harga Beli</label>
                <input type="number" value="<?=$barang['harga_beli']?>" required="" name="harga" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="modal-footer">
                <a href="<?=base_url('Admin')?>" class="btn btn-secondary" >Kembali</a>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>