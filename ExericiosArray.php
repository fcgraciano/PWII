<?php //          0         1         2
$frutas = array("maçã", "laranja", "banana");
print_r($frutas);// Escreve na tela os dados básicos do array
var_dump($frutas); // Detalha os dados do array
echo count($frutas); // escreve na tela a quantidade de itens que o array possui
array_push($frutas, "kiwi"); // adiciona um novo item ao array
foreach($frutas as $fruta){
    echo $fruta;
}

//Exercicio
//Gere um Array que cada indice desse array receba um novo
// array com as Chaves Nome, idade e email
// com seus respectivos valores inventados aleatoriamente











$pessoas = array(

    array(
        "nome" => "Ana Silva",
        "idade" => 28,
        "email" => "ana.silva@example.com"
    ),
    array(
        "nome" => "Carlos Souza",
        "idade" => 35,
        "email" => "carlos.souza@example.com"
    ),

    array(
        "nome" => "Fernanda Lima",
        "idade" => 42,
        "email" => "fernanda.lima@example.com"
    ),

    array(
        "nome" => "João Pereira",
        "idade" => 50,
        "email" => "joao.pereira@example.com"
    ),

    array(
        "nome" => "Mariana Costa",
        "idade" => 23,
        "email" => "mariana.costa@example.com"
    ),

    array(
        "nome" => "Ricardo Almeida",
        "idade" => 31,
        "email" => "ricardo.almeida@example.com"
    ),

    array(
        "nome" => "Sofia Oliveira",
        "idade" => 29,
        "email" => "sofia.oliveira@example.com"
    ),

    array(
        "nome" => "Vinícius Rocha",
        "idade" => 38,
        "email" => "vinicius.rocha@example.com"
    ),

    array(
        "nome" => "Beatriz Santos",
        "idade" => 27,
        "email" => "beatriz.santos@example.com"
    ),

    array(
        "nome" => "Leonardo Martins",
        "idade" => 45,
        "email" => "leonardo.martins@example.com"
    )
);


for($i = 0; $i < count($pessoas); $i++  )
{
    //echo $pessoas[$i]."<br>";
    //echo $i;
    //echo "<pre>";
    //print_r($pessoas[$i]);
    //echo "</pre>";
}

echo "<table border='5'>";
echo "<tr>";
echo "<td>Nome</td>";
echo "<td>Idade</td>";
echo "<td>Email</td>";
echo "</tr>";
for($i = 0; $i < count($pessoas); $i++  )
{
    echo "<tr>";
    echo "<td>".$pessoas[$i]["nome"]."</td>";
    echo "<td>".$pessoas[$i]["idade"]."</td>";
    echo "<td>".$pessoas[$i]["email"]."</td>";
    echo "</tr>";
}

foreach($pessoas as $a)
{
    echo "<tr>";
    echo "<td>".$a["nome"]."</td>";
    echo "<td>".$a["idade"]."</td>";
    echo "<td>".$a["email"]."</td>";
    echo "</tr>";
}

foreach($pessoas as $a)
{
    echo "<tr>";
    foreach($a as $chave => $valor)   
    {
        echo "<td>".$valor."</td>";
    }
    echo "</tr>";
}

echo "</table>";


?>