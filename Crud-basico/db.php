<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'crud_sencillo'
) or die(mysqli_erro($mysqli));

/*if(isset($conn)){
  echo 'db connected';
}*/

?>