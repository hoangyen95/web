<?php
  include '../libs/connect.php';
  
  $conn->set_charset("utf8");
   $a = (int)$_GET['productid'];

  // print_r($_GET['productid']);
  // var_dump($_GET['productid']);
  // var_dump($a);
  $sql = "SELECT * FROM `product` WHERE productID = $a";
  
  // var_dump($sql);
  $query = mysqli_query($conn, $sql);
  // var_dump($query);

  if($query){
    echo "success";

    //xoa bang comment
    $sql2 = "DELETE FROM `comment` WHERE productID = $a";
    $query2 = mysqli_query($conn, $sql2);

    //xoa bang thong so
    $sql3 = "DELETE FROM `thongso` WHERE productID = $a";
    $query3 = mysqli_query($conn, $sql3);

    $sql4 = "DELETE FROM `image` WHERE productID = $a";
    $query4 = mysqli_query($conn, $sql4);


    $sql1 = "DELETE FROM `product` WHERE productID = $a";
  
    // var_dump($sql1);
    $query1 = mysqli_query($conn, $sql1);
    // var_dump($query1);

    // header('Location: ../view/admin.php');
    if (!$query1) {
      die('Invalid query: ' . mysqli_error($conn));
    } 
  }
  else
    echo "false";
  mysqli_close($conn);
  
?>