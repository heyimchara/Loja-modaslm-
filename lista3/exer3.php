<?php 

echo "Exercício 3";

function Cores_lista_ordenada($vetor) {
    



?>

<?php
for($i = 0; $i < count($vetor);  $i++){
?>

<ul>
 <li>    <?php echo $vetor[$i] ?>    </li>
</ul> 

<?php } ?>

<?php } 


$vetor = array('Branco', 'Verde', 'Vermelho');

Cores_lista_ordenada($vetor);

?>