<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "mickey Doe\n";
fwrite($myfile, $txt);
$txt = "mouse Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
