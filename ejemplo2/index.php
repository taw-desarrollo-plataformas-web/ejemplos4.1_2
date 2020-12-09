<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
    <title>Uso básico de PHP</title>
  </head>
  <body>

    <table>
    <tr>
        <td>Multiplicado</td>
        <td>Símbolo</td>
        <td>Multiplicador</td>
        <td>Resultado</td>
    </tr>
      <?php
      // función en PHP
      function operacionMultiplicacion($num1, $num2){
        return $num1 * $num2;
      }
      $tabla = 5;
      $inicio = 1;
      echo '<h3>Tabla del '.  $tabla, "</h3>";
      // uso de ciclo repetitivo
      while($inicio <= 12){
        $formato = "<tr>
          <td>%d</td><td>%s</td><td>%d</td><td class='colorcelda'>%d</td>
          </tr>";
        // concatenar cadenas a través de sprintf
        echo sprintf($formato, $tabla, "*", $inicio, 
          operacionMultiplicacion($tabla, $inicio)); 
          // contador
          $inicio++;
      }
    
    ?>
    </table>
  </body>
</html>
