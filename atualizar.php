<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Atualizar Evento</title>
</head>
<body>
    <header class="header">
        <h1>Atualizar Evento</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cadastrar.php">Cadastrar Evento</a></li>
                <li><a href="listar.php">Listar Eventos</a></li>
                <li><a href="remover.php">Remover Evento</a></li>
              
            </ul>
        </nav>
    </header>

    <section class="form-section">
        <form action="processa_atualizacao.php" method="post" class="container">
            <label for="id_evento">Selecione o evento para atualizar:</label>
            <select name="id_evento" id="id_evento" required>
                <?php
                // Conectar ao banco de dados
                $conn = new mysqli('localhost', 'root', '', 'tb_agenda');

                // Verificar a conexão
                if ($conn->connect_error) {
                    die("Conexão falhou: " . $conn->connect_error);
                }

                // Selecionar todos os eventos
                $sql = "SELECT id, nome_evento FROM eventos";
                $result = $conn->query($sql);

                // Exibir os eventos no <select>
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id'] . "'>" . $row['nome_evento'] . "</option>";
                    }
                } else {
                    echo "<option value=''>Nenhum evento cadastrado</option>";
                }

                $conn->close();
                ?>
            </select>

            <label for="nome_evento">Nome do Evento:</label>
            <input type="text" name="nome_evento" id="nome_evento" required><br>

            <label for="data_evento">Data do Evento:</label>
            <input type="date" name="data_evento" id="data_evento" required><br>

            <label for="hora_inicio">Horário de Início:</label>
            <input type="time" name="hora_inicio" id="hora_inicio" required><br>

            <label for="hora_fim">Horário de Fim:</label>
            <input type="time" name="hora_fim" id="hora_fim" required><br>

            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" required></textarea><br>

            <label for="local_evento">Local do Evento:</label>
            <input type="text" name="local_evento" id="local_evento" required><br>

            <label for="responsavel_evento">Responsável pelo Evento:</label>
            <input type="text" name="responsavel_evento" id="responsavel_evento" required><br>

            <button type="submit">Atualizar Evento</button>
        </form>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Agenda de Compromissos</p>
    </footer>
</body>
</html>
