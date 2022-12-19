<!DOCTYPE html>
<html>
    <head>
        <title>list Sederhana</title>
    </head>
    <body>
        <center>
            <h1>Membuat Tambah Data </h1>
            <h3>Tambah Data</h3>
        </center>
        <form action="<?php echo base_url(). 'crud/aksi'; ?>" method="post">
        <table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>komentar</td>
				<td><input type="text" name="komentar"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>