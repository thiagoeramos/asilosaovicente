$(function(){
        
// -----------------------------------------------------------------------------------------------------------------
// ANIMAÇÃO DE GALERIA DE IMAGENS ----------------------------------------------------------------------
	$('.galeria nav#thumbs ul li a').click(function(){
		ClearAllIntervals();	
		slideImages($(this).parent());
		return false;
	});
        $('.galeria').stop().hover(function(){
                $(this).find('nav#thumbs').slideDown("slow");
        },function(){
               $(this).find('nav#thumbs').slideUp("slow"); 
        });
        $(".galeria").find('nav').find('ul').after().click(function(){
                         var numElem=$(".galeria").find('nav').find('ul').find('li').length;
                         
                         for(i=1;i<=10;i++){                                 
                                              element.find('ul').find('li:eq('+i+')').hide('slow');                                   
                        }
                  
                        
                        for(i=10;i<=numElem;i++){                                 
                                              element.find('ul').find('li:eq('+i>+')').show('slow');                                   
                        }
                       
        });
 

// -----------------------------------------------------------------------------------------------------------------
// CONFIGURAÇÃO GLOBAL----------------------------------------------------------------------
     var config = new Array();
     config['menu'] ='nav#menu';
     config['submenu'] =$('#content_pages').find('nav');
     config['text'] ='.info';
     config['container'] ='section#content'; 	 
	showContent(config);

// -----------------------------------------------------------------------------------------------------------------
// LIGHTBOXES----------------------------------------------------------------------
        $('a.btModal,.close').live('click',function(){                 
                       
                   $('.lightbox').css({bottom:'-10px'}).slideToggle('slow');                   
                  
              return false;              
         });      
	
                $('.lightbox').draggable({ direction:'hotizontal'});
	
// -----------------------------------------------------------------------------------------------------------------
// CHAT ONLINE----------------------------------------------------------------------
        $("#init_chat").click(function(){
               $('form#form_chat').fadeOut("fast"); 
        });


});
