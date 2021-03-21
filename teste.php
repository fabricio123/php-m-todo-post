<!DOCTYPE html>
<html>
<body>
<head>
    <title>Dev Digital</title>
    <meta charset="utf-8"/>
</head>
<body>
    <form class="formulario" method="post"> 
        <p> Envie uma mensagem preenchendo o formulário abaixo</p>
        
        <div class="field">
            <label for="nome">Seu Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome*" required>
        </div>
<input type="submit" name="acao" value="Enviar">
    </form>
<?php
    if (isset($_POST["acao"])){
        $nome=$_POST["nome"];
        echo "<p>Olá, ".$nome."</p>";
}
?>

</body>
</html>
