<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<style type="text/css">

	table, th, td {
  		border: 1px solid black;
		border-collapse : collapse;
	}
	#pr-100{
		padding-right: 100px;
	}
	</style>
</head>
<body>
<h3 class="text-center">Tabel Mahasiswa</h3>
<div class="card border-dark" style="width: 80%;margin: auto;">
  <div class="card-body">
    <div class="d-flex">
        <a href="<?php echo base_url('/index.php/form') ?>" class="btn btn-dark mb-2">Input Mahasiswa</a>
        <form class="form-inline" action="<?php echo base_url(). 'index.php/search'; ?>" method="post">
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control border-dark" id="cari" name="cari_nama" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-light mb-2 border-dark" name="cari">Cari</button>
        </form>
    </div>
   <?php if(count($mahasiswa) != 0){ ?>
    <table class="table" style=>
        <thead class="thead-dark">
            <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($mahasiswa as $key => $item){ ?>
                <tr>
                    <td><?= $item->NIM ?></td>
                    <td><?= $item->NAMA ?></td>
                    <td><a href="<?php echo base_url('/index.php/detail/'.$item->NIM) ?>" class="btn btn-dark mb-2">Detail</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } else {?>
        <h6 class="text-center">Mahasiswa Tidak Ditemukan</h6>
    <?php } ?>
  </div>
</div>
</body>
</html>