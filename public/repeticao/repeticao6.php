<?php
$cor = "";
$alunos = [
    ["Aluno" =>"Bruno","Nota"=>10, "Situação"=>""],
    ["Aluno" =>"Saymon","Nota"=>7, "Situação"=>""],
    ["Aluno" =>"Matheooo","Nota"=>4,"Situação"=>""]
];

 foreach ($alunos as $nomes){
    if($nomes["Nota"]>=7){
        $nomes["Situação"]="APROVADO";
        $cor = "blue";
    }else{
        $nomes["Situação"]="REPROVADO";
        $cor = "red";
    }


    echo 
    "Aluno(a): " , $nomes["Aluno"] , 
    " - Nota: " , $nomes["Nota"] ,
     " - Situação: ", "<span style='color: $cor;'>" . $nomes["Situação"] . "</span><br>";
     
}

    $soma = 0;
foreach($alunos as $nomes){
    $soma += $nomes['Nota'];
}
$soma = $soma/3;
    echo "<br>Média da sala: ", $soma;
?>



