<?php 

class confiq{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "bola";

	function __construct(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);
	}

	function tampil_data(){ 
		$data = mysql_query("select * from pemain");
		while($d = mysql_fetch_array ($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$posisi,$negara){
		mysql_query("insert into pemain values('','$nama','$posisi','$negara')");
	}

	function hapus($id){
		mysql_query("delete from pemain where id='$id'");
	}

	function edit($id){
		$data = mysql_query("select * from pemain where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$posisi,$negara){
		mysql_query("update pemain set nama='$nama', posisi='$posisi', negara='$negara' where id='$id'");
	}

} 

?>