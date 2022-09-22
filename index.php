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
				<p>Kom is een kijkje nemen&#128512;</p>
			</div>
		</div>
		<div class="opendagBalk">
			<div class="slices">	
				<div class="opendag">
					<h3>Opendag</h3>
				</div>
				<div>-------------------------</div>
				<div><h3>19:30 15-9-2022</h3></div>
			</div>
		</div>
		<div class="vakken">
			<div class="vakWidget generiek">
				<h2>Generiek</h2>
				<p>-Nederlands<br>
					-Engels<br>
					-Rekenen
				</p>
			</div>
			<div class="vakWidget generiek">
				<h2>Pra</h2>
				<p>Bij pra krijg je een grote project met een groep, het project kan web of native onderwerp hebben.</p>
			</div>
			<div class="vakWidget generiek">
				<h2>Web</h2>
				<p>Bij web ga je website's maken van frontend tot backend.</p>
			</div>
			<div class="vakWidget generiek">
				<h2>Native</h2>
				<p>Bij Native ga je het software crëeeren.</p>
			</div>
			<div class="vakWidget generiek">
				<h2>Pro</h2>
				<p>Bij Praktijkondersteuning leer je het voorbereiden van het maken van website en software.</p>
			</div>
			<div class="vakWidget generiek">
				<h2>Codelab</h2>
				<p>Bij codelab krijg je een uurtje de tijd of je huiswerk te maken, je kunt dan de leraar vragen stellen als je vast zit.</p>
			</div>
		</div>	
	</main>
	<footer>
		
	</footer>
</body>
</html>