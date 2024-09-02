<?php require'inc/header.php' ?>
<?php require'inc/navbar.php' ?>
	<div class="max-w-2xl mx-auto">
		<?php require_once'inc/msg.php' ?>
		<h1 class="text-2xl">Data siswa</h1>
		<div class="overflow-x-auto">
		  <table class="table">
		    <!-- head -->
		    <thead>
		      <tr>
		        <th></th>
		        <th>NIS</th>
		        <th>Nama</th>
		        <th>Kelas</th>
		        <th>Jurusan</th>
		        <th>Aksi</th>
		      </tr>
		    </thead>
		    <tbody>
		      <?php $siswa->tampilSiswa() ?>
		    </tbody>
		  </table>
		</div>
	</div>

<?php require'inc/footer.php' ?>
