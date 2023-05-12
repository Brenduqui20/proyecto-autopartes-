<?php
  if (isset($_POST['enviar'])){
    if (!empty($_POST['nombre'] )&& !empty($_POST['correo']) &&  !empty($_POST['mensaje'])) {
     
     $nombre=$_POST['nombre'];
     $correo=$_POST['correo'];
     $mensaje=$_POST['mensaje'];

     $mensaje.="Mensaje enviado por " .$nombre.",\r\n";
     $mensaje.="Su correo " .$correo.",\r\n";
    

     $asunto=" MSG DEL SITIO WEB ". "\r\n";


     $header="From: " .$correo. "\r\n";
     $header.="Replay-To: noreplay@example.com" . "\r\n";
     $header.="X-Mailer:PHP/".phpversion();

     $para='olivermeza111@gmail.com';

     $mail=@mail($para,$asunto,$mensaje,$header);


     if($mail){
         echo "Enviado exitosamente";
     }
 
 
    }
}
?>