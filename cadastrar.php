

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de eventos</title>
</head>
<body>
    <header class="header">
        <h1>Cadastrar evento</h1>
        <a href="index.php">Voltar</a>
    </header>
    <section class="form-section">

        <form action="processa_cadastro.php" method="post" class="container">
    
            <label for="nome_evento"> 
                Nome do Evento:
            </label> <input type="text" name="nome_evento" id="" required="required"><br>
        
            <label for="data_evento"> 
               Data do Evento:
            </label> <input type="date" name="data_evento" id="" required="required"><br>
        
            <label for="hora_evento"> 
                Horário de Início:
            </label><input type="time" name="hora_inicio" id="" required="required"><br>
        
            <label for="hora_fim"> 
                Hora do fim:
            </label><input type="time" name="hora_fim" id="" required="required"><br>
            
            <label for="descricao"> 
                Descrição:
            </label> <textarea name="descricao" id="" required></textarea><br>
            
            <label for="local_evento"> 
               Local do evento:
            </label><input type="text" name="local_evento" id="" required="required"><br>
            <label for="responsabel_evento"> 
                Responsável pelo Evento:
            </label><input type="text" name="responsavel_evento" id="" required="required"><br>
        
            <button type="submit">Cadastrar evento</button> <br>
        </form>
    </section>
    <section class="event-list"></section>
    <footer class="footer">
        <p>&copy; 2024 Agenda de compromissos</p>
    </footer>

 
</body>
</html>