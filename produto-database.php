<?php
    function listaProdutos($conexao){
        $produtos = array();

        $sql = "
            SELECT pro.*, cat.nome AS cat_nome
              FROM produtos AS pro
              JOIN categorias AS cat
                   ON cat.id = pro.categoria_id
        ";

        $query = mysqli_query($conexao,$sql);
        while ($linha = mysqli_fetch_assoc($query)) {
            array_push($produtos,$linha);
        }

        return $produtos;
    }

    function alteraProdutos($conexao, $id, $nome, $preco, $descricao, $categoria_id){
        $query = "UPDATE produtos set nome = '{$nome}',preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoria_id} where id={$id}";
        return mysqli_query($conexao, $query);
    }
    function buscaProduto ($conexao, $id){
        $query = "select p.*,
                    c.nome as categoria_nome
                    from produtos as p
                    inner join categorias as c
                    on c.id = p.categoria_id
                    where p.id={$id}";
        $resultado = mysqli_query($conexao, $query);
        return mysqli_fetch_assoc($resultado);
    }
    function buscarCategorias($conexao) {
        $resultado = array();
    
        $sql = "SELECT * FROM categorias";
        $query = mysqli_query($conexao,$sql);
        
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($resultado,$row);
        }
        return $resultado;
    }
    function adicionarProduto($conexao,$nome,$preco,$descricao,$categoria) {
        $query = "INSERT INTO produtos (nome,preco,descricao,categoria_id) VALUES ('$nome','$preco','$descricao','$categoria')";
        return mysqli_query($conexao,$query);
    }
    function removeProduto($conexao, $id){
        $query = "DELETE from produtos where id = {$id}";
        return mysqli_query($conexao, $query);
    }
?>