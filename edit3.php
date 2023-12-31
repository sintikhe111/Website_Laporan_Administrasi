<?php include('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>EDIT LAPORAN DAFTAR INVENTARIS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><b>EDIT LAPORAN ADMINISTRASI</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container" style="margin-top:20px">
		<h2>Edit Inventaris</h2>
		
		<hr>

<?php 
// Mengecek apakah parameter GET id_iv ada pada URL
if (isset($_GET['id'])) {
    // Menyimpan nilai id_srt dari parameter GET ke variabel $id_srt
    $id = $_GET['id'];

    // Mengambil data dari tabel tambahsm berdasarkan id_srt
    $select = mysqli_query($koneksi, "SELECT * FROM tambahiv WHERE id_iv='$id'") or die(mysqli_error($koneksi));

    // Jika data ditemukan, tampilkan form edit
    if (mysqli_num_rows($select) > 0) {
        // Mengambil data row dari query
        $data = mysqli_fetch_assoc($select);
    } else {
        echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
        exit();
    }
}
?>

<?php
if (isset($_POST['submit'])) {

    $id_iv = $_POST['id_iv'];
    $nm_brg = $_POST['nm_brg'];
    $jml = $_POST['jml'];
    $kondisi = $_POST['kondisi'];


    // Menjalankan query untuk mengupdate data di tabel tambahsm berdasarkan id_srt
    $sql = mysqli_query($koneksi, "UPDATE tambahiv SET id_iv='$id_iv', nm_brg='$nm_brg', jml='$jml', kondisi='$kondisi'WHERE id_iv='$id_iv'") or die(mysqli_error($koneksi));

    if ($sql) {
        echo '<script>alert("Berhasil menyimpan data."); document.location="awal.php?id='.$id_srt_k.'";</script>';
    } else {
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
    }
}
?>
    
    <form action="edit3.php?id=<?php echo $id; ?>" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">ID INVENTARIS</label>
				<div class="col-sm-10">
					<input type="text" name="id_iv" class="form-control" value="<?php echo $data['id_iv']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NAMA BARANG</label>
				<div class="col-sm-10">
					<input type="text" name="nm_brg" class="form-control" value="<?php echo $data['nm_brg']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">JUMLAH</label>
				<div class="col-sm-10">
					<input type="text" name="jml" class="form-control" value="<?php echo $data['jml']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KONDISI</label>
				<div class="col-sm-10">
					<input type="text" name="kondisi" class="form-control" value="<?php echo $data['kondisi']; ?>" required>
				</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
					<a href="index.php" class="btn btn-warning">KEMBALI</a>
				</div>
			</div>
		</form>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>