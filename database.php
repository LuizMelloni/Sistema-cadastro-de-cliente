<?php

    class Database{

        protected $connection;

        function __construct(){

        }//Fim do método Construct

        function conectar(){

            try {
                //Criação de objeto PDO
                $connection = new PDO('mysql:host=localhost;dbname=rapaz','root','');
                return $connection;

            } catch (PDOException $e) {
                echo "ERROR: ".$e->getMessage();
                die();
            }

        }//Fim da função conectar()

        public function desconectar(){

            $connection = null;

        }//Fim da função desconectar()


    }//Fim da Classe Database

?>