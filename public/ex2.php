<?php 
$nota =5 ;
$mensagem = "";
$cor = "black";

if($nota >= 7){
    $mensagem = "Aprovado!";
    $cor = "green";
}else{
    $mensagem = "Reprovado!";
    $cor = "red";
}
?>

<h1 style="color: <?php echo $cor;?> "><?php echo $mensagem;?></h1>