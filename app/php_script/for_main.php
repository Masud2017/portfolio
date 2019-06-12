<!DOCTYPE html>
<html>
<head>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<script src = "main.js"></script>
<script src = "jqery.js"></script>
	<title></title>
	
	
	<script>
/*$(document).ready(function(){
$("#hide").click(function(){
$("#text").hide(1000);
});
$("#show").click(function(){
$("#text").show(1000);
});
});
*/
//making a program for animate the animate id div

$("btn-java").click(function(){
  $("#animate").animate({
    left: '250px',
    opacity: '0.5',
    height: '150px',
    width: '150px'
  });
});  
	</script>
</head>
<body>
<div class = "container"><!--container(main) started-->
<div style = "border-left:10px solid red;border-right:10px solid red;padding:5px; color:white;background-color:black">
<h1 class = "text-center">Ajax and json integration</h1>
</div>
<button class = "btn btn-success mt-sm-4" onclick = "all_ev()">click here to see</button>
<div id = "demo"></div>
<div id = "youtube"></div>
<div id = "text">Hmm miya khalifa</div>
<button id = "hide" class ="btn btn-success">Click here to hide</button>
<button id = "show" class ="btn btn-success">Click here to show</button>

<div id = "animate" class ="mt-sm-4" style = "background-color:green;height:100px;width:100px">
	
</div>
<div>
<i class = "glyphicon glyphicon-envelope">
<button id = "btn-java" class = "btn btn-success mt-sm-4">Animate</button>
</div>

</div><!--this is main container never write code outside of that shity div-->
</body>
</html>