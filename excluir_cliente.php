<?php
require 'conexao.php';

$id_funcionario = $_GET["id"];

$sql="delete from usuarios where id = $id_funcionario";

$result = mysqli_query($con, $sql);

if ($result == true){
    
    echo "Excluído com Sucesso";
    
}else{
    
    Echo "Erro ao excluir";
    
}
?>

<a href="listagem.php">Voltar</a>
    
    
