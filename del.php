<?php

$id=$_GET['id'];
$dsn="mysql:host=localhost;charset=utf8;dbname=mydb";
$pdo=new PDO($dsn,'root','');

$sql="DELETE FROM `mydbs` WHERE `id`='$id'";

$pdo->exec($sql);

header("location:mydbpra.php");

?>