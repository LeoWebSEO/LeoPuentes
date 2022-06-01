<?php

$nombre = $_POST["name"];
$correo = $_POST["email"];
$comentario = $_POST["message"];

$header = 'From: ' . $correo . "\r\n";

$header.= "Content-Type: text/plain";

echo "Nombre:". $nombre."<br>";
echo "Correo:". $correo."<br>";
echo "Comentario:". $comentario."<br>";

if(mail("comentario@lepuentes.me", "Mensaje de:".$nombre, $comentario, $header)){
?>

<script type="text/javascript">
    alert("Correo enviado");
    document.location.href = "contact.html";
</script>

<?php
}
?>