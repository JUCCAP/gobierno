<html>
<head>
  <title>Portal de Gobierno</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="scripts/style.css">
  <script type="text/javascript">
    function Valida() {
      return true;
    }
  </script>
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

    <div class="form">
      <form method="post" action="ingreso.php" onsubmit="return Valida()">

        <label for="nombre"> Nombre del Proceso: </label>
        <input type="text" name="nombre">
        <label for="fecha_inicio">Fecha de Inicio: </label>
        <input type="date" name="fecha_inicio">
        <label for="fecha_fin">Fecha de Fin: </label>
        <input type="date" name="fecha_fin">
        <label for="inversion">Inversion: </label>
        <input type="number" name="inversion">
        <label for="riesgo">Riesgo: </label>
        <input type="number" name="riesgo">
        <label for="alineacion">Alineación: </label>
        <input type="number" name="alineacion">
        <label for="categoria">Categoría: </label>
        <input type="text" name="categoria">
        <!--
        <h3>Roles</h3>
        <br>
        <h4>Titular de la unidad</h4>
        <label for="name_tit">Nombre: </label>
        <input type="text" name="name_tit">
        <label for="ap_tit">Apellido Paterno: </label>
        <input type="text" name="ap_tit">
        <label for="am_tit">Apellido Materno: </label>
        <input type="text" name="am_tit">
        <label for="cargo_tit">Cargo: </label>
        <input type="text" name="cargo_tit">
        <label for="correo_tit">Correo: </label>
        <input type="text" name="correo_tit">

        <br>
        <h4>Responsable de la planeación</h4>
        <label for="es_titular">¿Es el titular de la unidad?</label>
        <input type="radio" name="es_tit" value="True">Si
        <br>
        <input type="radio" name="es_tit" value="False">No
        <?php

         ?>
        <label for="name_tit">Nombre: </label>
        <input type="text" name="name_tit">
        <label for="ap_tit">Apellido Paterno: </label>
        <input type="text" name="ap_tit">
        <label for="am_tit">Apellido Materno: </label>
        <input type="text" name="am_tit">
        <label for="cargo_tit">Cargo: </label>
        <input type="text" name="cargo_tit">
        <label for="correo_tit">Correo: </label>
        <input type="text" name="correo_tit">
      -->
        <input type="submit" name="submit" value="Enviar">
      </form>
    </div>
    <div class="boton_add">
      <a href="index.php">Regresar</a>
    </div>
  </section>
</body>
</html>
