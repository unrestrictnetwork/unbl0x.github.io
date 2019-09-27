<?php
$handle2 = fopen("views.txt", "r");
$views = fgets($handle2);
echo($views);
fclose($handle2);
$handle = fopen("views.txt", "w");
fwrite(intval($views++;));
fclose($handle);
?>