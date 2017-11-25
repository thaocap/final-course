
<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/user-helper.php"; ?>
<?php
   if (isset($_GET["id"])) {
      $id = $_GET["id"];
      $sql = "select * from payments where id = $id";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
         $row = $result->fetch_assoc();
         $name = $row["name"];
         $info = $row["information"];
      }
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <title>chinh sua payments</title>
      <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
   </head>
   <body>
      <div class="wrapper">
         <form method="post" action="update.php">
            <div class="row">
               <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
            </div>
            <div>
               <h1>Chinh sua payments</h1>
            </div>

               <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">

            <div class="row">
               <label>Ten payments:</label>
               <input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
            </div>
            <div class="row">
               <label>Mo ta:</label>
               <input type="text" name="information" value="<?php echo $info; ?>" class="form-control">
            </div>
            <div class="row">
               <button class="btn ntm =primary">Submit</button>
            </div>
         </form>
      </div>
   </body>
</html>
<?php unset($_SESSION["flash"]); ?>

