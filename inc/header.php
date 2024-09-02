<?php 
	session_start();
	require_once'app/koneksi.php';
	require_once'app/siswa.php';
	$kon = new Koneksi();
	$siswa = new Siswa();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>