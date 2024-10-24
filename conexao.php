<?php
$servername = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'tb_agenda';

$conexao = new mysqli($servername,$usuario,$senha,$banco);

if ($conexao->connect_error) {
    die("Flalha na conexão: " .$conexao->connect_error);
} else {
    echo "Conexão OK!";
}
?>  