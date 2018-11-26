<?php
error_reporting(0);
$server	= "localhost";
$users	= "root";
$password = "";
$db	= "ricko1";
$base_url = "http://localhost/TugasWeb/";

mysql_connect($server, $users, $password) or die (mysql_error());
mysql_select_db($db);
  ?>
