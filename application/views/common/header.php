<!DOCTYPE html>
<html>
<head>
	<title>MuchMark Task</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets\css\style.css">
  <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">
	

</head>
<?php $user_id = $this->session->userdata('user_id'); ?>
<body>
	<!-- navbar start -->
<nav class="navbar navbar-inverse  navbar-fixed-top"  role="navigation" >
                               
                 <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a   href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                    <li><a href="aboutus.html">
                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> About</a></li>
                    <li class="dropdown">
                        <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                      <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Menu <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="contactus.html#">Main Courses</a></li>
                            <li><a href="contactus.html#">Bootstrap</a></li>
                            <li><a href="contactus.html#">Asp</a></li>
                            <li><a href="contactus.html#">SQl</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">PHP</li>
                            <li><a href="contactus.html#">MySQl</a></li>
                           
                        </ul>
                    </li>
                    <li><a href="#"><span class="fa fa-envelope-o"></span> Contact</a></li>
                    
                    
    
                </ul>
               <ul class="nav navbar-nav navbar-right">
                   <li><a data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> login / Register</a></li>
                </ul>
                                              
       
            </div>
        </div>
   </nav>

   <!-- login modal  -->
    
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> &times;</button>
                <h4>Login/Register</h4>
            </div>
            <div class="modal-body">

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item ">
                      <a class="nav-link active" data-toggle="tab" href="#login">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#register">Register</a>
                    </li>
                  </ul>
                   

                  <div class="tab-content" >
                    <div id="login"  class="container tab-pane active">
                    <form action="<?php echo base_url(); ?>Home/login" method="post">
                    <div class="row "  >
                      
                       <div class="col-sm-4">
                             <label class="" for="email">Email</label>
                       </div>
                       <div class="col-sm-8">
                             <input type="text" class="form-control input-sm" placeholder="Email" id="email" name="email">
                       </div>
                     </div>
                     <div class="row ">

                      
                        <div class="col-sm-4">
                           <label class="" for="password">Password</label>
                         </div>
                         <div class="col-sm-8">
                            <input type="password" class="form-control input-sm" placeholder="Password" id="password" name="password">
                        </div>
                     
                    </div>
                       
                    <div class="row mt-4">

                       <button type="submit" class="btn btn-info " name="signin">Sign in</button>
                       <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> 

                     </div>
                  
                    </form>
                  </div>

                  <!-- register  -->
                  <div id="register" class="container tab-pane fade">
                    <form action="<?php echo base_url(); ?>Home/add_user" method="post" >
                    <div class="row "  >
                      
                       <div class="col-sm-4">
                             <label class="" for="email">Username</label>
                       </div>
                       <div class="col-sm-8">
                             <input type="text" class="form-control input-sm" placeholder="Email" id="email" name="username">
                       </div>
                     </div>
                       <div class="row ">

                      
                        <div class="col-sm-4">
                           <label class="" for="mobno">Mobile No</label>
                         </div>
                         <div class="col-sm-8">
                            <input type="number" class="form-control input-sm" placeholder="Mobile no" id="mobileno" name="mobileno">
                        </div>
                     
                    </div>
                     <div class="row ">

                      
                      <div class="col-sm-4">
                           <label class="" for="password">Password</label>
                         </div>
                         <div class="col-sm-8">
                            <input type="password" class="form-control input-sm" placeholder="Password" id="password" name="password">
                        </div>
                     
                    </div>

                       
                    <div class="row mt-4">

                       <button type="submit" class="btn btn-info " name="signup">Sign up</button>
                       <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> 

                     </div>
                  
                    </form>
                  </div>
            </div>

        </div>
        </div>
    </div>
  </div>
    <!-- navbar end -->