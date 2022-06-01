---
title: "Formulario de Contacto"
permalink: "/contact.html"
---

<form action="../assets/js/enviar.php" method="post">    
<p class="mb-4">Por favor envíe su mensaje a {{site.name}}. Temprano o tarde, siempre respondo.!</p>
<p class="mb-4">No se cuantifica ni monetiza al visitante. En este sitio web sacrifico sistemas de telemetria en pro de la privacidad del visitante. No se venden datos a terceros, es muy contrario a la privacidad y una falta de respeto al lector. El correo comentario@leopuentes.me es administrado y configurado en migadu.com.</p>
<div class="form-group row">
<div class="col-md-6">
<input class="form-control" type="text" name="name" id="name" placeholder="Nombre*" required>
</div>
<div class="col-md-6">
<input class="form-control" type="email" name="email" id="email" placeholder="E-mail*" required>
</div>
</div>
<textarea rows="8" class="form-control mb-3" name="message" id="message" placeholder="Mensaje*" required></textarea>    
<input class="btn btn-success" type="submit" value="Emviar Mensaje">
</form>
