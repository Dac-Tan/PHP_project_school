<?php
session_start();
include "model/pdo.php";
include "model/taikhoan.php";
include "view/header.php";

if ((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act) {
        case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $email=$_POST['email'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                insert_taikhoan($email,$user,$pass);
                $thongbao="Đã đang ký thành  công";
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=check_user($user,$pass);
                    if (is_array($checkuser)) {
                        //$thongbao="Bạn đã đăng nhập thành công";
                        $_SESSION['user']=$checkuser;
                        header('Location: index.php');
                    }
                    else{
                        $thongbao="Tài khoản không tồn tại";
                    }
                    $thongbao="Đã đang ký thành  công";
                }
                include "view/taikhoan/dangky.php";
                break;
        case 'thoat':
            session_unset();
            header('location: index.php');
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        default:
            include "view/home.php";
            break;
    }
}else{
    include "view/home.php";
}
include "view/footer.php";
?>