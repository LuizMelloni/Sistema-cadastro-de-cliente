<?php 

require_once('controleCliente.php');
include('header.php');

$cliente = mostrarClientes();

if(checkClientes()) {?>

    <div class="mainCreate">
        <div class="classTitle">
            <h1>Clientes cadastrados</h1>
            <button class = "btnNovoCliente" onclick="window.location.href = 'form_cadastra_cliente.php'"> Novo cliente </button>
        </div>
        <!-- <div class="containerTable"> -->
            <table id="tableClient">
            <tr>
                    <th id="primeiroTH" width = 150px>Nome</th>
                    <th width = 150px>Telefone</th>
                    <th width = 150px>Email</th>
                    <th width = 150px>Endereço</th>
                    <th width = 50x>Editar</th>
                    <th id="ultimoTH" width = 50px>Excluir</th>
                </tr>
            <?php
            foreach($cliente as $cliente){            
                ?>
                <tr id="tabelaCliente">
                    <td><?php echo $cliente['nome']?></td>
                    <td><?php echo $cliente['telefone']?></td>
                    <td><?php echo $cliente['email']?></td>
                    <td><?php echo $cliente['endereco']?></td>
                    <td> <a href="form_atualiza_cliente.php?id=<?php echo $cliente['id']?>"><img class="icons" src="img/brush-fill.svg" alt=""></a></td>
                    <td> <a href="controleCliente.php?id=<?php echo $cliente['id'] ?>&acao=excluir"><img onclick="openModal()" class="icons" src="img/eraser-fill.svg" alt=""></a></td>
                </tr>
            <?php    
            }
            ?>
            </table>
        </div>
    </div>

    <?php
} else {
    ?>

    <div class="registerNull">
        <p class="registerText">Você ainda não tem clientes cadastrados. <a href="formCadastro.php">Clique aqui</a> para cadastrar um.</p>
    </div>
<?php    
}