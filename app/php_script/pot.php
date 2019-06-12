<?php
$hello = "Hello world";
echo $hello;
$json = file_get_contents('data.json');
//include("class_lib.php");
//$obj = new json_data;
//$obj->name = "Masud";
//$obj->species = "Human";
//$data = json_encode($obj);
//echo $data;
$obj1 = json_decode($json,true);
echo $obj1["name"];
?>
