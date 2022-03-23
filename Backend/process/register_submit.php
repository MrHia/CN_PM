<?php
    session_start();
    include 'config.php';
    if(isset($_POST['register_submit']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != ''){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $level=0;
        if($password != $repassword){
            header("location:/trotot/register.php");
            $_SESSION["thongbao"]="Mật khẩu nhập lại sai vui lòng nhập lại";
        }
        $sql = "SELECT * FROM user WHERE username = '$username' ";
        $old = mysqli_query($conn,$sql);
        $password = md5($password);
        if(mysqli_num_rows($old) > 0)
        {
            header("location:/trotot/register.php");
            $_SESSION["thongbao"]="Tài khoản đã tồn tại vui lòng nhập chọn tên đăng nhập khác";
        }else{
            $sql = "INSERT INTO user (username,password,level) VALUES ('$username','$password','$level')";
            mysqli_query($conn,$sql);
            $_SESSION["thongbao"]="Đăng ký thành công";
            header("location:/trotot/login.php");
        }
    }else{
        header("location:/trotot/register.php");
        $_SESSION["thongbao"]="Vui lòng nhập đủ thông tin";
    }
?>