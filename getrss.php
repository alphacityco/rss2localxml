<?php
  $urls = array("general"=>"http://prensa.ula.ve/feed", "viceadmin"=>"http://prensa.ula.ve/taxonomy/term/6/feed", "rectorado"=>"http://prensa.ula.ve/taxonomy/term/11/feed");

  foreach($urls as $x => $x_value) {
    $ch = curl_init($x_value);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 50);
    $output = curl_exec($ch);
    // Verificar que el servidor remoto esté online antes de escribir el archivo
    $retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if (200 <> $retcode) {
      echo "Offline";
      exit();
    }
    curl_close($ch);
    file_put_contents('/var/www/html/rss/'.$x, $output);
  }
?>
