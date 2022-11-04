<?php

require 'conexao.php';

$id_func = $_POST["id"];
$nome = $_POST["nome_funcionario"];
$numero = $_POST["numero"];
$tipo = $_POST["tipo"];
$status = $_POST["status"];
$categoria = $_POST["categoria"];
$movimento = $_POST["movimento"];
$dtinicio = $_POST["dtinicio"];
$horainicio = $_POST["horainicio"];
$dtfim = $_POST["dtfim"];
$horafim = $_POST["horafim"];

$sql="update usuarios set nome= '$nome', numero='$numero',tipo='$tipo', status='$status',categoria='$categoria',movimento='$movimento', dtinicio='$dtinicio', horainicio='$horainicio', dtfim='$dtfim', horafim='$horafim'  where id = $id_func";

$result = mysqli_query($con, $sql);

if ($result == true) {
    echo "Alterado com Sucesso";
} else {
    echo "Erro ao alterar";
}
?>

<a href="listagem.php">Voltar para listagem</a>