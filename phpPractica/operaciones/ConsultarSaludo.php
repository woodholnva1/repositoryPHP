<?php

require_once '../model/modelPaises.php';


$valorPais = $_POST["paisValue"];

$venezuela = new pais("Venezuela", array("Buenos dias", "Buenas noches", "Buenas Tardes"), "America/Caracas", "./assets/img/venezuela.png");
$brasil = new pais("Brasil", array("Bom Dia", "Boa noite", "Boa tarde"), "America/Sao_Paulo", "./assets/img/brasil.png");
$francia = new pais("Francia", array("Bonjour", "Bonne nuit", "Bonsoir"), "Europe/Paris", "./assets/img/france.png");
$paises = array($venezuela, $brasil, $francia);
$flag = 0;

foreach ($paises as $pais) {
    if ($valorPais == $pais->getNombre()) {
        echo "<h5> " . $pais->getNombre() . "<img src=\"" . $pais->getImage() . "\"/ style=\"width: 60px; padding-left:1%\"></h5> ";
        
        $fecha_actual = new DateTime("now", new DateTimeZone($pais->getZona_hr()));
        $hora_actual = intval($fecha_actual->format('H'));

        if ($hora_actual >= 12 && $hora_actual < 20) {
            printsl($pais->getSaludo()[2], $fecha_actual->format('h:i a'));
        } elseif ($hora_actual >= 20 || $hora_actual <= 23) {
            printsl($pais->getSaludo()[1], $fecha_actual->format('h:i a'));
        } else {
            printsl($pais->getSaludo()[0], $fecha_actual->format('h:i a'));
        }
        $flag = 0;
        //Salir del Bucle
        break;

    } else {
        $flag = 1;
    }
}


//En caso de no Encontrar ningun pais devuelve un error
if ($flag == 1) {
    $String = "No se Encuentra disponible ese Pais";
    echo "<h5> ". strtoupper($String) . " </h5>";
}


// Imprimir El Saludo
function printsl($saludo, $hora)
{
    echo "<br>";
    echo "<p>" . $saludo . "!</p>";
    echo "<br>";
    echo "<b>" . $hora . "</b>";
}
?>