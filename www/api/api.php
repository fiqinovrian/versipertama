<?php
//memberi pengalamatan khusus untuk json
header('Content-type: application/json');

include "config.php";

//query data
$sql = "SELECT id_tempat, nm_tempat AS namatempat FROM tb_lokasi ORDER BY id_tempat ";
$result = mysql_query($sql) or die ("Query error: " . mysql_error());

//fetch dalam bentuk array
$records = array();
while($row = mysql_fetch_assoc($result)) {
	$records[] = $row;
}

//menuliskannya dalam bentuk json menggunakan fungsi json_encode
echo $_GET['jsoncallback'] . '(' . json_encode($records) . ');';
?>