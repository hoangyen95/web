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
  
  <style type="text/css">
    table, tr, td{
      border: 1px solid gray;
      border-collapse: collapse;
      text-align: center;
    }

    .tieude{
      border: 1px solid gray;
      text-align: center;
      width: 5%;
    }
  </style>
</head>

<body>

  <?php include '../src/header.php' ?>
  <?php include '../libs/connect.php' ?>
  <?php 
    global $err;
  ?>
  <div class="container">
    <div class="col-md-3">
      <div class="categories">

        <ul>
         <h3>QUẢN LÝ</h3>
         <li><a href="adproduct.php">Sản phẩm</a></li>
         <li><a href="adcustomer.php">Khách hàng</a></li>
         <li><a href="adorder.php">Đơn hàng</a></li>

       </ul>
     </div>
   </div>
   <div class="col-md-9">
    <h3 style="text-align:center; color:blue; font-size: 2em; font-weight:bold;line-height: 50px">THÊM SẢN PHẨM</h3>
    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label for="idp" class="col-lg-3 control-label">ID <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="number" class="form-control" id="idp" name="idp">
        </div>
        <?php echo $err; ?>
      </div>
      <div class="form-group">
        <label for="pname" class="col-lg-3 control-label">Tên sản phẩm <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="pname" name="pname">
        </div>
      </div>
      <div class="form-group">
        <label for="price" class="col-lg-3 control-label">Giá sản phẩm <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="number" class="form-control" id="price" name="price">
        </div>
      </div>
      <div class="form-group">
        <label for="discount" class="col-lg-3 control-label">Khuyến mãi <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="number" class="form-control" id="discount" name="discount">
        </div>
      </div>
      <div class="form-group">
        <label for="image" class="col-lg-3 control-label">Hình đại diện <span class="require">*</span></label>
        <div class="col-lg-8">
          <input id="image" type="file" accept="image/" name="image">
        </div>
      </div>
      <div class="form-group">
        <label for="image1" class="col-lg-3 control-label">Hình 1 <span class="require">*</span></label>
        <div class="col-lg-8">
          <input id="image1" type="file" accept="image/" name="image1">
        </div>
      </div>
      <div class="form-group">
        <label for="image2" class="col-lg-3 control-label">Hình 2 <span class="require">*</span></label>
        <div class="col-lg-8">
          <input id="image2" type="file" accept="image/" name="image2">
        </div>
      </div>
      <!-- <div class="form-group">
        <label for="image3" class="col-lg-3 control-label">Hình 3 <span class="require">*</span></label>
        <div class="col-lg-8">
          <input id="image3" type="file" accept="image/" name="image3">
        </div>
      </div> -->
      <div class="form-group">
        <label for="category" class="col-lg-3 control-label">Loại sản phẩm <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="category" name="category">
        </div>
      </div>
      <div class="form-group">
        <label for="soluong" class="col-lg-3 control-label">Số lượng <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="number" class="form-control" id="soluong" name="soluong">
        </div>
      </div>
      <div class="form-group">
        <label for="mota" class="col-lg-3 control-label">Mô tả <span class="require">*</span></label>
        <div class="col-lg-8">
          <textarea type="text" class="form-control" id="mota" name="mota"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="thongso" class="col-lg-3 control-label">Màn hình <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="thongso" name="thongso">
        </div>
      </div>
      <div class="form-group">
        <label for="hdd" class="col-lg-3 control-label">HDD <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="hdd" name="hdd">
        </div>
      </div>
      <div class="form-group">
        <label for="cmrt" class="col-lg-3 control-label">Camera trước <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="cmrt" name="cmrt">
        </div>
      </div>
      <div class="form-group">
        <label for="cmrs" class="col-lg-3 control-label">Camera sau <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="cmrs" name="cmrs">
        </div>
      </div>
      <div class="form-group">
        <label for="ram" class="col-lg-3 control-label">RAM <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="ram" name="ram">
        </div>
      </div>
      <div class="form-group">
        <label for="rom" class="col-lg-3 control-label">ROM <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="rom" name="rom">
        </div>
      </div>
      <div class="form-group">
        <label for="thesim" class="col-lg-3 control-label">Thẻ sim <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="thesim" name="thesim">
        </div>
      </div>
      <div class="form-group">
        <label for="dungluong" class="col-lg-3 control-label">Dung lượng pin <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="dungluong" name="dungluong">
        </div>
      </div>
      
      <div class="form-group">
        <label for="date" class="col-lg-3 control-label">Ngày cập nhật <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="date" class="form-control" id="date" name="date">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
          <input class="btn btn-success" type="submit" name="submit" value="TẠO">
          <input class="btn btn-warning" type="reset" name="reset" value="HỦY">
        </div>
      </div>
    </form>
  </div>
</div>
<?php
if(isset($_POST['submit'])){
  
  $id = mysqli_real_escape_string($conn, $_POST['idp']);
  $pname = mysqli_real_escape_string($conn, $_POST['pname']);
  $price = mysqli_real_escape_string($conn, $_POST['price']);
  $discount = mysqli_real_escape_string($conn, $_POST['discount']);

  $category = mysqli_real_escape_string($conn, $_POST['category']);
  $soluong = mysqli_real_escape_string($conn, $_POST['soluong']);
  $mota = mysqli_real_escape_string($conn, $_POST['mota']);
  $thongso = mysqli_real_escape_string($conn, $_POST['thongso']);
  $hdd = mysqli_real_escape_string($conn, $_POST['hdd']);
  $cmrt = mysqli_real_escape_string($conn, $_POST['cmrt']);
  $cmrs = mysqli_real_escape_string($conn, $_POST['cmrs']);
  $rom = mysqli_real_escape_string($conn, $_POST['rom']);
  $ram = mysqli_real_escape_string($conn, $_POST['ram']);
  $thesim = mysqli_real_escape_string($conn, $_POST['thesim']);
  $dungluong = mysqli_real_escape_string($conn, $_POST['dungluong']);
  $date = mysqli_real_escape_string($conn, $_POST['date']);

  
  $name = $_FILES['image']['name'] ;
  $name1 = $_FILES['image1']['name'];
  $name2 = $_FILES['image2']['name'];
  // $name3 = $_FILES['image3']['name'];

  // print_r($name1);
  //validate form???

  if($id == ''){
    $err =  "nhap id";
  }

  $conn->set_charset("utf8");
  $sql = "INSERT INTO `product` (`productID`, `productName`, `description`, `price`, `discount`, `image`, `categoryID`, `dateupdate`, `soluonghientai`, `soluongconlai`) VALUES 
  ($id, '$pname', '$mota', $price, $discount, '{$name}', $category, '$date', $soluong, 20)";

  var_dump($sql);
  $query = mysqli_query($conn, $sql);
  if($query){
    echo "success";
  }
  else
    echo "false";

  //chèn 3 hình nhỏ
  $sql2 = "INSERT INTO `image` (`imageID`, `imageName`, `url`, `productID`, `choose`) 
           VALUES ('', '$pname', '{$name1}', $id, 1);";
  $query2 = mysqli_query($conn, $sql2);
  var_dump($query2);

  $sql3 = "INSERT INTO `image` (`imageID`, `imageName`, `url`, `productID`, `choose`)
           VALUES ('', '$pname', '{$name2}', $id, 1)";
  $query3 = mysqli_query($conn, $sql3);
  var_dump($query3);

  // $sql4 = "INSERT INTO `image` (`imageID`, `imageName`, `url`, `productID`, `choose`)
  //          VALUES ('', '$pname', '{$name3}', $id, 1)";
  // $query4 = mysqli_query($conn, $sql4);
  // var_dump($query4);

  //insert thong so 
  $sql5 = "INSERT INTO `ThongSo` (`thongsoID`, `productID`, `manhinh`, `HDD`, `CMRTruoc`, `CMRSau`, `RAM`, `ROM`, `thesim`, `dungluongPIN`)
           VALUES ('', $id, '$thongso', '$hdd', '$cmrt', '$cmrs', '$ram', '$rom', '$thesim', '$dungluong')";

  $query5 = mysqli_query($conn, $sql5);
  var_dump($query5);

  //test in kqua ra màn hình 
  $sql1="SELECT * FROM `product` WHERE productID=22";
  $query1 = mysqli_query($conn, $sql1);
  if($query1){
    if (mysqli_num_rows($query1) > 0) {
    // output data of each row
      while($row = mysqli_fetch_assoc($query1)) {

        echo "<img id='my' height='150' width='320' src='../img/$row[image]' class='reponsive' alt='hello'> ";
      }
    } else {
      echo "0 results";
    }
  }

  else
    echo "false";

}
else echo "vui lòng nhập dữ liệu vào trước khi nhấn submit";

?>  

<?php include '../src/footer.php' ?>


<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/bxslider.min.js"></script>
<script type="text/javascript" src="js/script.slider.js"></script>

</body>
