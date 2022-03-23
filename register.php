<?php
  session_start();
  $pageTitle = "Đăng ký";
  include 'backend/shared/header.php';
  include 'backend/shared/navbar.php';
?>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
      <!-- /Backend/process/ -->
        <form action="Backend/process/register_submit.php" method="POST"> 
          <h1>Đăng kí thành viên </h1>
          <p>
              <?php
                if(isset($_SESSION["thongbao"])){
                  echo $_SESSION["thongbao"];
                  session_unset();
                }

              ?>

          </p>
            <!-- Họ và tên -->
            <div class="form-outline mb-4">
            <input type="text" id="form1Example13" name ="fullname" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Họ và tên</label>
            <input type="text" id="form1Example13" name ="username" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Tên đăng nhập</label>
          </div>
          <!-- Email input -->
          <!-- <div class="form-outline mb-4">
            <input type="email" id="form1Example13" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Email address</label>
          </div> -->
          <!-- rePassword input -->
          <div class="form-outline mb-4">
            <input type="password" name ="password" id="form1Example23" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Mật khẩu</label>
          </div>
          <div class="form-outline mb-4">
            <input type="password" name ="repassword" id="form1Example23" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Nhập lại mật khẩu</label>
          </div>
          <!-- <div class="d-flex justify-content-around align-items-center mb-4">
            Checkbox
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="form1Example3"
                checked
              />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div> 
             <a href="#!">Forgot password?</a>
          </div> -->
          <!-- Submit button -->
          <div class ="justify-content-center">
            <button type="submit" name = "register_submit" class="btn btn-primary btn-lg btn-block">Đăng ký</button>
            <button type="reset" class="btn btn-primary btn-lg btn-block ms-5">Làm mới</button>
          </div>
          <BR>
          <a class = "mt-5" href="login.php">Bạn có tài khoản? hãy Đăng nhập ngay</a>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
include 'backend/shared/footer.php';
?>