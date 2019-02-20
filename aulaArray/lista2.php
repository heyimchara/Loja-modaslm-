<?php

$vetor= array();
for($i=0; $i<50; $i++){
    $vetor[$i]=42;
    echo "Indíce: ".$i. " Valor: ".$vetor[$i]=42 ."<br>";
      
}


echo "exercicio2"
<?php

$vetor= array();
for($i=0; $i<50; $i++){
    $vetor[$i]=$i;
    echo "Indíce: ".$i. " Valor: ".$vetor[$i] ."<br>";
   
}


echo "exercicio3";
<?php

$vetor= array();
$maiorValor = 0;
$soma=0;

for($i=0; $i<30; $i++){
    $vetor[$i]=$i;
    
    if($vetor[$i] > $maiorValor){
        $maiorValor = $vetor[$i];
        $indiceMaiorValor = $i;
    }
    echo "Indíce: ".$i. " Valor: ".$vetor[$i] ."<br>";  
    
$soma=$vetor[$i]+$soma;
$media=$soma/count($vetor);
    
}

        echo  "A soma é:  ".$soma. "<br>";
        echo "O maior valor é:" .$maiorValor. "<br>";
        echo "O maior indice é:" .$indiceMaiorValor. "<br>" ;
        echo "A media é: ". $media;


echo "exercicio4";
<?php


$vetor= array();
for($i=0; $i<50; $i++){
    $vetor[$i]=$i;
   
    if($i%2==0){
         echo "Indíce: ".$i. " Valor: ".$vetor[$i] ."<br>";
        
    }
 
}

echo "exerecicio5";
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <select>
        <?php
            $vetor = array(
                    0=> "Cores",
                    1=> "Amarelo",
                    2=> "Vermelho",
                    3=> "Azul",
                    4=> "Rosa",
                    5=> "Branco",
                    6=> "Preto",
                    7=> "Cinza",
                    8=> "Marrom",
                    9=> "Roxo"
                );

                for($i=0;$i<10;$i++){
        
    
        ?>
            <option>
                <?php 
                    echo $vetor[$i];
                ?>
            </option>
            <?php
                }
            ?>
            
        </select>
    </body>
</html>
