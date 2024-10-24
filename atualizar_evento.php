<?php
// Conectar ao banco de dados
$servername = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'tb_agenda';

$conexao = new mysqli($servername, $usuario, $senha, $banco);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

// Verificar se os dados foram enviados
if (!empty($_POST['id_evento']) && !empty($_POST['nome_evento']) && !empty($_POST['data_evento']) && !empty($_POST['hora_inicio']) && !empty($_POST['hora_fim']) && !empty($_POST['descricao']) && !empty($_POST['local_evento']) && !empty($_POST['responsavel_evento'])) {

    // Receber os dados do formulário
    $id_evento = $_POST['id_evento'];
    $nome_evento = $_POST['nome_evento'];
    $data_evento = $_POST['data_evento'];
    $hora_inicio = $_POST['hora_inicio'];
    $hora_fim = $_POST['hora_fim'];
    $descricao = $_POST['descricao'];
    $local_evento = $_POST['local_evento'];
    $responsavel_evento = $_POST['responsavel_evento'];

    // Atualizar evento no banco de dados
    $sql = "UPDATE eventos SET nome_evento=?, data_evento=?, hora_inicio=?, hora_fim=?, descricao=?, local_evento=?, responsavel_evento=? WHERE id=?";

    // Preparar a declaração
    $stmt = $conexao->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sssssssi", $nome_evento, $data_evento, $hora_inicio, $hora_fim, $descricao, $local_evento, $responsavel_evento, $id_evento);

        // Executar a atualização
        if ($stmt->execute()) {
            echo "Evento atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar o evento: " . $conexao->error;
        }

        $stmt->close();
    } else {
        echo "Erro na preparação da declaração: " . $conexao->error;
    }
} else {
    echo "Todos os campos são obrigatórios!";
}

// Fechar a conexão
$conexao->close();
?>
