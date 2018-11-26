<?php
include "koneksi.php";

$npm =$_POST['npm'];
$nama =$_POST['nama'];
$kelas =$_POST['kelas'];
$password =$_POST['password'];
$password_confir =$_POST['password_confir'];

$query= mysql_query("insert into biodata1 values('','$npm','$nama','$kelas','$password','$password_confir')");
if ($query) {
	echo "<script type='text/javascript'>
	alert ('Berhasil Diinput');
	window.location.href='view.php';</script>";
}