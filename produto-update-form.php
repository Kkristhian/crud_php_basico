<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('produto-database.php'); 
    
    $produto = buscaProduto($conexao,$_GET['id']);
?>

<form action = "produto-update.php" method="POST">
<div class="form-group">
    <label for="id">ID</label>
    <input type="number" value="<?=$produto['id']?>" name="id" class="form-control" id="inputName"  placeholder="Id">
  </div>
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" value="<?=$produto['nome']?>" name="nome" class="form-control" id="inputName"  placeholder="Nome Produto">
  </div>
  <div class="form-group">
    <label for="Preco">Preço</label>
    <input type="number" step="0.01"value="<?=$produto['preco']?>" name="preco" class="form-control" id="inputPreco"  placeholder="Preço Produto">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" value="<?=$produto['descricao']?>" name= "descricao" class="form-control" id="inputDescricao"  placeholder="Descriçao Produto">
  </div>
  <div class="form-group">
    <label for="Categoria">Categoria</label>
    <input type="categoria" value="<?=$produto['categoria_id']?>" name="categoria" class="form-control" id="inputcategoria"  placeholder="Categoria Produto">
  </div>
  
  <button type="enviar" class="btn btn-primary">Enviar</button>
</form>


<?php
    include_once('rodape.php');
?>