<?php
// Variables y tipos
$nombre = (string) 'Jaime'; //Variable de cadena de caracteres
$_edad = (int) 27; // Variable de tipo entero(numeros)
$Altura = (double) 1.87; //Variable double o float numeros decimales
$soy_su_profesor = (boolean) false; // Variable de tipo booleano, puede ser True(1) o False(0)
$HOBBIES = (array) ['Jugar video juegos', 'Ultimate Frisbee', 'Hacer ejercicio', 407]; // Variable de tipo array o lista o arreglo, contiene  varios datos y su primera posicion es 0

$objeto = new stdClass;
$objeto->cosas = "Tv";

print_r($objeto->cosas);
    echo "<br>"; 
    var_dump($HOBBIES);


?>