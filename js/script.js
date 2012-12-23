// ANIMAÇÃO DE PRELOADING ENQUANTO AS ANIMAÇÕES ABREM ----------------------------------------------------

	function preloading(){
		 $('#preloading').delay(100).slideToggle('slow'); 
			
		 var init=0;
		 var preloading=setInterval( function() { 
		 	if(init>100){		 		
		 		$('#preloading').html('Concluído ');		 		
		 	}else{
		  $('#preloading').html(' <progress value="'+init+'" max="100"></progress>Carregando ...('+init+') <img src="img/popup_ajax_loader.gif" /> ');
		 	

		 	 }
		 init+=10;
		 },100);
	}
// SLIDE DE IMAGENS DE GALERIAS -----------------------------------------------------------------------------
	function slideImages(elemento){
                  var verify=$('.galeria').find('nav#thumbs').length;
                           if(verify>0){ // se a página não conter slide show
                                 if(!elemento){                           
                                         var elemento=$('.galeria nav#thumbs ul li:eq(0)');
                                 }
                                 var numThumbs=$('.galeria').find('nav#thumbs').find('ul').find('li').length;
                                 var indice=$(elemento).index();                      
                                 anima(indice,numThumbs);
                           }
	}

	function anima(fila,thumbs){
		
		var total=thumbs;
		var imagem_atual=0;
		var newImage=0;	
                    imagem_atual=$('.galeria').find('nav#thumbs').find('ul').find('li:eq('+fila+')').find('a').attr('href');
                    newImage=imagem_atual;		      						     							
                  //  $('.galeria').css({"background":newImage});             
                    $('.galeria').find('figure').find('img').hide(400,function(){
                           $('.galeria').find('figure').find('img').attr('src',newImage);
                     $('.galeria').find('figure').find('img').show(1000);});
                      
                         
		  	var animacaoHome=setInterval( function() { 
                            imagem_atual=$('.galeria').find('nav#thumbs').find('ul').find('li:eq('+fila+')').find('a').attr('href');
	      						newImage=imagem_atual;
                            $('.galeria').find('figure').find('img').fadeOut(1000,function(){                           
                             $(this).fadeIn(1000).attr('src',newImage);});
	      						if(fila==thumbs){fila=0;
		      						clearInterval(animacaoHome);
		      						slideImages();

		      					}else{
	      							fila++;
	      						}
                                                    

			}, 3200);
			
	}
// LIMPANDO TODOS OS DELAYS-----------------------------------------------------------------------------
	function ClearAllIntervals(){
		for (var i=1; i<99999; i++)
			window.clearInterval(i);
	}

// ANIMAÇÃO PARA EXIBIÇÃO DE LINKS DE NAVEGAÇÃO UM APÓS O OUTRO ----------------------------------------------------
	function animaMenu(setElement){
                  var element=$(setElement['menu']);
                  element.find('ul').find('li').hide();
                  var numElem=element.find('ul').find('li').length;	       
                  i = 0;
                  var animacao=setInterval( function() { // LOOP CONSTANTE ATÉ O ULTIMO <li> NO MENÚ
	                        if(i==numElem-1){ // CASO CHEGOU AO FIM
	                               element.find('ul').find('li:eq('+i+')').find('a').css('border','0px');
	                                clearInterval(animacao);
	                                $('.galeria ul').fadeIn("slow");
	                                clearInterval(preloading);
	                                 $('#preloading').slideToggle('fast');
	                                                               
                                         animaSubmenu(setElement);
					slideImages(); // ANIMAÇÃO DE GALERIA DE IMAGENS PARA A HOME 
	                                
	                        }
	                          	 element.find('ul').find('li:eq('+i+')').fadeIn("slow"); //EXIBIÇÃO DO <li> atual
			            i = i + 1;
		}, 200);
	}
// SUBMENÚ ----------------------------------------------------
	function animaSubmenu(setElement){
         
		if(setElement['submenu']!=null){
                           var element=$(setElement['submenu']);
			element.show('fast').delay(10).animate({right:'20px'},600,function(){
			$(setElement['text']).slideToggle('slow'); //exibe texto da seção                                  
                                    
			});
		}
                
                         
                            var numElem=element.find('ul').find('li').length;
                            for(i=0;i<=numElem;i++){
                                    if(i>=10){
                                              element.find('ul').find('li:eq('+i+')').hide();
                                    }
                            }
	}        
// FUNÇÃO PARA EXIBIBIR O container ----------------------------------------------------
        function showContent(setElement){
			preloading();
			$(setElement['container']).fadeIn(2000);
			animaMenu(setElement);
                 
        }