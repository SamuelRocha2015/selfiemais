<?php


if(isset($_POST)){}

$nome = $_POST['name'];
$email = $_POST['email'];
$fone = $_POST['phone'];
$mensagem = $_POST['message'];
$data = $_POST['date'];


//'===================Envia Email===================''
	
// emails para quem será enviado o formulário
$emailenviar = "contato@selfiemais.com.br";
$assunto = "SelfieMais - Contato pelo site";
$corpoEmail = " Nome: $nome - Email: $email - Fone: $fone - Data do Evento: $data <br/>  Mensagem: $mensagem";

// É necessário indicar que o formato do e-mail é html
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= 'From: suporte.selfiemais@gmail.com';
//$headers .= "Bcc: $EmailPadrao\r\n";
    
//envia o email para contato@selfiemais.com.br
mail($emailenviar, $assunto, $corpoEmail, $headers);

//envia email para visitante que se cadastrou


$textoParaVisitante = "Bem vindo a SelfieMais, em breve nossa equipe entrar&aacute; em contato.";

mail($email, $assunto, $textoParaVisitante, $headers);	



//retorna a pagina principal	
echo "<script>alert('Entraremos em breve em contato');window.location='../../index.php';</script>";

?>