(function($){
    $(function(){
  
		$('.sidenav').sidenav(); //Efecto de barra para dispositivos móviles
		$('.parallax').parallax(); //Efecto parallax
		$('.fixed-action-btn').floatingActionButton(
		{
		direction:'left',
		}
		); //Efecto de botón flotante
		$('.dropdown-trigger').dropdown({
		constrainWidth:true, //Desobedece el tamaño del elemento que lo desencadenó
		coverTrigger:false, //No cubre el elemento que lo desencadenó
		hover:true, //Se activa al pasar el puntero 
		});
		$('.collapsible').collapsible(); //Para acordeón en menú móvil
		$('.scrollspy').scrollSpy(); //Efecto de scroll
		$('.slider').slider(          //Efecto de slider
		{
		indicators:false,
		duration:300,
		interval:5000,
		}
		);
		$('.modal').modal(); //Llamada a modal
		$('video').prop('muted',true)[0].play() //Reproducir video
	}); // end of document ready
})(jQuery); // end of jQuery name space