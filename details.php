
<html>
     <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="s.css">
        <style>
            .style-r{
                margin-top:170px;
            }
            
           
        footer{
    padding:10px 0;
    background-color:#101010;
    color:#9d9d9d;
    bottom:0;
    width:100%
    
}
</style>
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
                    <a href="index.html" class="navbar-brand">Blood Bank</a>
                </div>
              
        <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                         <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>

                    </ul>
                </div>
      </div>
                          
        </nav>
        <div class="order1">
            <div class="x">
         <div class="dcontainer">
                
             <center>
                  <div class="panel panel-danger" >
                       <div class="panel-heading">
                           <center>      <h4>Appointment</h4></center>
                        </div>
                      <center>
           <div class="row r-style">
               <div class="col-xs-5 col-xs-offset-3">
                                            
                   <br>
                   
                   <form method="post" action="apointment.php" >
                       
                        <div class="form-group" >
                             <?php 
                $con= mysqli_connect("localhost", "root", "", "blood_bank") or die(mysqli_error($con));
                $x= mysqli_query($con, "Select * from register order by rid desc")  or die(mysqli_error($con));
                $r= mysqli_fetch_array($x) or die(mysqli_error($con));
                ?>
                <h5>Name:<?php echo $r['name'];?></h5>
                <h5>Blood group:<?php echo $r['bgroup'];?></h5>
                <h5>Sex:<?php echo $r['sex'];?></h5>
                <h5>City:<?php echo $r['city'];?></h5>
                <h5>D.O.B:<?php echo $r['dob'];?></h5>
                              <input type="text" class="from-control form-control input-lg" name="Date" placeholder="Date" style="background-color: rgba(0,0,0,0.2); color: white" >
                        
                        </div>
                         
                         
                      
                        <input type="submit" value="submit" class="btn btn-danger">
                       
                       
                    </form>

               </div>
           </div></center>

                  </div> </center>
                  </div>
                                 
        </div>
        
         <nav class="navbar navbar-inverse navbar-fixed-bottom">
 <footer>
                <div class="container">
                    <center>Copyright &#169 Blood Bank. All Rights Reserved|Contact Us: +91 90000 00000 </center>
                </div>
            </footer>
             
    </nav>
        </div>
       
        
       
    </body>
</html>
