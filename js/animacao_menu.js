// ANIMAÇÃO PARA EXIBIÇÃO DE LINKS DE NAVEGAÇÃO UM APÓS O OUTRO ----------------------------------------------------
        $(function(){                
        var config = new Array();
        config['menu'] ='nav#menu';               	 
           animaMenu(config);        
	});
        
	function animaMenu(setElement){             
		$(setElement['menu']+' ul li').hide();
	      var numElem=0;
	        $(setElement['menu']+' ul li').each(function(){ // CONTAGEM DO TOTAL DE ELEMENTOS <li> NO MENÚ
	                numElem++;
	        });
	       
		i = 0;
		var animacao=setInterval( function() { // LOOP CONSTANTE ATÉ O ULTIMO <li> NO MENÚ
	                        if(i==numElem-1){ // CASO CHEGOU AO FIM
                                         
	                                $(setElement['menu']+' ul li:eq('+ i +') a').css('border','0px');
	                                clearInterval(animacao);
                                }
	                          	$(setElement['menu']+' ul li:eq('+ i +')').fadeIn("slow"); //EXIBIÇÃO DO <li> atual
			                    i = i + 1;
		}, 200);
               
	}

