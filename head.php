    <?php
    include 'config.php'; 
    session_start();
    if(isset($_POST['login'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $login_level=$_POST['login_level'];
    if($login_level==1){
    $login_query = 'SELECT* FROM admin WHERE active=1 ';
    }
    else if($login_level==2){
    $login_query = 'SELECT* FROM house WHERE status=1  ';       
    }
   $rows = mysqli_query(  $connect,$login_query);
   if(! $rows ) {
      $msg= "Could not get data! ";
   }
   foreach($rows as $row):
    if($username==$row['username']&&$password==$row['password'])
    {
            
        $msg="";
        if($login_level==1){
        $_SESSION['user_id']  = $row['admin_id'];   
        $_SESSION['loged-in'] = 1;  
        $_SESSION['name'] = $row['name']; 
        $_SESSION['user_email'] = $row['email'];  
        $_SESSION['login_level'] = $login_level;      
        header ("location: admin/dashboard.php");
        exit;
        }
        else if($login_level==2){
        $_SESSION['house_id'] = $row['house_id'];    
        }
        $_SESSION['name'] = $row['name'];   
        $_SESSION['email'] = $row['email'];   
        $_SESSION['loged-in'] = 1;    
        $_SESSION['login_level'] = $login_level;      
        header ("location: house_owner/dashboard.php");
        exit;
    }
    else{
        $_SESSION['loged-in']=0;
        $msg="Wrong Email and Password Combination";
    }
   endforeach;}




    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $owner_name=$_POST['owner_name'];
        $area=$_POST['area'];
        $section=$_POST['section'];
        $sector=$_POST['sector'];
        $block=$_POST['block'];
        $zip=$_POST['zip'];
        $overview=$_POST['overview'];
        $status=0;
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        
          $submit_query="INSERT INTO `house`( `name`, `owner_name`, `area`, `sector`, `block`, `section`, `zip`, `overview`, `status`,username,password)
          VALUES('$name','$owner_name','$area','$sector','$block','$section','$zip','$overview','$status','username','password')";
          
        if(mysqli_query($connect,$submit_query))
            
        {
            $msg="House Successfully Inserted";
            header('location: house.php');
        }
        else{
            $msg='Failed ';
        }
        
    }






   ?>



<!doctype html>
<html lang="en">

<head>
    <title>DMP || Dhaka Metropolitan Police</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

          <!--Data table -->

        
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">


        <style type="text/css">
            thead tr{
                background-color: lightblue;
            }
            #example{
                box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
            }
            .dt-buttons, .dataTables_filter{
                margin-bottom: 15px;
            }

            .dt-button{
                width: 100px;
                height:40px;
            }

            .dataTables_wrapper .dataTables_filter input{
                width: 600px;
                height:40px;
            }
            .dataTables_wrapper{
                width:100%;
            }
        </style>
</head>

<body>
    <div class="container">
        <div class="row bg-primary">
            <div id="header" class="col">
                <div class="justify-content-center text-white">
                    
                    <div class="col-md-2">
                        <img class="d-block img-fluid" src="<?php echo BASE_URL; ?>image/logo.png" alt="Second slide" style="height: 400px; width: 100%;height: 80px;" >
                    </div>
                    <div class="col-md-10">
                        
                    <div class="text-center text white">
                        <h1>DMP Resident Management</h1>
                    </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-md navbar-dark bg-dark-blue">
                    <ul class="navbar-nav w-100 nav-justified">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo BASE_URL; ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="house.php">Houses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href=""  data-toggle="modal" data-target="#modal-house">Register Your House</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href=""  data-toggle="modal" data-target="#modal-login">Login Area</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="developer.php">Our Team</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row bg-success" >
            <marquee>
                <?php $i=0;
                $notice_query="SELECT* FROM noticeboard order by notice_id desc limit 1";
                $notices=mysqli_query($connect,$notice_query );
                foreach($notices as $notice): ?>
                <h3 style="color: indigo; font-size: : 35px;"><?php echo $notice['notice'];?></h3>
                <?php endforeach;?>
            </marquee>
        </div>
        <!--Login  Modal -->
        <div class="modal fade" id="modal-login">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                    <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label for="name" class="col-md-4 control-label">Username</label>
                            <div class="col-md-6">
                                <input class="form-control" name="username" type="text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="name" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input class="form-control" name="password" type="password">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="name" class="col-md-4 control-label">Admin Type</label>
                            <div class="col-md-6">
                                
                                <select name="login_level" class="form-control">
                                    <option value="1">Admin</option>
                                    <option value="2">House Owner</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-8">
                                <input class="btn btn-primary btnusercreate btnper" type="submit" name="login" value="Login">
                            </div>
                        </div>

                    </form>
                  </div>                    
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>

            <!--modal end-->

            <!--Add House Modal -->
            <div class="modal fade" id="modal-house">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
     
                        <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                            <div class="form-group ">
                                <label for="name" class="col-md-4 control-label">House Name</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="name" type="text" id="name">
                                      
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="col-md-4 control-label">Owner Name</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="owner_name" type="text">
                                      
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="col-md-4 control-label">Area</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="area" type="text">
                                      
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="col-md-4 control-label">Sector</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="sector" type="text">
                                      
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="col-md-4 control-label">Section</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="section" type="text">
                                      
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="col-md-4 control-label">Block</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="block" type="text">
                                      
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="col-md-4 control-label">Zip Code</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="zip" type="number" id="name" step="any">
                                      
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="col-md-4 control-label">Overview</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="overview"></textarea>
                                      
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="col-md-4 control-label">Username</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="username" type="text">
                                      
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="password" type="password">
                                      
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-8">
                                    <input class="btn btn-primary btnusercreate btnper" type="submit" name="submit" value="Create">
                                </div>
                            </div>

                        </form>
                      </div>                    
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>

                <!--modal end-->