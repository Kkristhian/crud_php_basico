<?php
    class BancoDedados {
        private $con;
        function __construct($host,$user,$pass,$db) {
            $this->con = mysqli_connect($host,$user,$pass,$db);
        }
        function getCon() {
            return $this->con;
        }
    }
?>