<?php

require 'conexao.php';

$nome = $_POST["nome"];
$numero= $_POST["numero"];
$tipo = $_POST["tipo"];
$status = $_POST["status"];
$categoria = $_POST["categoria"];
$movimento = $_POST["movimento"];
$dtinicio = $_POST["dtinicio"];
$horainicio = $_POST["horainicio"];
$dtfim= $_POST["dtfim"];
$horafim = $_POST["horafim"];

$sql = "insert into usuarios (nome, numero, tipo, status, categoria, movimento, dtinicio, horainicio, dtfim,horafim)values('$nome','$numero','$tipo','$status','$categoria','$movimento','$dtinicio','$horainicio','$dtfim','$horafim')";

$result=(mysqli_query($con, $sql));

    if($result==true){
        
        echo "Cadastrado com sucesso";
        
    }else{
        
        echo "Erro ao cadastrar";
        
    }
    ?>

<a href="listagem.php">Listar usuários</a>
    

