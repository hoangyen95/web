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
        </head>

      <body>
        <?php include '../src/header.php' ?>
        <?php
         
          if(isset($_POST['updataCart']))
          {
            foreach($_POST['qty'] as $key=>$value)
            {
              if( ($value == 0) and (is_numeric($value)))
              {
                unset ($_SESSION['cart'][$key]);
              }
              elseif(($value > 0) and (is_numeric($value)))
              {
                $_SESSION['cart'][$key]=$value;
              }
            }
            header("location:cart.php");
          }
        ?>
        <div class="container">
          <ol class="breadcrumb">
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="#">Giỏ hàng</a></li>
          </ol>
        </div>
        <div class="container">
          <div class="row">
            <?php
              $ok=1;
              if(isset($_SESSION['cart']))
              {
                foreach($_SESSION['cart'] as $k => $v)
                {
                  if(isset($k))
                  {
                    $ok=2;
                  }
                }
              }
              if($ok == 2)
              {
                echo "<form action='cart.php' method='post'>";
                foreach($_SESSION['cart'] as $key=>$value)
                {
                  $item[]=$key;
                }
                $str=implode(",",$item);
                
               include '../libs/connect.php';
                $mysqli = new mysqli("localhost", "root", "", "webdata5");

                $sql="select * from product where productID in ($str)";
                $query=mysqli_query($mysqli,$sql);
                
                $total=0;
                echo "<div class='col-lg-9 col-md-9 col-sm-9'>";
                echo "<table class='table'>";
                echo "<tr>";
                echo "<th>";
                echo "Sản phẩm trong giỏ hàng";
                echo "</th>";
                echo "<th>";
                echo "Giá mua";
                echo "</th>";
                echo "<th>";
                echo "Số lượng";
                echo "</th>";
                echo "<th>";
                echo "Giả giảm";
                echo "</th>";
                echo "<th>";
                echo "Thành tiền";
                echo "</th>";
                echo "</tr>";
                
                while($row=mysqli_fetch_array($query))
                {
                  $soluong=$_SESSION['cart'][$row['productID']];
                  $tongtien=$_SESSION['cart'][$row['productID']]*$row['price'];
                  echo "<tr>";
                  echo "<td>";
                  echo "<img src='../img/$row[image]' style='float:left; width:120px; height:150px' alt='iphone'>";
                  echo "<h2>$row[productName] </h2>";
                  echo "<p><a href='../action/delcart.php?productid=$row[productID]'>Xóa </a></p>";
                  echo "</td>";
                  echo "<td>";
                  echo "$row[price]";
                  echo "</td>";
                  echo "<td>";
                  echo "<p> <input type='text' name='qty[$row[productID]]' size='4' value='$soluong'> - ";
                  echo "</td>";
                  echo "<td>";
                  echo "0đ";
                  echo "</td>";
                  echo "<td>";
                  echo "$tongtien";
                  echo "</td>";
                  echo "</tr>";
                  $total+=$tongtien;
                }
                
                echo "</table>";
                echo "<a href='index.php' style='font-weight:bold' class='btn btn-warning'>TIẾP TỤC MUA HÀNG</a>";
                echo "<input type='submit' style='font-weight:bold ; float:right' name='updataCart' class='btn btn-danger' value='Cập Nhập Giỏ Hàng'>";
                echo "</div>";
                echo "<div class='col-lg-3 col-md-3 col-sm-12'>";
                echo "<div class='single-product-widget'>";
                echo "<div class='list-group-item'>";
                echo "<p style='color:blue; font-weight: bold;font-size: 16px;margin-left: 2px;'>Thông tin thanh toán</p>";
                echo "<table class='table table-striped'>";
                echo "<tr>";
                echo "<th>Tổng cộng: </th>";
                echo "<th>$total"."đ</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Giảm giá </td>";
                echo "<td>10% </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td style='color:blue; font-weight: bold;font-size: 15px'>Thành tiền: </td>";
                echo "<td style='color:red; font-weight: bold;font-size: 15px'>$total"."đ</td>";
                echo "</tr>";
                echo "</table>";
                echo "<p style='text-align: center'><a href='checkout.php' style='font-weight:bold' class='btn btn-danger' >TIẾN HÀNH ĐẶT HÀNG</a></p>";

                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
              }

              else
              {
                echo "<p align='center' >Bạn Không Có Món Hàng Nào Trong Giỏ Hàng<br /><a href='index.php'>Quay Trở Về Trang Chủ Mua Ngay</a></p>";
                echo "</div>";
              }
              $mysqli->close();
            ?> 


          
        <br/><br/>
        <div class="container">
          <ol class="breadcrumb">
            <li style="color:#8948ef"><b>Nhập các thông tin bên dưới để thực hiện đặt hàng online.</b></li>
          </ol>   

          <div class="row">
            <div class="col-xs-12">    
              <form action="savexml.php" method="post" class="form-horizontal" style="border: 1px solid #dddddd; padding-right: 5em; border-radius: 0.5em;">
                <p class="form_info"> Thông tin khách hàng:</p>
                <div class="form-group">
                  <label for="inputname" class="col-sm-2 control-label" style="text-align:left; padding-left: 6em;">Họ đệm:</label>
                  <div class="col-sm-10">
                    <input type="text" name="hodem" class="form-control" id="inputname" placeholder="Nguyễn Văn" size=40>
                  </div>
                </div> 
                <div class="form-group">
                  <label for="inputname" class="col-sm-2 control-label" style="text-align:left; padding-left: 6em;">Tên:</label>
                  <div class="col-sm-10">
                    <input type="text" name="ten" class="form-control" id="inputname" placeholder="A" size=40>
                  </div>
                </div>
                <div class="form-group">
                  <label for="gender" class="col-sm-2 control-label"  style="text-align:left; padding-left: 6em;">Giới tính: </label>
                  <div class="col-sm-10">
                    <div class="col-md-4 col-sm-4">
                      <input class="resize" type="radio" checked="checked" name="gioitinh" value="Nam" id="gender"><label class="gender"> Nam</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input class="resize" type="radio" name="gioitinh" value="Nu" id="gender1"><label class="gender" style="padding-right: 2em"> Nữ</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="phone" class="col-sm-2 control-label"  style="text-align:left; padding-left: 6em;">Điện thoại:</label>
                  <div class="col-sm-10">
                    <input name="dienthoai" type="number" class="form-control" id="phone" placeholder="0123456789">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"  style="text-align:left; padding-left: 6em;">Email:</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="test@gmail.com">
                  </div>
                </div>
                <div class="form-group">
                  <label for="addr" class="col-sm-2 control-label"  style="text-align:left; padding-left: 6em;">Địa chỉ: </label>
                  <div class="col-sm-10">
                    <textarea  name="diachi" id="addr" class="form-control">
                    </textarea>
                  </div>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-warning pay" style="float:right;" value="XÁC NHẬN" />


                </div>
              </form>


            </div>
          </div>
        </div>

        <div class="container">
          <div style="width: 400px; margin-top: 10px;margin-bottom: 30px; padding: 20px;">
            <?php if(isset($thongbaoloi) && count($thongbaoloi) > 0 ) { ?>
            <tr>
              <td>
              </td>
              <td>
                <ul style="list-style-position: inside">
                  <?php
                  echo "<p style='color:red; font-weight:bold; font-size:16px;'>Information Error!</p>"; 
                  foreach($thongbaoloi as $loi) : ?>
                  <li><?php echo  $loi; ?></li>
                <?php endforeach; ?>
              </ul>
            </td>
          </tr>
          <?php } ?>
        </div>
      </div> 
    </div>
  </div>
  <br>

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
