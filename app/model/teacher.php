<?php
    session_start(); 
    if(empty($_SESSION['username'])){
        header('location: classroom_add_input.php');
    }
?>
<?php
 
        if (isset($_POST['btnSubmit'])) // Kiểm tra nút có giá trị dữ liệu
        {
            if($_POST['btnSubmit'] == 'Sửa') 
            {
                header('location: classroom_add_input.php');
                //Thực hiện đoạn mã tiếp theo --- 
            }
        
            if($_POST['btnSubmit'] == 'Xác Nhận') 
            {   
                require_once '../common/db.php';
                if($db->connect_error){
                    die('Kntb');
                }
                else
                {
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $date=date('Y-m-d H:i:s');
                    $username=$_SESSION['username'];
                    $phanloai=2;
                    $id=$_SESSION['id'];
                    $avatar=$_SESSION['avatar']['name'];
                    $motathem=$_SESSION['motathem'];
                    if($_SESSION['checkmark']=='sinhvien'){
                        $phanloai='1';
                    }
                    if($_SESSION['checkmark']=='cuusinhvien'){
                        $phanloai='3';
                    }
                    $sql="INSERT INTO users VALUES ('','$phanloai',' $username','$id','$avatar','$motathem','$date','$date')";
                    if($db->query($sql))
                    {
                        header('location: classroom_add_complete.php');
                        
                    }else{
                        echo 'lỗi';
                    }

                }
                //Thực hiện đoạn mã tiếp theo
                
            }
        }
    ?>