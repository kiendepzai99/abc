<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../web/css/add_user.css">
    <title>Add</title>
</head>

<body>
    <?php
    session_start();
    if (empty($_SESSION['username'])) {
        header('location: classroom_add_input.php');
    }
    ?>
    
    <?php
    // session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['checkmark']);
    unset($_SESSION['id']);
    unset($_SESSION['motathem']);
    unset($_SESSION['avatar']);    
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <fieldset class="fieldset_score_add_complete">
            <a style = "font-size: 20px">Bạn đã tạo thành công thành viên</a>
            <br>
            <a style = "font-size: 18px" href="../../home.php">Trở về trang chủ</a>
        </fieldset>
    </body>

    </html>