<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo"exercicio1";
$n1=10;
$n2=4;
$n3=8;
$n4=6;

    $media= ($n1+$n2+$n3+$n4)/4 ;
    echo $media. "\n";
        
if ($media>=6){
    echo "Aprovado";
}
else{
    echo "Reprovado";
}

echo"exercicio2";
$salario=2000;
echo $salario;

if ($salario<=1000){ 
   
$salario = $salario*0.4 +$salario;
echo " Salário novo". $salario;
} 
else{

$salario = $salario*0.3 +$salario;
echo " Salário novo" .  $salario;  
}


echo "exercicio3";
$media=7.5;
$frequencia=0.75;
echo "$media<br>";
echo "$frequencia<br>";
if($media>=6 && $frequencia>0.75){
 echo "Aprovado";   
}
else{
 echo "Reprovado"; 
 $frequencia;
}

echo "exercicio4";
for ($i=1; $i<=100; $i++){
    if($i %2 ==0){
    echo "$i <br>";
      }
}

echo "exercicio5";
$n1=10;
$n2=5;

 if($n1>$n2){
     echo "O maior número é : ". $n1;
     
 }
 else{
    echo "O maior número é : ". $n2; 
 }
 
 echo "exercicio6";
 
$n1=5;
$n2=10;
$n3=15;

 if($n1>$n2 && $n1>$n3 ){
     echo "O maior número é : ". $n1;
     
 }
 if($n2>$n1 && $n2>$n3 ){
     echo "O maior número é : ". $n2;
     
 }
 if($n3>$n2 && $n3>$n1 ){
     echo "O maior número é : ". $n3;
     
 }
 else{
   echo "Resposta inválida";
 }
 
 echo "exercicio7";
$n1=5;
$n2=10;

echo "n1 é 5 <br>";
echo "n2 é 10 <br>";
 if($n1>$n2 ){
     echo "O primeiro número é maior : ". $n1;
    
     
 }
 if($n2>$n1){
     echo " O primeiro número é menor  :" . $n2;
    
 }

 else{
   echo "Os números são iguais";
 }
 
 echo "exercicio8";
 $idade = 30;
echo "idade = $idade <br>";

if($idade < 18  or $idade > 60){
    echo "Meia entrada";
}else{
    echo "Inteira";

    
    echo "exercicio9";
  for($i = 1; $i <= 10; $i++){
    echo "<br>Tabuada do $i<br>";
    for($j = 1; $j <= 10; $j++){
    $resultado = $i * $j;
    echo "[ $i X $j = $resultado ]";
}
}