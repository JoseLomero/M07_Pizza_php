<!DOCTYPE html>
<html>
<head>
	<title>Calendari</title>
	<link rel="stylesheet" href="calendari.css" type="text/css">
</head>
<body>
	<h1>Calendario</h1>
	<h2>Septembre</h2>
	<table border="1">
	<?php
	$dia = 1;
	$inicio = 0;
	$weekDay = array("Dilluns", "Dimarts", "Dimecres", "Dijous", "Divendres", "Dissabte", "Diumenge");

	for ($x = 0; $x <= 5; $x++) {
		echo "<tr>\n";
		for ($y = 0; $y <= 6; $y++) {
			if ($dia <= 30) {
				if ($x == 0){
					echo "<td>".$weekDay[$y]."</td>\n";
				}

				else {
					if ($inicio == 5) {
						echo "<td>$dia</td>\n";
						$dia++;
					}

					else {
						echo "<td></td>\n";
						$inicio++;
					}
					
				}
			}

			else {
				echo "<td>$dia</td>\n";
			}
		}
		echo "</tr>\n";
		
	}
	?>  
	</table>
</body>
</html>