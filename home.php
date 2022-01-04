<?php
    session_start();
    error_reporting(0);
    if (strlen($_SESSION['alogin']) == 0) {
        header('location:login.php');
    }
    include ('app/common/db.php');
    global $db;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Trang đăng nhập</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="web/css/list.css" rel="stylesheet">
    <script language="javascript" src="web/js/error.js"></script>
</head>
<body>
<div class="container">
    <form >
            <div class="row">
                <br>
                <?php 
                    echo "Tên login: ";
                    echo $_SESSION['alogin'];
                ?>
                <br/>
                <br>
                <?php 
                    echo " Thời gian login: ";
                    echo date("Y-m-d H:i"); 
                ?>
                <br/>
            </div>
            <div class="col-wrap">
                <div class="col">
                    <h2>Phòng học</h2>
                    <br><a href="app/controller/classroom_add_search.php">Tìm kiếm</a></br>
                    <br><a>Thêm mới</a></br>
                </div>
                <div class="col">
                    <h2>Người dùng</h2>
                    <br><a href="">Tìm kiếm</a></br>
                    <br><a href="app/view/classroom_add_input.php">Thêm mới</a></br>
                </div>
                <div class="col">
                    <h2>Sự kiện</h2>
                    <br><a href="">Tìm kiếm</a></br>
                    <br><a href="">Thêm mới</a></br>
                </div>
                <div class="col">
                    <h2>Tổ chức sự kiện</h2>
                    <br><a href="">Tìm kiếm</a></br>
                    <br><a href="">Thêm mới</a></br>
                </div>
            </div>
    </form>
</div>
</body>
</html>