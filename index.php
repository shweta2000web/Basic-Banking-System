<?php
ob_start();
require_once "config.php";
session_start();
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Credit-Management</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
  
  <!-- NAVBAR START-->
    <nav class="navbar navbar-dark bg-dark navbar-expand-sm  fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <a class="navbar-brand mr-auto" href="./index.php"><i>CREDIT MANAGEMENT SYSTEM</i></a> -->
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                     <li class="nav-item "><a class="nav-link" href="./allusers.php"><span class="fa fa-address-card fa-lg"></span> View Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="./history.php"><span class="fa fa-info fa-lg"></span> Transaction History</a></li>
                </ul>
        </div>
      </div>
    </nav>
  <!-- NAVBAR END-->

  <!-- TRANSFER CREDIT MODAL START-->
  <div id="transModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
           
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Transfer Credits</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="panel panel-default" style="padding: 10px;">
                       <h2>Choose an account</h2>
                           <hr>
                           <?php 
                              $stmt = $pdo->query("SELECT * FROM users");
                              $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                              if(count($rows)>0){
                                 foreach($rows as $row ) { ?>

                                <div class="panel panel-default">
                                   <div class="panel-body">
                                      <div class="row" style="padding-left: 10px;">
      
                                        <?php echo('<a href="profile.php?user_id='.$row['user_id'].'">'.htmlentities($row['user_name']).'</a> ');
                                         ?>   
                                      </div> 
                                      <p>Email Id:<?php echo htmlentities($row['email']); ?><br>  
                                      Credits:<?php echo htmlentities($row['user_credits']); ?></p> 
                                   </div>
                                </div>
                            <?php }
                              }
                          ?>
                  </div>  
                </div>
            </div>
        </div>
    </div>
 <!-- TRANSFER CREDIT MODAL END-->

<div class="main"><h1>Banking System</h1></div>
<!-- <div><h1>System</h1></div> -->


<!--FOOTER START-->
<footer class="footer">
    <div class="container">    
         <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2021 Banking System</p>

                </div>
          </div> 
    </div>
</footer>

<!--FOOTER END-->

 <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
    <script>
      $(document).ready(function(){
        $('#trans').click(function(){
                $('#transModal').modal('show');
            });
      });
    </script> 
</body>
</html>
