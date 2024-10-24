<?php
$servername = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'tb_agenda';

$conexao = new mysqli($servername,$usuario,$senha,$banco);

$id = $_POST['id'];
$sql = "SELECT * FROM eventos WHERE id=$id";

$resultado = mysqli_query($conexao, $sql);

if ($row = mysqli_fetch_assoc($resultado)) {
    echo "<h2>Detalhes do Evento</h2>";
    echo "Nome do Evento: " .$row['nome_evento']."<br>";
    echo "Data do Evento: ".$row['data_evento']."<br>";
    echo "Hora de Início: ".$row['hora_inicio']."<br>";
    echo "Nome de fim: ".$row['hora_fim']."<br>";
    echo "Descrição: ".$row['descricao']."<br>";
    echo "Local: ".$row['local_evento']."<br>";
    echo "Responsável: ".$row['responsavel_evento']."<br>";
    echo "<a href='atualizar.php?id='".$row['id']."'>Atualizar evento</a>";
} else {
    echo "Nenhum evento encontrado";
}


?>
