<?php
  $urls = array("general"=>"http://prensa.ula.ve/feed", "viceadmin"=>"http://prensa.ula.ve/taxonomy/term/6/feed", "rectorado"=>"http://prensa.ula.ve/taxonomy/term/11/feed");

  foreach($urls as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    $ch = curl_init($x_value);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 50);
    $output = curl_exec($ch);
    curl_close($ch);
    file_put_contents('/var/www/html/rss/'.$x.'.rss', $output);
  }
?>
