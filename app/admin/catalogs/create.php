<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/user-helper.php"; ?>
<?php
  if (isset($_POST["name"]) && isset($_POST["description"])){

    $name = $_POST["name"];
    $description = $_POST["description"];

    if (is_empty($name,"name is not empty"))
      redirect("new.php");
    if (is_empty($description,"desc is not empty"))
      redirect("new.php");

    {
      $sql = "insert into catalogs(name, description) values('$name', '$description')";
      $result = $conn->query($sql);
      if ($result) {
        $_SESSION["flash"] = "new record added sucess";

      }else{
        $_SESSION["flash"] = "Error:".$sql."<br>".$conn->error;
      }
    }
    redirect("new.php");
  }
?>
