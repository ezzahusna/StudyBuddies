<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Login/Register</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">The Study Buddies Club</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a href="index.html" class="nav-item nav-link active">Home</a>
                 
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">About Us</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">About Club</a>
                    <ul class="dropdown-menu">
                      <li><a href="info.html">Club Info</a></li>
                      <li><a href="gallery.html">Club Gallery</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </li>
              <li class="dropdown"><a href="logSign.php" class="nav-item nav-link active">Login/Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="main">
        <section class="module bg-dark-30" data-background="assets/images/log.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Login-Register</h1>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-5 col-sm-offset-1 mb-sm-40">
                  <h4 class="font-alt">Login</h4>
                        <form method="POST">
                            <div class="form-group">
                            Username:
                                <input class="form-control"type="text" name="name"> </div>
                            <div class="form-group">
                                Password: <input class="form-control" type="password" name="password"></div>
                            <div class="form-group">
                                    <button class="btn btn-round btn-b" name="login" value="login">Login</button>
                                    </div>
                        </form>
                 <?php
                  
                    define('DBINFO','mysql:host=localhost;dbname=system');
                    define('DBUSER','root');
                    define('DBPASS','');

                    function performQuery($query){
                        $con = new PDO(DBINFO,DBUSER,DBPASS);
                        $stmt = $con->prepare($query);
                        if($stmt->execute()){
                            return true;
                        }else{
                            return false;
                        }
                    }

                    function fetchAll($query){
                        $con = new PDO(DBINFO, DBUSER, DBPASS);
                        $stmt = $con->query($query);
                        return $stmt->fetchAll();
                    }

                  if(isset($_POST['login'])){
           
                      $password = $_POST['password'];
            
                      $name = $_POST['name'];
            
                      $query = "SELECT * from `members`";
                      
                      
                          
                          foreach(fetchAll($query) as $row){
               
                      if($row['username']==$name&&$row['password']==$password&&$row['role']=="admin") {
                   
                            $_SESSION['login'] = true;
                           $_SESSION['username'] = $row['username'];
                              echo "ADMIN successfully login, " . $_POST['name'];
                       
                              // echo "<br>password :" . $_POST['password'];
                       
                              echo '<br><a href="admin.php">Main menu</a>';
                    
                      }
                        
                              if ($row['username']==$name&&$row['password']==$password&&$row['status']=="approve") {
                                  $_SESSION['login'] = true;
                                  $_SESSION['username'] = $row['username'];
                                    
                                  echo "MEMBER successfully login, " . $_POST['name'];
                        
                                  // echo "<br>password :" . $_POST['password'];
                       
                                  echo '<br><a href="member.php">Main menu</a>';
                            }
                             
                   
                          }
                      
                      
                  }
                      
                  
                ?>
                        

                
                
                  
                              </div>
              <div class="col-sm-5">
                <h4 class="font-alt">Register</h4>
                <hr class="divider-w mb-10">
                <form class="form" method="post" action="<?php echo
$_SERVER['PHP_SELF']?>">
                  <div class="form-group">
                    <input class="form-control" id="username" type="text" name="username" placeholder="Username"/>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Full Name"/>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="text" name="email" placeholder="Email"/>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="password" type="password" name="password" placeholder="Password"/>
                  </div>
                    
                  <div class="form-group">
                    <button class="btn btn-block btn-round btn-b" name="register">Register</button>
                  </div>
                </form>
                  <?php
                    if (isset($_POST['register'])){
                $username = $_POST['username'];
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $password = $_POST['password'];
              

    

                  include 'dbconnect.php';

                  if ($conn === false) 
                      die("ERROR: Could not connect. " . mysqli_connect_error());

                            
                $sql = "INSERT INTO members (username, fullname, email, password, role, status) VALUES ('$username', '$fullname', '$email', password('$password'), 'member', 'pending') ";
                        

                if (mysqli_query($conn, $sql)) {
                echo '<script>alert("You have successfully registered. Please wait for your account to be approved.")</script>';
                     
                } else {
                echo '<script>alert("Register failed")</script>';

                    }
                    }
                ?>
              </div>
            </div>
          </div>
        </section>
        
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2022&nbsp;<a href="index.html">The Study Buddies</a>, All Rights Reserved</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>


