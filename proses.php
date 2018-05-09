<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Berhasil</title>
</head>
<body>
	<h2>Selamat!</h2>
	<p>Anda telah berhasil registrasi kedalam sistem kami, dengan identitas sebagai berikut:
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>
			<?php 
				echo $_POST['nama'];
			 ?>
			 </td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>
			<?php 
				echo $_POST['username'];
			 ?>
			 </td>
		</tr>
		<tr>
			<td>No.HP</td>
			<td>:</td>
			<td>
			<?php 
				echo $_POST['no_hp'];
			 ?>
			 </td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
			<?php 
				echo $_POST['alamat'];
			 ?>
			 </td>
		</tr>
		<tr>
			<td>Kabupaten</td>
			<td>:</td>
			<td>
			<?php 
				echo $_POST['kabupaten'];
			 ?>
			 </td>
		</tr>
		<tr>
			<td>Pilihan Prodi</td>
			<td>:</td>
			<td>
			<?php 
				echo $_POST['prodi'];
			 ?>
			 </td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
			<?php 
				echo $_POST['jeniskelamin'];
			 ?>
			 </td>
		</tr>


	</table>
</body>
</html>

<!-- <?php 

	echo "Selamat! Anda telah terdaftar dengan identitas sebagai berikut:";
	echo "<br>";
	echo "Nama: "; echo $_POST['nama'];
	echo "<br>";
	echo "Username: "; echo $_POST['username'];
	echo "<br>";
	echo "No.HP: "; echo $_POST['no_hp'];
	echo "<br>";
	echo "Alamat: "; echo $_POST['alamat'];

 ?> -->