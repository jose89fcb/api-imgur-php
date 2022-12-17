<?php

$client_id = ""; // TOKEN AQUÍ
$imgur = $_GET["imgur"];
$file = file_get_contents($imgur);
  
  $pvars   = array(
      'name'=>'AÑADE UN NOMBRE',
      'title'=>'AÑADE UN TITULO',
      'description'=>'AÑADE UNA DESCRIPCIÓN',
      'image' => base64_encode($file));
  $timeout = 30;
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
  curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $client_id));
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
  $out = curl_exec($curl);
  curl_close ($curl);
   $pms = json_decode($out,true);
  $url=$pms['data']['link'];
  if($url!=""){
   echo "<h2>Imagen subida!</h2>";
   echo "<img src='$url'/>";
  }else{
   echo "<h2>Ocurrió un problema :(</h2>";
   echo $pms['data']['error'];  
  } 
 

?>
