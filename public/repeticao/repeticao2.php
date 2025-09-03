<?php
$padaria = [
    ["produto" => "Pão", "Preço" => 1.5],
    ["produto" => "Queijo", "Preço" => 12],
    ["produto" => "Margarina", "Preço" => 15],
    ["produto" => "Sonho", "Preço" => 5],
    ["produto" => "Carolina", "Preço" => 2],
];
 foreach ($padaria as $produto){
    echo "Produto : ",$produto["produto"], " - Preço : ",$produto["Preço"] . " <br>\n";
}

$soma =0;
foreach ($padaria as $produto){
    $soma += $produto["Preço"];
}
echo "<br> Valor total da compra: ", $soma;
?>






