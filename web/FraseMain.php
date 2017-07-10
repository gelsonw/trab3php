<!DOCTYPE html>
<html>
<head>
   <title>Trabalho 3 - Metodologias Ágeis</title> 
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h1>Trabalho 3 - Metodologias Ágeis</h1>
   <p>
   Professor: Daniel Wildt<br>
   Aluno....: Gelson W. Gonçalves
   </p>
   <h3>Digite uma frase:</h3>
 <input type="text" id="frase" name="frase">
 <input type="submit" value="Enviar">
 </form>
<?php
require_once 'Frase.php';

$frase = new Frase();
$frase->setFrase($_POST['frase']);

if (!empty($frase->getFrase())){
	echo "<h3><MARQUEE HEIGHT=30 WIDTH=640 BEHAVIOR=ALTERNATE SCROLLAMOUNT=10>".$frase->getFrase()." </MARQUEE>";
	$frase->setFrase('');
}

?>

</body>
</html>
