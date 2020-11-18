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

$sql = "select * from Produto";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($rows = $result->fetch_assoc()){
        echo $rows["Categoria"];
    }

} else {
    echo "Nenhum produto cadastrado!";
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title> Full Stack Eletro</title>
    <link href="principalcss.css" rel="stylesheet">
<script src="./js/funcoes.js"> </script>


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
   
<div class="submenu">
    <nav class="sub">
        <a onclick="exibir_todos()"> Todas as categorias (10)       |</a>
        <a onclick="exibir_categoria('geladeira')"> Geladeiras (4)       |</a>
        <a onclick="exibir_categoria('fogao')"> Fogões (1)           |</a>
        <a onclick="exibir_categoria('microondas')"> Microondas (2)       |</a>
        <a onclick="exibir_categoria('lava roupas')"> Lava Roupas (1)      |</a>
        <a onclick="exibir_categoria('lava louças')"> Lava-Louças (2)      </a>

    </nav>
</div>

 <!--div produtos -->  
    <main>
        <header>Produtos da Loja</header>

        <div class="produtos">

        <div class="produto" id='geladeira' style="display:block">
            <img src="./imagens/geladeira2.jpeg" width=305px onclick="destaque(this)">
            <p>Geladeira Frost Free Brastemp Side Inverse 540 litros</p>
            <p>De: <strike>R$ 6.389,00</strike></p>
            <p class="novo_preco">Por: R$ 5.019,00</p>
        </div> 
    
        
        <div class="produto" id='geladeira' style="display:block">
            <img src="./imagens/geladeira1.jpeg" width=305px onclick="destaque(this)">
            <p>Geladeira Frost Free Brastemp Branca 373 litros</p>
            <p>De: <strike>R$ 2.000,00</strike></p></font>
            <p class="menor_preco">Por: R$ 1.039,00</p>
        </div>

        <div class="produto" id='geladeira' style="display:block">
            <img src="./imagens/geladeira3.png" width=305px onclick="destaque(this)">
             <p>Geladeira Frost Free Consul Prata 340 litros   </br> </br> </p>
             <p>De: <strike>R$ 2.067,00</strike></p></font>
             <p class="menor_preco">Por: R$ 1.839,00</p>
        </div>

        <div class="produto" id='geladeira' style="display:block">
            <img src="./imagens/geladeira3.png" width= 305px onclick="destaque(this)">
            <p>Geladeira Frost Free Consul Prata 560 litros</p>
            <p>De: <strike>R$ 3.097,00</strike></p></font>
            <p class="menor_preco">Por: R$ 2.039,00</p>
        </div>

        <div class="produto" id='microondas' style="display:block">
            <img src="./imagens/microondas2.jpeg" width= 305px onclick="destaque(this)">
            <p>Microondas 25l Espelhado Philco 220V</p>
            <p>De: <strike>R$ 900,00</strike></p></font>
            <p class="menor_preco">Por: R$ 468,00</p>
        </div>

        <div class="produto" id='microondas' style="display:block">
            <img src="./imagens/microondas1.png" width= 305px onclick="destaque(this)">
            <p>Forno de Microondas Electrolux 20l Branco</p>
            <p>De: <strike>R$ 1.000,00</strike></p></font>
            <p class="menor_preco">Por: R$ 600,00</p>
        </div>

        <div class="produto" id='fogao' style="display:block">
            <img src="./imagens/fogao.png" width=305px onclick="destaque(this)">
            <p>Fogão de Piso 4 Bocas Atlas Monaco com acendimento Automático</p>
            <p>De: <strike>R$ 900,00</strike></p></font>
            <p class="menor_preco">Por: R$ 539,00</p>
        </div>

        <div class="produto" id='lava louças' style="display:block">
            <img src="./imagens/frigobar.jpeg" width=305px onclick="destaque(this)">
            <p>Lava-loucas Electrolux Inox com Painel Bluetouch</p>
            <p>De: <strike>R$ 1.345,00</strike></p></font>
            <p class="menor_preco">Por: R$ 947,00</p>
        </div>

        <div class="produto" id='lava louças' style="display:block">
            <img src="./imagens/lavaloucas.jpeg" width=305px onclick="destaque(this)">
            <p>Lava-loucas Compacta 08 servicos Branca 127V Brastemp</p>
            <p>De: <strike>R$ 3.000,00</strike></p></font>
            <p class="menor_preco">Por: R$ 1.738,00</p>
        </div>

        <div class="produto" id='lava roupas' style="display:block">
            <img src="./imagens/maquinadelavar2.png" width=305px onclick="destaque(this)">
            <p>Máquina de Lavar Roupas Philco Inverter 12kg</p>
            <p>De: <strike>R$ 4.000,00</strike></p></font>
            <p class="menor_preco">Por: R$ 2.039,00</p>
        </div>
    </div>
</main>  


<footer class="rodape">

        <h4 id="formas_pagamento">Formas de Pagamento</h4>
        
        <img src="./imagens/formasdepgto.jpeg" alt="Formas de Pagamento" width="300px" height="70px">
        
        <br><br><hr><br>

        <p class="recode">&copy; Recode - Todos os Direitos Reservados - 2020</p>
        <br>



</footer>


    
</div>
</body>
</html>