<!DOCTYPE html>
<html>
<head>
   <title>Trabalho 3 - Metodologias Ágeis</title> 
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h1>Trabalho 3 - Metodologias Ágeis</h1>
   <h2>Digite seu nome:</h2>
 <input type="text" id="nome" name="nome">
 <input type="submit" value="Enviar">
 </form>

<?php
require_once 'Usuario.php';

$usuario = new Usuario();

$usuario->setNome($_POST['nome']);

echo "<h3> Hello ".$usuario->getNome()."!</h3>";
?>

</body>
</html>
