<?php


echo "Exercício 1 <br> ";

$num = 10;

function primo($num){
  $cont=0;  
    for($i = 1; $i <= $num; $i++){
     
        if($num % $i == 0){
          $cont = $cont+1; 
        }
    }
    
     if($cont == 2){
            echo "É primo";
        }
        else{
            echo "É composto";
        }
    
}

primo($num);

