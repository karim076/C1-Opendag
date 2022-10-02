<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/svg.css">
	<link rel="stylesheet" type="text/css" href="css/diashow.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<title>Opendag</title>
</head>
<body>
	<header>
		<div class="navBars">
			<div>
				<ul class="menus">
					<div class="curioLogo">
						<img class="logo" src="img/logo/logo_curio.png" alt="Curio logo">
					</div>
					<div class="menuBar">
						<li><a href="#vakken" class="menuItem">vakken</a></li>
						<li><a href="#blokOvergang" class="menuItem">Blok informatie</a></li>
						<li><a href="#teachers" class="menuItem">Smoelen boek</a></li>
						<li><a href="#Carrousel" class="menuItem">Carrousel</a></li>
						<li><a href="#" class="menuItem">Faq</a></li>
					</div>
				</ul>
				<button class="hamburger">
					<i class="menuIcon material-icons">menu</i>
					<i class="closeIcon material-icons">close</i>
				</button>		
			</div>        
			<a href="#vakken" class="diffs">vakken</a>
			<a href="#blokOvergang" class="diffs">Blok informatie</a>
			<a href="#teachers" class="diffs">Smoelen boek</a>
			<a href="#Carrousel" class="diffs">Carrousel</a>
			<a href="#" class="diffs">Faq</a>
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
		<div id="teachers" class="teachers">
			<h1 >Smoelen boek</h1>
			<div class="cardGrid">
				<div class="a-box">
					<div class="img-container">
						<div class="img-inner">
							<div class="inner-skew">
								<img src="img/teacher/br10.png">
							</div>
						</div>
					</div>
					<div class="text-container">
						<h3>Roos, Bart</h3>
						<div>
							Leraar | Curriculum-coördinator | Ontwikkelaar (software én onderwijs)
						</div>
					</div>
				</div>
				<div class="a-box">
					<div class="img-container">
						<div class="img-inner">
							<div class="inner-skew">
								<img src="img/teacher/Wicher.png">
							</div>
						</div>
					</div>
					<div class="text-container">
						<h3>Hulzebosch, Wicher</h3>
						<div>
							Docent Software Developer bij Curio(Native)
						</div>
					</div>
				</div>
				<div class="a-box">
					<div class="img-container">
						<div class="img-inner">
							<div class="inner-skew">
								<img src="img/teacher/eb89.jpg">
							</div>
						</div>
					</div>
					<div class="text-container">
						<h3>Boekhoudt, Elton</h3>
						<div>
							Docent Software Developer bij Curio(Web)
						</div>
					</div>
				</div>
				<div class="a-box">
					<div class="img-container">
						<div class="img-inner">
							<div class="inner-skew">
								<img src="img/teacher/michel.png">
							</div>
						</div>
					</div>
					<div class="text-container">
						<h3>Meeuwesen, Michel</h3>
						<div>
							Docent Software Developer bij Curio(Allround)
						</div>
					</div>
				</div>
				<div class="a-box">
					<div class="img-container">
						<div class="img-inner">
							<div class="inner-skew">
								<img src="img/teacher/steven.png">
							</div>
						</div>
					</div>
					<div class="text-container">
						<h3>Van Rosendaal, Steven</h3>
						<div>
							Docent Software Developer bij Curio(Web)
						</div>
					</div>
				</div>
				<div class="a-box">
					<div class="img-container">
						<div class="img-inner">
							<div class="inner-skew">
								<img src="img/teacher/corne.png">
							</div>
						</div>
					</div>
					<div class="text-container">
						<h3>Corne</h3>
						<div>
							Docent Software Developer bij Curio(Web)
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="Carrousel" class="carousel"> <!-- Carrousel van het gebouw -->
			<h1>Carrousel(diashow)</h1>
			<ul class="slides">
				<input type="radio" name="radio-buttons" id="img-1" checked />
				<li class="slide-container">
					<div class="slide-image">
						<img src="img/building/building.jpg">
					</div>
					<div class="carousel-controls">
						<!-- Dit is de controle dus -> image 1 vorige slide is de laatste slide en de volgende slide is 2 -->
						<!-- Dus prev-slide is de image - 1 en next-slide is image + 1 en voor de eerste en de laatste geld dit niet -->
						<label for="img-5" class="prev-slide">
							<span>&lsaquo;</span>
						</label>
						<label for="img-2" class="next-slide">
							<span>&rsaquo;</span>
						</label>
					</div>
				</li>
				<input type="radio" name="radio-buttons" id="img-2" />
				<li class="slide-container">
					<div class="slide-image">
						<img src="img/building/building_1.jpg">
					</div>
					<div class="carousel-controls">
						<label for="img-1" class="prev-slide">
							<span>&lsaquo;</span>
						</label>
						<label for="img-3" class="next-slide">
							<span>&rsaquo;</span>
						</label>
					</div>
				</li>
				<input type="radio" name="radio-buttons" id="img-3" />
				<li class="slide-container">
					<div class="slide-image">
						<img src="img/building/building_2.jpg">
					</div>
					<div class="carousel-controls">
						<label for="img-2" class="prev-slide">
							<span>&lsaquo;</span>
						</label>
						<label for="img-4" class="next-slide">
							<span>&rsaquo;</span>
						</label>
					</li>
					<input type="radio" name="radio-buttons" id="img-4" />
					<li class="slide-container">
						<div class="slide-image">
							<img src="img/building/building_3.jpg">
						</div>
						<div class="carousel-controls">
							<label for="img-3" class="prev-slide">
								<span>&lsaquo;</span>
							</label>
							<label for="img-5" class="next-slide">
								<span>&rsaquo;</span>
							</label>
						</div>
					</li>
					<input type="radio" name="radio-buttons" id="img-5" />
					<li class="slide-container">
						<div class="slide-image">
							<img src="img/building/building_4.jpg">
						</div>
						<div class="carousel-controls">
							<label for="img-4" class="prev-slide">
								<span>&lsaquo;</span>
							</label>
							<label for="img-1" class="next-slide">
								<span>&rsaquo;</span>
							</label>
						</div>
					</li>
					<div class="carousel-dots">
						<!-- Dit zijn de bolletjes je kan zien bij welke foto je bent -->
						<label for="img-1" class="carousel-dot" id="img-dot-1"></label>
						<label for="img-2" class="carousel-dot" id="img-dot-2"></label>
						<label for="img-3" class="carousel-dot" id="img-dot-3"></label>
						<label for="img-4" class="carousel-dot" id="img-dot-4"></label>
						<label for="img-5" class="carousel-dot" id="img-dot-5"></label>
					</div>
				</ul>
			</div>
		</div>
	</main>

	<footer>

	</footer>
</body>
</html>
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
		if (menu.classList.contains("showMenu")) 
		{
			menu.classList.remove("showMenu");
			closeIcon.style.display = "none";
			menuIcon.style.display = "block";
			hamburger.style.background = "transparent";
		} 
		else 
		{
			menu.classList.add("showMenu");
			hamburger.style.background = "white";
			closeIcon.style.display = "block";
			menuIcon.style.display = "none";
		}
			// event listener wordt dan toggleMenu geroepen om uit te voeren
	hamburger.addEventListener("click", toggleMenu);

	menuItems.forEach( 
		function(menuItem) { 
			menuItem.addEventListener("click", toggleMenu);
	    })
</script>
