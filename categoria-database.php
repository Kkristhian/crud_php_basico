<?php

    class categoriaDto{
        private $database;

        public function __construct($conexao){
            $this->database = $conexao;
        }
        public function listaCategorias(){
            $categorias = array();
            $query = "select * from categorias";
            $resultado = mysqli_query($this->database->getConexao(), $query);
            while ($categorias = mysqli_fetch_assoc($resultado)){
                array_push($categorias, $categoria);
            }
            return $categorias;
        }

    }
