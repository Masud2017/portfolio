<?php 
$url = "data.json";
$file_get = file_get_contents($url);
$data = json_decode($file_get,true);
echo $data->data_1[1]['path'];
?>