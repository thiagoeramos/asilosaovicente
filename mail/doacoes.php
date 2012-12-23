<?php
if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])){
	$nome = $_POST['nome'];
	$from = $_POST['email'];
    $telefone = $_POST['telefone'];
	$mensagem = $_POST['mensagem'];
	
	$email_subject = "Interesse em Doação Site Asilo São Vicente"; // Assunto do e-mail 
	$mensagem = $_POST['mensagem']; // O texto do e-mail
	
	
	$email_to = "thiagomvnew@gmail.com"; // pra onde vai o e-mail
	
	$headers = "From: ".$from; 
	
	$semi_rand = md5(time()); 
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
	   
	$headers .= "\nMIME-Version: 1.0\n" . 
				"Content-Type: multipart/mixed;\n" . 
				" boundary=\"{$mime_boundary}\"";  
	
	$email_message = 	"Mensagem:". $mensagem. "<br>";
	$email_message .=	"\n\n--{$mime_boundary}\n";
	$email_message .=       "Content-Type:text/html; charset=\"iso-8859-1\"\n";
	$email_message .=	"Content-Transfer-Encoding: 7bit\n\n"; 
	$email_message .=	"Esse e-mail foi enviado pelo site<br>";
	$email_message .=	"<br>Nome:<br>". $nome. "<br>";
	$email_message .=	"<br>E-mail:<br>". $from ."<br>";
        $email_message .=	"<br>Telefone:<br>". $telefone ."<br>";
	$email_message .=	"<br>Mensagem:<br>" .$mensagem. "<br>" . "\n\n";  
	
	$ok =mail($email_to, $email_subject, $email_message, $headers); 
	
	if($ok){
		echo '<script>alert("email enviado com sucesso");history.back(-1);</script>';
                echo "email enviado com sucesso <a href='../doacoes.php'>Voltar</a>";
	}
        else{                
                echo '<script>alert("O email não pôde ser enviado! Tente mais tarde");history.back(-1);</script>';
                echo "O email não pôde ser enviado! Tente mais tarde <a href='../doacoes.php'>Voltar</a";
        }
}
else {
 echo '<script>alert("O e-mail Informado não exiet ou os campos não foram preenchidos corretamente");history.back(-1);</script>';
 echo "O e-mail Informado não exiet ou os campos não foram preenchidos corretamente  <a href='../doacoes.php'>Voltar</a";
}
?>