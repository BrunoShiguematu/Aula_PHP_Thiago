<?php 
$nome = $_POST["name"];
$email = $_POST["email"];
$color = $_POST["color"];
?>
<h1 style="color: <?php echo $color;?> ">Cadastro Realizado!</h1>
<p>Nome: <?php echo $nome;?></p>
<p>Email: <?php echo $email;?></p>