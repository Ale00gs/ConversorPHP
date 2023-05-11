<?php

require "funcoesCalculo.php";
$resultado = "";

if(!empty($_GET['num1'])){
    $num1 = $_GET['num1'];    

    if($_GET['selectConverter'] == "centimetrosParaMetros"){
        $resultado =  "Unidade em Centímetros ( " . $num1 . " ) convertida em Metros = " . ConverterCentimetrosParaMetros($num1);
        echo "RESULTADO: " .$resultado;
    }
    
    else if($_GET['selectConverter'] == "metrosParaCentimetros"){
        $resultado =  "Unidade em Metros ( " . $num1 . " ) convertida em Centímetros = " . ConverterMetrosParaCentimetros($num1);
        echo "RESULTADO: " .$resultado;
    }
    
    else if($_GET['selectConverter'] == "quilometrosParaMetros"){
        $resultado =  "Unidade em Quilometros ( " . $num1 . " ) convertida em Metros = " . ConverterQuilometrosParaMetros($num1);
        echo "RESULTADO: " .$resultado;
    }

    else if($_GET['selectConverter'] == "metrosParaQuilometros"){
        $resultado =  "Unidade em Metros ( " . $num1 . " ) convertida em Quilometros = " . ConverterMetrosParaQuilometros($num1);
        echo "RESULTADO: " .$resultado;
    }
    
}

?>