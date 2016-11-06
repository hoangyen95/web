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
   <?php
   $conn->set_charset("utf8");
   $a = (int)$_GET['productid'];
   $sql1 = "SELECT * FROM `product` WHERE productID = $a";
   $query1 = mysqli_query($conn, $sql1);
   if(mysqli_num_rows($query1)>0){
    while($row = mysqli_fetch_assoc($query1)){

    //   }
    // }
      ?>
      <div class="col-md-9">
        <h3 style="text-align:center; color:blue; font-size: 2em; font-weight:bold;line-height: 50px">THÊM SẢN PHẨM</h3>
        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
          <div class="form-group">
            <label for="idp" class="col-lg-3 control-label">ID <span class="require">*</span></label>
            <div class="col-lg-8">
              <input type="number" class="form-control" id="idp" name="idp" value="<?php echo $row['productID'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="pname" class="col-lg-3 control-label">Tên sản phẩm <span class="require">*</span></label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="pname" name="pname" value="<?php echo $row['productName'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="price" class="col-lg-3 control-label">Giá sản phẩm <span class="require">*</span></label>
            <div class="col-lg-8">
              <input type="number" class="form-control" id="price" name="price" value="<?php echo $row['price'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="discount" class="col-lg-3 control-label">Khuyến mãi <span class="require">*</span></label>
            <div class="col-lg-8">
              <input type="number" class="form-control" id="discount" name="discount" value="<?php echo $row['discount'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="image" class="col-lg-3 control-label">Hình đại diện <span class="require">*</span></label>
            <div class="col-lg-8">
              <input id="image" type="file" accept="image/" name="image" value="<?php echo $row['image'] ?>">
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
          <input type="text" class="form-control" id="category" name="category" value="<?php echo $row['categoryID']; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="soluong" class="col-lg-3 control-label">Số lượng <span class="require">*</span></label>
        <div class="col-lg-8">
          <input type="number" class="form-control" id="soluong" name="soluong" value="<?php echo $row['soluonghientai']; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="mota" class="col-lg-3 control-label">Mô tả <span class="require">*</span></label>
        <div class="col-lg-8">
          <textarea type="text" class="form-control" id="mota" name="mota"><?php echo $row['description']; ?></textarea>
        </div>
      </div>
      <?php
      $b = (int)$row['productID'];
      $sql2 = "SELECT * FROM `thongso` WHERE productID = $b";
      $query2 = mysqli_query($conn, $sql2);

      if(mysqli_num_rows($query2)>0){
        while($row2 = mysqli_fetch_assoc($query2)){
          ?>
          <div class="form-group">
            <label for="thongso" class="col-lg-3 control-label">Màn hình <span class="require">*</span></label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="thongso" name="thongso" value="<?php echo $row2['manhinh'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="hdd" class="col-lg-3 control-label">HDD <span class="require">*</span></label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="hdd" name="hdd" value="<?php echo $row2['HDD'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="cmrt" class="col-lg-3 control-label">Camera trước <span class="require">*</span></label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="cmrt" name="cmrt" value="<?php echo $row2['CMRTruoc'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="cmrs" class="col-lg-3 control-label">Camera sau <span class="require">*</span></label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="cmrs" name="cmrs" value="<?php echo $row2['CMRSau'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="ram" class="col-lg-3 control-label">RAM <span class="require">*</span></label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="ram" name="ram" value="<?php echo $row2['RAM'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="rom" class="col-lg-3 control-label">ROM <span class="require">*</span></label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="rom" name="rom" value="<?php echo $row2['ROM'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="thesim" class="col-lg-3 control-label">Thẻ sim <span class="require">*</span></label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="thesim" name="thesim" value="<?php echo $row2['thesim'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="dungluong" class="col-lg-3 control-label">Dung lượng pin <span class="require">*</span></label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="dungluong" name="dungluong" value="<?php echo $row2['dungluongPIN'] ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="date" class="col-lg-3 control-label">Ngày cập nhật <span class="require">*</span></label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="date" name="date" value="<?php echo $row['dateupdate'] ?>">
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
  }
}
}
}
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
