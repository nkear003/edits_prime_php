<?php
$download = $_POST['download'];
$path = 'https://devedge.steyoyoke.com/downloads/' . $download . '.zip'; // the file made available for download via this PHP file
$mm_type="application/octet-stream";
$headers  = get_headers($path, 1); // fix to content length bug
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Type: " . $mm_type);
header('Content-Length: '.($headers['Content-Length']));
header('Content-Disposition: attachment; filename="'.basename($path).'"');
header("Content-Transfer-Encoding: binary");
readfile($path); // outputs the content of the file
exit();