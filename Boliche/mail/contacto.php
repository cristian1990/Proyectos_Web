<?php
// Chequeo de entrada
if(empty($_POST['nombre'])      ||
   empty($_POST['email'])     ||
   empty($_POST['telefono'])     ||
   empty($_POST['mensaje'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$nombre = strip_tags(htmlspecialchars($_POST['nombre']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$telefono = strip_tags(htmlspecialchars($_POST['telefono']));
$mensaje = strip_tags(htmlspecialchars($_POST['mensaje']));
   

$to = 'montecarlobailable@hotmail'; //send a mensaje to.
$email_subject = "Contacto de pagina:  $nombre";
$email_body = "Recibiste un mensaje de la pagina web.\n\n"."Aqui estan los detalles:\n\nNombre: $nombre\n\nEmail: $email_address\n\nTelefono: $telefono\n\nMensaje:\n$mensaje";
$headers = "From: noreply@yourdomain.com\n";
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
