<!DOCTYPE html>
<html>
<head>
	<h2 align="center">BIODATA</h2>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body background="asd.JPG">
	<div align="center">
		<?php
		include "koneksi.php";
		?>
		<a href="index.php">Tambah Data</a>
		<table class="table table-striped" border="1">
  		<thead>
			 <tr>
      <th scope="col-2">ID</th>
      <th scope="col-2">NPM</th>
      <th scope="col-2">Nama</th>
      <th scope="col-2">Kelas</th>
      <th colspan="2">Proses</th>
    </tr>
    </thead>
			<?php
			$query = mysql_query("select * from biodata1");
			while ($data = mysql_fetch_array($query)) {
			?>
			<tr>
				<td><?php echo $data['id'];?></td>
				<td><?php echo $data['npm'];?></td>
				<td><?php echo $data['nama'];?></td>
				<td><?php echo $data['kelas'];?></td>
				<td><a href="delete.php?id=<?php echo $data['id'];?>">delete</a></td>
			</tr>
			<?php } ?>

		</table>
	</div>
</body>
</html>