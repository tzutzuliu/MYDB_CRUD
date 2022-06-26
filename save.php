<?php
//newPDO須大寫
//第一個參數是我們對資料庫的設定
//第二個參數是使用者名稱
//第三個參數是使用者密碼

$dsn="mysql:host=localhost;charset=utf8;dbname=mydb";
$pdo=new PDO($dsn,'root','');


$sql="INSERT INTO `mydbs` ( `name`, `birthday`, `telephone`) 
                    values( '{$_POST['name']}', '{$_POST['birthday']}', '{$_POST['telephone']}')";

echo $sql;
$pdo->query($sql);
//有寫入資料在這裡其實就下方就不用再敘述顯示

header("location:mydbpra.php");


?>