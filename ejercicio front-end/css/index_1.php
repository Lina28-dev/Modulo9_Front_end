<?php

# Comentario de linea
// Comentario de linea
/*Comentario de Multilinea */


$numero = 1;
echo $numero."<br>";

#Declarar una constante
define("NUMERO_DE_EULER",2.71828);
echo NUMERO_DE_EULER;

#Tipos de datos

$numero_entero = 30;
$numero_flotante = 30.24; #7 decimales
$numero_double = 30.4567; #14 decimales
$caracter = "e"
$string = "Hola mundo"
$booleano_true = true;
$booleano_false = false;
echo $booleano_true;
$sin_valor = null; #Undefined


#Casting

$numero_texto = "30";
$numero1 = 30;
$suma = $numero_texto + $numero1;
eco "la suma es".$suma. "<br>";
var_dump($numero_texto);
$numero_texto =(int) $numero_texto;
var_dump($numero_texto);

#Operadores aritmeticas

$suma = 3+4;
$resta = 5-2;
$modulo = 4%2;
$exponente = 2**2;

#Comparacion

//Igualdad == compara solo el contenido de la variable que se esta pidiendo
//Mayor que >
//Menor que <
//Mayor que >=
//Menor que <
// Identico a ==

$comparacion = $numero_texto === $numero1;
var dump($comparacion);

#Logicos

//And
//QR
//NOT


