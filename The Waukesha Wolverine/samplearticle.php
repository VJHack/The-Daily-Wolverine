<!doctype html>

<html>
	<head>
		<title> The Daily Wolverine </title>
		<link type="text/css" rel="stylesheet" href= "style.css"/>
	</head>
	<body>
		<div id = "topbar">
	<div class = "push">
			<a href="index.html" style="text-decorations:none">Login </a>
	</div> 
	</div>
		<div id = "wrapper">
			<div id = "header">
				<div id="logo"> The Daily Wolverine </div>
			</div>
			<div id = "categories" align="center">
					<div class="btn-group-bottom">
				<a href="index.html"> <button class="button1">HOME</button></a>
				<a href="studentlife.html"> <button class="button1">STUDENT LIFE</button></a>
				<a href="sports.html"> <button class="button1">SPORTS</button></a>
				<a href="clubs.html"> <button class="button1">CLUBS</button></a>
				<a href="editorials.html"> <button class="button1">EDITORIALS</button></a>
				<a href="memes.html"> <button class="button1">MEMES</button></a>
				<a href="ourteam.html"> <button class="button1">CONTACT US</button></a>
				</div>
			</div>
			<div id = "content">
				<div class = "articlepost">
					<h1> Article Title</h1>
					<div><p><?php include('myFile.txt'); ?></p></div>
					<script>
					var txt;
					function preload(){
						txt = loadStrings("samplearticle.txt");
					}
					function setup(){
						noCanvas();
						console.log(txt);
						createP(join(txt,"</br>"));
					}
					</script>
				
				</div>
					
			</div>
		</div>
		
	</body>
</html>
		
	