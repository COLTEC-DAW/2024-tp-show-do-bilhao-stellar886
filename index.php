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
    "log 1?"
];

$alternativas = [
    ["A) Maria das Sashas", "B) Maria de Lurdes", "C) Maria das Graças", "D) Maria dos Santos"],
    ["A) Barata", "B) Barbeiro", "C) Pulga", "D) Abelha"],
    ["A) 0", "B) 1", "C) 2", "D) 3"]
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

