<?php
$json = file_get_contents('
url');
$data = json_decode($json);
echo
"<pre>"
;
var_dump($data);
echo
"</pre>"
;
?>
