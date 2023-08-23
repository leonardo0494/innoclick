<?php 

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST['telefone'];
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');
    $corpoDoEmail = "<b>Nome:</b> $nome<br />
    <b>E-mail:</b> $email<br />
    <b>Telefone:</b> $telefone<br /><br />
    Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b>.
    ";

    $emailPara = "leonardosilvadev@gmail.com";
    $assunto = "Lead Innoclick";

    try{
        $enviarEmail = mail($emailPara, $assunto, $corpoDoEmail);
    } catch(Exception $e){
        echo $e->getMessage();
    }