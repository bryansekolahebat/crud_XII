<?php
require_once'koneksi.php';

	class Siswa{
		public $id,$nis,$nama,$kelas,$jurusan,$koneksi;		

		public function __construct(){
			$kon = new Koneksi();
			$this->koneksi = $kon->koneksi;
		}

		function tambahSiswa($nis,$nama,$kelas,$jurusan){
			$this->nis = $nis;
			$this->nama = $nama;
			$this->kelas = $kelas;
			$this->jurusan = $jurusan;
			$nis = mysqli_query($this->koneksi,"SELECT nis from siswa WHERE nis = '$this->nis'");
			$row = mysqli_fetch_array($nis);
			if ($row['nis'] == $this->nis) {
				session_start();
				$_SESSION['msg'] = "Nis sudah terdaftar";
				header("Location: ../create.php");
			}else{
				mysqli_query($this->koneksi,"INSERT INTO siswa (nis,nama,kelas,jurusan) VALUE ('$this->nis','$this->nama','$this->kelas','$this->jurusan') ");
				session_start();
				$_SESSION['msg'] = "Tambah siswa berhasil";
				header("Location: ../create.php");
			}			
		}

		function tampilSiswa(){
			$query = mysqli_query($this->koneksi,"SELECT * FROM siswa");
			$no = 1;
			while ($row = mysqli_fetch_array($query)) {
				$this->id = $row['id'];
				$this->nis = $row['nis'];
				$this->nama = $row['nama'];
				$this->kelas = $row['kelas'];
				$this->jurusan = $row['jurusan'];

				echo "<tr class='hover'>";
				echo "<td class='font-bold'> ". $no++ ."  </td>";
				echo "<td> ". $this->nis ."  </td>";
				echo "<td> ". $this->nama ."  </td>";
				echo "<td> ". $this->kelas ."  </td>";
				echo "<td> ". $this->jurusan ."  </td>";
				echo "<td><a href='edit_siswa.php?id=". $this->id ."'>Edit</a> | <a href='proses/hapus_siswa.php?id=". $this->id ."'>Delete</a> </td>";
				echo "</tr>";
			}
		}

		function updateSiswa($id,$nis,$nama,$kelas,$jurusan){
			$this->id = $id;
			$this->nis = $nis;
			$this->nama = $nama;
			$this->kelas = $kelas;
			$this->jurusan = $jurusan;

			mysqli_query($this->koneksi, "UPDATE siswa SET nis = '$this->nis', nama = '$this->nama', kelas = '$this->kelas', jurusan = '$this->jurusan' WHERE id = '$this->id' ");
			session_start();
			$_SESSION['msg'] = "update siswa berhasil";
			header("Location: ../edit_siswa.php?id=". $this->id ."");
		}

		function hapusSiswa($id){
			$this->id = $id;
			mysqli_query($this->koneksi,"DELETE FROM siswa WHERE id = $this->id");
			session_start();
			$_SESSION['msg'] = "Hapus siswa berhasil";
			header("Location: ../index.php");
		}
	}	