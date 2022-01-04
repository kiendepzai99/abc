<?php

$username = "";
// $password = "";

session_start();
$error = "";
$self_page = htmlspecialchars($_SERVER["PHP_SELF"]);
$error_message = "";
$error_message2 = "";
$error_id = "";
$error_motathem = "";
$error_avatar = "";

if (isset($_POST['submit'])) {
    $username = $_POST["fullname"] ?? '';
    $checkmark = $_POST["checkmark"] ?? '';
    $id = $_POST["id"] ?? '';
    $motathem = $_POST["motathem"] ?? '';
    $avatar = $_FILES['avatar'] ?? '';

    // đưa dữ liệu vào seesion
    $_SESSION["username"] = $username;
    $_SESSION["checkmark"] = $checkmark ?? '';
    $_SESSION["id"] = $id;
    $_SESSION["motathem"] = $motathem;
    $_SESSION["avatar"] = $avatar;


    $x = TRUE;
    if ($username == '') {
        $error_message = 'Hãy nhập họ và tên.';
        $error = 'error';
    }
    if (strlen($username) > 100) {
        $error_message = 'Không nhập quá 100 kí tự';
        $error = 'error';
    }
    if ($checkmark == '') {
        $error_message2 = 'Hãy chọn phân loại.';
        $error = 'error';
    }
    if ($id == '') {
        $error_id = 'Hãy nhập ID.';
        $error = 'error';
    }
    if (strlen($id) > 11 || !preg_match("/^[a-zA-Z-' 0-9]*$/", $id)) {
        $error_id = 'Chỉ nhập không quá 10 kí tự chữ hoặc số tiếng anh';
        $error = 'error';
    }
    if ($motathem == '') {
        $error_motathem = 'Hãy nhập mô tả chi tiết.';
        $error = 'error';
    }
    if (strlen($motathem) > 1001) {
        $error_motathem = 'Không nhập quá 1000 kí tự';
        $error = 'error';
    }
    if (implode('', $avatar) == '40') {
        $error_avatar = 'Hãy chọn avatar.';
        $error = 'error';
    }
}

?>
<?php
if (isset($_POST['submit'])) {

    if ($error == '') {
        //chuyển dữ liệu từ add_input sang add_confirm
        $_SESSION['username'] = $username;
        $_SESSION['checkmark'] = $checkmark;
        $_SESSION['id'] = $id;
        $_SESSION['motathem'] = $motathem;
        move_uploaded_file($_FILES['avatar']['tmp_name'], '../../web/avatar/' . $_FILES['avatar']['name']);
        echo 'File Uploaded';
        $_SESSION['avatar'] = $avatar;
        header('location: classroom_add_confirm.php');
    } else
        $error = 'error';
}
?>