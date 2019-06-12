<!DOCTYPE html>
<html lang = "EN-US">
<head>
    <script src="https://apis.google.com/js/api.js"></script>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>

<!--meta section started-->
<meta charset="utf-8">
<meta name = "developer" content = "Md.Masud karim">
<meta name = "keyword" content = "Masud karim, Full stack developer">
<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
<!--meta section ended-->

		<title>Softpedia | Home page</title>
	
<!--user defined classes (css and scripts stuff -->

	<link rel = "stylesheet" type = "text/css" href = "style/style.css">
	<script src = "app/index.js"></script>
	<?php /*<style>
		@media (min-width = 250px) {

			background-color:cyan;
			background-repeat:no-repeat;
		}
</style> */?>
</head>
<body>
	<div class ="container-fluid fixed-top">
<ul class ="nav mt-sm-2 nav-tabs">
	<a href="index.php" class ="navbar-brand"><img src="https://cdn.worldvectorlogo.com/logos/soft.svg" width = "50px" height = "50px" alt = "Logo"></a>
	
	<li class = "nav-item ml-auto mr-sm-4"><a   href="#home" class = "text-danger nav-link">HOME</a></li>
	<li class = "nav-item mr-sm-4 "><a href="#about_me"  class = "text-secondary nav-link">ABOUT ME</a></li>
	<li class = "nav-item mr-sm-4"><a href="#portfolio"  class = "text-secondary nav-link">PORTFOLIO</a></li>
	<li class = "nav-item mr-sm-4"><a   href="#skill" class = "text-secondary nav-link">SKILLS</a></li>
	<li class = "nav-item mr-sm-4"><a href="#contact" class = "text-secondary nav-link">CONTACT</a></li>
	<form class ="form-inline">
		<div class = "form-group" action = "search.php" enctype = "multipart/form-data" method = "get">
			<input class = "form-control" type = "text" placeholder = "search" name = "search" class = "mr-sm-2" id = "search">
		</div>
		<button type = "submit" class =" btn btn-success">search</button>
		
	</form>
	</ul>
	
</div>
<br><br><br><br><br><br><br><br>

<!--Body section-->
<div class = "container mt-md-4">
<!--img and typer.js section start -->
	<img src="images/profile.jpg" class = "rounded-circle mx-auto d-block" width = "250px" height = "250px">
	<div class ="text-center">
		<h4>Md.Masud karim</h4>
	<h1 class ="mt-lg-4">I am a
  <span class="typer" id="main" data-words="full stack web developer." data-delay="100" data-deleteDelay="1000"></span>
  <span class="cursor" data-owner="main"></span>
</h1>
<p><strong>Always trying to make something better</strong></p></div>
<!--img and typer.js section ended -->

	
<!-- about me section started -->

	<div class = "text-center tab-pane active" name = "about me">
		<h4 id = "about_me" class ="text-secondary">About me</h4>
		I am masud karim. I am a full stack web developer. <br><br><br>

		<div class = "text-center"><button id = "btn-java" target="_blank" onclick = "readmore()" class = "btn btn-outline-secondary">Read more</button></div>
	</div>
<!--readonly collapse section started-->
<div  id = "readmore">
	<!--not need to write something here cause already made a software for do that shit-->
</div>
<!--readonly collapse section ended-->

<!-- about me section ended -->

<!--Youtube section started-->
<br><br><br><br>
<div class ="row">
	<div class = "col-sm-4 text-center border">
		<h3 class = "text-secondary">Watch my youtube videos <sup><span class = "badge badge-danger">New</span></sup></h3><hr>
		<caption>This would be a dynamic version direct from youutube api</caption>
		<p class = "mt-sm-2"><strong><accr title = "Video title">Title: </accr></strong>How to use proxy in kali linux.<br>
		<strong>Creator: </strong>Md.Masud karim<br>
		<strong>Platform: </strong>Youtube<br>
		<strong>Date: <?php echo date('Y'); ?> </strong><br>
		<strong>Check out my channel: </strong><a href="https://www.youtube.com/watch?v=3C3bswm3Qek&t=12s" target = "_blank" class ="btn btn-danger mt-sm-2">Click here to see</a>
		</p>
	</div>
	<div class ="col-sm-7 border ml-sm-2">
		<iframe class = "container-fluid" width="550" height="315" src="https://www.youtube.com/embed/3C3bswm3Qek" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>
<!--Youtube section ended-->


<!--portfolio section started --><br><br><br>
	<div name = "portfolio">
		<h4 id = "portfolio" class = " text-secondary text-center mt-sm-4">Portfolio</h4>
<div class = "row">
	<div class = "col-sm-4">
		<h4 class ="text-center">Content</h4>
		This document is not for the beginer.But for the advance one 
		 <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">		
	</div>
	<div class = "col-sm-4">
		<h4 class ="text-center">Content</h4>
		This document is not for the beginer.But for the advance one 		
		 <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
	</div>
	<div class = "col-sm-4">
	<h4 class ="text-center">Content</h4>
		This document is not for the beginer.But for the advance one 		
		 <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">

	</div>
</div>
<!--coor-->


<div class = "row">
	<div class = "col-sm-4">
		<h4 class ="text-center">Content</h4>
		This document is not for the beginer.But for the advance one 	
		 <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">	
	</div>
	<div class = "col-sm-4">
		<h4 class ="text-center">Content</h4>
		This document is not for the beginer.But for the advance one 		
		 <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
	</div>
	<div class = "col-sm-4">
	<h4 class ="text-center">Content</h4>
		This document is not for the beginer.But for the advance one 		
		 <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">

	</div>
</div>
<!--coor--><br><br>
<h3 class ="text-center text-secondary mt-sm-4">Check-out some oof my application:</h3>
<!--section of my applicatio portfolios-->
<div class ="row " name = "application-portfolio">
<div class = "col-sm-4">
	<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
</div>
	<div class = "col-sm-4">
	<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
</div><div class = "col-sm-4">
	<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
</div>
</div>
<!--end of section of my applicatio portfolios-->
</div>
<!--Portfolio section is ended -->

<!--Skills section started--><br><br><br>
<div name = "skill">
	<h4 id = "skill" class = "text-center text-secondary">My skills</h4>
	<div class = "row">
		<div class = "col-sm-4">
			<div class = "text-center">
			<h4 class = "text-secondary">Technologies</h4>
			<ul type = "none"> 
				<li>Html5</li>
				<li>Css</li>
				<li>Boostrap</li>
				<li>Javascript</li>
				<li>Jquery</li>
				<li>PHP</li>
				<li>Sql(my sql)</li>

			</ul>
			</div>
		</div>

		<div class = "col-sm-4">
			<div class ="text-center">
				<h4 class = "text-secondary">Ideis</h4>
				<ul type = "none">
					<li>Sublime</li>
					<li>Vs code</li>
					<li>Vim</li>
					<li>Gvim</li>
					<li>Code blocks</li>
					<li>Miscrosoft visual studio</li>
					<li>Microsoft word</li>
				</ul>
			</div>
			
		</div>

		<div class = "col-sm-4">
			<div class = "text-center">
				<h4 class = "text-secondary">Repositories</h4>
				<ul type = "none">
					<li>Github</li>
					<li>Git</li>
					<li>Bitbucket</li>
					<li>Correl</li>
					<li>Sitebucket</li>
					<li>Hacker rank</li>
					<li>site map</li>
				</ul>
				
			</div>
			
		</div>
		
	</div>
</div>
<!--Skills section ended-->

<!--contact section started --><br><br><br>
<div name = "contact">
	<h4 class = "text-center text-secondary" id = "contact">Contact me</h4>
<form action = "mail.php" method = "post" enctype="multipart/form-data" class = "border p-sm-2">
	<div class = "form-group">
		<label for = "name">Name:</label>
		<input type = "text" name = "name" id = "name" placeholder="Please type your name" class = "form-control" required>
	</div>
	<div class = "form-group">
		<label for = "email">Email:</label>
		<input type="email" name="email" placeholder="Please enter your email address" id = "email" class = "form-control" required>
	</div>
	<div class = "form-group">
		<label for = "subject">Subject</label>
		<input type="text" placeholder="Please enter your message subject" name="subject" class ="form-control" id = "subject" required>
	</div>
	<div class = "form-group">
		<label for = "msg">Type your message:</label>
		<textarea row = "10" class = "form-control" name = "msg" placeholder = "Please type your message" required></textarea>
	</div>
	<button type = "submit" class ="btn btn-success">Send</button>
</form>
	
</div>
<!--contact section ended -->	
</div>
<!--Body section ended-->

<!-- footer part-->
<footer class = "mt-sm-4 page-footer pt-4 border border-3">
	<div class ="container">
	<div class = "row">
		<div class = "col-sm-4">
			<a href="index.php">
			<img src="https://cdn.worldvectorlogo.com/logos/soft.svg" width = "200px" height = "200px"></a>
		</div>
		<div class ="col-sm-8">
			Computer gaming wonder land
		</div>
	</div>
</div>
<div class ="text-center"><strong>This website is created by Md.Masud.<br>&copy copyrighed by creative common license<br><a  target = "_blank" href = "https://maxpwer.000webhostapp.com">My portfolio</a></strong></div>
</footer>
<!--footer section ended-->	


<!-- practicing javascript with advance version-->
</body>
</html>

