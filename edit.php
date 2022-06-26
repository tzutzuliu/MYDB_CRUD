<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯資料</title>
    <style>
        label{
            display: block;
            padding: 5px;
        }

        label input{
            padding: 4px;
            font-size: 18px;
        }


    </style>



</head>
<body>

<h1>編輯資料</h1>
<?php
    $id=$_GET['id'];
    //echo "要編輯的是id為".$id."的資料";
    //如果是用GET傳的方式會是在UPDATE後方這樣寫:?id=<?=$id;問號括號(PHP結尾)
    $dsn="mysql:host=localhost;charset=utf8;dbname=mydb";
    $pdo=new PDO($dsn,'root','');
    $sql="SELECT * FROM `mydbs` WHERE `id`= '$id'";
    $mydb=$pdo->query($sql)->fetch();
    //echo "<pre>";
    //print_r($mydbs);
    //echo "</pre>";

?>


    <form action="update.php" method="post">
        <label for="">姓名：<input type="text" name="name" value="<?=$mydb['name'];?>"></label>
        <label for="">生日：<input type="text" name="birthday" value="<?=$mydb['birthday'];?>"></label>
        <label for="">電話：<input type="text" name="telephone" value="<?=$mydb['telephone'];?>"></label>
        <input type="hidden" name="id" value="<?=$id;?>">
        <input type="submit" value="更新">
        <input type="reset" value="重置">
    </form>


    
</body>
</html>