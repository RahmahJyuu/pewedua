<!DOCTYPE html>
<html>
<head>
	<title>Tabel1</title>
</head>
<body>
<h1>Ini Latihan Tabel</h1>
<table border='1'>
	<tr>
		<td>ID</td>
		<td>Nama Prodi</td>
		<td>Kuota</td>
		<td>Kaprodi</td>
	</tr>
 
<?php 
for ($i=1; $i<100; $i++):
?>
	<tr>
		<td><?php echo $i; ?> </td>
		<td>Sisfo</td>
		<td><?php echo $i*3; ?></td>
		<td>Ilham</td>
	</tr>

<?php
endfor;
?>
</table>
</body>
</html>



