<?php
$servername = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'tb_agenda';

$conexao = new mysqli($servername,$usuario,$senha,$banco);

$sql = "SELECT * FROM eventos";
$resultado = $conexao->query($sql);

?>  
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de eventos</title>
</head>
<body>
    <h1>Lista de eventos</h1>
    

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Evento</th>
                    <th>Data do Evento</th>
                    <th>Hora de Início</th>
                    <th>Hora de Fim</th>
                    <th>Descrição</th>
                    <th>Local</th>
                    <th>Responsável</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Conectar ao banco de dados
                $servername = 'localhost';
                $usuario = 'root';
                $senha = '';
                $banco = 'tb_agenda';
                
                $conexao = new mysqli($servername,$usuario,$senha,$banco);

                // Verificar a conexão
                if ($conexao->connect_error) {
                    die("Conexão falhou: " . $conexao->connect_error);
                }

                // Selecionar todos os eventos
                $sql = "SELECT id, nome_evento, data_evento, hora_inicio, hora_fim, descricao, local_evento, responsavel_evento FROM eventos";
                $result = $conexao->query($sql);

                // Exibir os eventos na tabela
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['nome_evento'] . "</td>
                            <td>" . $row['data_evento'] . "</td>
                            <td>" . $row['hora_inicio'] . "</td>
                            <td>" . $row['hora_fim'] . "</td>
                            <td>" . $row['descricao'] . "</td>
                            <td>" . $row['local_evento'] . "</td>
                            <td>" . $row['responsavel_evento'] . "</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>Nenhum evento cadastrado.</td></tr>";
                    
                }
                
                $conexao->close();
                ?>
            </tbody>
        </table>
 <a href="index.php">Voltar</a>
</body>
</html>


