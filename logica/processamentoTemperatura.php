<?php

require "funcoesCalculo.php";
$resultado = "";

if(!empty($_POST['num1'])){
    $num1 = $_POST['num1'];    

    if($_POST['selectTemperature'] == "celsiusParaFahrenheit"){
        $resultado =  "Temperatura em Celsius ( " . $num1 . " ) convertida em Fahrenheit = " . celsiusParaFahrenheit($num1);
        echo "RESULTADO: " .$resultado;
    }
    
    else if($_POST['selectTemperature'] == "fahrenheitParaCelsius"){
        $resultado =  "Temperatura em Fahrenheit ( " . $num1 . " ) convertida em Celsius = " . fahrenheitParaCelsius($num1);
        echo "RESULTADO: " .$resultado;
    }
}

?>