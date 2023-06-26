<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CNE</title>
    <!--- IMPORTAR jquery-->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!-- Optional theme -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 <!-- Latest compiled and minified JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--Importar API-->
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBATSumqnJTuJpeJ1KZgkIMllydVtN5qZI&callback=initMap">
 </script>


  </head>
  <body  background-image: url("https://www.shutterstock.com/image-photo/ecuador-national-flag-cloth-fabric-260nw-1665123259.jpg") >
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url();?>">Inicio</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo site_url();?>/inscripciones/normativas">Normativas<span class="sr-only">(current)</span></a></li>
          <li><a href="<?php echo site_url();?>/inscripciones/instituciones">Instituciones</a></li>
          <li><a href="<?php echo site_url();?>/inscripciones/nuevo">Registro</a></li>
          <li><a href="<?php echo site_url();?>/inscripciones/registro">Listado Candidatos</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url();?>/domicilios/presidentes">Presidentes</a></li>
              <li><a href="<?php echo site_url();?>/domicilios/nacionales">Asambleistas Nacionales</a></li>
              <li><a href="<?php echo site_url();?>/domicilios/provinciales">Asambleistas Provinciales</a></li>
              <li><a href="<?php echo site_url();?>/domicilios/general">General</a></li>
              <li><a href="<?php echo site_url();?>/domicilios/tipos">Tipo</a></li>



            </ul>
          </li>
        </ul>





      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
