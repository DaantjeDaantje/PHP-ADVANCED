<!DOCTYPE html>

<html>

<body>
	<?php
        $Piet = array("voornaam" => "Piet", "achternaam" => "Jansen", "leeftijd" => 19, "klas" => "9A");
        $Mohammed = array("voornaam" => "Mohammed", "achternaam" => "Ali", "leeftijd" => 17, "klas" => "9G");
        $Els = array("voornaam" => "Els", "achternaam" => "de Jong", "leeftijd" => 20, "klas" => "9B");
        echo "De leerling " . $Mohammed['voornaam'] . " " . $Mohammed['achternaam'] . " is " . $Mohammed['leeftijd'] . " oud en zit in " . $Mohammed['klas'];
    ?>
</body>

</html>
