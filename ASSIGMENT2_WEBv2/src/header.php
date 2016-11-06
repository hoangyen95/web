<?php include '../libs/connect.php'; session_start() ?>
<div class="container">
  <div class="col-md-12">
    <div class="status">
      <ul>
        <?php
        if (empty($_SESSION['user_id']))
        {
          ?>

          <li><a href="register.php">Đăng kí</a></li>
          <li><a href="login.php">Đăng nhập</a></li>
          <?php
        }

        else
        {
          $user_id = intval($_SESSION['user_id']);
          $sql_query = mysqli_query($conn, "SELECT * FROM user WHERE id='{$user_id}'");
          $member = mysqli_fetch_array( $sql_query );
          

          echo "<p style='text-align:right;'>Hello " . $member['username'] . "</p>";

          echo "<li><a href='../view/account.php'>Tài khoản</a></li>";
          
          if ($member['level']=="1"){
            echo "<li><a href='../view/adcategory.php'>Trang quản trị</a></li>";
          }
          echo "<li><a href='../action/log_out.php'>Thoát</a></li>"; 

        }
        ?>
        <li><a href="cart.php">Giỏ hàng <i style="color:orange;" class="fa fa-shopping-cart"></i></a></li>
      </ul>
    </div>
  </div>
</div>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" >
  <div class="container">
    <!-- Logo and responsive toggle -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li>
          <a id="home_name" href="index.php">STORE online</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="category.php">iPhone</a></li>
            <li><a href="category.php">Sony</a></li>
            <li><a href="category.php">Samsung</a></li>
            <li><a href="category.php">Asus</a></li>
            <li><a href="category.php">Oppo</a></li>
            <li><a href="category.php">HTC</a></li>
            <li><a href="category.php">Nokia</a></li>
            <li><a href="category.php">Lenovo</a></li>
          </ul>
        </li>

        <li>
          <a href="discount.php">Khuyến mãi</a>
        </li>
        <li>
          <a href="customer.php" >Hỗ trợ khách hàng</a>
        </li>
      </ul>

      <!-- Search -->
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control">
        </div>
        <a href="search.php" type="submit" class="btn btn-default">Tìm kiếm</a>

      </form>

    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>
