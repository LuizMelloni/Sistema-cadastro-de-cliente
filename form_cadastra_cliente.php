<?php
include('header.php');
?>
<div class="containerFormulario">
    <h1>Cadastrar cliente</h1>
    <button onclick="window.location.href = 'painelClientes.php'" class ="botaoVoltar">voltar</button>
    <a href="painelClientes.php"><img src="img/arrow-left.svg" alt=""></a>
    <br><br>
    <form action="ControleCliente.php?acao=cadastrar" method="post">
        <div class="floatLabel">
            <input type="text" name="nome" id="nome" required>
            <label for="nome" id="loginUser">Nome</label>
        </div>
        <br><br>
        <div class="floatLabel">
            <input type="text" name="telefone" id="telefone" required>
            <label for="telefone" id="loginUser">Telefone</label>
        </div>
        <br><br>
        <div class="floatLabel">
            <input type="text" name="email" id="email" required>
            <label for="email" id="loginUser">Email</label>
        </div>
        <br><br>
        <div class="floatLabel">
            <input type="text" name="endereco" id="endereco" required>
            <label for="endereco" id="loginUser">Endereço</label>
        </div>
        <br><br>
        <button class="botaoCadastrar" type="submit"> Cadastrar </button>
    </form>
</div>