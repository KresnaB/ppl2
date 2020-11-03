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
    <table class="table">
        <tr>
            <th class="bg-dark text-white">NIM</th>
            <td><?= $mahasiswa->NIM ?></td>
        </tr>
        <tr>
            <th class="bg-dark text-white">NAMA</th>
            <td><?= $mahasiswa->NAMA ?></td>
        </tr>
        <tr>
            <th class="bg-dark text-white">UMUR</th>
            <td><?= $mahasiswa->UMUR ?></td>
        </tr>
    </table>
    <td><a href="<?php echo base_url('/index.php') ?>" class="btn btn-dark mb-2">Kembali</a></td>
  </div>
</div>
</body>
</html>