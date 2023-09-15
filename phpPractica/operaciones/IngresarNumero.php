<?php

session_start();
$numeroEnviado = $_POST["number"] + 22;


echo "<ul class=\"collection\">";


$varbool = 1;

for ($i = $_POST["number"]; $i < $numeroEnviado; $i++) {

    if (($varbool == 1) && !in_array($i, [2, 5, 9, 11])) {
        echo "<li class=\"collection-item\">" . $i . "</li>";
        $varbool = 0;
    } elseif (($varbool == 1) && in_array($i, [2, 5, 9, 11])) {
        $varbool = 0;
    } elseif (($varbool == 0) && in_array($i, [2, 5, 9, 11])) {
        $varbool = 1;
    } else {
        $varbool = 1;
    }
}
echo "</ul>";

?>