<?php include('scripts/utilidades.php'); ?>
<html>
<head>
  <title>Portal de Gobierno</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="scripts/style.css">
</head>
<body>
  <nav>
    <ul>
      <li><a href="#">Planeación Estrategica</a></li>
      <li><a href="#">Contrataciones</a></li>
      <li><a href="#">Arquitectura Empresarial</a></li>
      <li><a href="#">MAAGTICSI</a></li>
      <li><a href="#">Efirma </a></li>
    </ul>
  </nav>
  <section class="container">


    <div class="hor_line">
      Ingreso de Nuevo Proyecto
    </div>
    <div class="info">
      <?php $con = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=gobierno"); ?>
      <?php
        if(isset($_POST['nombre'])) {
          $nombre = sanitizeString($_POST['nombre']);
        }
        if(isset($_POST['fecha_inicio'])) {
          $fecha_inicio = sanitizeString($_POST['fecha_inicio']);
        }
        if(isset($_POST['fecha_fin'])) {
          $fecha_fin = sanitizeString($_POST['fecha_fin']);
        }
        if(isset($_POST['inversion'])) {
          $inversion = sanitizeString($_POST['inversion']);
        }
        if(isset($_POST['riesgo'])) {
          $riesgo = sanitizeString($_POST['riesgo']);
        }
        if(isset($_POST['alineacion'])) {
          $alineacion = sanitizeString($_POST['alineacion']);
        }
        if(isset($_POST['categoria'])) {
          $categoria = sanitizeString($_POST['categoria']);
        }

        $query = "INSERT INTO Proceso (nombre,fecha_inicio,fecha_fin,inversion,riesgo,alineacion,categoria) VALUES ('$nombre','$fecha_inicio','$fecha_fin','$inversion','$riesgo','$alineacion','$categoria')";

        $result = pg_query($con,$query) or die ("Error al ingresar datos");

        echo '<p>Ingresado correctamente</p>';
       ?>

    </div>


    <div class="boton_add">
      <a href="index.php">Inicio</a>
    </div>
  </section>
</body>
</html>
