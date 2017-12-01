<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--put icon in browser tab-->
		<link rel="icon" href="favicon.ico" type="image/x-icon"> 
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"
	<!--Page title-->
		<title>Contact</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../styles/style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	<!-- Navbar -->
		<div class="cg-header">
			<div class="cg-nav cg-black cg-card">
				<a class="cg-nav-item cg-button cg-padding-large cg-hide-medium cg-hide-large cg-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
				<a href="../indexcg.html" class="cg-nav-item cg-button cg-padding-large">HOME</a>
				<a href="#band" class="cg-nav-item cg-button cg-padding-large cg-hide-small">BAND</a>
				<a href="#tour" class="cg-nav-item cg-button cg-padding-large cg-hide-small">TOUR</a>
				<div class="cg-dropdown-hover cg-hide-small">
					<button class="cg-padding-large cg-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
					<div class="cg-dropdown-content cg-nav-block cg-card-4">
						<a href="#" class="cg-nav-item cg-button">Merchandise</a>
						<a href="#" class="cg-nav-item cg-button">Extras</a>
						<a href="#" class="cg-nav-item cg-button">Media</a>
					</div>
				</div>
				<a href="javascript:void(0)" class="cg-padding-large cg-hover-red cg-hide-small cg-right"><i class="fa fa-search"></i></a>
			</div>
		</div>
		<!-- Navbar on small screens -->
		<div id="smallNav" class="cg-nav-block cg-black cg-hide cg-hide-large cg-hide-medium cg-header" style="margin-top:46px">
			<a href="#band" class="cg-nav-item cg-button cg-padding-large">BAND</a>
			<a href="#tour" class="cg-nav-item cg-button cg-padding-large">TOUR</a>
			<a href="#" class="cg-nav-item cg-button cg-padding-large">MERCH</a>
		</div>
		
		<div class="contactArea">
			<h2 class="cg-wide cg-center">CONTACT</h2>
			<p class="cg-opacity cg-center"><i>Please get in touch!</i></p>
			<div class="cg-row cg-padding-32" id="cgPadding">
			  <div class="cg-col m6 cg-large cg-margin-bottom">
				<i class="fa fa-map-marker" style="width:30px"></i> Dublin,Kerry,Ireland<br>
				<i class="fa fa-phone" style="width:30px"></i> Phone: +086 3700608<br>
				<i class="fa fa-envelope" style="width:30px"> </i> Email: management@changinggears.ie<br>
			  </div>
			</div>
			<div id="inner">
				<form action="contact.php" method="post" id="contactForm">
					<input class="inputField" type="text" name="name" placeholder="Name" required title="Name needed"><br><br>
					<input class="inputField" type="email" name="email" placeholder="Email"title="email invalid" required><br><br>
					<textarea id="messageTextArea" name="message" required></textarea>
					<input id="submit" type="submit" value="Send"><br>
				</form>
				
			</div>
		</div>
		<script>
			// Used to toggle the menu on small screens when clicking on the menu button
			function myFunction() {
				var x = document.getElementById("smallNav");
				if (x.className.indexOf("cg-show") == -1) {
					x.className += " cg-show";
				} else { 
					x.className = x.className.replace(" cg-show", "");
				}
			}
		</script>
	</body>
</html>
	