<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"> </script>
    <title>Verificação de formulário</title>
</head>
<body>
    <p> Sistema de verificação do preenchimento de requisitos de um formulário </p>
    <?php include('avisos.html'); ?>
    <form onsubmit="return verificar()"> 
        <input type="text" id="nome" placeholder="Nome" >
        <br>
        <input type="text" id="email" placeholder="E-mail">
        <br>
        <input type="text" id="senha" placeholder="Senha" >
        <br>
        <input type="text" id="senha2" placeholder="Confirmar a senha" >
        <br>
        <input type="submit" value="Botão">
    </form>
</body>
</html>