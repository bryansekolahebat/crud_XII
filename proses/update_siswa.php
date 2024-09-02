<?php
	require_once'../app/siswa.php';
	$siswa = new Siswa();
	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$jurusan = $_POST['jurusan'];
		$siswa->updateSiswa($id,$nis,$nama,$kelas,$jurusan);
	}else{
		echo "404";
	}