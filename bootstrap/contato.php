<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

//criando a conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verificando conexao
if (!$conn) {
    die("a conexao ao BD falhou:" . mysqli_connect_error());
}

if(isset($_POST['nome']) && isset($_POST['msg']) && isset($_POST['pedido'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];
    $pedido = $_POST['pedido'];

    echo $nome, $msg, $pedido;
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title> Full Stack Eletro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="principalcss.css" rel="stylesheet">
 
</head>


<body>
<!-- div id SITE -->


<div id="container"> 
<header>
    <nav class="menu">

     <a href="index.php"><img src="imagens/emblema.jpeg" width="100" height="60" alt="Logo Full Stack Eletro"></a>
        <a href="produtos.php">Nossos Produtos</a>
        <a href="lojas.php">Nossas Lojas</a>
        <a href="contato.php">Entre em Contato</a>
    </nav>
</header>


<!-- formulario de pedido -->
<br> <br><h4>Contato <span class="badge badge-danger"> Entre em contato conosco pelo formulário abaixo</span></h4>
<br><br>
<form>
  <div class="form-group">
  <label for="exampleFormControlInput1">Nome:</label>
    <input type="POST" class="form-control" id="exampleFormControlInput1" placeholder="escreva seu nome aqui">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Endereço de email:</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Assunto:</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Reclamação</option>
      <option>Elogio</option>
      <option>Dúvidas</option>
      <option>Indefinido</option>
      <option>Venha trabalhar conosco!</option>

    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mensagem:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <br><br><center>
  <button type="submit" class="btn btn-warning">Enviar</button></center>
  <br><br>
</form>

<footer class="rodape">

        <h4 id="formas_pagamento">Formas de Pagamento</h4>
        
        <img src="./imagens/formasdepgto.jpeg" alt="Formas de Pagamento" width="300px" height="70px">
        
        <br><br><hr><br>

        <p class="recode">&copy; Recode - Todos os Direitos Reservados - 2020</p>
        <br>



</footer>
    
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>