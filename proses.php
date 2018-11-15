<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Tugas 2</title>
 <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css" media="screen">
	<link rel="stylesheet" href="css/grid.css" media="screen">
	<link rel="stylesheet" href="css/style.css" media="screen">
	<link rel="stylesheet" href="plugin/font-awesome/css/font-awesome.css" media="screen">
</head>
<body background="images/10.jpg">
<br><a href="index.php">TAMBAH DATA</a></br>
 <table width="100%" border="1">
 <tr>
  <td><center>No</center></td>
  <td><center>NPM</center></td>
  <td><center>Nama</center></td>
  <td><center>Kelas</center></td>
 </tr>
 <?php
 $awal=1;
 if (@$_POST["npm"]!=''){
  if (empty($_SESSION["isi"])==TRUE){
   $_SESSION["isi"]=1;
  }else{
   $_SESSION["isi"]++;
  }
  
  @$npm=trim($_POST["npm"]);
  @$nim=trim($_POST["nama"]);
  @$kelas=trim($_POST["kelas"]);
  $_SESSION["akhir"][$_SESSION["isi"]]=array($npm,$nim,$kelas);
 }
  @$awal = $_SESSION["isi"];
  
  for ($i=0;$i<=$awal;$i++) {
  if (@$_SESSION['akhir'][$i][0]!=''){
   echo "<tr>
     <td align=center>$i</td>
     <td align=center>".@$_SESSION['akhir'][$i][0]."</td>
     <td align=center>".@$_SESSION['akhir'][$i][1]."</td>
     <td align=center>".@$_SESSION['akhir'][$i][2]."</td>
     ";
   }
   
  }
  
 ?>
 </table>
   </div>
  </div>
 </div>
</div>

<script src="js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>