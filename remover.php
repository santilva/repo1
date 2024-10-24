<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Remover Evento</title>
</head>
<body>
    <header class="header">
        <h1>Remover Evento</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cadastrar.php">Cadastrar Evento</a></li>
                <li><a href="listar.php">Listar Eventos</a></li>
               
            </ul>
        </nav>
    </header>

    <section class="form-section">
        <form action="processa_remocao.php" method="post" class="container">
            <label for="id_evento">Selecione o evento para remover:</label>
            <select name="id_evento" id="id_evento" required>
                <!-- PHP para buscar eventos do banco de dados -->
                <?php
                // Conectar ao banco de dados
                $servername = 'localhost';
                $usuario = 'root';
                $senha = '';
                $banco = 'tb_agenda';

                $conexao = new mysqli($servername, $usuario, $senha, $banco);
                if ($conexao->connect_error) {
                    die("Conexão falhou: " . $conexao->connect_error);
                }

                // Selecionar todos os eventos
                $sql = "SELECT id, nome_evento FROM eventos";
                $result = $conexao->query($sql);

                // Exibir os eventos no <select>
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id'] . "'>" . $row['nome_evento'] . "</option>";
                    }
                } else {
                    echo "<option value=''>Nenhum evento cadastrado</option>";
                }

                $conexao->close();
                ?>
            </select>

            <button type="submit">Remover Evento</button>
        </form>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Agenda de Compromissos</p>
    </footer>
</body>
</html>
