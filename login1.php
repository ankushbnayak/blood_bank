<html>
    <head>
        <title>Blood Bank</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body>
<?php
$con= mysqli_connect("localhost","root","","blood_bank") or die(mysqli_error($con));
$un=$_POST['Name'];
$pw=$_POST['Password'];
$p= mysqli_query($con, "insert into login(name,pass) values('$un','$pw');") or die(mysqli_error($con));
$r= mysqli_query($con, "select * from login where name='$un';") or die(mysqli_error($con));
$row= mysqli_fetch_array($r);
echo $row['pass'];
if($row['pass']==$pw)
{   
    header("Location:details1.php");
    echo "Login successfull";
    exit();
}
header("Location:login.html");
?>

          




