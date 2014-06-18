<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Directorio Alberto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

    <div class="navbar  navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Directorio Alberto</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Inicio</a></li>
              
              
            </ul>
            <div class="btn-group pull-right">
            
            <a class="btn btn-info" href="http://abelabs.com">Abelabs.com</a> 
            	
          </div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
      	<span class="label label-info">Última modificación el 22 de Noviembre de 2012</span>
        <h1>Directorio de Alberto</h1>
        <p>Selecciona el proyecto que quieres visualizar</p>
        
        <?php

        $system = '/var/www/vhosts/httpdocs/';
        $files = scandir($system);
        foreach($files as $file){
        if (($file != '.') && ($file != '..') && ($file != '.DS_Store') && ($file != 'index.php') && ($file != 'folder.png') && ($file != 'css') && ($file != 'img') && ($file != 'js') && ($file != 'old') && ($file != 'test') && ($file != 'plesk-stat') && ($file != 'picture_library')){
		
		echo '<p><a href="'.$file.'"><i class="icon-folder-open"></i> '.$file.'</a></p>';
		}	
		}
		?>

        
        
        
       </div>

   
      <hr>

      <footer>
        <p>&copy; Abelabs 2012</p>
      </footer>

    </div> <!-- /container -->

</body>
</html>