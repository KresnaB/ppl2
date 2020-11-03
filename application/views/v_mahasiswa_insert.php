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
<h3 class="text-center">Form masukan mahasiswa</h3>
<div class="card border-dark" style="width: 80%;margin: auto;">
	<div class="card-body">
		<form action="<?php echo base_url(). 'index.php/insert'; ?>" method="post">
			<div class="form-group">
				<label for="formGroupExampleInput">NIM</label>
				<input type="number" class="form-control bg-dark text-light" name="nim" id="nim" placeholder="Masukan NIM, cth: 181511000">
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">Nama</label>
				<input type="text" class="form-control bg-dark text-light" name="nama" id="nama" placeholder="Masukan Nama, cth: Dono">
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">Umur</label>
				<input type="number" class="form-control bg-dark text-light" name="umur" id="umur" placeholder="Masukan Umur, cth: 19">
			</div>
			<button type="submit" value="tambah" class="btn btn-dark">Tambah</button>
		</form>
	</div>
</div>
</body>
</html>