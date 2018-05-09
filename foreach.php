<?php
//array
$nama = array("Andri","Joko","Sukma","Rina","Sari");
for ($i=0; $i <5; $i++)
{
echo "$nama[$i]";
echo "<br />";
}

//foreach
<?php
$nama = array("Andri","Joko","Sukma","Rina","Sari");
foreach ($nama as $nm)
{
echo "$nm";
echo "<br />";
}


	foreach ($prodi as $prd) :
		echo $prd['kaprodi'];
	endforeach;
?>