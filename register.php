<?php


require_once './connect.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $employee_number= $_POST['employee_number'];
  $time_in= $_POST['time_in'];
  $time_out= $_POST['time_out'];

  

  $stmt =$db->prepare("INSERT INTO attendance(employee_number, time_in, time_out) VALUES(?,?,?)");
  $stmt->execute(array($employee_number,$time_in,$time_out));

 header("location: index.php");
 
}
?>