<?php
    session_start();
    // if(!isset($_SESSION["user"])){
    //     header("location: login.php");
    // }
    include 'backend/shared/header.php';
    include 'backend/shared/navtop.php';
    include 'backend/shared/navbar.php';
    ?>
    <div style= "">
        <div class="container-fluid">
        <ol class="list">
            <li class="item">
              <h2 class="headline">Number one</h2><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio ad corporis, laboriosam unde provident, architecto tenetur ea odio debitis delectus explicabo eum obcaecati vitae facere iusto laborum consequuntur neque.</span>
            </li>
            <li class="item">
              <h2 class="headline">Number two</h2><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio ad corporis, laboriosam unde provident, architecto tenetur ea odio debitis delectus explicabo eum obcaecati vitae facere iusto laborum consequuntur neque.</span>
            </li>
            <li class="item">
              <h2 class="headline">Number three</h2><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio ad corporis, laboriosam unde provident, architecto tenetur ea odio debitis delectus explicabo eum obcaecati vitae facere iusto laborum consequuntur neque.</span>
            </li>
          </ol>
    </div>
        </div>
    </div>
    <?php
    include 'backend/shared/footer.php';
?>