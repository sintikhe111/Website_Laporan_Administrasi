<?php
//memasukkan file config.php
include('config.php');
?>
<!DOCTYPE html>
<html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAPORAN ADMINISTRASI SINTIKHE</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand"><b>LAPORAN ADMNISTRASI</b></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tambahSM.php">Tambah Surat Masuk</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tambahSK.php">Tambah Surat Keluar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tambahIV.php">Tambah Daftar Inventaris</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container" style="margin-top:20px">
		<h2>Daftar Surat Masuk</h2>
		<hr>
		<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>NO.</th>
					<th>ID Surat Masuk</th>
					<th>Nomor Surat</th>
					<th>Tanggal Surat</th>
					<th>Tujuan</th>
					<th>Perihal</th>
					<th>keterangan</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel tambahsm urut berdasarkan id_srt yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM tambahsm ORDER BY id_srt ASC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['id_srt'].'</td>
							<td>'.$data['no_srt'].'</td>
							<td>'.$data['tgl_srt'].'</td>
							<td>'.$data['tujuan'].'</td>
							<td>'.$data['hal'].'</td>
							<td>'.$data['ket'].'</td>
							<td>
								<a href="edit.php?id='.$data['id_srt'].'" class="badge badge-warning">Edit</a>
								<a href="delete.php?id='.$data['id_srt'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>

	<div class="container" style="margin-top:20px">
		<h2>Daftar Surat Keluar</h2>
		<hr>
		<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>NO.</th>
					<th>ID Surat Masuk</th>
					<th>Nomor Surat</th>
					<th>Tanggal Surat</th>
					<th>Tujuan</th>
					<th>Perihal</th>
					<th>keterangan</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel tambahsk urut berdasarkan id_srt yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM tambahsk ORDER BY id_srt_k ASC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['id_srt_k'].'</td>
							<td>'.$data['no_srt'].'</td>
							<td>'.$data['tgl_srt'].'</td>
							<td>'.$data['tujuan'].'</td>
							<td>'.$data['hal'].'</td>
							<td>'.$data['ket'].'</td>

							<td>
								<a href="edit2.php?id='.$data['id_srt_k'].'" class="badge badge-warning">Edit</a>
								<a href="delete2.php?id='.$data['id_srt_k'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	<!-- TAMBAH MATKUL -->
	<div class="container" style="margin-top:20px">
		<h2>Daftar Inventaris</h2>
		<hr>
		<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>NO.</th>
					<th>ID IVENTARIS</th>
					<th>NAMA BARANG</th>
					<th>JUMLAH</th>
					<th>KONDISI</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel tambahiv urut berdasarkan id_iv yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM tambahiv ORDER BY id_iv ASC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['id_iv'].'</td>
							<td>'.$data['nm_brg'].'</td>
							<td>'.$data['jml'].'</td>
							<td>'.$data['kondisi'].'</td>
							<td>
								<a href="edit3.php?id='.$data['id_iv'].'" class="badge badge-warning">Edit</a>
								<a href="delete3.php?id='.$data['id_iv'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>
	<!-- END TAMBAH MATKHUL -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>