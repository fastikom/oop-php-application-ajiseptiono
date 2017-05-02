<?php 
include 'confiq.php';
$db = new confiq();
?>
<!DOCTYPE html>
<html>
<center>
<body background="a.jpg"></body>
   <head><h1><font color ="Goldenrod" face = "Comic Sans MS">Football Players</font></h1></head>

<table border="2">
<font color="Lawngreen" face="Comic Sans MS"></font>
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Posisi</th>
		<th>Negara</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['posisi']; ?></td>
		<td><?php echo $x['negara']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>		
		</td>
	</tr>

	<?php 
	}
	?>
</table>
</center>
</html>
<br>
<center><a href="input.php">Input Data Pemain</a></center>
	



