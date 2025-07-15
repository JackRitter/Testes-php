<?php
// Habilita exibição de erros para depuração
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verifica se veio via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'] ?? '';
    $idade = $_POST['idade'] ?? '';
    $data = $_POST['data'] ?? '';
    $sexo = $_POST['sexo'] ?? 'Não informado';
} else {
    echo "Nenhum dado recebido.";
    exit();
}
?>
