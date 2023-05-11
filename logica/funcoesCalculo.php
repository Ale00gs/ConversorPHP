<?php

// Funções calculadora
function adicao($num1,$num2){
    $RESULTADO = $num1 + $num2;
    return $RESULTADO;
}

function subtracao($num1,$num2){
    $RESULTADO = $num1 - $num2;
    return $RESULTADO;
}

function multiplicacao($num1,$num2){
    $RESULTADO = $num1 * $num2;
    return $RESULTADO;
}

function divisao($num1,$num2){
    $RESULTADO = $num1 / $num2;
    return $RESULTADO;
}

// Funções Conversor de Temperatura

function celsiusParaFahrenheit($num1){
    $RESULTADO = (($num1 * 1.8) + 32);
    return number_format($RESULTADO,2,".","");
}

function fahrenheitParaCelsius($num1){
    $RESULTADO = (($num1 - 32) / 1.8);
    return number_format($RESULTADO,2,".","");
}

// Funções Conversor de Medidas

function ConverterCentimetrosParaMetros($num1){
    $RESULTADO = $num1 / 100;
    return number_format($RESULTADO,2,".","");
}

function ConverterMetrosParaCentimetros($num1){
    $RESULTADO = $num1 * 100;
    return number_format($RESULTADO,0,"","");
}

function ConverterQuilometrosParaMetros($num1){
    $RESULTADO = $num1 * 1000;
    return number_format($RESULTADO,0,"","");
}

function ConverterMetrosParaQuilometros($num1){
    $RESULTADO = $num1 / 1000;
    return number_format($RESULTADO,2,".","");
}

?>