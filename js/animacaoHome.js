$(document).ready(function () {  


// -----------------------------------------------------------------------------------------------------------------
// ANIMAÇÃO DE GALERIA DE IMAGENS PARA A HOME ----------------------------------------------------------------------
	$('#galeria_principal ul li a').click(function(){
		ClearAllIntervals();	
		slideImages($(this).parent());
		return false;
	});

    
// -----------------------------------------------------------------------------------------------------------------
// SAÍDA DA APRESENTAÇÃO INICIAL DO SITE ----------------------------------------------------
		var timer=0;
         var timerApresentacao = setInterval( function(){
										if(timer==100){
										$('section#intro').animate({opacity:0.0},1000,function(){
                                        $(this).hide('fast');                                                             
										var config = new Array();
										config['menu'] ='nav#menu';
										config['submenu'] ='nav#thumbs';
										config['text'] ='.info';
										config['container'] ='section#content';       
										showContent(config);
                                                             
                                        });
										}
										timer++;
                                 
                        }, 50 );

// -----------------------------------------------------------------------------------------------------------------

// FINAL DO $(document).ready
}); 


 
