
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid  navtop ">
  <a class="navbar-brand" id="top-logo" href="/trotot/index.php">
        <img src="/trotot/Fontend/image/logo.png" width="50px" style="color: blue;"alt="">Trotot.xyz</a>
    <form class="d-flex ">
        <?php 
         if(!isset($_SESSION["user"])){
            echo $my_var = <<<EOD
            <p style="magin :auto;">trotot.xyz xin chào quý khách </p>
            EOD;
            echo $my_var = <<<EOD
            <button type="submit" name = "register_submit" class="btn btn-primary btn-lg btn-block btn-navtop ">Đăng ký</button>
            EOD;
            echo $my_var = <<<EOD
            <button type="submit" name = "register_submit" class="btn btn-primary btn-lg btn-block btn-navtop ">Đăng nhập</button>
            EOD;
        }
            else{
                echo $my_var = <<<EOD
                <button type="submit" name = "submit" class="btn btn-primary btn-lg btn-block btn-navtop ">Quản lý tài khoản</button>
                EOD;
                echo $my_var = <<<EOD
                <button type="submit" name = "submit" class="btn btn-primary btn-lg btn-block btn-navtop">Đăng tin mới</button>
                EOD;
            }
        ?>
    </form>
  </div>
</nav>
