<?php


echo "Exercício 2 <br>";

function Numero_primo() {
    


for($j = 2; $j <= 100; $j++){
$num = $j;

  $cont = 0;  
    
    for($i = 1; $i <= $num; $i++){
     
        if($num % $i == 0){
          $cont = $cont+1; 
        }
    }
    
     if($cont == 2){
            echo $num . " : É primo <br>";
        }
        else{
            echo $num . " : É composto <br>";
        }
    
}


}

Numero_primo();