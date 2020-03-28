<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Blood Bank</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
        .col_style{
            border: 1px solid black;
        }
    </style>
    <link rel="stylesheet" href="newcss1.css" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.html">Blood Bank</a>
                </div>
                 <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="Image">
            <div class="container">
                <center> <div id="Donate">
                      <h3>Order successfully placed</h3>
                <h4>Order details:</h4><br>
                <?php 
                $con= mysqli_connect("localhost", "root", "", "blood_bank") or die(mysqli_error($con));
                $x= mysqli_query($con, "Select * from order1 order by oid desc")  or die(mysqli_error($con));
                $r= mysqli_fetch_array($x) or die(mysqli_error($con));
                $b=$r['obg'];
                $a=$r['amount'];
                 $o=mysqli_query($con, "update blood set amount=amount-$a where bg='$b'")  or die(mysqli_error($con));
                ?>
                <h5>Date:<?php echo $r['date'];?></h5>
                <h5>Blood group:<?php echo $r['obg'];?></h5>
                <h5>Amount:<?php echo $r['amount'];?></h5>
 
                </div>
                </center>
            </div>
            
        
         
         </div>
        <footer>
            <div class="container">
                <center>Contact Us: +91 90000 00000 </center>
            </div>
        </footer>
    </body>
</html>
