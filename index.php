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
    <div id="anio">
      <p>Año a consultar</p>

      <input type="date" name="date_cons" id="date_cons">
    </div>
    <div id="search">
      <input type="button" value="Buscar" name="search" id="search"/>
      <input type="button" value="Descargar" name="search" id="search"/>
    </div>
    <div class="boton_add">
      <a href="add.php">Añadir Proceso</a>
    </div>
    <div class="hor_line">
      Relación de presupuesto de proyectos
    </div>
    <div id="square">
      <p>Presupuesto Estimado</p>
      <p style="color:#217c40;">$0.00</p>
    </div>
    <?php $con = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=gobierno");
    if(!$con){
      echo "Error de conexión.\n";
      exit;
    }?>
    <table class="proyectos">
      <tr>
        <th>Proyecto Estrategico</th>
        <th>Inversión</th>
        <th>Riesgo</th>
        <th>Tiempo</th>
        <th>Alineacion</th>
        <th>Categoría</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
      </tr>


        <?php
          $result = pg_query($con, "SELECT * FROM Proceso");
          if (!$result) {
            echo "Ocurrió un error.\n";
            exit;
          }

          while ($row = pg_fetch_row($result)) {
            echo "<tr>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[5]</td>";
            echo "<td>$row[6]</td>";
            //echo "<td>" + ($row[3] - $row[2]) + "</td>";
            echo "<td></td>";
            echo "<td>$row[7]</td>";
            echo "<td>$row[8]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "</tr>";
          }


         ?>



    </table>

    <div class="hor_line">
      Gráficas de comportamiento de proyecto
    </div>
    <div id="bott">
      <div class="graphs">
        Proyecto por riesgo
      </div>
      <div class="graphs">
        Proyecto por estatus
      </div>
      <div class="graphs">
        Proyecto por Categoría
      </div>
    </div>

  </section>
</body>
</html>
