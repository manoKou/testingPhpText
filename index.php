<?php


//$online_to_be=array('hi','there','pepp');

if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];
$fp = fopen('data.txt', 'a+');
$data_to_be=$data."\n";
fwrite($fp, $data_to_be);
array_push($online_to_be, $data);
fclose($fp);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Store form data in .txt file</title>
    </head>
    <body>



        <form method="post">
        Enter Your Text Here:<br>
        <input type="text" name="textdata"><br>
        <input type="submit" name="submit">

        </form>
        <?php
          if(isset($_POST['textdata']))
          {
            $file = fopen("data.txt", "r");
            if ($file){
              While(($line = fgets($file)) !== false)
                {
                  echo "<p> $line </p>";
                }
                fclose($file);
            }else{
              // handle if error opening file
            }

          }
        ?>
    </body>
</html>
