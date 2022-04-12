<?php
    session_start();
    session_destroy();
    echo "<META HTTP-EQUIV = 'REFRESH' CONTENT = '1; URL = ../index.php'>";  /*Esta etiqueta cierra la sesion*/
?>