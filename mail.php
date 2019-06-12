<?php
/*
this program is made by Md.Masud karim

*/

$to = "msmasud578@gmail.com";
$subject = $_POST['subject'];
$message = $_POST['msg'];
echo "<head><!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">

<!-- jQuery library -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js\"></script>

<!-- Popper JS -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>

<!-- Latest compiled JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script></head>";

echo "<div class = \"container\">".$message."<br>"."</div> <hr>";
$header = "From: ".$_POST['name'].$_POST['email'];
$send_msg = mail($to,$subject,$message,$header);
if($send_msg == true) {

	echo "<title>Email status</title>
	<div class = \"alert container alert-success fade show  alert-dismissible\">
	<strong>Email sended successfully:</strong>
		You did it in wrong way.
		<button type = \"button\" class = \"close\" data-dismiss = \"alert\" ><span style = \"background-color: green;padding:10px;color:white\">colse</span></button>
		</div>
	";

}	else {

		echo "<title>Email status</title>
		<div class = \"alert container alert-danger fade show  alert-dismissible\">
		<strong>Email send failed</strong>
			You did it in wrong way.
			<button type = \"button\" class = \"close\" data-dismiss = \"alert\" ><span style = \"background-color: green;padding:10px;color:white\">colse</span></button>
			</div>
		";
}

?>
