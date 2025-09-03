<form action="repeticao3.php" method="post">
<label for="number">Digite um número</label>
<input type="text" id="number" name="number"><br>
<input type="submit">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$numero = $_POST["number"];
$result = "";
}

for($i = 1;$i<=10; $i++){
    
    $result = $numero * $i;
    echo "$numero x $i = $result<br>";

}


?>


