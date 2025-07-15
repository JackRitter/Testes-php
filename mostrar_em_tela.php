<?php
// Verifica se os dados foram enviados por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'] ?? '';
    $idade = $_POST['idade'] ?? '';
    $data = $_POST['data'] ?? '';
    $sexo = $_POST['sexo'] ?? [];

    echo "<h1>Dados Recebidos</h1>";
    echo "<strong>Nome:</strong> $nome<br>";
    echo "<strong>Idade:</strong> $idade<br>";
    echo "<strong>Data:</strong> $data<br>";
    echo "<strong>Sexo:</strong> " . implode(', ', $sexo) . "<br>";
} else {
    echo "Nenhum dado recebido.";
}
?>
