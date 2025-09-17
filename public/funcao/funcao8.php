<p>Calcular Média</p>
<form action="funcao8.php" method="post">
    <label for ="n1">Digite sua primeira nota</label><br>
    <input type="text" id="n1" name="n1"><br>
    <label for ="n2">Digite sua segunda nota</label><br>
    <input type="text" id="n2" name="n2"><br>
    <label for ="n3">Digite sua terceira nota</label><br>
    <input type="text" id="n3" name="n3"><br>
    <input type="submit">
</form>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["n1"];
    };
?>
