<?php
session_start();
setcookie("user","AlexP",time()+60);
setcookie("pass","12345",time()+60);

$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['userDNI'] = $_POST['dni'];
$_SESSION['usertelf'] = $_POST['telf'];
$_SESSION['code'] = 0;

if (($_SESSION['username'] == 'AlexP') and
    ($_SESSION['userpass'] == '12345') and
    ($_SESSION['userDNI'] == '98765432A') and
    ($_SESSION['usertelf'] == '121212121')) {
    $_SESSION['code'] = 1;
} else {
    echo 'Credenciales incorrectos';
    exit();     
}
?>
<html>
 <head>
  <title>Bienvenida</title>
 </head>
 <body>
 <p>
   Bienvenido
 </p>
<?php
echo $_COOKIE["user"];
echo "! <br/>";
$nombreUsuario = $_GET['usuario'] ?? $_POST['usuario'] ?? 'NULL'; 
echo "Ahora mismo el usuario pasa a ser: ";
echo $nombreUsuario;
echo "\nHoy es día: ";
date_default_timezone_set('America/New_York');
$day = date('n');
echo $day;

$mitexto = urlencode("Vuelves de la página principal");
echo "<a href='Login.php?text=$mitexto'>";
echo "Atrás"; 
echo "</a>";
?>
</body>
</html>