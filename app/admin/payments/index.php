<?php require_once "../../../db/mysql.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Danh sach catalogs</title>
   <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
</head>
<body>
  <div class="container">
  <h2>Danh sach catalogs</h2>
  <div class="row">
    <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>info</th>
        <th>#</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sql = "select * from payments";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) { ?>
          <tr>
            <td><?php  echo $row["name"]; ?></td>
            <td><?php  echo $row["info"]; ?></td>
            <td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
          </tr>
    <?php    }
      }
    ?>

    </tbody>
  </table>
</div>
</body>
</html>
