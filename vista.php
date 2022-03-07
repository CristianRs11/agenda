<?php

function mostrarContactos($contactos){
    $cabeceraTabla = false;
    for ($i=0; $i<count($contactos); $i++) {
        if(!$cabeceraTabla){
            $cabeceraTabla = array_keys($contactos[$i]);
            echo "<table border='1'><tr>";
            foreach ($cabeceraTabla as $nombreColumna) {
                echo "<th> $nombreColumna </th>";
            }
            echo "</tr>";
            
        }
        echo "<tr>";
        foreach ($contactos[$i] as $nombreCampo => $valorCampo) {
            echo "<td> $valorCampo </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
function pintarCabeceira(){
    echo "<h1>Esta é a miña axenda</h1>";
}
function pintarPe(){
    echo "Feito por o gran e sempre poderoso Cristian";
}
?>