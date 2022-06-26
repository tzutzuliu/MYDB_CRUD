<?php

    $dsn="mysql:host=localhost;charset=utf8;dbname=mydb";
    $pdo=new PDO($dsn,'root','');

$sql="UPDATE `mydbs` SET
             `name`='{$_POST['name']}',
             `birthday`='{$_POST['birthday']}',
             `telephone`='{$_POST['telephone']}'
      WHERE `id`='{$_POST['id']}'";

      echo $sql;

//$pdo->query($sql);
$pdo->exec($sql);
header("location:mydbpra.php");

?>