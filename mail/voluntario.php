<?php
if(isset($_POST['email']) && isset($_POST['nome']) && isset($_POST['mensagem'])){
	$nome = $_POST['nome'];
	$from = $_POST['email'];
	$mensagem = $_POST['mensagem'];
	
	$email_subject = "Contato Site Buccale"; // Assunto do e-mail 
	$mensagem = $_POST['mensagem']; // O texto do e-mail
	
	
	$email_to = "tiago_c@live.com"; // pra onde vai o e-mail
	
	$headers = "From: ".$from; 
	
	$semi_rand = md5(time()); 
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
	   
	$headers .= "\nMIME-Version: 1.0\n" . 
				"Content-Type: multipart/mixed;\n" . 
				" boundary=\"{$mime_boundary}\"";  
	
	$email_message = 	"Mensagem:". $mensagem. "<br>";
	$email_message .=	"\n\n--{$mime_boundary}\n";
	$email_message .=   "Content-Type:text/html; charset=\"iso-8859-1\"\n";
	$email_message .=	"Content-Transfer-Encoding: 7bit\n\n"; 
	$email_message .=	"Esse e-mail foi enviado pelo site<br>";
	$email_message .=	"<br>Nome do cliente:<br>". $nome. "<br>";
	$email_message .=	"<br>E-mail do cliente:<br>". $from ."<br>";
	$email_message .=	"<br>Mensagem:<br>" .$mensagem. "<br>" . "\n\n";  
	
	$ok = @mail($email_to, $email_subject, $email_message, $headers); 
	
	if($ok){
		echo "retval=1";
	}else{
		echo "retval=0";
	}
}
else {
echo "O e-mail não existe";
}
?>