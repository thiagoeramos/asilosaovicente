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
<meta name="description" content="Página de doações onde é possível enviar uma mensagem informativa ou tirar dúvidas"/>
<meta name="keywords" content="Asilo, Casa de Repouso de Guarulhos, São Vicente, Sociedade São Vicente, Asilo Cumbica"/>
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">          -->

  <title>Asilo São Vicente | Doações - Mande sua mensagem ou fale online</title>

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
   <div id="formDoacao" class="opacity89 lightbox forms behavior" draggable="true"> 
    <h3>Preencha corretamente todos os campos</h3>
    <a href="#" class="close behavior">Fechar </a>
			  <form action="mail/doacoes.php" method="post" id="form_doacoes" >
                                
                                <br />
                                <table>
                                        <tbody>                                    
                                        <tr>
                                                <td><label for="nome">Nome</label></td>
                                                <td>
                                 <input type="text"  name="nome" id="nome"  placeholder="Informe o nome completo"  />
                                 		</td>
                                         </tr>
                                        <tr>
                                                <td><label for="telefone">Telefone</label></td>
                                                <td><input type="text" name="telefone"   id="telefone" placeholder="(XX) - XXXX-XXXX "  /></td>                                        
                                        </tr>
                                        <tr>
                                                <td><label for="email">E-mail:</label></td>
                                                <td><input type="text"  name="email"   id="email" placeholder="exemplo@exemplo.com.br" /></td>
                                        </tr>				        
                                        <tr>
                                               <td><label for="mensagem">Mensagem:</label></td>
                                                <td><textarea name="mensagem"   id="mensagem" placeholder="Digite aqui sua mensagem sobre a sua doação" ></textarea></td> 
                                        </tr>
					<tr>
					  <td colspan="2"><br />
					    <input type="reset" name="limpar_campos" value="Limpar campos" class="bt borderSh behavior">
					    <input type="submit" name="enviar_doacao"  id="enviar_doacao" value="Enviar" class="bt borderSh behavior">
					  </td>
					</tr>
                                </tbody>
                                </table>
                        </form>
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
    
    <div id="main"  role="application">
      
      
            <div id="navegacao_principal">
        <nav id="menu"  class="borderSh behavior"  role="navigation">
                 <?php include "includes/menu.php";?>	
        </nav>
        </div>

        <article id="content_pages" class="galeria" role="article">
		<nav >		
			
		</nav>
		
		<div class="overlay opacity69"></div>
		<div class="info border margMin opacity89 behavior" role="application">
		<div id="scroller"><a href="#">---</a></div>	
		<header role="banner"><h1>Doações</h1></header>
		<article id="scrollText" role="article">
			<p>
			A Sociedade São Vicente de Paulo conta hoje com cerca de
			30 idosas internas,
			a casa de repouso é filantrópica,<br />
			portanto   precisa muito de ajuda e parcerias para arrecadar fundos e se manter.
			</p>
				<div class="box_destaque behavior">
					<h2> Aceitamos todo tipo de doação!</h2>
					Ligue e informe-se sobre a campanha que você pode participar ou simplesmente doe!				
					<p>
						Para doar por <strong>Telefone</strong> 
						ligue para 
							<abbr title="Nosso Telefone" >
								<strong>[11] 2412.7113</strong>
							</abbr>
							<br />
						Se Desejar mandar um <strong>E-mail </strong> envie sua mensagem para  
						<abbr title="Email do Asilo São Vicente" > asilosaovicente@gmail.com  </abbr>
						<br />
						Caso queira realizar sua doação por <strong>depósito bancário</strong> 
						diretamente, anote os dados:<br />                 
						<strong><abbr title="Banco" > Banco Bradesco </abbr> / <abbr title="Agência" >Agência: 0154-6</abbr> 
						 / <abbr title="Conta Corrente" >CC: 25467-3</abbr></strong>
					</p>
				</div> 
			
			 <br />
		
			<a href="#formDoacao"   id="iconForm" class="behavior btModal" > 
			Se desejar entre mande sua mensagem online <img src="img/setaDown.png" width="20" alt="Detalhe Botão" >
			</a> 


			
		</article>
             
		</div>
         <img src="img/shadow.png" class="shadow_Footer" alt="Detalhe de Sombra" />        
 </article>

    </div>
  

    <footer role="contentinfo" >
	<p class="navStyles">Rua Agudos, 96 | Guarulhos, São Paulo | Tel [11] 2412.7113</p>
    </footer>
          
    </section>
  </div> <!--! fim do container-->




  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
