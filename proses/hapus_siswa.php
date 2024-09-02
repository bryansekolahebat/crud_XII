<?php
	require_once'../app/siswa.php';
	$siswa = new Siswa();	
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$siswa->hapusSiswa($id);
	}else{
		echo "404";
	}