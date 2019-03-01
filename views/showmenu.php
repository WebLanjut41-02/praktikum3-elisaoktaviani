<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan Menu di Restoran</title>
</head>
<body>
	<form action="<?php echo base_url();?>CI2/index.php/C_menu/index">
	<table border ='1'>
		<thead>
			<td>id makanan</td>
			<td></td>>nama makanan</td>
			<td>harga</td>
			<td>Deskripsi makanan</td>
		</thead>
		<tbody>
			<?php foreach($data->result_array() AS $t):
				$id=$t['id_makanan'];
				$nama=$t['nama_makanan'];
				$harga=$t['harga_makanan'];
				$desc=$t('desc_makanan');
				?>
				<tr>
					<td><?php echo $id ?></td>
					<td><?php echo $nama ?></td>
					<td><?php echo $harga ?></td>
					<td><?php echo $desc ?></td>
					<td><input type="checkbox" name="cek"></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	<br>
	<br>
	<input type="submit" name="kirim">

</body>
</html>