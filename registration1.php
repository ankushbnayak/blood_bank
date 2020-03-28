
<?php
$c= mysqli_connect("localhost", "root", "", "blood_bank") or die(mysqli_error($c));
$n=$_POST['Name'];
$p=$_POST['Password'];
$s=$_POST['Sex'];
$bg=$_POST['Bloodgroup'];
$d=$_POST['DOB'];
$ph=$_POST['phone'];
$ci=$_POST['City'];
$sql= "insert into register(name,pass,sex,bgroup,dob,phone,city) values('$n','$p','$s','$bg','$d','$ph','$ci')";
$sql1="insert into login(name,pass) values('$n','$p')";
$r= mysqli_query($c, $sql) or die(mysqli_error($c));
$q= mysqli_query($c, $sql1) or die(mysqli_error($c));
header("Location:details.php");
?>


