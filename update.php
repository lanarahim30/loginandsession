<?php
require_once "koneksi.php";
require_once "fungsi.php";

$id = $_GET['id'];
if (isset($_GET['id'])) {
	$articel = tampilan_perid($id);
	while ($row = mysqli_fetch_assoc($articel)){
		$nm_sekolah = $row['nm_sekolah'];
		$npsn = $row['npsn'];
		$bp = $row['bp'];
		$status = $row['status'];

	}
}
if (isset($_POST['submit'])) {
		$nm_sekolah = $row['nm_sekolah'];
		$npsn = $row['npsn'];
		$bp = $row['bp'];
		$status = $row['status'];

	if (!empty (trim($nm_sekolah)) && !empty (trim($npsn)) && !empty (trim($bp))&& !empty (trim($status))) {
		if (edit_data($nm_sekolah, $npsn, $bp, $status)) {
			header('location:admin.php');
		}else{
			$error = 'gagal update data';
		}
	}
	else{
		$error = 'judul dan konten wajib diisi';
	}
}
?>
<form method="post" action="admin.php">
	<label for="nms">Nama Sekolah</label><br>
	<input type="text" name="nm_sekolah" value="<?=$nm_sekolah ;?>"> <span class="wajib"> *)</span><br><br>

	<label for="npsn">NPSN</label> <br>
	<input type="text" name="npsn" value="<?=$npsn ;?>"> <span class="wajib"> *)</span><br><br>

	<label for="bp">Badan Pendidikan</label> <br>
	<input type="text" name="bp" value="<?=$bp ;?>"> <span class="wajib"> *)</span><br><br>

	<label for="bp">status</label> <br>
	<input type="text" name="status" value="<?=$status ;?>"> <span class="wajib"> *)</span><br><br>

	<input type="submit" name="submit" value="submit">

	
</form>