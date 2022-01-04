include('user_list.php');
function catchErrorLoginAdmin() {
    var error = document.getElementById("error");
    Array.from(error.children).map((element) =>element.innerText = "");
    let isValid = checkErrorLoginAdmin();
    return isValid;
}
function checkErrorLoginAdmin() {
    var login_id = document.forms["adlogin"]["login_id"].value;
    var password = document.forms["adlogin"]["password"].value;
    var error = document.getElementById("error");
    let isCheck = true;
    if (login_id == "") {
        error.querySelector(".login_id").innerText
            = "Hãy nhập login id"
        isCheck = false;
    }
    if (login_id.length <= 4 ) {
        error.querySelector(".login_id").innerText
            = "Hãy nhập login id tối thiểu 4 ký tự"
        isCheck = false;
    }
    if (password == "") {
        error.querySelector(".password").innerText
            = "Hãy nhập password"
        isCheck = false;
    }
    /* password = md5(password);
    $query = mysql_query("SELECT user, password FROM admin WHERE username='$user'");
    $row = mysql_fetch_array($query);
    if (mysql_num_rows($query) == 0 && password != $row['password']) {
        error.querySelector(".password").innerText
            = "Login id và password không đúng"
        isCheck = false;
    }
    */
    return isCheck;
}

