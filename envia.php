<?php
 $nome = addcslashes($_POST['nome']);
 $emai = addcslashes($_POST['email']);
 $celular = addcslashes($_POST['celular']);
 $texto = ($_POST['mensagem']);

$para = "victoralencar@gmail.com";
$assunto = "Contato - Portfolio";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular: ".$celular."\n".."Mensagem: ".$mensagem"\n";

$cabeca = "From: victoralencar810@gmail.com"."\n"."reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}
else{
    echo("Houve um erro ao enviar o e-mail!");
}


?>