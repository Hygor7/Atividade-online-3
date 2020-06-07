<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/exibir.css"/>
</head>    
<body>

<div>
    <?php
        $vnome=$_POST["nome"];
        $vemail=$_POST["email"];
        $vcel=$_POST["telefone_celular"];
        $vassunto=$_POST["assunto"];
        $vmsg=$_POST["mensagem"];

        echo "Nome do cliente: ".$vnome."<br/>E-mail de contato: ".$vemail."<br/>Telefone para contato: ".$vcel."<br/>motivo do contato: ".$vassunto."<br/>Mensagem: ".$vmsg;
    ?>
    </div>
</body>
</html>

