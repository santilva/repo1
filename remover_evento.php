<?php
// Dados do banco de dados
$servername = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'tb_agenda';

// Conectar ao banco de dados
$conexao = new mysqli($servername, $usuario, $senha, $banco);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

// Verificar se o ID do evento foi enviado
if (isset($_POST['id_evento'])) {
    $id_evento = $_POST['id_evento'];

    // SQL para deletar o evento
    $sql = "DELETE FROM eventos WHERE id = $id_evento";

    if ($conexao->query($sql) === TRUE) {
        echo "Evento removido com sucesso.";
    } else {
        echo "Erro ao remover o evento: " . $conexao->error;
    }
} else {
    echo "Nenhum evento selecionado.";
}

// Fechar a conexão
$conexao->close();
?>
