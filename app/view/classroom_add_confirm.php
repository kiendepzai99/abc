<!doctype html>
<?php
require_once '../model/teacher.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../web/css/add_user.css">
    <title>Confirm</title>
</head>

<body>

    <form action="" method="post" action="<?php echo $self_page ?>">
        <fieldset>
            <div class="fullname">
                <div class='lables' for="fullname">Họ và tên</div>
                <span class='spans'> <?php echo ("" . $_SESSION['username']); ?></span>
            </div>

            <div class="phanloai">
                <div class='lables' for="phanloai">Phân loại</div>
                <span class='spans'><?php echo (" " . $_SESSION['checkmark']); ?></span>

            </div>
            <div class="id">
                <div class='lables' for="id">ID</div>
                <span class='spans'><?php echo (" " . $_SESSION['id']); ?></span>
            </div>

            <div class="avatar">
                <div class='lables' for="avatar">Avatar</div>
                <img id="img_avatar" src="<?php echo ("../../web/avatar/" . $_SESSION['avatar']['name']); ?>
                ">
            </div>

            <div class="motathem">
                <div class='lables' for="motathem">Mô tả thêm</div>
                <textarea rows="5" cols="40" class='spans'> <?php echo (" " . $_SESSION['motathem']); ?></textarea>
            </div>
            <div class="submit">
                <input type="submit" name="btnSubmit" class="btnSubmit" value="Sửa" />
                <input type="submit" name="btnSubmit" class="btnSubmit" value="Xác Nhận" />
            </div>

        </fieldset>
    </form>

</body>

</html>