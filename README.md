# rss2localxml

Script en php para importar uno o muchos canales rss a un servidor local y así evitar caídas del sitio cuando un web remoto está oflline.

# Ejecutar vía cron
00 09-19/2 * * * cd /usr/local/src/rss2localxml/ && php getrss.php

Se ejecutará entre las 9 y las 19 cada 2 horas todos los días de la semana.
