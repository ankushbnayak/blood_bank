<?php
$con= mysqli_connect("localhost", "root", "", "blood_bank") or die(mysqli_error($con));
$b=$_POST['BloodGroup'];
$a=$_POST['Amount'];
$d=$_POST['Date'];
$sql="insert into order1(date,obg,amount)values('$d','$b','$a')";
$q=  mysqli_query($con, $sql) or die(mysqli_errno($con));
$s= mysqli_query($con, "Select * from blood") or die(mysqli_errno($con));
while($row= mysqli_fetch_array($s))
{
    if(($row['bg']==$b)&&($row['amount']>=$a))
    {
        header("Location:success.php");
        exit();
    }
}
 header("Location:fail.html");





