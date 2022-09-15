<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Opendag</title>
</head>
<body>
	<header>
		<div class="navbar">
			<div>
				<ul class="menu">
				    <li><a class="menuItem" href="#">Home</a></li>
				    <li><a class="menuItem" href="#">Profile</a></li>
				    <li><a class="menuItem" href="#">About</a></li>
				    <li><a class="menuItem" href="#">Contacts</a></li>
			  	</ul>
			  	<button class="hamburger">
				    <!-- material icons https://material.io/resources/icons/ -->
				    <i class="menuIcon material-icons">menu</i>
				    <i class="closeIcon material-icons">close</i>
			  	</button>		
			</div>            
        	<a href="#" class="diff">about</a>
		    <a href="#" class="diff">blogs</a>
		    <a href="#" class="diff">portfolio</a>
		    <a href="#" class="diff">contact</a>
		</div>
		<script type="text/javascript">
			const menu = document.querySelector(".menu");
			const menuItems = document.querySelectorAll(".menuItem");
			const hamburger= document.querySelector(".hamburger");
			const closeIcon= document.querySelector(".closeIcon");
			const menuIcon = document.querySelector(".menuIcon");

			function toggleMenu() {
			  if (menu.classList.contains("showMenu")) {
			    menu.classList.remove("showMenu");
			    closeIcon.style.display = "none";
			    menuIcon.style.display = "block";
			  } else {
			    menu.classList.add("showMenu");
			    closeIcon.style.display = "block";
			    menuIcon.style.display = "none";
			  }
			}

			hamburger.addEventListener("click", toggleMenu);

			menuItems.forEach( 
			  function(menuItem) { 
			    menuItem.addEventListener("click", toggleMenu);
  			})
		</script>
	</header>
	<main>
		<div class="image">
			<div class="space">
				<h3>Welkom bij de opendag!</h3>
			</div>
		</div>
	</main>
	<footer>
		
	</footer>
</body>
</html>