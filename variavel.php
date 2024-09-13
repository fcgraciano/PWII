<?php include "cabecalho.php"; ?>  
    
<h1>Variáveis em PHP</h1>
    <p> $numero = 10; //Aqui é uma variavel inteira </p>
    <p> $string = "Fernando camisa 10"; </p>
    <p> $string1 = "Fernando camisa ".$numero; </p>
    <p> $string2 = "Fernando camisa $numero"; </p>
    <p> $valorDecimal = 10.50; </p>
    <p> $Ativo = true; </p>
    <p> /*  Aqui é um bloco de comentario */ </p>
    <?php //Tudo que está entre as tags do php não parece na tela ?>
    
    <?php //a não ser que usemos a função echo com string ?>
        <?php
            echo "Hello World";
            echo "<br>";
            $numero = 10;
            $nome = "Fernando";
            $frase1 = "<p> $nome camisa $numero frase com paragrafo </p>";
            $frase2 = $nome."  camisa ".$numero;// cocatenação das antigas
            echo $frase1;
            echo "$frase2 É o que tem dentro da variavel";


        ?>

<?php include "rodape.php"; ?>