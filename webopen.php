<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("web.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("web.txt"));
fclose($myfile);


#fgets()
$myfile = fopen("web.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);


#feof()
$myfile = fopen("web.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);

#fgets()
$myfile = fopen("web.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>

</body>
</html>