<?php require'inc/header.php' ?>
<?php require'inc/navbar.php' ?>
<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}else{		
		$_SESSION['msg'] = "Tidak ada access";
		header("Location: index.php");
	}

	$query = mysqli_query($kon->koneksi,"SELECT * FROM siswa WHERE id = $id");
	$row = mysqli_fetch_array($query);

 ?>
	<div class="max-w-2xl mx-auto">
		<h1 class="text-2xl">Tambah Data siswa</h1>
		<?php require_once'inc/msg.php' ?>
		<form action="proses/update_siswa.php" method="POST">
			<input type="hidden" name="id" value="<?= $row['id'] ?>">
			<input type="text" name="nis" placeholder="Nis" class="input input-bordered w-full max-w-xs" value="<?= $row['nis'] ?>" />
			<input type="text" name="nama" placeholder="Nama" class="input input-bordered w-full max-w-xs" value="<?= $row['nama'] ?>"/>
			<select class="select select-bordered w-full max-w-xs" name="kelas">
			  <option value="<?= $row['kelas'] ?>" selected><?= $row['kelas'] ?></option>
			  <option value="1">Kelas X</option>
			  <option value="2">Kelas XI</option>
			  <option value="3">Kelas XII</option>
			</select>
			<select class="select select-bordered w-full max-w-xs" name="jurusan">
				<option value="<?= $row['jurusan'] ?>" selected><?= $row['jurusan'] ?></option>
				<option value="RPLG">Rekayasa Perangkat Lunak dan Gim</option>
				<option value="TJKT">Teknik Jaringan Komputer dan Telekomunikasi</option>
				<option value="DKV">Desain Komunikasi Visual</option>
				<option value="AKL">Akuntansi Keuangan Lembaga</option>
			</select>
			<input type="submit" name="submit" class="btn btn-primary">
		</form>
	</div>

<?php require'inc/footer.php' ?>
