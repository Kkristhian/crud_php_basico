<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('produto-database.php');  
?>

<?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $categoria_id = $_POST['categoria'];

    $sucesso = alteraProdutos($conexao, $id, $nome, $preco, $descricao, $categoria_id);
?>

    <div class="meio">
        <?php if($sucesso): ?>
            <h1>Atualizado com sucesso!</h1>
        <?php else: ?>
            <h1>Erro na atualização do produto!</h1>
        <?php endif; ?>
    </div>
    
   
<?php
    include_once('rodape.php');
?>