<?php
//koneksi ke database mysql, silahkan di rubah dengan koneksi kalian sendiri
$koneksi = mysqli_connect("localhost","root","","kampus1");

//cek jika koneksi ke mysql gagal, maka zakan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>