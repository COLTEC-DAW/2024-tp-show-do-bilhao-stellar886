<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
   
    </style>

<?php
$perguntas = [
    "Quais são os dois primeiros nomes da apresentadora Xuxa?",
    "Qual é inseto que transmite doença de Chagas??",
    "Qual a cor do céu em um dia ensolarado?"
];

$alternativas = [
    ["A) Maria das Sashas", "B) Maria de Lurdes", "C) Maria das Graças", "D) Maria dos Santos"],
    ["A) Barata", "B) Barbeiro", "C) Pulga", "D) Abelha"],
    ["A) Azul", "B) Verde", "C) Vermelho", "D) Amarelo"]
];

$respostas_certas = [2, 1, 0];

for ($i = 0; $i < count($perguntas); $i++) {
    echo "<br> <br>" . $perguntas[$i] . "<br>";
    

    for ($j = 0; $j < count($alternativas[$i]); $j++) {
        echo "<br>" . $alternativas[$i][$j] . "<br>";
    }
    
    echo "<br>Resposta: " . $alternativas[$i][$respostas_certas[$i]];
}
?>

</body>
</html>

