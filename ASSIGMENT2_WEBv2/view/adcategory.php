<!DOCTYPE html>
<html>
<head>
  <title>Category</title>
  <style type="text/css">
    table, tr, td{
      border: 1px solid blue;
      border-collapse: collapse;
    }
  </style>
</head>
<body>
  
</body>
</html>
<?php
  include '../libs/connect.php';
?>
<table>
  <tr>
    <td>ID</td>
    <td>Name</td>
  </tr>
 

<?php
  $sql = "SELECT `categoryID`, `categoryName` FROM `category`";
  $query = mysqli_query($conn, $sql);
  $result = mysqli_num_rows($query);
  if($result > 0){
    while($row = mysqli_fetch_assoc($query)){
      $id = $row['categoryID'];
      $name = $row['categoryName'];
      echo "<tr>";
      echo "<td>" . $id . "</td>";
      echo "<td>" . $name . "</td>";
      
      echo '<td><a href="admin.php?categoryid=' . $id . '">Thêm sản phẩm</a></td>';
      echo "</tr>";
     
    }

  }
  else echo "0 results.";

mysqli_close($conn);
?>

<a href="insertCategory.php"> Thêm loại sản phẩm</a>
</table>