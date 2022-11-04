<?php

require 'conexao.php';

$sql = "select * from usuarios";

$result= mysqli_query($con, $sql);

while($dados = mysqli_fetch_assoc($result)){
    
    $id_funcionario = $dados['id'];
    $nome_funcionario = $dados['nome'];
    $numero_conteiner = $dados['numero'];
    $tp = $dados['tipo'];
    $st = $dados['status'];
    $categ = $dados['categoria'];
    $movi = $dados['movimento'];
    $dtini = $dados['dtinicio'];
    $hrini = $dados['horainicio'];
    $dfim = $dados['dtfim'];
    $hrfim = $dados['horafim'];
    
    echo "<br>" . "Código: " . $id_funcionario. "<br>" .
            "<br>" . "Nome: " . $nome_funcionario. "<br>" .
            "<br>" . "Conteiner: " . $numero_conteiner. "<br>" .
            "<br>" . "Tipo: " . $tp. "<br>" .
            "<br>" . "Status: " . $st. "<br>" .
            "<br>" . "Categoria: " . $categ. "<br>" .
            "<br>" . "Tipo de movimento: " . $movi. "<br>" .
            "<br>" . "Data de Início: " . $dtini. "<br>" .
            "<br>" . "Hora de Início: " . $hrini. "<br>" .
            "<br>" . "Data de Fim: " . $dfim. "<br>" .
          "<br>" . "Hora do Fim: " . $hrfim. "<br>" ;

  ?>  
<a href="excluir_cliente.php?id=<?php echo $id_funcionario?>">Excluir</a><br>
<a href="alterarCliente.php?id=<?php echo $id_funcionario?>">Alterar</a><br>
<?php

}

?>
  
