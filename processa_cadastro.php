<?php
$servername = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'tb_agenda';

$conexao = new mysqli($servername,$usuario,$senha,$banco);



    $nome_evento = $_POST['nome_evento'];
    $data_evento = $_POST['data_evento'];
    $hora_inicio = $_POST['hora_inicio'];
    $hora_fim = $_POST['hora_fim'];
    $descricao = $_POST['descricao'];
    $local_evento = $_POST['local_evento'];
    $responsavel_evento = $_POST['responsavel_evento'];

    $sql = "INSERT INTO eventos(nome_evento, data_evento, hora_inicio, hora_fim, descricao, local_evento, responsavel_evento) 
    VALUES('$nome_evento','$data_evento','$hora_inicio','$hora_fim','$descricao','$local_evento','$responsavel_evento')"; 
    
    if ($conexao->query($sql) === true) {
       echo "<p>Evento cadastrado com sucesso!</p><a href='index.php'>Voltar</a>";
    } else {
        echo "<p>Erro ao cadastrar um evento: </p><a href='index.php'>Voltar</a>" .$conexao->error;
        # code...
    }
$conexao->close();
?>  

