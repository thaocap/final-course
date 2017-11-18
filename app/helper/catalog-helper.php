<?php
function is_empty($field, $message){
if(strlen(trim($field)) == 0){
$_SESSION["flash"] = $message;
return true;
}
return false;
}

function redirect($url){
header("location: $url");
die();
}
?>
