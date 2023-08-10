<?php
include "model.php";
$DB_connect = new model("localhost","root","viet12345");
$DB_connect->conection();
//$DB_connect->get_user_by_ID(1);
print_r($DB_connect->get_user_by_ID(3));
?>