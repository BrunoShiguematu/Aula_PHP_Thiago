<?php
include("cabecalho.php");

$filme = "";
$genero = "";
$mensagem = "";
$cor = "black";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filme = $_POST["filme"];
    $genero = $_POST["genero"];

    if ($genero == "Terror") {
        $mensagem = "Atenção! Filme de terror cadastrado!";
        $cor = "red";
    } if ($genero == "Comédia") {
        $mensagem = "Esse filme promete boas risadas!";
        $cor = "green";
    }
}

$image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4eJg7mdpxMLbv_X_HimqlR8itqeJPqQp4MA&s"; 
?>
<style>
    input,label,select{display: block; 
  margin: 0 auto;      
  width: 200px;}
  label{margin-bottom: -10px;}
  p{text-align: center;}
  img{display: block; 
  margin: 0 auto}
  select{margin-bottom: 20px;
}
  
  
</style>
<img src="<?php echo $image; ?>" alt=""><br>

<form action="main.php" method="POST"> 
    <label for="filme">Nome do Filme:</label><br>
    <input type="text" id="filme" name="filme"><br>
    <label for="genero">Gênero:</label><br>
    <select name="genero" id="genero">
        <option value="">Selecione uma Categoria</option>
        <option value="Comédia">Comédia</option>
        <option value="Terror">Terror</option>
        <option value="Ação">Ação</option>
        <option value="Suspense">Suspense</option>
        <option value="Romance">Romance</option>
        <option value="Drama">Drama</option>
        <option value="Ficção Científica">Ficção Científica</option>
    </select>
    <input type="submit">
</form>

<p id="para">Filme Cadastrado: </p>
<p><?php echo $filme; ?> <?php echo "(",$genero,")"; ?></p>
<p style="color: <?php echo $cor; ?>"><?php echo $mensagem; ?></p>
<?php include("rodape.php");?>