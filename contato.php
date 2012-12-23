<!doctype html>
<!-- HAKS CSS PARA IE -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="robots" content="index,follow ">
<meta name="description" content="Página de contato para envio de mensagens para o setor administrativo do Asilo São Vicente de Paulo"/>
<meta name="keywords" content="Asilo, Casa de Repouso de Guarulhos, São Vicente, Sociedade São Vicente, Asilo Cumbica"/>
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">          -->

  <title>Asilo São Vicente | Contato - Mande sua mensagem ou fale online</title>

  <meta name="author" content="Thiago Ramos e Danila Ramos | Danthy Software">

  <!-- VSUALIZA&#xc3;&#x87;&#xc3;&#x83;O PARA MOBILES-->
  <meta name="viewport" content="width=device-width,initial-scale=1">


  <link rel="stylesheet" href="css/style.css">
 

  <!-- BIBLIOTECA PARA APERFEI&#xc3;&#x87;OAMENTO DE EXIBI&#xc3;&#x87;&#xc3;&#x83;O  DE CSS2 e 3 E HTML5 PARA VERS&#xc3;&#x95;ES ABAIXO DE 8 DO IE -->
        <script src="js/libs/modernizr-2.0.6.min.js"></script>
        <script src="js/libs/jquery-1.6.2.min.js"></script>
        <script src="js/libs/jquery-ui-1.8.16.custom.min.js"></script>
	<script src="js/libs/jquery.ui.draggable.js"></script>
	<script src="js/libs/jquery.ui.mouse.js"></script>
	
	
	
        <script  src="js/plugins.js"></script>
        <script  src="js/animacaoPages.js"></script>
        
        <script  src="js/script.js"></script> 
        
		
</head>

<body>
  <div class="overlay_lightbox opacity69"></div> 
   
      <div id="formChat" class="opacity89 lightbox behavior forms">
        <a href="#" class="close behavior">Fechar </a>
        <h3>Fale com um de nossos atendentes On-line</h3>
        <form action="Chat/index.php" method="post" target="chat" id="form_chat"><br />
                <table >
                                        <tbody>                                    
                                        <tr>
                                                <td>
                                                <label for="nick">Informe seu nome</label></td>
                                                <td><input type="text" name="nick" id="nick" autofocus  required placeholder="Informe o nome completo" ></td>
                                         </tr>
                                       
					<tr>
					  <td colspan="2"><br />
					    <input type="reset" name="limpar_campos" value="Limpar campos" class="bt borderSh behavior">
					    <input type="submit" name="init_chat"  formnovalidate id="init_chat" value="Enviar" class="bt borderSh behavior">
					  </td>
					</tr>
                                </tbody>
                                </table> 
        </form>
              
<iframe src="Chat/index.php" style="overflow-x:hidden;"  name="chat" allowtransparency="true" >

</iframe>

      </div>
      
      
<div id="preloading" class="loader"></div>


  <div id="container">
  <section id="content" role="main">
    <header role="banner">
      <hgroup>
      <h1>CASA DE REPOUSO</h1>
      <h2>S&#xc3;O VICENTE DE PAULO</h2>
      </hgroup>
 
    </header>
    
    <div id="main" role="application">
      
      
            <div id="navegacao_principal">
        <nav id="menu"  class="borderSh behavior"   role="navigation">
                 <?php include "includes/menu.php";?>	
        </nav>
        </div>

        <article id="content_pages" class="galeria"  role="article">
		<nav >		
			
		</nav>
		
		<div class="overlay opacity69"></div>
		<div class="info border margMin opacity89 behavior" role="application">
		<div id="scroller"><a href="#">---</a></div>	
		<header  role="banner"><h1>Contato</h1></header>
		<article id="scrollText" role="article">
			<p>
			<h2>Saiba mais sobre a Sociedade São Vicente de Paulo</h2> 
			Agende uma visita ou venha nos visitar!<br />
			<strong> Estamos na Rua: Agudos, 96 - Bairro do Jardim Cumbica -  Guarulhos / SP</strong><br />
			Telefone : <abbr title="Nosso Telefone" >[11] 2412.7113</abbr>
			Email:<abbr title="Email do Asilo São Vicente" > asilosaovicente@gmail.com  </abbr><br />
			</p>
                         <h3>Mande sua mensagem ou 
                        <a href="#formChat"  id="iconForm" class="behavior btModal" >
                                entre no nosso chat online
                        </a>
                        </h3>
                         <br /><br />
                         
   <div id="formContato" class="forms" role="application">
    <h3>Formulário de contato</h3>
			  <form action="mail/doacoes.php" method="post" id="form_doacoes" >
                                
                                <br />
                                <table >
                                        <tbody>                                    
                                        <tr>
                                                <td><label for="nome">Nome</label></td>
                                                <td><input type="text" name="nome" id="nome" placeholder="Informe o nome completo" ></td>
                                         </tr>
                                        <tr>
                                                <td><label for="telefone">Telefone</label></td>
                                                <td><input type="text" name="telefone" id="telefone" placeholder="(XX) - XXXX-XXXX "></td>                                        
                                        </tr>
                                        <tr>
                                                <td><label for="email">E-mail:</label></td>
                                                <td><input type="text" name="email" id="email" placeholder="exemplo@exemplo.com.br"  ></td>
                                        </tr>				        
                                        <tr>
                                               <td><label for="mensagem">Mensagem:</label></td>
                                                <td><textarea name="mensagem" id="mensagem" placeholder="Digite aqui sua mensagem sobre a sua doação"  ></textarea></td> 
                                        </tr>
										<tr>
										  <td colspan="2" <br />
										    <input type="reset" name="limpar_campos" value="Limpar campos" class="bt borderSh behavior">
										    <input type="submit" name="enviar_doacao" id="enviar_doacao" value="Enviar" class="bt borderSh behavior">
										  </td>
										</tr>
                                </tbody>
                                </table>
                        </form>
                             
                 </div>
                                     
                       
		</article>
             
		</div>
         <img src="img/shadow.png" style="" class="shadow_Footer" alt="Detalhe de Sombra" />        
 </article>

    </div>
  

    <footer  role="contentinfo">
	<p class="navStyles">Rua Agudos, 96 | Guarulhos, São Paulo | Tel [11] 2412.7113</p>
    </footer>
          
    </section>
  </div> <!--! fim do container-->


  <!-- Para a leitura mais r&#xc3;&#xa1;pida da p&#xc3;&#xa1;gina colocamos a url das bibliotecas javascript depois de todo o conte&#xc3;&#xba;do-->

  <!-- T&#xc3;&#xa9;cnica para leitura da biblioteca javascript direto do google, caso  a biblioteca por l&#xc3;&#xa1; n&#xc3;&#xa3;o tiver dispon&#xc3;&#xad;vel  a leitura  &#xc3;&#xa9; feita localmente -->


  <!-- Scripts do site -->


  <!-- end scripts-->


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
