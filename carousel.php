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


  
  <!-- Scrolling Nav JavaScript -->
    
    <script src="/css/Bootstrap/js/scrolling-nav.js"></script>

</head>

<body>
<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic1" data-slide-to="0" class="active"></li>
    <?php for ($x = 2; $x <= 24; $x++) {?>
        <li data-target="#carousel-example-generic1" data-slide-to="<?php echo $x?>"></li>
    <?php }?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" id="active">
    <div class="item active" >
        <img src="/images/data1/images/sociales/Imagen1.jpeg">
      
</div>
            
   
     <?php for ($x = 2; $x <= 24; $x++) {?>
    <div class="item">
       
            <img src="/images/data1/images/sociales/Imagen<?php echo $x?>.jpeg" alt="...">
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

</body>