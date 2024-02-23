<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php 
      include 'Lib/library.php';
      include 'lib/helper.php';
      loginCheck();
  
      $sql = 'SELECT * FROM siswa';
  
      // Searching
      $search = @$_GET['search'];
      if (!empty($search)) {
          $sql .= " WHERE nis LIKE '%$search%' OR nama_lengkap LIKE '%$search%'";
      }
      
      // Ordering
      $order_field = @$_GET['sort'];
      $order_mode = @$_GET['order'];
      if (!empty($order_field) && !empty($order_mode)) {
          $sql .= " ORDER BY $order_field $order_mode";
      }
      
      $listSiswa = $mysqli->query($sql);
      
      include 'view/v_index.php'; 
    
    
    
    ?>
</body>
</html>