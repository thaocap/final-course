 <?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
<title>tao payments</title>
<link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
</head>
<body>
<div class="wrapper">
<form method="post" action="create.php">
<div class="row">
<i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
</div>
<div>
<h1>tao moi payments</h1>
</div>
<div class="row">
<label>Ten payments:</label>
<input type="text" name="name" class="form-control">
</div>
<div class="row">
<label>Mo ta:</label>
<input type="text" name="info" class="form-control">
</div>
<div class="row">
<button class="btn ntm =primary">Submit</button>
</div>
</form>
</div>
</body>
</html>
<?php unset($_SESSION["flash"]); ?>
