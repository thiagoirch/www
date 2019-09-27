<?php
// start output buffering
ob_start();

// send phpinfo content
phpinfo();

// get phpinfo content
$html = ob_get_contents();

// flush the output buffer
ob_end_clean();

// remove auth data
if (isset($_SERVER['AUTH_USER'])) $html = str_replace($_SERVER['AUTH_USER'], '<i>no value</i>', $html);
if (isset($_SERVER['AUTH_PASSWORD'])) $html = str_replace($_SERVER['AUTH_PASSWORD'], '<i>no value</i>', $html);

echo $html;