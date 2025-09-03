<?php
$cor = "";
$alunos = [
    ["Aluno" =>"Bruno","Nota"=>10, "Situação"=>""],
    ["Aluno" =>"Saymon","Nota"=>8, "Situação"=>""],
    ["Aluno" =>"Matheooo","Nota"=>5,"Situação"=>""]
];

?>

<p> <?php foreach ($alunos as $nomes){
    if($nomes["Nota"]>=7){
        $nomes["Situação"]="APROVADO";
        $cor = "green";
    }else{
        $nomes["Situação"]="REPROVADO";
        $cor = "red";
    }

    echo 
    "Aluno(a): " , $nomes["Aluno"] , 
    " - Nota: " , $nomes["Nota"] ,
     " - Situação: ", "<span style='color: $cor;'>" . $nomes["Situação"] . "</span><br>";
     

}?>


