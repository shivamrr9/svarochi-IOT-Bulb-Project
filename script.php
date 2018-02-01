
<?php 
$fp = fsockopen("svarochi123.eastus.cloudapp.azure.com", 80, $errno, $errstr, 30);
if (!$fp) {
    echo "$errstr ($errno)<br />
";
} else {
    $out = "GET / HTTP/1.1
";
    $out .= "Host: yourdomain.com
";
    $out .= "Connection: Close

";
    fwrite($fp, $out);
    while (!feof($fp)) {
        echo fgets($fp, 128);
    }
    fclose($fp);
}
?> 
