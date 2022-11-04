<?php

$id_func = $_GET['id'];

require 'conexao.php';

$sql= "select * from usuarios where id = $id_func";

$result = mysqli_query($con, $sql);

$dados = mysqli_fetch_assoc($result);

$id_funcionario = $dados ['id'];
$nome_funcionario = $dados ['nome'];
$numero_conteiner = $dados ['numero'];
$tp= $dados ['tipo'];
$st = $dados ['status'];
$categ = $dados ['categoria'];
$movi = $dados ['movimento'];
$dtini = $dados ['dtinicio'];
$hrini = $dados ['horainicio'];
$dfim = $dados ['dtfim'];
$hrfim = $dados ['horafim'];

?>

<fieldset>
    
    <legend> Edição de Clientes:</legend>
    
    <form action="alterarCliente.php" method="POST">
        <label for="id">ID:</label>
        <input type="text" readonly id="id" name="id" value="<?php echo $id_funcionario ?>"><br>
               
         <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome_funcionario" value="<?php echo $nome_funcionario ?>"><br><!-- comment -->
               
         <label for="numero">Numero:</label>
        <input type="text"  id="numero"  name="numero"value="<?php echo $numero_conteiner ?>"><br>
               
     <p>Status:</p>  
     
     <input type="radio" name="status" id="Cheio" value="<?php echo $st ?>"required>
     <label for="cheio"> Cheio </label><!-- comment -->
     <br>
     <input type="radio" name="status" id="Vazio" value="<?php echo $st ?>"required>
     <label for="Vazio"> Vazio </label><!-- comment -->
     <br><!-- comment -->
     
     <p>TIPO:</p><!-- comment -->
     <input type="radio" name="tipo" id="20" value="<?php echo $tp ?>"required>
     <label for="20"> 20</label><!-- comment -->
     <br>
     <input type="radio" name="tipo" id="40" value="<?php echo $tp ?>"required>
     <label for="40"> 40 </label><!-- comment -->
     <br><!-- comment -->
     
     <p>Categoria: </p><!-- comment -->
     <input type="radio" name="categoria" id="Importacao" value="<?php echo $categ ?>"required>
     <label for="Importacao"> Importacao</label><!-- comment -->
     <br>
     <input type="radio" name="categoria" id="Exportacao" value="<?php echo $categ ?>"required>
     <label for="Exportacao"> Exportacao </label><!-- comment -->
     <br><!-- comment -->
     
     <p>____________________________________________________</p><!-- comment -->
     
     <p>Movimentação: </p><!-- comment -->
     <input type="radio" name="movimento" id="Embarque" value="<?php echo $movi?>"required>
     <label for="Embarque"> Embarque</label><!-- comment -->
     <br>
     <input type="radio" name="movimento" id="Descarga" value="<?php echo $movi ?>"required>
     <label for="Descarga"> Descarga </label><!-- comment -->
     <br><!-- comment -->
      <input type="radio" name="movimento" id="Gate-in" value="<?php echo $movi ?>"required>
     <label for="Gate-in"> Gate-in</label><!-- comment -->
     <br>
     <input type="radio" name="movimento" id="Gate-out" value="<?php echo $movi ?>"required>
     <label for="Gate-out"> Gate-out </label><!-- comment -->
     <br><!-- comment -->
      <input type="radio" name="movimento" id="Reposicionamento" value="<?php echo $movi?>"required>
     <label for="Reposicionamento"> Reposicionamento</label><!-- comment -->
        <br>
     <input type="radio" name="movimento" id="Pesagem" value="<?php echo $movi?>"required>
     <label for="Pesagem"> Pesagem </label><!-- comment -->
     <br><!-- comment -->
      <input type="radio" name="movimento" id="Scanner" value="<?php echo $movi ?>"required>
     <label for="Scanner"> Scanner</label><!-- comment -->
     <br>

     <p>Data e Horario:</p><!-- comment -->
     <br><!-- comment -->
     <p>Inicio:</p><!-- comment -->
     <input type="date" name="dtinicio" id="dataInicio" value="<?php echo $dtini?>" required">
     <input type="time" name="horainicio" id="horainicio" value="<?php echo $hrini?>" required">
     <br>
     <p>FIM:</p>
     <input type="date" name="dtfim" id="dataFim" value="<?php echo $dfim?>" required">
     <input type="time" name="horafim" id="horafim" value="<?php echo $hrifim?>" required">
     
     <input type="submit" value="ALTERAR">
         
    </form>  
         
     
         
     
   
               
               
</fieldset>
    

