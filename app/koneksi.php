<?php 

	class Koneksi {
		public $koneksi;
		public function __construct(){
			$this->koneksi = mysqli_connect("localhost","root","") or die("Tidak dapat terhubung ke server database");
			mysqli_select_db($this->koneksi,"crud")or die("Tidak dapat terhubung ke database");
		}
	}
