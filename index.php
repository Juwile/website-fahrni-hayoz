<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bedachungen und Spenglerei | Fahrni Haymoz GmbH</title>
		<meta name="description" content="Zimmerei seit 20 Jahren im Sensebezirk">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="icon" href="favicon.ico">
		<link rel="apple-touch-icon" href="img/57x57.png">
		<!-- For first-generation iPad: -->
		<link rel="apple-touch-icon" sizes="72x72" href="img/72x72.png">
		<!-- For iPhone 4 with high-resolution Retina display: -->
		<link rel="apple-touch-icon" sizes="114x114" href="img/114x114.png">
		<!-- No such device exists yet, so if this value is used, it means the sizes attribute is ignored: -->
		<link rel="apple-touch-icon" sizes="228x228" href="img/228x228.png">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="css/formate.css" type="text/css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!--[if lte IE 8]>
			<style>
				#iebox{
					display:block
					} 
				section{
				background-color:green;}
			</style>
		<![endif]-->
	</head>
	<body>
		<div id="iebox">
			Ihr Internetexplorer ist veraltet.
		</div>
		<?php
			include("inc/header.html");
		?>
		<section role="main" class="wrapper">
			<article>
				<h2>Experten rund um Ihr Haus</h2>
				<p class="lead">Die Firma Fahrni&Haymoz GmbH besteht seit über 20 Jahren und ist im Holzbau im Aussen- und Innenbereich tätig. Ebenfalls zum Betätigungsfeld gehören die Bedachungs- und Spenglerarbeiten, sowie Blitzschutz und allgemeine Abdichtungsarbeiten.
				</p>
					<div class="mainteaser mainteaser1">
						<div class="mainteasermobile">
						<a href="blitzschutz.php">
						<img src="img/blitz.png" alt="Blitz" title="Mehr erfahren über Blitzschutz" class="pic"></a>
					</div>
					<h3>Blitzschutz</h3>					
					<p class="teaserparagraph">Um Ihr Gebäude vor einem Blitzschlag zu schützen, ist eine Blitzschutzanlage eine empfehlenswerte Investition. Gerne berechnen wir Ihnen die Kosten.</p>
					<a class="button" href="blitzschutz.php">Mehr erfahren</a>
				</div>
				<div class="mainteaser mainteaser2">
					<div class="mainteasermobile">
						<a href="bedachung-spenglerei.php">
						<img src="img/spenglerei.png" alt="Spenglerei" title="Mehr erfahren über Spenglerei" class="pic">
						</a>
					</div>
					<h3>Spenglerei</h3>
					<p class="teaserparagraph">Lukarnen, Kamine, Dachfenster, Ablaufrohre, Fensterbänke, usw. Bei allen Dachdurchbrüchen, Blechverkleidungen oder Abschlüssen ist die Handfertigkeit eines Spenglers gefragt.</p>
					<a class="button" href="bedachung-spenglerei.php">Mehr erfahren</a>
				</div>
				<div class="mainteaser">
					<div class="mainteasermobile">
						<a href="innenausbau.php">
						<img src="img/innenausbau.png" alt="Innenausbau" title="Mehr erfahren über Innenausbau" class="pic"></a>
					</div>
					<h3>Innenausbau</h3>
					<p class="teaserparagraph">Für die Gestaltung und Einteilung Ihrer Wohnräume bieten wir Ihnen eine starke Partnerschaft, wo wir zu vielen der anfallenden Arbeiten Hand bieten können.</p>
					<a class="button" href="innenausbau.php">Mehr erfahren</a>
				</div>
			</article>
			<article>
				<div class="historyteaser cushycms">
					<h2>Über uns</h2>
					<img src="img/firma.jpg" alt="Über Fahrni&Haymoz" title="Fahrni&Haymoz" class="pic">
					</a>
					<h3>Seit 20 Jahren im Sensebezirk</h3>
					<p>Die Firma Fahrni&Haymoz GmbH wurde 1995 durch Ivan Haymoz und Roland Fahrni gegründet. Der erste Geschäftssitz befand sich im Elternhaus von Roland Fahrni in Galteren, wo die Räumlichkeiten, sowie einige vorhandene Maschinen der ehemaligen Zimmerei des Grossvaters von Roland, Fritz Fahrni, genutzt werden konnten.</p>
					<a class="button" href="unternehmen.php">Mehr erfahren über die Entstehung von Fahrni & Haymoz GmbH</a>
					
				</div>
			</article>
		</section>
			<?php
			include("inc/footer.html");
			?>
		<script>
			$('.handle').on('click', function(){
			$('nav ul').toggleClass('showing');
				});
		</script>
	</body>
</html>

