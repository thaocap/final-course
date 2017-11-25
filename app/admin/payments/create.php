<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/user-helper.php"; ?>
<?php
  if (isset($_POST["name"]) && isset($_POST["info"])){

    $name = $_POST["name"];
    $info = $_POST["info"];

    if (is_empty($name,"name is not empty"))
      redirect("new.php");
    if (is_empty($info,"info is not empty"))
      redirect("new.php");

    {
      $sql = "insert into payments(name, info) values('$name', '$info')";
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
