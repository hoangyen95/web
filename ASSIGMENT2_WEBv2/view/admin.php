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
            <li><a href="adcategory.php">Sản phẩm</a></li>
            <li><a href="adcustomer.php">Khách hàng</a></li>
            <li><a href="adorder.php">Đơn hàng</a></li>
            
          </ul>
        </div>
    </div>
    <div class="col-md-9">
      <a href="insert.php" style="float:right">Thêm sản phẩm mới</a>
      <br>
      <br>
      <table>
        <tr>
          <th class="tieude">ID</th>
          <th class="tieude">Tên Sản Phẩm</th>
          <th class="tieude">Loại Sản phẩm</th>
          <th class="tieude">Giá</th>
          <th class="tieude">Khuyến mãi</th>
          <th class="tieude">Số lượng</th>
          <th class="tieude">Ngày cập nhật</th>
          <th class="tieude">action</th>
        </tr>
        <!-- <tr>
          <td>jnsdjnd</td>
          <td>njdncje</td>
          <td>jnsdjnd</td>
          <td>njdncje</td>
          <td>jnsdjnd</td>
          <td>jnsdjnd</td>
          <td>njdncje</td>
          <td>
            <a href="edit.php">Sửa</a>
            <a href="delete.php">Xóa</a>
          </td>
          
        </tr> -->
      
  <?php
    //coi kiểu dữ liệu
    echo gettype($_GET['categoryid']);
    // var_dump($_GET['id']);

    //ép kiểu
    $a = (int)$_GET['categoryid'];

    // echo $a;
    $sql = "SELECT * FROM product AS p, category AS c 
    WHERE (p.categoryID = $a  AND p.categoryID = c.categoryID)";


    $query = mysqli_query($conn, $sql);
    $result = mysqli_num_rows($query);

    if ($result > 0){
      while($row = mysqli_fetch_assoc($query)){
        $id = $row['productID'];
        echo "<tr>";
        echo "<td>" . $row['productID'] . "</td>";
        echo "<td>". $row['productName']. "</td>";
        echo "<td>sony</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['discount'] . "</td>";
        echo "<td>" . $row['soluonghientai'] . "</td>";
        echo "<td>" . $row['dateupdate'] . "</td>";
        echo '<td><a href="edit.php?productid=' . $id . '">Sửa</a>';
        echo '<a href="delete.php?productid='  . $id . '">Xóa</a></td>';
        echo "</tr>";
      }
    }
  else
    echo "false";
  ?>

  </table>
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
