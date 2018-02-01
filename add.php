<?php
    include("connect.php");
    $a = $_GET['value'];
    $SQL = "INSERT INTO piData (a1) VALUES ('$a')";

if ($con->query($SQL) === TRUE) {
    echo "success";

echo shell_exec("python /var/www/html/server.py " .escapeshellarg(json_encode($a)));


} else {
    echo "failed";
}
?>
