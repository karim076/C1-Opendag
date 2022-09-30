<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/svg.css">
	<link rel="stylesheet" type="text/css" href="css/diashow.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Opendag</title>
</head>
<body>
	<header>
		<div class="navBars">
			<div>
				<ul class="menus">
					<li><a class="menuItem" href="#">Home</a></li>
					<li><a class="menuItem" href="#">Profile</a></li>
					<li><a class="menuItem" href="#">About</a></li>
					<li><a class="menuItem" href="#">Contacts</a></li>
				</ul>
				<button class="hamburger">
					<i class="menuIcon material-icons">menu</i>
					<i class="closeIcon material-icons">close</i>
				</button>		
			</div>            
			<a href="#vakken" class="diff">vakken</a>
			<a href="#blokOvergang" class="diff">Blok informatie</a>
			<a href="#" class="diff">Leeraren</a>
			<a href="#" class="diff">contact</a>
		</div>
		
		</header>
		<main>
			<div class="maxWidth"><!-- Open dag tijd blok -->
				<div class="image">
					<div class="space">
						<h3>Welkom bij de opendag!</h3>
						<p>Kom is een kijkje nemen&#128512;</p>
					</div>
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
			<div class="vakkenText" id="vakken"><h1>→Vakken←</h1></div> <!-- -->
			<div class="vakken">
				<div class="vakWidget">
					<h2>Generiek</h2>
					<p>━━━━━━━━━━━━━━━━━━━━━━━━━━━━</p>
					<p>-Nederlands<br>
						-Engels<br>
						-Rekenen
					</p>
				</div>
				<div class="vakWidget">
					<h2>Pra</h2>
					<p>━━━━━━━━━━━━━━━━━━━━━━━━━━━━</p>
					<p>Bij pra krijg je een grote project met een groep, het 
					project kan web of native onderwerp hebben.</p>
				</div>
				<div class="vakWidget">
					<h2>Web</h2>
					<p>━━━━━━━━━━━━━━━━━━━━━━━━━━━━</p>
					<p>Bij web ga je website's maken van frontend tot backend.</p>
				</div>
				<div class="vakWidget">
					<h2>Native</h2>
					<p>━━━━━━━━━━━━━━━━━━━━━━━━━━━━</p>
					<p>Bij Native ga je het software crëeeren.</p>
				</div>
				<div class="vakWidget">
					<h2>Pro</h2>
					<p>━━━━━━━━━━━━━━━━━━━━━━━━━━━━</p>
					<p>Bij Praktijkondersteuning leer je het voorbereiden van het maken van website en software.</p>
				</div>
				<div class="vakWidget">
					<h2>Codelab</h2>
					<p>━━━━━━━━━━━━━━━━━━━━━━━━━━━━</p>
					<p>Bij codelab krijg je een uurtje de tijd of je huiswerk te maken, je kunt dan de leraar vragen stellen als je vast zit.</p>
				</div>
			</div>
			<div id="blokOvergang" class="blok">
				<div>
					<h1 class="center">Blok overgang</h1>
				</div>
				<div class="blokImages">
					<div class="blokOvergang"></div>
					<div class="detailOvergang"></div>
				</div>
			</div>
			<div class="Carroussel">
				<div class="a-box">
				  <div class="img-container">
				    <div class="img-inner">
				      <div class="inner-skew">
				        <img src="img/teacher/br10.png">
				      </div>
				    </div>
				  </div>
				  <div class="text-container">
				    <h3>Bart Roos</h3>
				    <div>
				      Leraar | Curriculum-coördinator | Ontwikkelaar (software én onderwijs)
				  	</div>
				  </div>
				</div>
			</div>
		</main>
		
		<footer>

		</footer>
		<script type="text/javascript">
			// Variablen aanmaken van klassen
			const menu = document.querySelector(".menus");
			const menuItems = document.querySelectorAll(".menuItem");
			const hamburger= document.querySelector(".hamburger");
			const closeIcon= document.querySelector(".closeIcon");
			const menuIcon = document.querySelector(".menuIcon");
			//Nu begint eerst het hamburger menu in plaats het kruis
			menuIcon.style.display = "block";
			closeIcon.style.display = "none";
			// functie bij het aanklikken wordt dit aangeroepen
			function toggleMenu() {
				if (menu.classList.contains("showMenu")) {
					menu.classList.remove("showMenu");
					closeIcon.style.display = "none";
					menuIcon.style.display = "block";
					hamburger.style.background = "transparent";
				} else {
					menu.classList.add("showMenu");
					hamburger.style.background = "white";
					closeIcon.style.display = "block";
					menuIcon.style.display = "none";
				}
			}
			// event listener wordt dan toggleMenu geroepen om uit te voeren
			hamburger.addEventListener("click", toggleMenu);

			menuItems.forEach( 
				function(menuItem) { 
					menuItem.addEventListener("click", toggleMenu);
				})
			</script>
	</body>
	</html>
