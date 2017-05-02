<?php 
include 'confiq.php';
$db = new confiq();
?>

<body background="a.jpg"></body>
<center>
<h1><font color ="Goldenrod" face = "Comic Sans MS">Edit Football Players</h1></font>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Posisi</td>
		<td><input type="text" name="posisi" value="<?php echo $d['posisi'] ?>"></td>
	</tr>
	<tr>
		<td>Negara</td>
		<td><input type="text" name="negara" value="<?php echo $d['negara'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
</center>
