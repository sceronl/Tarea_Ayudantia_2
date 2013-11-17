<?php 
$mail='frubilar@icci.cl'; 

$nombre = $_POST['nombre']; 
$asunto = $_POST['asunto']; 
$email = $_POST['email']; 
$mensaje = $_POST['mensaje']; 
$thank="/index.php"; 
$message = " 
Nombre:".$nombre." 
Asunto:".$asunto." 
Mail:".$email." 
Mensaje:".$mensaje.""; 

if (mail($mail,"Formulario De consulta Secolectiva",$message))
Header ("Location: $thank"); 

?> 
