<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增資料</title>
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

<h1>新增資料</h1>
    <form action="save.php" method="post">
        <label for="">姓名：<input type="text" name="name" id=""></label>
        <label for="">生日：<input type="text" name="birthday" id=""></label>
        <label for="">電話：<input type="text" name="telephone" id=""></label>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </form>


    
</body>
</html>