<?php
session_start();
include ('app/common/db.php');
global $db;
if(isset($_POST["adlogin"])){
    $login_id= $_POST['login_id'];
    $password = md5($_POST['password']);
    $sql = "SELECT login_id,password FROM admins WHERE login_id=:login_id and password=:password";
    $query = $db ->prepare($sql);
    $query->bindParam(':login_id', $login_id, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0){
        $_SESSION['alogin'] = $_POST['login_id'];
        echo "<script type='text/javascript'> document.location = 'home.php'; </script>";
    } else {
        echo "<script>alert('Invalid Details');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="web/css/list.css" rel="stylesheet">
    <script language="javascript" src="web/js/error.js"></script>
</head>
<body>
<div class="container">
    <form method="post" name="adlogin" action ="" onsubmit="return(catchErrorLoginAdmin());">
        <div class="row">
                <span id = "error" >
                    <p class="login_id">
                    <p class="password">
                </span>
        </div>

        <div class="row">
            <div class="col-30">
                <lable class="label1">Họ và tên</lable>
            </div>
            <div class="col-60">
                <input type="text" name="login_id" value="">
            </div>
        </div>
        <div class="row">
            <div class="col-30">
                <lable class="label1">Mật khẩu</lable>
            </div>
            <div class="col-60">
                <input id="password" type="text" name="password" value="">
            </div>
        </div>
        <div class="row">
            <input type="submit" name="adlogin" value="Đăng nhập" >
        </div>
    </form>
</div>
</body>
</html>
