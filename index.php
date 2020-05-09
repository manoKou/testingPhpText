<?php


$online_to_be=array('hi','there','pepp');

if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];
$fp = fopen('data.txt', 'a+');
$data_to_be=$data."\n";
fwrite($fp, $data_to_be);
//array_push($online_to_be, $data);
$online_to_be[count($online_to_be)]=$data;
for($i=0;$i<count($online_to_be);$i++){
    print_r($online_to_be[$i]);
}
//fclose($fp);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Store form data in .txt file</title>
    </head>
    <body>

        <?php
          if(isset($_POST['textdata']))
          {
            for($i=0;$i<count($online_to_be);$i++){
                print_r($online_to_be[$i]);
            }
          }
        ?>

        <form method="post">
        Enter Your Text Here:<br>
        <input type="text" name="textdata"><br>
        <input type="submit" name="submit">

        </form>
    </body>
</html>
