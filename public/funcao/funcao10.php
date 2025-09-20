<?php
$media = 0; 
$color = "black";
function calcularMedia($n1,$n2,$n3){
return ($n1+$n2+$n3)/3;
}

function verificarSituacao($media){
    $GLOBALS["color"]; 
    if($media >= 7){
        return "APROVADO!";
    }else{
        return "REPROVADO!";
    }
}


$media = calcularMedia(8,9,8);
$situacao = verificarSituacao($media);

echo "O aluno Bruno está ", $situacao,"<br>";

$media = calcularMedia(6,5,7);
$situacao = verificarSituacao($media);

echo "O aluno Matheus está ", $situacao,"<br>";


?>