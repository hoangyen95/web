<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Đăng kí</title>

  <!-- Bootstrap Core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <!-- Custom CSS -->
  <link href="../css/heroic-features.css" rel="stylesheet">
  <link href="../css/register.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>

<body>

  <?php include '../src/header.php' ?>
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="index.php">Trang chủ</a></li>
      <li><a href="register.php">Đăng ký</a></li>

    </ol>
  </div>
  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <div class="col-md-12 col-sm-12">
      <p style="color: blue; font-size: 30px;">Tạo tài khoản</p>
      <div class="content-form-page">
        <div class="row">
          <div class="col-md-7 col-sm-7">
            <form class="form-horizontal" method="post" action="" >
              <fieldset>
                <legend>Thông tin cá nhân</legend>
                <div class="form-group">
                  <label for="username" class="col-lg-4 control-label">Tên đăng nhập <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" id="username" name="username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="firstname" class="col-lg-4 control-label">Tên <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" id="firstname" name="firstname">
                  </div>
                </div>
                <div class="form-group">
                  <label for="lastname" class="col-lg-4 control-label">Họ đệm <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" id="lastname" name="lastname">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" id="email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="phone" class="col-lg-4 control-label">Điện thoại <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="number" class="form-control" id="phone" name="phone">
                  </div>
                </div>
                <div class="form-group">
                  <label for="addr" class="col-lg-4 control-label">Địa chỉ <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <textarea type="text" class="form-control" id="addr" name="addr"></textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>Thông tin mật khẩu</legend>
                <div class="form-group">
                  <label for="password" class="col-lg-4 control-label">Mật khẩu <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="re_password" class="col-lg-4 control-label">Xác nhận mật khẩu <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="password" class="form-control" id="re_password" name="re_password">
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>Thông tin mới nhất</legend>
                <div class="checkbox form-group">  
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <label>
                      <input type="checkbox" name="check_infor">Đăng ký nhận thông tin</label>
                    </div>
                    
                  </div>
                </fieldset>
                <div class="row">
                  <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                    <input type="submit" name="submit" style="font-weight:bold" class="btn btn-primary" value="TẠO TÀI KHOẢN">
                    <input type="reset" name="reset" style="font-weight:bold" class="btn btn-danger" value="HỦY">
                  </div>
                </div>
              </form>

              <?php
              
              // validation information submit
              if(isset($_POST["submit"])) {

                $error = array();
                $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
                $addr = mysqli_real_escape_string($conn, $_POST["addr"]);
                $username = mysqli_real_escape_string($conn, $_POST["username"]);
                $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
                $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
                $email = mysqli_real_escape_string($conn, $_POST["email"]);
                $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
                $re_password = mysqli_real_escape_string($conn, md5($_POST["re_password"]));
                $check1=$check2=$check3=$check4=$check5=$check6=$check7=$check8=false;

                $sql1 = "SELECT * FROM `User` WHERE (username = '$username')";
                $query1= mysqli_query($conn, $sql1);
                $row1= mysqli_fetch_array($query1);

                if(empty($username)){
                  $error[] = "Tên đăng nhập không được bỏ trống.";
                }
                else if(strlen($username) <5 || strlen($username) > 30) {
                  $error[] = "Tên đăng nhập phải từ 5-50 ký tự.";
                }
                else if($row1){
                  $error[] = "Tên đăng nhập đã tồn tại.";
                }
                else{
                  $check1=true;
                }

                if(empty($firstname)){
                  $error[] = "Tên không được bỏ trống.";
                }
                else{
                  $check2=true;
                }

                if(empty($lastname)){
                  $error[] = "Họ đệm không được bỏ trống.";
                }
                else{
                  $check3=true;
                }

                $sql = "SELECT * FROM `User` WHERE (email = '$email')";
                $query= mysqli_query($conn, $sql);
                $row= mysqli_fetch_array($query);
                
                if(empty($email)) {
                  $error[] = "Email không được bỏ trống.";
                }
                else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                  $error[] = "Email phải theo định dạng <sth>@<sth>.<sth>";
                }
                else if($row){
                  $error[] = "Email đã tồn tại.";
                }
                else{
                  $check4=true;
                }
                

                if(empty($password)){
                  $error[] = "Password không được bỏ trống.";
                }
                else if(strlen($password) < 5) {
                  $error[] = "Password quá ngắn.";
                }
                else{
                  $check5=true;
                }

                if(empty($re_password)){
                  $error[] = "Bạn phải nhập lại mật khẩu.";
                }
                else if($re_password !== $password){
                  $error[] = "Password nhập lại chưa đúng.";
                }
                else{
                  $check6=true;
                }

                if(empty($phone))
                {
                  $error[] = "Điện thoại không được bỏ trống.<br/>";
                }
                else if(is_numeric($phone) && strlen($phone) > 11)
                {
                  $error[] = "Số điện thoại không hợp lệ.";
                }
                else{
                  $check7=true;
                }
                if(empty($addr))
                {
                  $error[] = " Địa chỉ không được bỏ trống.";
                }
                else if(strlen($addr) > 500)
                {
                  $error[] = "Địa chỉ không được lớn hơn 500 ký tự.";
                }
                else{
                  $check8=true;
                }
              
              if($check1&&$check2&&$check3&&$check4&&$check5&&$check6&&$check7&&$check8){
              $fullname = $firstname . $lastname;

              $conn->set_charset("utf8");
              //save form to database
              //level = 1 là admin; level = 2 là user thường
              $sql = "INSERT INTO `User` (id, username, password, email, fullname, phone, address, level, add_date) VALUES('', '$username', '$password', '$email', '$fullname', '$phone', '$addr', '2', 'NULL')";

              if(mysqli_query($conn, $sql)){
                echo "add success";
              }

              else
                echo var_dump(mysqli_query($conn, $sql));
                echo "false";
              mysqli_close($conn);
            }
            }
              ?>
                
                <!--- display error -->
                <div style="width: 400px; margin-top: 10px;margin-bottom: 30px; padding: 20px;">
                  <?php if(isset($error) && count($error) > 0 ) { ?>
                  <tr>
                    <td>
                    </td>
                    <td>
                      <ul style="list-style-position: inside">
                        <?php
                        echo "<p style='color:red; font-weight:bold; font-size:16px;'>Information Error!</p>"; 
                        foreach($error as $loi) : ?>
                        <li><?php echo  $loi; ?></li>
                      <?php endforeach; ?>
                    </ul>
                  </td>
                </tr>
                <?php } ?>
              </div>
          </div>
          <div class="col-md-4 col-sm-4 pull-right">
            <div class="form-info">
              <h2  style="color: blue; font-size: 30px;">Điều khoản trang web</h2>
              <p>Bạn phải tuân thủ mọi chính sách đã cung cấp cho bạn trong phạm vi Dịch vụ.Không được sử dụng trái phép Dịch vụ của chúng tôi. Ví dụ: không được gây trở ngại cho Dịch vụ của chúng tôi hoặc tìm cách truy cập chúng bằng phương pháp nào đó không thông qua giao diện và hướng dẫn mà chúng tôi cung cấp. </p>

              <button type="button" class="btn btn-info">Chi tiết</button>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>
</div>


<?php include '../src/footer.php' ?>


<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/bxslider.min.js"></script>
<script type="text/javascript" src="js/script.slider.js"></script>

</body>

</html>
