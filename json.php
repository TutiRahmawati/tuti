<?php

require ('config.php');

$sql = mysql_query("SELECT nama,latitude,longitude from pasar");

while ($row = mysql_fetch_assoc($sql)) 
$cabang[] = $row;

$json = json_encode($cabang);

echo $json;
?>