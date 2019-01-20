<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["favcolor"]="pink";
print_r($_SESSION);
?>

</body>
</html>