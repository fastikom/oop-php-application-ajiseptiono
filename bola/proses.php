<?php 
include 'confiq.php';
$db = new confiq();

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['nama'],$_POST['posisi'],$_POST['negara']);
 	header("location:index.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:index.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['nama'],$_POST['posisi'],$_POST['negara']);
 	header("location:index.php");
 }
?>