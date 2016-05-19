<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FERNANDA : Coordinadora de Eventos</title>

    <!-- CSS -->
    <link href="/css/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/Bootstrap/css/scrolling-nav.css" rel="stylesheet">
     <link href="/css/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

    <!-- jQuery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.js"></script>
	<script src="css/Bootstrap/js/bootstrap.min.js"></script>
	<script src="js/jTabs.js"></script> 
    

	
	<!-- Scrolling Nav JavaScript -->
    <script src="/css/Bootstrap/js/jquery.easing.min.js"></script>
    <script src="/css/Bootstrap/js/scrolling-nav.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	

    <script type="text/javascript">
		$(document).ready(function(){	
			$("#ajax-contact-form").submit(function() {
				var str = $(this).serialize();		
				$.ajax({
					type: "POST",
					url: "contact_form/contact_process.php",
					data: str,
					success: function(msg) {
						// Message Sent - Show the 'Thank You' message and hide the form
						if(msg == 'OK') {
							result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
							$("#fields").hide();
						} else {
							result = msg;
						}
						$('#note').html(result);
					}
				});
				return false;
			});
		});	

  
	</script>
	

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

	<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="menu">	
        <div class="container">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                	<a class="navbar-brand page-scroll" href="#page-top"><img src="images/logo.png" class="logo"></a>
                
            </div>

            <div id="nav" class="fright">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">

                    <li>
                        <a class="page-scroll" href="#intro">Inicio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Quienes somos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#sociales">Eventos Sociales</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#coorporativos">Eventos Coorporativos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contratarnos">Por que contratarnos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        	</div>
        	<!-- /.nav -->
        </div>
        <!-- /.container -->  
        </div>
        <!-- /.menu -->
    </nav>


    <!-- Intro Section -->
    <section  class="intro-section"  id="intro">
    	
    </section>

    <!-- About Section -->

   <div class="container" >
    <section id="about" class="about-section">
       

            <div class ="row" id="abouttext" >
               
            	<div class="col-md-2"></div>
            	<div class="col-md-8" >

            		<h1><span>Quienes somos</span></h1>
            	</br>
            		<p id="contrast">Somos una empresa consolidada con más de 10 años de experiencia apoyando a nuestros clientes en la planeación,
                        organización, decoración y coordinación en todo tipo de eventos.</strong></p>
            	</br>
					<p id="contrast" >Contamos con un equipo de profesionales para hacer de cada evento una experiencia inolvidable, cuidando todos
                        los detalles.</p><br>
                </br>
                    <p id="contrast" >Estamos comprometidos con nuestros valores, tales como, puntualidad, creatividad, compromiso y dedicación con
                        cada cliente.</p><br>
                </br>
                    <p id="contrast" >En <span style=" font-weight: 600;"> Fernanda, Coordinadora de eventos</span>, sabemos lo especial que es ese
                        día, por lo que siempre estamos innovando por medio de nuestro conocimiento y sensibilidad a cada uno de nuestros clientes.
                    </p><br>			
            	</div>
            	<div class="col-md-2"></div>

            </div>
        </div>

          
</section>
        	 </div>
    



    <!-- Sociales Section -->
    <div class="container">
    <section id="sociales" class="sociales-section">
        
           <div class="row" id="centrar" ></div>
            <div class="row" id="socialestext" >
                
                
<div class="col-md-4" id="divsociales" >
            

<div  >
                <h1><span id="socialeshead">Eventos Sociales</span></h1>
            </br>

            <p> Estamos contigo en los momentos que vale la pena festejar </p>
        </br>
            <p> Sin importar el número de invitados, tu evento para nosotros es el más importante</p>
            </br>
            <p> Hacemos todo tipo de eventos (Bodas, bautizos, primeras comuniones, fiestas infantiles, graduaciones, etc)</p>
        </br>
            <p> Empezamos trabajando con clientes, terminamos siendo amigos </p>
   
            
        </div>
    </div>

         
        <div class="col-md-8" >
            <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic1" data-slide-to="0" class="active"></li>
    <?php for ($x = 2; $x <= 29; $x++) {?>
        <li data-target="#carousel-example-generic1" data-slide-to="<?php echo $x?>"></li>
    <?php }?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" id="active">
    <div class="item active" >
        <img src="/images/Sociales/imagen1.png">
      
</div>
            
   
     <?php for ($x = 2; $x <= 29; $x++) {?>
    <div class="item">
       
            <img src="/images/Sociales/imagen<?php echo $x?>.png" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <?php }?>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

                </div>
       
      
      
    </div>
 


        
        
    </section>
</div>


    <!-- Coorporativos Section -->
    <div class="container">
    <section id="coorporativos" class="coorporativos-section">
         <div class="row" id="centrar" ></div>
            <div class="row" id="socialestext" >
                
                
<div class="col-md-4" id="divsociales" >
            

<div  >

        
                <h1><span id="socialeshead">Eventos Coorporativos</span></h1>


        </br>
            <p> Hemos tenido el honor de trabajar en lugares como: </p>
            <ul>
                <li>Instituto Nacional de Bellas Artes </li>
                <li>Museo de Antropología e Historia</li> 
                <li>Museo Soumaya</li>
                <li>Museo Jumex</li>
                <li>Museo Nacional de Arte (MUNAL)</li>
                <li>Museo Nacional de San Carlos</li>
                <li>En varios estados organizando congresos y convenciones</li>
            </ul>

            
   
            
        </div>
    </div>
    <div class="col-md-8" >
           

<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
    <?php for ($x = 2; $x <= 22; $x++) {?>
        <li data-target="#carousel-example-generic2" data-slide-to="<?php echo $x?>"></li>
    <?php }?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" id="active">
    <div class="item active" >
        <img src="/images/Corporativos/imagen1.png">
     
    </div>
   
     <?php for ($x = 2; $x <= 22; $x++) {?>
    <div class="item">
       
            <img src="/images/Corporativos/imagen<?php echo $x?>.png" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <?php }?>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                </div>
            </div>
        
    </section>
</div>    
    <!-- Contratarnos Section -->
    <div class="container" id="contrast">
        <section id="contratarnos" class="contratarnos-section">
        
<div class="row" id="centrar" ></div>
            <div class ="row"  >
                <div class="col-md-3"></div>
                <div class="col-md-6" >
                    </br>
                    <h1><span>¿Por qué contratarnos?<span></h1>
                </br>
                    <ul>
                        <li>Porque sabemos lo que tu evento significa, cuidamos todos los detalles </li>
                    </br>
                        <li>Trabajamos con los mejores proveedores </li>
                    </br>
                        <li>Vivimos tu evento como si fuera nuestro y así aterrizamos tus ideas para que el evento sea único </li>
                    </br>
                        <li>Desarrollamos  ideas innovadoras y creativas </li>
                    </br>
                        <li>Contamos con más de 10 años de experiencia en organización de todo tipo de evento.</li>
                    </br>
                        <li>Por medio de nuestra experiencia  garantizamos que tanto  el cliente como los invitados disfruten al máximo</li>
                    </br>
                        <li>Nos ajustamos al presupuesto de cada cliente</li>
                    </ul>
                </div>
                <div class="col-md-3"></div>
            
        </section>
    </div>

    <!-- Contact Section -->
     <div class="container" id="contact">
        <section  class="contact-section" id="contact2">
       
            <div class="row">
                <div class="col-lg-12">
                    <h1><span>Contacto<span></h1>

                    <div class="row">
                        <p style="color:#FFF; text-align:center; font-size:large;"> E-mail: hola@fernandagarcia.mx</p> 
                        <p style="color:#FFF; text-align:center; font-size:large;"> Cel: 044-55-1068-5535</p> 
                    </div>
                </br>
                    <div class="contact_form"> 
                    <div id="note"></div>
                    <div id="fields">
                        <form id="ajax-contact-form" action="">
                            <div class="row">
                                <div class="col-md-6" id="forma">
                                    <p style="color:#FFF;">Nombre:</p>
                                    <p><input type="text" name="name" value="" placeholder="Name" /></p>   
                                </div>
                                <!-- <input type="text" name="subject" value="" placeholder="Phone" /> -->
                                <div class="col-md-6">
                                     <p style="color:#FFF;">Email:</p>
                                     <p><input type="text" name="email" value="" placeholder="Email" /></p>    
                                 </div>
                            </div>
                             </br></br>
                        
                            <div class="grid_12"><span style="color:#FFF;">Mensaje:</span><textarea name="message" id="message" placeholder="Message"></textarea></div>
                            </br></br>
                            <div class="boton">
                            <input type="reset" class="contact_btn" value="Borrar" />
                            <input type="submit" class="contact_btn send_btn" value="Enviar" />
                        </div>
                            <div class="clear"></div>
                        </form>
                    </div>
                </div>
                </div>
            </div>

        </br>
        <div id="facebook">
            <a target="_blank" href="https://www.facebook.com/Fernanda-Coordinadora-de-Eventos-516594341733376/" ><img src="images/Facebook.png" class="Facebook"></a>
        </div>
    </br>
        <p style="color:#FFF; text-align:center; font-size:medium;"> Revillagigedo 18 Depto 910, Colonia Centro, CP. 06050 </p>

                
        </section>
        </div>

    
    

    

</body>

</html>
