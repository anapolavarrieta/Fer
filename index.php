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

    <!-- jQuery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.js"></script>
	<script src="css/Bootstrap/js/bootstrap.min.js"></script>
	<script src="js/jTabs.js"></script> 

	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="/images/engine1/style.css" />
	<script type="text/javascript" src="/images/engine1/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="/images/engine2/style.css" />
    <script type="text/javascript" src="/images/engine2/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

	<!-- Scrolling Nav JavaScript -->
    <script src="/css/Bootstrap/js/jquery.easing.min.js"></script>
    <script src="/css/Bootstrap/js/scrolling-nav.js"></script>
	
	

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
                
                	<a class="navbar-brand page-scroll" href="#page-top"><img src="images/logo.png"></a>
                
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
   <div class="container" id="contrast">
    <section id="about" class="about-section">
         

            <div class ="row"  >
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
                        día, por lo que siempre estamos innovando pr medio de nuestro conocimiento y sensibilidad a cada uno de nuestros clientes.
                    </p><br>				
            	</div>
            	<div class="col-md-2"></div>
            </div>

          
</section>
        	 </div>
    
    


    <!-- Sociales Section -->
    <div class="container">
    <section id="sociales" class="sociales-section">
        
            <div class="row">
                <div class="col-lg-12">

                    <!-- Start WOWSlider.com BODY section -->
                    <div id="wowslider-container1">
                        <div class="ws_images">
                            <ul>
		                      <?php for ($x = 1; $x <= 25; $x++) {?>
			                     <li><img src="/images/data1/images/sociales/imagen<?php echo $x?>.jpg" alt="Imagen<?php echo $x?>" title="Imagen<?php echo $x?>" id="wows1_0"/></li>
    	                       <?php }?>
                            </ul>
                        </div>
	
                        <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slideshow</a> by WOWSlider.com v7.7</div>
                        <div class="ws_shadow"></div>
                    </div>	
                    <script type="text/javascript" src="/images/engine1/wowslider.js"></script>
                    <script type="text/javascript" src="/images/engine1/script.js"></script>
                    <!-- End WOWSlider.com BODY section -->

                </div>
            </div>
        
    </section>
</div>
    <!-- Coorporativos Section -->
    <div class="container">
    <section id="coorporativos" class="coorporativos-section">

        
            <div class="row">
                <div class="col-lg-12">

                    <!-- Start WOWSlider.com BODY section -->
                    <div id="wowslider-container2">
                        <div class="ws_images">
                            <ul>
                              <?php for ($x = 1; $x <= 25; $x++) {?>
                                 <li><img src="/images/data2/images/imagen<?php echo $x?>.jpg" alt="Imagen<?php echo $x?>" title="Imagen<?php echo $x?>" id="wows1_0"/></li>
                               <?php }?>
                            </ul>
                        </div>
    
                      
                       
                    </div>  
                    <script type="text/javascript" src="/images/engine2/wowslider.js"></script>
                    <script type="text/javascript" src="/images/engine2/script.js"></script>
                    <!-- End WOWSlider.com BODY section -->
                </div>
            </div>
        
    </section>
</div>    
    <!-- Contratarnos Section -->
    <div class="container" id="contrast">
        <section id="contratarnos" class="contratarnos-section">
        

            <div class ="row"  >
                <div class="col-md-2"></div>
                <div class="col-md-8"  >
                    <h1><span>¿Por qué contratarnos?<span></h1>
                </br>
                    <ul>
                        <li>Abarcamos la logística de todo el evento </li>
                    </br></br>
                        <li>Nos encargamos de trabajar con los mejores proveedores </li>
                    </br></br>
                        <li>Nos adecuamos a tu presupuesto </li>
                    </br></br>
                        <li>Te recomendamos a los mejores proveedores </li>
                    </ul>
                </div>
                <div class="col-md-2"></div>
            
        </section>
    </div>

    <!-- Contact Section -->
     <div class="container">
        <section id="contact" class="contact-section">
       
            <div class="row">
                <div class="col-lg-12">
                    <h1><span>Contacto<span></h1>

                    <div class="row">
                        <p style="color:#FFF; text-align:center; font-size:large;"> E-mail: hola@fernandagarcia.mx</p> 
                        <p style="color:#FFF; text-align:center; font-size:large;"> Cel: 55-1068-5535</p> 
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
        <p style="color:#FFF; text-align:center; font-size:medium;"> Revillagigedo 18 Depto 910, Colonia Centro, CP. 06050 </p>

                
        </section>
        </div>

    
    

    

</body>

</html>
