<!DOCTYPE html>
<html>
<head>
	<title>framework list</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter</h1></center>
	<center><?php echo anchor('crud/input','Tambah Data'); ?></center>
	<table style="margin:50px auto;" border="5">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Komentar</th>
			<th>Pekerjaan</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->komentar ?></td>
			<td><?php echo $u->pekerjaan ?></td>
			<td>
			<?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
            <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>