<html>
 <head>
  <title>DATOS</title>
 </head>
 <body>
  <h2>
   Introduzca sus datos:
  </h2>
  <form method="post" action="paginaPrincipal.php">
   <p>Usuario: 
    <input type="text" name="user"/>
   </p>
   <p>Contraseña: 
    <input type="password" name="pass"/>
   </p>
   <p>DNI: 
    <input type="text" name="dni"/>
   </p>
   <p>Teléfono: 
    <input type="text" name="telf"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
<?php
define("usuario", 'AlexP');
define("uDni", '98765432A');
if (isset($_GET['text'])){
  echo $_GET['text'];
}
?>
 </body>
</html>
