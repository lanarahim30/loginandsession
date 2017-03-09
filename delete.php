<?php
require_once "koneksi.php";
require_once "fungsi.php";
if (isset($_GET['id'])) {
	if (hapus_data($_GET['id'])) {
		header('location: admin.php');
	}
	else{
		echo "gagal menghapus data";
	}
}

?>