<?php
  $conexion = new mysqli("localhost", "root", "MetlG0710", "COMPUSHOP");
  if ($conexion->connect_errno){
    echo "ERROR: (" . $conexion->connect_errno .")" . $conexion->connect_error;
  }
  $resultado = $conexion->query("INSERT INTO USUARIOS VALUES ('usuario1', 'contrasena', 'nombre', 'apellidos', 'dni', 123, 'fecha', 'email')");
  mysqli_close($conexion);
?>

<!--<html>
  <head>
      <title>
          ProyectoSeguridad
      </title>
      <link rel="stylesheet" type="text/css" href="css/index.css">
      <script type="text/javascript" src="js/index.js"></script>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  </head>-->

  <!--HEADER https://www.w3schools.com/howto/howto_css_responsive_header.asp-->
<!--  <div class="header">
    <a href="#default" class="logo">Compushop</a>
    <div class="header-right">
      <a href="index.html">Listado</a>
      <a href="signin.html">Sign in</a>
      <a class="active" href="signup.html">Sign up</a>
    </div>
  </div>

  <body>


  </body>



</html> -->
