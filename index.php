<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tricolor de paine</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<link href="reset_css.css" rel="stylesheet" type="text/css" media="all">
<link href="style.css" rel="stylesheet" type="text/css" media="all">

</head>

<body>
	<header>
    	<div class="center-fix">
        	<div id="logo">
            	<a href="#"><span>TRICOLOR DE PAINE</span></a>
            </div>
            	<ul id="top-menu">
                	<li><a href="#home">INICIO</a></li>
                	<li><a href="#integrantes">INTEGRANTES</a></li>
                    <li><a href="#contacto">CONTACTO	</a></li>

                </ul>
        </div>
	</header>
    <div id="content">
    	<div id="home">
        	<a name="home" class="section"></a>
        	<div id="skyline">
            </div>
        	<div class="center-fix">
        
				<h2>
				  <?php
	$prueba = array('por el desarrollo de software, como motor de la transformación de la realidad',
	 'La ingenieria de software bajo el mas alto standár de calidad',
	  'Porque la realidad no se acomode a la ingeniería de software, sino la ingeniería de software se acomode a la realidad',
	  'Tricolor de paine mas que una pasión, una forma de vivir la vida',
	  'Pueden arrancarme las entrañas, pero seguire siendo del tricolor de paine',
	  'por una ingeniería de software al servicio de la sociedad y que viva mil años el Tricolor de Paine',
	  'La maldición de enseñar (o aprender) la ingeniería de software. Edsger dijktra.',
	  'Ellos no saben lo que es tricolor de Paine hasta que se los enseñas" Steve Jobs Sandía',
	  'no sobredimensiones el proyecto de ingenierìa de software, primero empieza con un pequeño proyecto, luego va creciendo, hasta que llegue a ser aceptado de a pocos y llega a crecer" Steve Wosniak',
	  'Luchemos por darle el sitial que represente de mejor manera la Ingeniería de software',
	  'Si usted sabe lo que tiene que hacer.... entonces hagalo bien.',
	  'Hagalo bien');
	echo $prueba[9];

    ?>
				</h2>
            </div>
        </div>
    	<div id="integrantes">
        	<a name="descripcion" class="section"></a>
        	<div class="espacio_menu"></div>
        	<div class="center-fix">
            	<ul>
                	<li class="que_1">
                    	<span>
							<br><br><br><br><br><br><br><br><br><br/>
                    	<h3>Sebastian Ceron</h3>
                        <p>Carrera: Ingeneria civil en computaciíon m/informatica </p>
                        <p>Edad: 23 Años</p>
                        <a href="https://github.com/sceronl"> Github sceronl</a>
                    </li>
                    <li class="que_2">
                    	<span>
						<br><br><br><br><br><br><br><br><br><br>	
                    	<h3>FERNANDO RUBILAR</h3>
                        <p>Carrera: Ingeneria civil en computaciíon m/informatica </p>
                        <p>Edad: 24 Años</p>
                        <a href="https://github.com/frubilarz"> Github frubilarz</a></span>
                    </li>
                    <li class="que_3">
                    	<span>
							<br><br><br><br><br><br><br><br><br><br>
                    	<h3>Ignacio Briones</h3>
                        <p>Carrera: Ingeneria civil en computaciíon m/informatica </p>
                        <p>Edad: 24 Años</p>
                        <a href="https://github.com/IgnacioBriones"> Github IgnacioBriones</a> </span>
                    </li>
                </ul>
            </div>
        </div>
        
        
        
        
            	<div id="contacto">
        	<a name="contacto" class="section"></a>
        	<div class="espacio_menu"></div>
        	<div class="center-fix">
					<div id="content">
						<div class="centrado">
							<form id="form1" name="form1" method="post" action="enviar.php"> 
								
					<label> 
					<br/><br/>
					<p>Nombre:<br /> 
					<input name="nombre" type="text" id="nombre" /> 
					</label> 
					<br /> 
					Asunto:<br /> 
					<input name="asunto" type="text" id="asunto" /> 
					<br /> 
					Email:<br /> 
					<input name="email" type="text" id="email" /> 
					<br /> 
					Mensaje:<br /> 
					<textarea name="mensaje" id="mensaje" style="margin: 2px; height: 111px; width: 564px;"></textarea><br /> 
					<label> 
					<input type="submit" name="Submit" onclick="confirm('Su Formulario Ha sido enviado')" value="Enviar Formulario" /> 
					<br />
					<h3>
					Estamos atentos a tus comentarios, te responderemos a la brevedad Muchas Gracias
					</h3>
					<br>
					</label> 

						</div>
					</div>

            </div>
        </div>
        
        


    <footer>
    	<div class="center-fix">
        </div>
    </footer>
<script src="asset/jquery.js"></script>

<script>
// Cache selectors
var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }                   
});
</script>

</body>

</html>
