<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/user-helper.php"; ?>
<?php
  if (isset($_POST["name"]) && isset($_POST["info"]) && isset($_POST["id"])) {

    $name = $_POST["name"];
    $info = $_POST["info"];
    $id = $_POST["id"];
    if (is_empty($name,"name is not empty"))
      redirect("index.php");
    if (is_empty($info,"info is not empty"))
      redirect("index.php");
    {
      $sql = "update payments set name='$name', info = '$info' where id=$id";
      $result = $conn->query($sql);
      if ($result) {
        $_SESSION["flash"] = "new record added sucess";

      }else{
        $_SESSION["flash"] = "Error:".$sql."<br>".$conn->error;
      }
    }
    redirect("index.php");
  }
?>
