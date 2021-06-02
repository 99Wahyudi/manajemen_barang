<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Edit</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Admin</a>
        <a href="<?=base_url('Admin/logout')?>" class="btn btn-danger ml-auto" title="">Logout</a>
    </nav>

<!-- <?php var_dump($barang) ?> -->

    <div class="row col-10 mx-auto p-0" style="margin-top: 40px">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Barang
        </button>
        <a href="<?=base_url('Admin/printExcel')?>" class="btn btn-success ml-3" >
            Cetak
        </a>

        <div class="w-100" style="overflow-x: auto;">
            <table class="table table-striped w-100 mt-4"  style="min-width: 640px; ">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Spesifikasi</th>
                    <th scope="col">Tgl Masuk</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Harga Beli</th>
                    <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?> 
                    <?php foreach ($barang as $bar): ?>
                    <tr>
                        <th scope="row"><?=$i?></th>
                        <td><?=$bar['kode']?></td>
                        <td><?=$bar['nama']?></td>
                        <td><?=$bar['spesifikasi']?></td>
                        <td><?=$bar['tgl_masuk']?></td>
                        <td><?=$bar['suplier']?></td>
                        <td><?=$bar['harga_beli']?></td>
                        <td><a href="<?=base_url('Admin/delete/').$bar['id']?>" title="" class="badge badge-danger">Hapus</a> <a href="<?=base_url('Admin/edit/').$bar['id']?>" title="" class="badge badge-warning">Edit</a></td>
                        <?php $i+=1 ?> 
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('Admin/tambah')?>">
          <div class="form-group">
            <label for="exampleFormControlInput1">Kode Barang</label>
            <input type="text" required="" name="kode" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Barang</label>
            <input type="text" required="" name="nama" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Spesifikasi Barang</label>
            <textarea name="spesifikasi" required="" class="form-control" id="exampleFormControlInput1" ></textarea>
            <!-- <input type="text" required="" name="spesifikasi" class="form-control" id="exampleFormControlInput1" > -->
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tgl Masuk</label>
            <input type="date" required="" name="tgl_masuk" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Supplier</label>
            <input type="text" required="" name="suplier" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Harga Beli</label>
            <input type="number" required="" name="harga" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>
</div>
</div>
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