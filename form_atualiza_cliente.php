<?php

include('header.php');
require_once('controleCliente.php');

$cliente = mostrarAtualizados();
?>

<div class="containerFormulario">
    <h1>Atualizar cadastro</h1>
    <button onclick="window.location.href = 'painelClientes.php'" class ="botaoVoltar">voltar</button>
    <a href="painelClientes.php"><img src="img/arrow-left.svg" alt=""></a>
    <br><br>
    <form action="controleCliente.php?acao=atualizar" method="post">
        <input type="hidden" name="id" value="<?php echo $cliente['id']?>">
        <div class="floatLabel">
            <input type="text" name="nome" id="nome" value="<?php echo $cliente['nome']?>" required>
            <label for="nome" id="loginUser">Nome</label>
        </div>
        <br><br>
        <div class="floatLabel">
            <input type="text" name="telefone" id="telefone" value="<?php echo $cliente['telefone']?>" required>
            <label for="telefone" id="loginUser">Telefone</label>
        </div>
        <br><br>
        <div class="floatLabel">
            <input type="text" name="email" id="email" value="<?php echo $cliente['email']?>" required>
            <label for="email" id="loginUser">Email</label>
        </div>
        <br><br>
        <div class="floatLabel">
            <input type="text" name="endereco" id="endereco" value="<?php echo $cliente['endereco']?>" required>
            <label for="endereco" id="loginUser">Endereço</label>
        </div>
        <br><br>
        <button class="botaoCadastrar" type="submit"> Atualizar </button>
    </form>
</div>
