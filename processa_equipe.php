<?php
// Verifica se os campos foram enviados através do método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o número de integrantes e o nome do líder da equipe do formulário
    $numeroIntegrantes = intval($_POST["numero_integrantes"]);
    $nomeLider = $_POST["nome_lider"];

    // Utilize um switch para determinar a mensagem com base no número de integrantes
    switch ($numeroIntegrantes) {
        case 0:
        case 1:
            $mensagem = "Não forma equipe.";
            break;
        case 2:
        case 3:
        case 4:
            $mensagem = "Equipe formada com sucesso. O líder é: " . $nomeLider;
            break;
        default:
            $mensagem = "Valor inválido.";
    }
} else {
    // Se o formulário não foi submetido por POST, exiba uma mensagem de erro
    $mensagem = "Erro: Formulário não submetido.";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Resultado da Equipe</title>
</head>

<body>
    <h1>Resultado da Equipe</h1>
    <p>
        <?php echo $mensagem; ?>
    </p>
</body>

</html>