<!DOCTYPE html>
<html>
<head>
	<title>Hy</title>
</head>
<body>

</body>
</html>
<?php
$api_key = "AIzaSyBYzmjpQYOb15ueTx3-Y2QcgI8_21Xlhr0";
class myclass {
	public $name = "masud",$food = "karim";
	function min () {
		$this->name = $name;
		$this->food = $food;
		return $this->name;
		return $this->food;
	}

};
$obj = new myclass;
echo $obj.min();
$data = json_encode($obj.min());
echo "Your json version of php is : ".$data;
echo "Yo";
?>