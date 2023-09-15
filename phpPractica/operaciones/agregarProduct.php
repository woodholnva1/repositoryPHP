<?php
require_once '../model/modelProducto.php';
//Obtener la Session
session_start();



if (intval($_POST["precio_produc"]) > 3500 || intval($_POST["precio_produc"]) <= 0 ) {
    echo "errPrec";
} else {

    // Obtener la suma de todos los valores en una sola línea

    $sum = array_reduce($_SESSION["sessionArray"], function ($carry, $object) {
        return $carry + $object->getPrecio();
    });

    //Si es Mayor o igual que 5000
    if (($sum + $_POST["precio_produc"]) > 50000) {
        echo "errLimit";
    } else {

        AgregrarProducto($_POST["precio_produc"], $_POST["name_produc"]);
    }
}



function AgregrarProducto($Pnombre, $Pprecio)
{
    //Imprimir Columnas de Productos
    $obj = new producto($Pnombre, $Pprecio);


    array_push($_SESSION["sessionArray"], $obj);
    
    echo "<p>Cantidad de Productos: " . count($_SESSION["sessionArray"]) . " </p>";
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nombre del Producto</th>";
    echo "<th>Precio del Producto</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    $cont = 0;

    foreach ($_SESSION["sessionArray"] as $products) {
        printTr($products->getNombre(), $products->getPrecio());
        $cont = $cont + $products->getPrecio();
    }
    echo "<tr>";
    echo "<td> Total Acumulado: </td>";
    echo "<td>" . $cont . "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";

}

function printTr($nombre, $precio)
{
    echo "<tr>";
    echo "<td>" . $precio . "</td>";
    echo "<td>" . $nombre . "</td>";
    echo "</tr>";
}
?>