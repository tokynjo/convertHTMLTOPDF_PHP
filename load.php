<?php

$ch = curl_init('dompdf.php');
$fp = fopen('fichier.pdf', 'wb');
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);