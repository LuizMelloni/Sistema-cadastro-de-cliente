<?php

require_once('clienteDAO.php');

    $acao="";
    if(isset($_GET["acao"])){
        $acao = $_GET["acao"];
    } else{}

    switch ($acao) {
        case 'atualizar':
            alterarCliente();
            break;
        case 'cadastrar':
            novoCliente();
            break;
        case 'excluir':
            excluirCliente();
            break;
    }
    
    function checkClientes(){

        $clienteDAO = new ClienteDAO();

        $linhas = $clienteDAO->checarRegistro();
     
        $check;
        if($linhas > 0){
            $check = true;
        }else{
            $check = false;
        }
        return $check;
        
    } 


    function mostrarClientes(){

        $clienteDAO = new ClienteDAO();
        $resultado = $clienteDAO->listarCliente();
        return $resultado;

    } 

    function novoCliente(){

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];

        
        $cliente = new Cliente();
        $cliente->setNome($nome);
        $cliente->setTelefone($telefone);
        $cliente->setEmail($email);
        $cliente->setEndereco($endereco);
        


        $clienteDAO = new ClienteDAO();
        $clienteDAO->cadastrarCliente($cliente);

        header('Location: painelClientes.php');


    } 


    function mostrarAtualizados(){

        $id = $_GET['id'];

        $cliente = new Cliente();
        $cliente->setId($id);

        $clienteDAO = new ClienteDAO();
        $resultado = $clienteDAO->listarAtualizados($cliente);
        return $resultado;
    }

    function alterarCliente(){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $telefone= $_POST['telefone'];
        $email= $_POST['email'];
        $endereco= $_POST['endereco'];
        
                
        $cliente = new Cliente();
        $cliente -> setId($id);
        $cliente -> setNome($nome);
        $cliente -> setTelefone($telefone);
        $cliente -> setEmail($email);
        $cliente -> setEndereco($endereco);
        

        $clienteDAO = new ClienteDAO();
        $clienteDAO -> atualizarCliente($cliente);

        
        Header("Location: painelClientes.php");

    }


    function excluirCliente(){

        $id = $_GET['id'];

        $cliente = new Cliente();
        $cliente->setId($id);

        $clienteDAO = new ClienteDAO();
        $clienteDAO -> deletarCliente($cliente);

        header('Location: painelClientes.php');

    }