<?php
include 'connect.php';
$query = mysqli_query($connect, "SELECT * FROM user");
?>
<table border="1">
	<tr>
		<th>Nama</th>
		<th>Kota</th>
		<th>Email</th>
	</tr>
	<tr>
		<?php
		while($data = mysqli_fetch_array($query)) {
		?>
		<td><?php echo $data['user_nama']; ?></td>
		<td><?php echo $data['user_kota']; ?></td>
		<td><?php echo $data['user_email']; ?></td>
	</tr>
	<?php } ?>
</table>