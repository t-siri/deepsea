<?php
	include("dbconnect.php");
	
	$action = $_POST["action"];
	
?>	
<html>

<head>
	<title> Deep Sea Adventure </title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<script src="js/jquery.js"></script>
	<script src="js/mainNav.js"></script>
	<script src="js/scrollNav.js"></script>
	<script src="js/smoothScroll.js"></script>
	<script src="js/fade-in.js"></script>

	<div id="outer">
		<div class="close">x</div>
		<div id="output">
		</div>
	</div>

	<div class="dim">
	</div>

	<section>
		<header id="header">
			<h1> DEEP SEA ADVENTURE <h1>
		</header>

		<nav>
		<div id="navContainer">
			<ul>
				<li> <a href="#header" class="scroll">BACK TO TOP</a></li>
				<li> <a href='#' class='tabButton' data-openTab='about'>ABOUT</a></li>
				<li> <a href='#' class='tabButton' data-openTab='contact'>CONTACT US</a></li>
				<li> <a href='#' class='tabButton openhover' data-openTab='zones'>OCEANIC ZONES</a></li>
				<li> <a href='index.php' >NEW SPECIES</a></li>
			</ul>
		</div>

		<div id = "tabCont" class="tabContainer">
			<div id='about'>
				<p> Thanks for showing interests in our application. Deep Sea Adventure is an 
					interactive experience that allows the user to explore the wonders of the 
					ocean. Users are able to discover the different marine life by choosing the 
					ranges of depths at which they wish to explore. Once a range of depths has 
					been selected, five species of marine life will appear at random in that 
					particular range. Clicking on the individual species will show a brief 
					descripstion as well as an external link to Trove if the user wishes learn 
					more about them. </p>
			</div>

			<div id='contact'>
				<p>For more information or any concerns please email us at:</p>
				<p class="small"> deep_sea_adventure@gmail.com</p>
			</div>

			<div id="zones">
				<li><a href="#sunlight" class="scroll">Sunlight</a></li>
				<li> <a href='#twilight' class="scroll">Twilight</a></li>
				<li> <a href='#midnight' class="scroll">Midnight</a></li>
				<li> <a href='#abyss' class="scroll">Abyss</a></li>
				<li> <a href='#trenches' class="scroll">Trenches</a></li>
			</div>
		</div>
		</nav>

	</section>

	<section>

		<div id="intro">
			<h2> WELCOME! </h2>

			<p> Start scrolling down to dive into the sea and discover the species that live beyond 
				extreme depths. Scroll up and down to different depths and zones such as the <a href="#sunlight" class="scroll">Sunlight
				Zone</a>, <a href="#twilight" class="scroll">Twilight Zone</a>, <a href="#midnight" class="scroll">Midnight Zone</a>, <a href="#abyss" class="scroll">Abyss Zone</a>
				and <a href="#trenches" class="scroll">Trenches Zone</a>. To go straight to 
				these depths, click on the navigation bar OCEANIC ZONES. To discover a specific species, 
				click on the zone title and choose your species. Once scrolled to the zones, species of 
				marine life at random will show up according to their particular zones. To discover more 
				on a specific species, click on the image for a brief description.  </p>
		</div>

			<div class ="depthgaugeleft"> <img src="images/depthgaugeleft.png"> </div>
			<div class ="depthgaugeright"> <img src="images/depthgaugeright.png"> </div>
			<div id="sunlight">
				<h2> Sunlight Zone </h2>
				<p>Epipelagic Zone - The surface layer of the ocean is known as the epipelagic 
					zone and extends from the surface to 200 meters (656 feet). It is also known as 
					the sunlight zone because this is where most of the visible light exists. With 
					the light come heat. This heat is responsible for the wide range of temperatures 
					that occur in this zone.</p>
				<div class="data">
					<?php
						$query = "SELECT * FROM species WHERE Zone = 'sunlight' ORDER BY RAND() LIMIT 5";
						$result = $dbconn->query($query);
	
						while($r=mysqli_fetch_assoc($result)) {
							echo "<div class='species'><a href='#' class='specieslink' data-name='".$r["scientificName"]."' data-englishname='".$r["englishName"]."' data-image='images/species/".$r["Image"]."'> <img src='images/species/".$r["Image"]."' /></a></div>";
						}
					?>
				</div>
			</div>
			
			<div id="twilight">
				<h1> Twilight Zone </h2>
				<p>Known as the twilight zone, the mesopelagic zone meets the photic zone above and 
					becomes very dark as depth increases. Animals that produce bioluminescence, or light, 
					inhabit this subzone. Because nutrients are limited here, some animals rise to the 
					photic zone at night for food.</p>
				<div class="data">
					<?php
						$query = "SELECT * FROM species WHERE Zone = 'twilight' ORDER BY RAND() LIMIT 5";
						$result = $dbconn->query($query);
				
						while($r=mysqli_fetch_assoc($result)) {
							echo "<div class='species'><a href='#' class='specieslink' data-name='".$r["scientificName"]."' data-englishname='".$r["englishName"]."' data-image='images/species/".$r["Image"]."'> <img src='images/species/".$r["Image"]."' /></a></div>";
						}
					?>
				</div>
			</div>

			<div id="midnight">
				<h2> Midnight Zone </h2>
				<p>The bathyal zone or bathypelagic - from Greek bathys,(also known as midnight zone) is t
					he part of the pelagic zone that extends from a depth of 1000 to 4000 metres (3300 to 
					13000 feet) below the ocean surface. It lies between the mesopelagic above, and the 
					abyssopelagic below. The average temperature hovers at about 39&deg;F (4&deg;C). 
					Although larger by volume than the euphotic zone, the bathyal zone is less densely 
					populated. Sunlight does not reach this zone, meaning there can be no primary production. 
					It is known as the midnight zone because of this feature.</p>
				<div class="data">
					<?php
						$query = "SELECT * FROM species WHERE Zone = 'midnight' ORDER BY RAND() LIMIT 7";
						$result = $dbconn->query($query);
				
						while($r=mysqli_fetch_assoc($result)) {
							echo "<div class='species'><a href='#' class='specieslink' data-name='".$r["scientificName"]."' data-englishname='".$r["englishName"]."' data-image='images/species/".$r["Image"]."'> <img src='images/species/".$r["Image"]."' /></a></div>";
						}
					?>
				</div>
			</div>

			<div id="abyss">
				<h2> Abyss Zone </h2>
				<p>The abyssal zone is the abyssopelagic layer or pelagic zone that contains the very deep benthic 
					communities near the bottom of oceans. "Abyss" derives from the Greek word meaning bottomless. 
					At depths of 4,000 to 6,000 metres (13,123 to 19,685 feet), this zone remains in perpetual 
					darkness and never receives daylight. It is the deeper part of the midnight zone which starts 
					in the bathypelagic waters above. </p>
				<div class="data">
					<?php
						$query = "SELECT * FROM species WHERE Zone = 'abyss' ORDER BY RAND() LIMIT 7";
						$result = $dbconn->query($query);
				
						while($r=mysqli_fetch_assoc($result)) {
							echo "<div class='species'><a href='#' class='specieslink' data-name='".$r["scientificName"]."' data-englishname='".$r["englishName"]."' data-image='images/species/".$r["Image"]."'> <img src='images/species/".$r["Image"]."' /></a></div>";
						}
					?>
				</div>
			</div>

			<div id="trenches">
				<h2> Trenches Zone </h2>
				<p>The hadal zone (named after the realm of Hades, the underworld in Greek mythology), also known as the 
					hadopelagic zone and trench zone, is the delineation for the deepest trenches in the ocean. 
					This zone is found from a depth of around 6,000 metres (20,000 ft) to the bottom of the ocean. 
					The hadal zone has low population and low diversity of marine life. The hadalpelagic zone lies 
					beyond the abyssopelagic zone and extends from 6000 meters (19,686 feet) to the bottom of the 
					deepest parts of the ocean. This area is found in deep water trenches and canyons of the ocean 
					bottom. The deepest point in the ocean is located in the Mariana Trench off the coast of Japan 
					at 10,911 meters (35,797 feet) depending on the tides. </p>
				<div class="data">
					<?php
						$query = "SELECT * FROM species WHERE Zone = 'trenches' ORDER BY RAND() LIMIT 8";
						$result = $dbconn->query($query);
				
						while($r=mysqli_fetch_assoc($result)) {
							echo "<div class='species'><a href='' class='specieslink' data-name='".$r["scientificName"]."' data-englishname='".$r["englishName"]."' data-image='images/species/".$r["Image"]."'> <img name=data-image src='images/species/".$r["Image"]."' /></a></div>";
						}
					?>
				</div>
			</div>

	</section>

		<script type="text/javascript">
			var apiKey = "oshm7anhlgkrrv45";;
		
			$(document).ready(function(){
				$(".specieslink").click();
				$(".specieslink").click(function() {
				
				event.preventDefault();
					//Pop-Up box
		    		$('#output').empty();
					$("#outer").fadeIn(1000);
					$(".dim").css("display", "block");
					$('body').css("overflow", "hidden");

				    var searchTerm = $(this).attr("data-name"); 
				    console.log(searchTerm);
				    var searchZone = "article"; 
				    var sortBy = "relevance"; 
					var englishName =  $(this).attr("data-englishname");
					var speciesImg = $(this).attr("data-image");
			    	
					$("#output").append("<div class ='outputImg'><img src='"+speciesImg+"'></div><h2>" + englishName + "</h2>");
					
				    var url = "http://api.trove.nla.gov.au/result?key=" + apiKey + "&encoding=json&zone=" + searchZone + 
				    "&sortby=" + sortBy + "&q=" + searchTerm + "&s=0&n=20&include=articleText,pdf&encoding=json&callback=?";

				    console.log(url);
			    	
				    $.getJSON(url, function(data) {
						if (data.response.zone[0].records.work) {
						var found = false;
				        $.each(data.response.zone[0].records.work, function(index, value) {
				        	if(found != true && value.snippet != undefined) {
				        		found = true;
				          		$("#output").append("<h3>" + value.title + "</h3>" + "<p>" + value.snippet + "</p><p><a href='" + value.troveUrl + "'' target='_blank'>Full Article Here</a>"+"</p><hr/>");
				          	}
				          });
							if (found == false) {
								$("#output").append("NO DATA FROM TROVE FOUND");
				    		}
						} else {
							$("#output").append("NO DATA FROM TROVE FOUND");
						}
						
					});
				});

				//Pop-Up box
				$(".close").click(function() {
					$("#outer").fadeOut(300);
					$(".dim").css("display", "none");
					$('#output').empty();
					$('body').css("overflow", "scroll");
				});
			});
		</script>


	<footer> Team High Five <br> Design and Development Consultancy </footer>
	

</body>

</html>

