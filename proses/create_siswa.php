<?php
	require_once'../app/siswa.php';
	$siswa = new Siswa();
	if (isset($_POST['submit'])) {
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$jurusan = $_POST['jurusan'];
		$siswa->tambahSiswa($nis,$nama,$kelas,$jurusan);
	}else{
		echo "404";
	}