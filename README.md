1.-)Ingresar al siguiente link https://api.imgur.com/oauth2/addclient

2.-) al presionar el boton enviar te llevara a otra pagina donde tendras que copiar client_id

copia el código te hara falta para obtener el token...

ingresa el client_id en el siguiente parametro:

https://api.imgur.com/oauth2/authorize?client_id=CLIENT ID AQUÍ&response_type=token
<br>
una vez añadido copia la url completa y la pegas en el navegador.

te aparecera otra pagina y le presionas al boton "ALLOW"

y arriba te aparecera una url larga copiala en el block de notas

y localiza el parametro: access_token

Copia el codigo largo

y lo añades en el código de php

$token = ""; // TOKEN AQUÍ


Para usarlo Ejemplo:

<br>
localhost/imgur.php?imgur=URL DE LA IMAGEN
