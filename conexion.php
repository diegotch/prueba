<?php
#Conectamos con PostgreSQL
//CONEXION A BASE DATOS
function conectar1()
{
  $conexion = pg_connect("host=localhost port=5432 dbname=prueba user=postgres password=salan404");
  
   if (!$conexion) {
        echo "<CENTER>
             Tengo Problemas de conexion con la base de datos.
              </CENTER>";
        exit;
   }
}
function desconectar1()
{
#Cerramos la conexión con la base de datos
pg_close($conexion);
}
?>
