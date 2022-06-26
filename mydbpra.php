<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYDB連線資料庫練習</title>
    <style>
        h1,h2,h3,h4{
            text-align: center;
        }
        table{
            border-collapse: collapse;
            border:1px solid palevioletred;
            margin: auto;
        }
        table td{
            padding:0.5rem;
            border:1px solid #aaa;
        }
        table tr:nth-child(odd){
            background: burlywood;
        }
        table tr:nth-child(even){
            background: pink;
        }
        table tr:hover{
            background: lemonchiffon;
        }

    </style>
</head>
<body>
    <h1>MYDB資料庫連線練習</h1>
    <?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=mydb";
    $pdo=new PDO($dsn,'root','');

    //這樣是全部的資料都會出來
    $sql="SELECT * FROM `mydbs`";

    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
   

    ?>
    <!--可以用form表單也可以用a連結標籤也可以用onclick去做連結-->
    <!--這裡的a後面接php或html都可以-->
    <h3><button><a href="add.php">新增資料</a></button></h3>
    
    <table>
        <tr>
            <td>序號</td>
            <td>姓名</td>
            <td>生日</td>
            <td>電話</td>
            <td>操作</td>
        </tr>
    <?php
        foreach($rows as $key => $row){
        echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['birthday']}</td>";
            echo "<td>{$row['telephone']}</td>";
            echo "<td>";
            echo "<button><a href='edit.php?id={$row['id']}'>編輯</a></button>";
            echo "<button><a href='del.php?id={$row['id']}'>刪除</a></button>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    

</body>
</html>