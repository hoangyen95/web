<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Đăng nhập</title>

  <!-- Bootstrap Core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <!-- Custom CSS -->
  <link href="../css/heroic-features.css" rel="stylesheet">
  <link href="../css/register.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
   <style type="text/css">
  body{ margin-top:20px; }
</style>

</head>
<body>
  <?php include '../src/header.php' ?>
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="index.php">Trang chủ</a></li>
      <li><a href="cart.php">Giỏ hàng</a></li>
      <li><a href="#">Đặt hàng</a></li>
    </ol>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="col-md-12" id="step-1">
          <div class="row">
            <div class="col-md-7">
              <div class="single-product-widget">
                <div class="list-group-item">


                  <form class="form-horizontal">
                    <p style="color:blue; font-size: 16px;font-weight: bold;">Vui lòng chọn 1 trong 2 hình thức thanh toán sau:</p> 
                    <div class="form-group">
                      <div class="col-sm-10">
                        <div class="col-md-12 col-sm-12">
                          <input class="resize" type="radio" name = "payment"><label class="gender">Thanh toán bằng tiền mặt</label>
                        </div>

                        <div class="col-md-12 col-sm-12">
                          <input class="resize" type="radio" name = "payment">
                          <label class="gender">Thanh toán trực tuyến (ATM, Visa, Master)</label>
                          <span class="text1">With Internet Banking ATM card required</span>
                        </div>
                      </div>
                      
                      <div class="col-md-12 col-sm-12">
                        <div class="col-sm-3 col-md-3">
                          <a href="#"><img class="bank" alt="abc" src="bank/agribank.jpg"></a>
                        </div>
                        <div class="col-sm-3 col-md-3">
                          <a href="#"><img class="bank" alt="abc" src="bank/logo_donga-bank.jpg"></a>
                        </div>
                        <div class="col-sm-3 col-md-3">
                          <a href="#"><img class="bank" alt="abc" src="bank/ocb.jpg"></a>
                        </div>
                        <div class="col-sm-3 col-md-3">
                          <a href="#"><img class="bank" alt="abc" src="bank/pvcombank-logo.png"></a>
                        </div>
                      </div>

                      <div class="col-md-12 col-sm-12">
                        <div class="col-sm-3 col-md-3">
                          <a href="#"><img class="bank" alt="abc" src="bank/logoquandoi.jpg"></a>
                        </div>
                        <div class="col-sm-3 col-md-3">
                          <a href="#"><img class="bank" alt="abc" src="bank/logo-NH-ACB.png"></a>
                        </div>
                        <div class="col-sm-3 col-md-3">
                          <a href="#"><img class="bank" alt="abc" src="bank/vietcombank-logo.jpg"></a>
                        </div>
                        <div class="col-sm-3 col-md-3">
                          <a href="#"><img class="bank" alt="abc" src="bank/vietinbank.jpg"></a>
                        </div>
                      </div>

                      <div class="col-sm-offset-8 col-sm-8">
                        <a href="success.php" style="font-weight:bold" class="btn btn-warning pay">THANH TOÁN</a>
                      </div>
                    </div>
                  </form>

            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="single-product-widget">
            <div class="list-group-item">
              <p style="color:blue; font-weight: bold;font-size: 16px;margin-left: 2px;">Thông tin sản phẩm</p>
              <table class="table table-striped">
                <tr>
                  <th>Tên sản phẩm</th>
                  <th>Số lượng</th>
                  <th>Giá</th>
                </tr>
                <tr>
                  <td>iphone 7</td>
                  <td>1</td>
                  <td>$300</td>
                </tr>
                <tr>
                  <td style="color:blue; font-weight: bold;font-size: 15px">Tổng cộng(bao gồm VAT)</td>
                  <td></td>
                  <td style="color:red; font-weight: bold;font-size: 15px">$300</td>
                </tr>
              </table>
            </div>
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
