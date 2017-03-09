<?php
	session_start();
	if ($_SESSION['username']) {
		include "koneksi.php"; 
 		$query="SELECT * FROM dt_sekolah WHERE bp='SMA'";
 		$run_query = mysqli_query($konek, $query);
 		$jumlah=mysqli_num_rows($run_query); 
 		echo "Selamat datang : ".$_SESSION['username'];
 		echo "<br><br>";
		echo "jumlah data : ".$jumlah;
?>
<form>
<label for="agama">Jenjang Pendidikan</label></td>	
	<select name="jenjang" id="jenjang">
		<option value="">---Pilih Jenjang---</option>
		<option value="SD">SD</option>
		<option value="SMP">SMP</option>
		<option value="SMK">SMK</option>
		<option value="SMA">SMA</option>
	</select>		
</form>
<table border="1" width="100%">
	<tr>
		<th>No</th>
		<th>Nama Sekolah</th>
		<th>NPSN</th>
		<th>Badan Pendidikan</th>
		<th>Status Sekolah</th>
		<th>Aksi</th>
	</tr>
	<?php
	while ($row=mysqli_fetch_array($run_query)) {
		?>
		<tr>
			<td><?= $row['no'];?></td>
			<td><?= $row['nm_sekolah'];?></td>
			<td><?= $row['npsn'];?></td>
			<td><?= $row['bp'];?></td>
			<td><?= $row['status'];?></td>

			<td>
				<a href="delete.php?id=<?= $row['no']; ?>">Hapus</a>
				<a href="update.php?id=<?= $row['no']; ?>">Edit</a>
			</td>
		</tr>
		<?php
	}
	?>
</table></br>
<a href="logout.php">Log Out</a>
<?php
}else{
	?>anda tidak boleh mengakses halaman ini <a href="form_admin.php">Halaman Utama</a><?php
}
?>