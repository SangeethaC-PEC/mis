 <?php

$email=$_POST['email'];
$pass=$_POST['pass'];


include 'db.php';


 $r=mysqli_query($con,"select * from `user` where email='$email' and password='$pass'");
 $row=mysqli_fetch_row($r);

 if($row>0)
 {
 	Header('Location:index1.php');
 	foreach ($row as $i) {
 		if($i=="ajithak@gmail.com")
 			header("Location:admin.php");
 	}
 }
 else
 {
 	echo "login not sucessfull";
 }



 ?>