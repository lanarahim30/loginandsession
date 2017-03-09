<?php
function hapus_data($id){
	global $konek;
	$query = "DELETE FROM dt_sekolah WHERE no=$id";

	$result = mysqli_query($konek, $query) or die("gagal menampilkan data");

	return $result;
}
function tampilan_perid($id){
	global $konek;

	$query = "SELECT * FROM dt_sekolah WHERE no=$id";

	$result = mysqli_query($konek, $query) or die("gagal menampilkan data");

	return $result;
}
function edit_data($nm_sekolah, $npsn, $bp, $status, $id){
	global $konek;
	$query ="UPDATE dt_sekolah SET nm_sekolah='$nm_sekolah', npsn='$npsn', bp='$bp', status=$status WHERE id=$id";

	$result = mysqli_query($konek, $query) or die("gagal menampilkan data");

	return $result;
}

?>