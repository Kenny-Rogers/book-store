<?php


?>
<!--<form method="POST" enctype="multipart/form-data" action="upload.php">
<input type="file" name="file">
<input type="submit" value="upload">

</form>-->

<form method="POST" action="index.php" enctype="multipart/form-data" >
      <label  class="form-label">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="name" required > <br><br>
      file : <input type="file" name="file"><br><br>
      <br/>
      <input type="submit" value="submit"  name="submit">
    </form>

<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Books">
    <meta name="author" content="Shivangi Gupta">
    <title>Online Bookstore</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
    <style>
      .modal-header {background:#D67B22;color:#fff;font-weight:800;}
      .modal-body{font-weight:800;}
      .modal-body ul{list-style:none;}
      .modal .btn {background:#D67B22;color:#fff;}
      .modal a{color:#D67B22;}
      .modal-backdrop {position:inherit !important;}
       #login_button,#register_button,#Admin_button{background:none;color:#D67B22!important;}       
       #query_button {position:fixed;right:0px;bottom:0px;padding:10px 80px;
                      background-color:#D67B22;color:#fff;border-color:#f05f40;border-radius:2px;}
  	@media(max-width:767px){
        #query_button {padding: 5px 20px;}
  	}
    </style>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="padding: 1px;"><img class="img-responsive" alt="Brand" src="img/GAF.png"  style="width: 75px; height:50px; margin:0px;   background-color:black; border-radius:30px"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav navbar-right">
        <?php
        if(!isset($_SESSION['user']))
          {
            echo'
            
            <li>
                <button type="button" id="login_button" class="btn btn-lg" data-toggle="modal" data-target="#login">Login</button>
                  <div id="login" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-center">Login Form</h4>
                            </div>
                            <div class="modal-body">
                                          <form class="form" role="form" method="post" action="Admin.php" accept-charset="UTF-8">
                                              <div class="form-group">
                                                  <label class="sr-only" for="username">Username</label>
                                                  <input type="text" name="login_username" class="form-control" placeholder="Username" required>
                                              </div>
                                              <div class="form-group">
                                                  <label class="sr-only" for="password">Password</label>
                                                  <input type="password" name="login_password" class="form-control"  placeholder="Password" required>
                                              </div>
                                              <div class="form-group">
                                                  <button type="submit" name="submit" value="login" class="btn btn-block">
                                                      Sign in
                                                  </button>
                                              </div>
                                          </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                  </div>
            </li>
            <li>
              <button type="button" id="register_button" class="btn btn-lg" data-toggle="modal" data-target="#register">Sign Up</button>
                <div id="register" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title text-center">Member Registration Form</h4>
                          </div>
                          <div class="modal-body">
                                        <form class="form" role="form" method="post" action="index.php" accept-charset="UTF-8">
                                            <div class="form-group">
                                                <label class="sr-only" for="username">Username</label>
                                                <input type="text" name="register_username" class="form-control" placeholder="Username" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="password">Password</label>
                                                <input type="password" name="register_password" class="form-control"  placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="submit" value="register" class="btn btn-block">
                                                    Sign Up
                                                </button>
                                            </div>
                                        </form>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
                </div>
            </li>
            <li>
              <button type="button" id="register_button" class="btn btn-lg" data-toggle="modal" data-target="#register">Admin</button>
                <div id="register" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title text-center">Admin Registration Form</h4>
                          </div>
                          <div class="modal-body">
                                        <form class="form" role="form" method="post" action="index.php" accept-charset="UTF-8">
                                            <div class="form-group">
                                                <label class="sr-only" for="username">Username</label>
                                                <input type="text" name="register_username" class="form-control" placeholder="Username" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="password">Password</label>
                                                <input type="password" name="register_password" class="form-control"  placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="submit" value="register" class="btn btn-block">
                                                    Admin
                                                </button>
                                            </div>
                                        </form>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
                </div>
            </li>';
           
          } 
        else
          {   echo' <li> <a href="#" class="btn btn-lg"> Hello ' .$_SESSION['user']. '.</a></li>
                    <li> <a href="cart.php" class="btn btn-lg"> Cart </a> </li>; 
                    <li> <a href="destroy.php" class="btn btn-lg"> LogOut </a> </li>';
               
          }
?>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <footer style="margin-left:-6%;margin-right:-6%; position:absolute; bottom:0; width:100%; ">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-1 col-md-1 col-lg-1">
              </div>
              <div class="col-sm-7 col-md-5 col-lg-5">
                  <div class="row text-center">
                      <h2>Let's Get In Touch!</h2>
                      <hr class="primary">
                      <p>Still Confused? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                  </div>
                  <div class="row">
                      <div class="col-md-6 text-center">
                          <span class="glyphicon glyphicon-earphone"></span>
                          <p>123-456-6789</p>
                      </div>
                      <div class="col-md-6 text-center">
                          <span class="glyphicon glyphicon-envelope"></span>
                          <p>BookStore@gmail.com</p>
                      </div>
                  </div>
              </div>
              <div class="hidden-sm-down col-md-2 col-lg-2">
              </div>
              <div class="col-sm-4 col-md-3 col-lg-3 text-center">
                  <h2 style="color:#D67B22;">Follow Us At</h2>
                  <div>
                      <a href="https://twitter.com/strandbookstore">
                      <img title="Twitter" alt="Twitter" src="img/social/twitter.png" width="35" height="35" />
                      </a>
                      <a href="https://www.linkedin.com/company/strand-book-store">
                      <img title="LinkedIn" alt="LinkedIn" src="img/social/linkedin.png" width="35" height="35" />
                      </a>
                      <a href="https://www.facebook.com/KobyTuesday/">
                      <img title="Facebook" alt="Facebook" src="img/social/facebook.png" width="35" height="35" />
                      </a>
                      <a href="https://plus.google.com/111917722383378485041">
                      <img title="google+" alt="google+" src="img/social/google.jpg" width="35" height="35" />
                      </a>
                      <a href="https://www.pinterest.com/strandbookstore/">
                      <img title="Pinterest" alt="Pinterest" src="img/social/pinterest.jpg" width="35" height="35" />
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </footer>

        </body>
  </html>