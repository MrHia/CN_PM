<?php
    session_start();
    include 'config.php';
    if(isset($_POST['register_submit']) && $_POST["username"] != '' && $_POST["password"] != ''){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password = md5($password);
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $user = mysqli_query($conn,$sql);

        if(mysqli_num_rows($user) > 0)
        {
           $_SESSION["user"] = $username;
           header("location:/trotot/index.php");
        }
        else{
            $_SESSION["thongbao"]="Tên tài khoản hoặc mặt khẩu sai";
            header("location:/trotot/login.php");

        }
    }else{
        $_SESSION["thongbao"]="Vui lòng nhập đủ thông tin";
        header("location:/trotot/login.php");
    }


?>