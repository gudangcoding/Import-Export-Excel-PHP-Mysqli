<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Import Excel</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<br/>
	<div class="container">
		<h3 align="center">Import Excel ke Database</h3>
		<form class="form-horizontal" action="import.php" method="post" enctype="multipart/form-data">
			<label for="import">Import Menggunakan Excel</label>
			<input type="file" name="import" id="import"><br/>
			<input type="submit" name="import" value="Import" class="btn btn-sm btn-primary"><br/>
			<input type="checkbox" name="drop" value="1"> Kosongkan data
		</form>
		<br/>
		<br/>
		<table class="table table-bordered table-respinsive">
			<thead>
				<tr class="info">
					<th>Nama</th>
					<th>Kota</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query = mysqli_query($connect, "SELECT * FROM user");
				while($row = mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $row['user_nama']; ?></td>
					<td><?php echo $row['user_kota']; ?></td>
					<td><?php echo $row['user_email']; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<br/>
		<a href="export.php" class="btn btn-success">Export Excel</a>
	</div>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>