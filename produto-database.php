<?php
    function listaProdutos($conn){
        $sql = "
            SELECT pro.*, cat.nome AS cat_nome
              FROM produtos AS pro
              JOIN categorias AS cat
                   ON cat.id = pro.categoria_id
        ";

        $produtos = $conn->prepare($sql);
        $produtos->execute();

        return $produtos->fetchAll();
    }