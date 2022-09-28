<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('db.php');
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$consulta="INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `contraseña`, `id_cargo`) 
VALUES (NULL, '$nombre', '$usuario', '$contraseña', '2');";
$resultado=mysqli_query($conexion,$consulta) or die("error");
echo("exitoso registro");
mysqli_close($conexion);

?>
<a href="formulario.php">Iniciar sesion?</a>