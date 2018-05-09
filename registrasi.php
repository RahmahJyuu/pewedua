<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>

	<?php 
	$kabupaten= [
					[
					"id"=>1,
					"nama_kab"=>"Pontianak"
					],
					[
					"id"=>2,
					"nama_kab"=>"Mempawah"
					],
					[
					"id"=>3,
					"nama_kab"=>"Sintang"
					],

				];
 ?>

<h1>Registrasi</h1>
	<table>
	<form name="registrasi" method="POST" action="proses.php">
		<tr>
			<td><label>Username</label></td>
			<td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td>:</td>
			<td><input type="password" name="password"></td> 
		</tr>
		<tr>
			<td><label>Nama</label></td>
			<td>:</td>
			<td><input type="text" name="nama"></td> 
		</tr>
		<tr>	
			<td><label>No.HP</label></td>
			<td>:</td>
			<td><input type="numbers" name="no_hp"></td> 
		</tr>
		<tr>	
			<td><label>Alamat</label></td>
			<td>:</td>
			<td><textarea name="alamat"></textarea></td> 
		</tr>
		<tr>	
			<td><label>Kabupaten</label></td>
			<td>:</td>
			<td><select name="kabupaten">
					<?php foreach($kabupaten as $kab): ?>
					<option value="<?php echo $kab['id'] ?>"><?php echo $kab['nama_kab']; ?></option>
					<?php endforeach;?>
				</select></td> 
		</tr>
		<tr>	
			<td><label>Jenis Kelamin</label></td>
			<td>:</td>
			<td><input type="radio" name="jeniskelamin" value="pria">Pria </td>
			<td><input type="radio" name="jeniskelamin" value="wanita">Wanita </td>
		</tr>
		<tr>	
			<td><label>Prodi Pilihan</label></td>
			<td>:</td>
			<td><input type="checkbox" name="prodi" value="pil_sisfo">Sistem Informasi</td>
			<td><input type="checkbox" name="prodi" value="pil_siskom">Sistem Komputer</td> 
			<td><input type="checkbox" name="prodi" value="pil_informatika">Informatika</td> 
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>
		
	</form>
	</table>
</body>
</html>