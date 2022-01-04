<?php
    session_start();
    error_reporting(0);
    if (strlen($_SESSION['alogin']) == 0) {
        header('location: ../../login.php');
    }
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../web/css/add_user.css">
    <title>Add</title>
</head>
<?php
require_once '../controller/classroom_add.php';
?>

<body>

    <form method="post" action="" enctype="multipart/form-data" class="form_add_input">
        <fieldset>
            <span class="error"><?php echo $error_message; ?> </span>

            <div class="fullname">
                <label for="fullname">Họ và tên</label>
                <input id="fullname" type="text" name="fullname" value="<?php if (isset($_SESSION["username"])) {
                                                                            echo $_SESSION["username"];
                                                                        } else ''; ?>"></input>

            </div>
            <span class="error"><?php echo $error_message2; ?> </span>
            <div class="phanloai">
                <label for="phanloai">Phân loại</label>
                <?php
                $value_phanloai = [
                    'giaovien' => 'Giáo viên',
                    'sinhvien' => 'Sinh viên',
                    'cuusinhvien' => 'Cựu sinh viên'
                ];
                foreach ($value_phanloai as $key => $value) {
                    if (isset($_SESSION["checkmark"])) {
                        if ($_SESSION["checkmark"] == $key)
                            echo '<input class="pl" type="radio" name="checkmark" id="' . $key . '" value="' . $key . '" checked><span class="text-span">' . $value . '</span>';
                        else
                            echo '<input class="pl" type="radio" name="checkmark" id="' . $key . '" value="' . $key . '"><span class="text-span">' . $value . '</span>';
                    } else {
                        echo '<input class="pl" type="radio" name="checkmark" id="' . $key . '" value="' . $key . '"><span class="text-span">' . $value . '</span>';
                    }
                }

                ?>


            </div>
            <span class="error"><?php echo $error_id; ?> </span>

            <div class="id">
                <label for="id">ID</label>
                <input id="id_text" type="text" name="id" value="<?php if (isset($_SESSION["id"])) {
                                                                        echo $_SESSION["id"];
                                                                    } else ''; ?>">

            </div>
            <span class="error"><?php echo $error_avatar; ?> </span>
            <div class="avatar">
                <label for="avatar">Avatar</label>
                <input id="ava_text" type="file" name="avatar" value="Upload" />

            </div>
            <span class="error"><?php echo $error_motathem; ?> </span>

            <div class="motathem">
                <label for="motathem">Mô tả thêm</label>
                <textarea id="motathem_text" type="textarea" name="motathem" rows="5" cols="40"><?php if (isset($_SESSION["motathem"])) {
                                                                                                    echo $_SESSION["motathem"];
                                                                                                } else ''; ?></textarea>

            </div>
            <div class="submit">
                <button type="submit" id="submit" name="submit">Xác nhận</button>
            </div>
        </fieldset>
    </form>


</body>

</html>