<!DOCTYPE html>

<html>

<body>
    <?php
    $muziek = array("Artiest: "=>"Idina Menzel", "Titel: "=>"Let it go", "Jaar van uitkomst: "=>2013, "Muzieksoort: "=>"Pop");
    echo "<ul>";
    foreach($muziek as $value){
        echo "<li>$value</li>";
    }
    echo "</ul>";

	?>
</body>

</html>
