<?php

require_once('database.php');
require_once('Cliente.php');


class ClienteDAO{

    public function checarRegistro(){
        try {
            
            $db = new Database();
            $connection = $db->conectar();

         
            $insert = $connection->query("SELECT * FROM cliente");
            $rows = $insert->rowCount();
            return $rows;
        } catch (Exception $e) {
            echo "Erro:  ".$e->getMessage();
        }
    } 
    
    public function listarCliente(){

        try {
            $db = new Database();
            $connection = $db->conectar();

            $insert = $connection->query("SELECT * FROM cliente ORDER BY nome ASC");

            $resultado = $insert->fetchAll();

            $db-> desconectar();
            return $resultado;

        } catch (Exception $e) {
            echo "Erro:".$e->getMessage();
        }

    }//Fim da função listarClientes()

    public function cadastrarCliente($objCliente){
        try {

            //Cria um objeto de conexão PDO
            $db = new Database();
            $connection = $db->conectar();

            //Parametrização utilizando o objeto Classe
            $nome = $objCliente->getNome();
            $telefone = $objCliente->getTelefone();
            $email = $objCliente->getEmail();
            $endereco = $objCliente->getEndereco();

            //Preparação da query SQL para Inserir os registros no banco de dados.
            $insert = $connection->query("INSERT INTO `cliente` (`id`, `nome`, `telefone`, `email`, `endereco`) 
                                        VALUES (NULL, '$nome', '$telefone', '$email', '$endereco')");

            //Fecha a conexão com o Banco de dados
            $db->desconectar();

        } catch (Exception $e) {
            echo "Erro ao inserir no Banco de Dados ".$e->getMessage();
        }

    }//Fim da função criarClasse().


    public function listarAtualizados($objCliente){
        try {
            
            //Cria um objeto de conexão PDO
            $db = new Database();
            $connection = $db->conectar();

            //Parametrização utilizando o objeto Classe
            $id = $objCliente->getId();

            $sql= $connection->query("SELECT * FROM cliente WHERE id = $id;");

            $resultado = $sql->fetch();
            
            $db->desconectar();

            return $resultado;

        } catch (Exception $e) {
            echo "ERRO: ".$e->getMessage();
        }
    }


    public function atualizarCliente($objCliente){

        try {

            //Cria um objeto de conexão PDO.
            $db = new Database();
            $connection = $db->conectar();

            $id = $objCliente->getId();
            $nome = $objCliente->getNome();
            $telefone = $objCliente->getTelefone();
            $email = $objCliente->getEmail();
            $endereco = $objCliente->getEndereco();

            
            $selectUpdate = $connection->query("UPDATE cliente 
                SET nome = '$nome', telefone = '$telefone', email = '$email', endereco = '$endereco'
              WHERE id = $id");

            //Finaliza a conexão com o Banco de Dados.
            $db->desconectar();

        } catch (Exception $e) {
            echo "Erro ao atualizar a classe. ".$e->getMessage();
        }

    }

    public function deletarCliente($objCliente){

        try {

            
            $db = new Database();
            $connection = $db->conectar();

            $id = $objCliente->getId();

            
            $sql = $connection->query("DELETE FROM cliente WHERE id = $id");
            

            //Fecha a conexão com o Banco de dados
            $db->desconectar();

        } catch (Exception $e) {
           echo "Erro ao deletar a classe ".$e->getMessage();
        }

    }//Fim da função deletarClasse($objClasse);



    

}

?>