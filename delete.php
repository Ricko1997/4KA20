<?php
include "koneksi.php";
$id =$_GET['id'];

$query = mysql_query("delete from biodata1 where id = '$id'");
if ($query) {
	echo "<script type='text/javascript'>
	alert ('Delete');
	window.location.href='view.php';</script>";
}