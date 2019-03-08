 <?php

$email=$_POST['email'];
$pass=$_POST['pass'];

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pno=$_POST['pno'];
$update=$_POST['update'];
$g=$_POST['gscheme'];
$p=$_POST['pscheme'];
$e=$_POST['exam'];
$w=$_POST['workshop'];
$o=$_POST['other'];



include 'db.php';


mysqli_query($con,"INSERT INTO `user` (`email`, `password`) VALUES ('$email', '$pass')");

mysqli_query($con,"INSERT INTO `u_detail` (`email`, `f_name`,`l_name`,`p_no`,`update`) VALUES ('$email','$fname','$lname','$pno','$update')");

if($update=="A/C")
mysqli_query($con,"INSERT INTO `update_detail` (`email`, `pno`,`gscheme`,`pscheme`,`exam`,`workshop`,`other`) VALUES ('$email','$pno','$g','$p','$e','$w','$o')");


Header('Location:gindex.php');

 ?>