<?php
session_start();
include "connection.php";
//$email = "";
$res = mysqli_query($link,"SELECT * FROM home_imgs");
while($row=mysqli_fetch_array($res))
{
    $image1=$row["image1"];
    $image2=$row["image2"];
    $image3=$row["image3"];
}

$res = mysqli_query($link,"SELECT * FROM home_content");
while($row=mysqli_fetch_array($res))
{
    $content11=$row["content11"];
    $content12=$row["content12"];
    $content21=$row["content21"];
    $content22=$row["content22"];
    $content31=$row["content31"];
    $content32=$row["content32"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayala District City Agriculturist</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">-->
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Ayala | Agriculturist</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#personnelT">Personnel</a></li>
                        <li><a href="#program">Program</a></li>
                        <li><a href="#aboutUs">About us</a></li>
                        <li><a href="#" id="request">Request</a></li>
                        <li><a href="#home">Home</a></li>
                        <div class="dropdown">
                            <button class="dropbtn">ACCOUNTS</button>
                            <div class="dropdown-content">
                              <a href="#" id="farmer" class="farmer">Farmer</a>
                              <a href="#" id="personnel" class="personnel">Personnel</a>
                              <a href="#" id="admin" class="admin">Admin</a>
                            </div>
                        </div>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" id="home">
                <div class="item active">
                    <div class="banner" style="background-image: url('<?php echo $image1;?>');"></div>
                    <div class="carousel-caption">
                        <h2 class="animated slideInDown" style="animation-delay: 1s"><span><?php echo $content11;?></span></h2>
                        <h3 class="animated fadeInUp" style="animation-delay: 2s"><?php echo $content12;?></h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="#contact">Contact us</a></p>
                    </div>
                </div>
                    
                <div class="item">
                    <div class="banner" style="background-image: url('<?php echo $image2;?>');"></div>
                    <div class="carousel-caption">
                        <h2 class="animated slideInDown" style="animation-delay: 1s"><span><?php echo $content21;?></span></h2>
                        <h3 class="animated fadeInUp" style="animation-delay: 2s"><?php echo $content22;?></h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="#contact">Contact us</a></p>
                    </div>
                </div>
                
                <div class="item">
                    <div class="banner" style="background-image: url('<?php echo $image3;?>');"></div>
                    <div class="carousel-caption">
                        <h2 class="animated zoomIn" style="animation-delay: 1s"><span><?php echo $content31;?></span></h2>
                        <h3 class="animated fadeInLeft" style="animation-delay: 2s"><?php echo $content32;?></h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="#contact">Contact us</a></p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- POPUP LOG IN -->
    <div class="popup">
        <div class="popup-content">
            <div class="popup-child1" style="margin-bottom: 5px">
                <h1>Welcome Back!</h1>
                <p>Login to continue your account.</p>
                <form name="form" action="#" method="post" autocomplete="off">
                    <div class="input-box">
                        <i class="fas fa-envelope"></i><input type="text" placeholder="Username" class="popIn" name="username" required>
                    </div>
                    <div class="input-box">
                        <i class="fas fa-key"></i><input type="password" placeholder="Password" class="popIn" name="password" id="inPass" required>
                        <span class="eye" onclick="myFunction()">
                            <i id="hide1" class="fas fa-eye" style="cursor: pointer"></i>
                            <i id="hide2" class="fas fa-eye-slash" style="cursor: pointer"></i>
                        </span>
                    </div>
                    <h5 class="forPass" id="forPass" style="cursor: pointer; font-weight: bolder; padding-top: 20px">Forgot your password?</h5>
                    <hr style="margin-top: 34px;">
                    <!--<a href="" class="loginB" id="loginB" style="position: relative; text-decoration: none; z-index: 1" name="login">LOGIN</a>-->
                    <input class="loginB" id="loginB" type="submit" name="login" value="LOGIN">
                    <!--<button class="loginB" id="loginB" type="submit" name="login" class="btn btn-success">Login</button>-->
                    <a type="button" href="" id="closeB" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
                    <a href="" class="closeB" id="closeB" style="position: relative; text-decoration: none; z-index: 1; cursor: pointer">CLOSE</a>
                </form>
                <?php
                    if(isset($_POST["login"]))
                    {
                        $username=mysqli_real_escape_string($link, $_POST["username"]);
                        $password=mysqli_real_escape_string($link, $_POST["password"]);
                    
                        $count=0;
                        $res=mysqli_query($link,"SELECT * FROM user_registration WHERE username='$username' && password='$password' && role='user' && status='active'");
                        $count=mysqli_num_rows($res);
                        if($count>0){
                            ?>
                            <script type="text/javascript">
                                //window.location="demo_admin.php";
                                window.open("farmer_dash_body.php", '_blank') || window.location.replace("farmer_dash_body.php");
                            </script>
                            <?php
                        }
                        else{
                            ?>
                            <div class="alert alert-danger" style="margin-top: 10px">
                                <strong>Warning!</strong> Invalid username or password.
                                <script type="text/javascript">
                                    const popup = document.querySelector('.popup');
                                    window.onload = function(){
                                    setTimeout(function(){
                                        popup.style.display = "flex";
                                        }, 1000)
                                    }
                                </script>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>
            <div class="popup-child2">
                <img src="./img/Image.png" width="380" height="280" style="border-radius: 0.6em">
                <div class="regB">
                    <!-- <label for="registerB" style="font-w">Don't have an account?</label> -->
                    <h5 for="registerB" style="cursor: pointer; font-weight: bolder; margin-bottom: 25px; margin-top: 15px">Don't have an account?</h5>
                    <a href="#" class="registerB" id="registerB" style="text-decoration: none; margin-bottom: 20px">Register</a>
                </div>
            </div>
        </div>
    </div>
<!-- Popup Login Personnel -->
    <div class="popupPer">
        <div class="popup-contentPer">
            <div class="popup-child1" style="margin-bottom: 5px">
                <h1>Welcome Back!</h1>
                <p>Login to continue your personnels account.</p>
                <form name="form" action="#" method="post" autocomplete="off">
                    <div class="input-box">
                        <i class="fas fa-envelope"></i><input type="text" placeholder="Username" class="popIn" name="username" required>
                    </div>
                    <div class="input-box">
                        <i class="fas fa-key"></i><input type="password" placeholder="Password" class="popIn" name="password" id="inPassPer" required>
                        <span class="eye" onclick="myFunctionPer()">
                            <i id="hidePer1" class="fas fa-eye" style="cursor: pointer"></i>
                            <i id="hidePer2" class="fas fa-eye-slash" style="cursor: pointer"></i>
                        </span>
                    </div>
                    <hr style="margin-top: 34px;">
                    <!--<a href="" class="loginB" id="loginB" style="position: relative; text-decoration: none; z-index: 1" name="login">LOGIN</a>-->
                    <input class="loginPer" id="loginPer" type="submit" name="loginPer" value="LOGIN">
                    <!--<button class="loginB" id="loginB" type="submit" name="login" class="btn btn-success">Login</button>-->
                    <a type="button" href="" id="closeB" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
                    <a href="" class="closeB" id="closeB" style="position: relative; text-decoration: none; z-index: 1; cursor: pointer">CLOSE</a>
                </form>
                <?php
                    if(isset($_POST["loginPer"]))
                    {
                        $username=mysqli_real_escape_string($link, $_POST["username"]);
                        $password=mysqli_real_escape_string($link, $_POST["password"]);
                    
                        $count=0;
                        $res=mysqli_query($link,"SELECT * FROM user_registration WHERE username='$username' && password='$password' && role='personnel' && status='active'");
                        $count=mysqli_num_rows($res);
                        if($count>0){
                            ?>
                            <script type="text/javascript">
                                //window.location="demo_admin.php";
                                window.open("personnel_dash_body.php", '_blank') || window.location.replace("personnel_dash_body.php");
                            </script>
                            <?php
                        }
                        else{
                            ?>
                            <div class="alert alert-danger" style="margin-top: 10px">
                                <strong>Warning!</strong> Invalid username or password.
                                <script type="text/javascript">
                                    const popupPer = document.querySelector('.popupPer');
                                    window.onload = function(){
                                    setTimeout(function(){
                                        popupPer.style.display = "flex";
                                        }, 1000)
                                    }
                                </script>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- Popup Login Personnel End -->

<!-- Popup Login Admin -->
<div class="popupAd">
        <div class="popup-contentAd">
            <div class="popup-child1" style="margin-bottom: 5px">
                <h1>Welcome Back!</h1>
                <p>Login to continue your admins account.</p>
                <form name="form" action="#" method="post" autocomplete="off">
                    <div class="input-box">
                        <i class="fas fa-envelope"></i><input type="text" placeholder="Username" class="popIn" name="username" required>
                    </div>
                    <div class="input-box">
                        <i class="fas fa-key"></i><input type="password" placeholder="Password" class="popIn" name="password" id="inPassAd" required>
                        <span class="eye" onclick="myFunctionAd()">
                            <i id="hide1" class="fas fa-eye" style="cursor: pointer"></i>
                            <i id="hide2" class="fas fa-eye-slash" style="cursor: pointer"></i>
                        </span>
                    </div>
                    <hr style="margin-top: 34px;">
                    <!--<a href="" class="loginB" id="loginB" style="position: relative; text-decoration: none; z-index: 1" name="login">LOGIN</a>-->
                    <input class="loginAd" id="loginAd" type="submit" name="loginAd" value="LOGIN">
                    <!--<button class="loginB" id="loginB" type="submit" name="login" class="btn btn-success">Login</button>-->
                    <a type="button" href="" id="closeB" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
                    <a href="" class="closeB" id="closeB" style="position: relative; text-decoration: none; z-index: 1; cursor: pointer">CLOSE</a>
                </form>
                <?php
                    if(isset($_POST["loginAd"]))
                    {
                        $username=mysqli_real_escape_string($link, $_POST["username"]);
                        $password=mysqli_real_escape_string($link, $_POST["password"]);
                    
                        $count=0;
                        $res=mysqli_query($link,"SELECT * FROM user_registration WHERE username='$username' && password='$password' && role='admin' && status='active'");
                        $count=mysqli_num_rows($res);
                        if($count>0){
                            ?>
                            <script type="text/javascript">
                                //window.location="demo_admin.php";
                                window.open("admin_dash_body.php", '_blank') || window.location.replace("admin_dash_body.php");
                            </script>
                            <?php
                        }
                        else{
                            ?>
                            <div class="alert alert-danger" style="margin-top: 10px">
                                <strong>Warning!</strong> Invalid username or password.
                                <script type="text/javascript">
                                    const popupAd = document.querySelector('.popupAd');
                                    window.onload = function(){
                                    setTimeout(function(){
                                        popupAd.style.display = "flex";
                                        }, 1000)
                                    }
                                </script>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- Popup Login Admin End -->

    <div class="popupAdSelect">
        <div class="popup-contentAdSelect">
            <div class="popup-child1" style="margin-bottom: 5px">
                <form role="form">
                    <div style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                        <div style="width: 100%">
                            <div class="row" style="text-align: left; display: flex; justify-content: center">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-12" style="margin: 10px 0 10px;">
                                    <h2 style="font-weight: bold">Select one request</h2>
                                  </div>
                                </div>
                            </div>
                            <hr>
                                <div class="row" style="text-align: center">
                                    <div class="col-xs-12 col-sm-12 col-md-12" style="margin: 10px 0 10px;">
                                        <a href="#"><button type="button" class="btn btn-success reqCrop" style="width: 80%; margin-left: 20px" id="submitCrop"><h5>Request Crops</h5></button></a>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12" style="margin: 10px 0 10px;">
                                        <a href="#"><button type="button" class="btn btn-success reqRequest" style="width: 80%; margin-left: 20px" id="submitRequest"><h5>Request Services</h5></button></a>
                                    </div>
                                </div>
                            <a type="button" href="" id="closeB" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- Popup Request Login start -->
<div class="popupReqLog">
        <div class="popup-contentReqLog">
            <div class="popup-child1" style="margin-bottom: 5px">
                <h1>Welcome Back!</h1>
                <p>Let us verify your account.</p>
                <form name="form" action="#" method="post" autocomplete="off">
                    <div class="input-box">
                        <i class="fas fa-envelope"></i><input type="text" placeholder="Username" class="popIn" name="username" required>
                    </div>
                    <div class="input-box">
                        <i class="fas fa-key"></i><input type="password" placeholder="Password" class="popIn" name="password" id="inPassReqLog" required>
                        <span class="eye" onclick="myFunctionReqLog()">
                            <i id="hideReqLog1" class="fas fa-eye" style="cursor: pointer"></i>
                            <i id="hideReqLog2" class="fas fa-eye-slash" style="cursor: pointer"></i>
                        </span>
                    </div>
                    <hr style="margin-top: 34px;">
                    <!--<a href="" class="loginB" id="loginB" style="position: relative; text-decoration: none; z-index: 1" name="login">LOGIN</a>-->
                    <input class="loginReqLog" id="lloginReqLog" type="submit" name="loginReqLog" value="LOGIN">
                    <!--<button class="loginB" id="loginB" type="submit" name="login" class="btn btn-success">Login</button>-->
                    <a type="button" href="" id="closeB" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
                    <a href="" class="closeB" id="closeB" style="position: relative; text-decoration: none; z-index: 1; cursor: pointer">CLOSE</a>
                </form>
                <?php
                    if(isset($_POST["loginReqLog"]))
                    {
                        $username=mysqli_real_escape_string($link, $_POST["username"]);
                        $password=mysqli_real_escape_string($link, $_POST["password"]);
                    
                        $count=0;
                        $res=mysqli_query($link,"SELECT * FROM user_registration WHERE username='$username' && password='$password' && role='user' && status='active'");
                        $count=mysqli_num_rows($res);
                        if($count>0){
                            ?>
                            <div class="alert alert-danger" style="margin-top: 10px">
                                <script type="text/javascript">
                                    const popupSelect = document.querySelector('.popupAdSelect');
                                    window.onload = function(){
                                    setTimeout(function(){
                                        popupSelect.style.display = "flex";
                                        }, 1000)
                                    }
                                </script>
                            </div>
                            <?php
                        }
                        else{
                            ?>
                            <div class="alert alert-danger" style="margin-top: 10px">
                                <strong>Warning!</strong> Invalid username or password.
                                <script type="text/javascript">
                                    const popupAd = document.querySelector('.popupReqLog');
                                    window.onload = function(){
                                    setTimeout(function(){
                                        popupAd.style.display = "flex";
                                        }, 1000)
                                    }
                                </script>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Popup Login Request End -->

    <!-- Request Crops -->
    <div class="popup3crops">
        <div class="popup-content3crops">
            <div class="popup-child3">
                    <form role="form">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <h2 style="font-weight: bold">Request for crops</h2>
                            <hr>
                            <div class="row" style="text-align: left; display: flex; justify-content: center">
                                <div class="column">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <label for="cropSel" style="font-weight: bold">Crops: </label>
                                      <select name="cropSel" style="width: 100%; height: auto; margin-bottom: 0; padding: 10px; border-radius: 3px">
                                          <option selected>Choose crop</option>
                                          <option value="1">Mustasa seed</option>
                                          <option value="2">Pechay seed</option>
                                          <option value="3">Calabasa seed</option>
                                          <option value="4">Corn seed</option>
                                          <option value="5">Rice seed</option>
                                          <option value="6">Stringbeans seed</option>
                                          <option value="7">Eggplant seed</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="column">
                                    <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                            <label for="last_name" style="font-weight: bold">Kilo:</label>
                                                <input type="number" name="last_name" id="last_name" class="form-control input-lg" placeholder="Kilo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <br>
                                <div class="column" style="text-align: center">
                                    <a href=""><button type="button" class="loginB" style="width: 50%" id="submitBdec">Submit</button></a>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="closeDecB" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>
    <!-- Request Crops end -->
    <div class="popup4services">
        <div class="popup-content4services">
            <div class="popup-child3">
                    <form role="form">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <h2 style="font-weight: bold">Request for services</h2>
                            <hr>
                            <div style="text-align: left; display: flex; justify-content: center; flex-direction: column; gap: 20px">
                                <div>
                                    <label for="selectD" style="font-weight: bold">Services:</label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose service</option>
                                          <option value="1">Soil Sampling</option>
                                          <option value="2">Technical Assistance</option>
                                          <option value="3">Financial Assistance</option>
                                      </select>
                                </div>
                                <div>
                                    <div style="text-align: left; display: flex; flex-direction: column">
                                        <label for="selectD" style="font-weight: bold">Purpose of Request:</label>
                                        <textarea name="selectD" id="selectD" cols="65" rows="5" style="display: block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit nesciunt quasi quibusdam officiis magnam numquam quae nostrum fugiat reiciendis tenetur ut, velit, quod beatae perferendis earum dolor maiores soluta quisquam?</textarea>
                                    </div>
                                </div>
                            </div>
                                <br>
                                <div class="column" style="text-align: center">
                                    <a href=""><button type="button" class="loginB" style="width: 50%" id="submitBdec">Submit</button></a>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="closeDecB" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>

    <!-- POPUP RESET PASSWORD -->

    <div class="popup-1">
        <div class="popup-content-1">
            <div class="popup-child1-1">
                <h1>Reset your password.</h1> <h3 class="xB-1" id="xB-1" style="position: absolute; top: 0px; right: 20px; cursor: pointer">X</h3>
                    <p>Enter a new password for your account.</p>
                    <form name="form1" action="#" method="post" autocomplete="off">
                        <div class="input-box">
                            <!--<i class="fas fa-mask" style="margin: 0 0 90px 170px; position: absolute"></i>--><input type="password" class="popInSession" value="<?php echo $_SESSION['login_user'];?>" name="username0" readonly>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-key"></i><input type="password" placeholder="New password" id="inPass1-1" class="popIn-1" name="newpass" required>
                            <span class="eye2" onclick="myFunction1()">
                                <i id="hide1-1" class="fas fa-eye" style="cursor: pointer; display: none"></i>
                                <i id="hide2-1" class="fas fa-eye-slash" style="cursor: pointer"></i>
                            </span>
                        </div>
                        <div class="input-box" style="margin-bottom: 15px">
                            <i class="fas fa-key"></i><input type="password" placeholder="Confirm new password" id="inPass1-2" class="popIn-1" name="c_newpass" required>
                            <span class="eye2" onclick="myFunction11()">
                                <i id="hide1-12" class="fas fa-eye" style="cursor: pointer; display: none"></i>
                                <i id="hide2-12" class="fas fa-eye-slash" style="cursor: pointer"></i>
                            </span>
                        </div>
                        <hr>
                        <!--<a href="" class="resetB-1" id="resetB-1" style="text-decoration: none" name="update1">CHANGE PASSWORD</a>-->
                        <input class="resetB-1" id="resetB-1" type="submit" name="update1" value="CHANGE PASSWORD">
                    </form>
                    <?php
                        if(isset($_POST['update1'])){
                            $password = mysqli_real_escape_string($link, $_POST['newpass']);
                            $cpassword = mysqli_real_escape_string($link, $_POST['c_newpass']);

                            if($password !== $cpassword){
                                ?>
                                <div class="alert alert-danger" style="margin-top: 10px">
                                <strong>Warning!</strong> Mismatched password entered .</div>
                                <script type="text/javascript">
                                    const popup3 = document.querySelector(".popup-1");
                                    window.onload = function(){
                                        setTimeout(function(){
                                            popup3.style.display = "flex";
                                        },1000)
                                    }
                                    //setTimeout("location.reload(true);",1000);
                                </script>
                                <?php
                            }else{
                                $username = mysqli_real_escape_string($link, $_POST['username0']);
                                $password = mysqli_real_escape_string($link, $_POST['newpass']);

                                mysqli_query($link, "UPDATE user_registration SET password='$password' WHERE username='$username'");
                                ?>
                                <div class="alert alert-success" style="margin-top: 10px">
                                <strong>Success!</strong> Your password has been changed.</div>
                                <script type="text/javascript">
                                    const popup3 = document.querySelector(".popup-1");
                                    const farmer = document.querySelector(".farmer");
                                    const personel = document.querySelector(".personnel");
                                    const admin = document.querySelector(".admin");
                                    window.onload = function(){
                                        setTimeout(function(){
                                            popup3.style.display = "flex";
                                            popup3.style.pointerEvents = "none";
                                            farmer.style.pointerEvents = "none";
                                            personel.style.pointerEvents = "none";
                                            admin.style.pointerEvents = "none";
                                        },1000)
                                        setTimeout(function(){
                                            popup3.style.display = "none";
                                            farmer.style.pointerEvents = "";
                                            personel.style.pointerEvents = "";
                                            admin.style.pointerEvents = "";
                                        },10000)
                                    }
                                    //setTimeout("location.reload(true);",1000);
                                </script>
                                <?php
                            }
                        }
                    ?>
            </div>
            <div class="popup-child2-1">
                <img src="./img/undraw_authentication_fsn5 1.png" width="420" height="320" style="border-radius: 0.6em">
            </div>
        </div>
    </div>

    <!-- POPUP FORGOT PASSWORD -->
    <div class="popup-2">
        <div class="popup-content-2">
            <div class="popup-child1-2" style="margin-top: 40px">
                <h1>Forgot your password?</h1><h3 class="xB-2" id="xB-2" style="position: absolute; top: 0px; right: 20px; cursor: pointer">X</h3>
                    <p>Enter your secretphrase to reset your password.</p>
                    <form name="form2" action="#" method="post" autocomplete="off">
                        <div class="input-box">
                            <i id="key" class="fas fa-mask"></i><input type="password" placeholder="Secretphrase" id="inPass2" class="popIn-2" name="username2" required>
                            <span class="eye2" onclick="myFunction2()">
                                <i id="hide1-2" class="fas fa-eye" style="cursor: pointer; display: none"></i>
                                <i id="hide2-2" class="fas fa-eye-slash" style="cursor: pointer"></i>
                            </span>
                        </div>
                        <hr style="margin-top: 30px;">
                        <!--<a href="" class="forB-2" id="forB-2" style="text-decoration: none" name="check">SEND EMAIL</a>-->
                        <input class="forB-2" id="forB-2" type="submit" name="check" value="CONFIRM">
                        <!--<a href="newHome.php?id=<?php echo $row["id"]; ?>"> <button class="forB-2" id="forB-2" type="button" class="btn btn-success">Edit</button></a>-->
                    </form>
                    <?php

                    if(isset($_POST["check"]))
                    {
                        $username2=mysqli_real_escape_string($link, $_POST["username2"]);
                        
                        $count2=0;
                        $res=mysqli_query($link,"SELECT * FROM user_registration WHERE username='$username2' && role='user' && status='active'");
                        $count2=mysqli_num_rows($res);
                        if($count2>0){
                            $_SESSION['login_user'] = $_POST['username2'];
                            $username = $_SESSION['username2'];
                            ?>
                            <script type="text/javascript">
                                const popup1 = document.querySelector(".popup-1");
                                window.onload = function(){
                                    if(!window.location.hash) {
                                        window.location = window.location + '#loader';
                                        window.location.reload();
                                    }
                                    setTimeout(function(){
                                        popup1.style.display = "flex";
                                    },800)
                                    
                                }
                                //setTimeout("location.reload(true);",1000);
                            </script>
                            <?php
                            echo $count2;
                        }
                        else{
                            ?>
                            <div class="alert alert-danger" style="margin-top: 10px">
                                <strong>Warning!</strong> Invalid Secretphrase contact the admin for <br> more details.
                                <script type="text/javascript">
                                    const popup2 = document.querySelector(".popup-2");
                                    window.onload = function(){
                                    setTimeout(function(){
                                        popup2.style.display = "flex";
                                        }, 1000)
                                    }
                                </script>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>
            <div class="popup-child2-2">
                <img src="./img/undraw_forgot_password_gi2d 1.png" width="380" height="280" style="border-radius: 0.6em">
            </div>
        </div>
    </div>
 <!-- Registration Form -->
        <div class="popup3">
            <div class="popup-content3">
                <div class="popup-child1">
                    <form role="form">
                    <h1>Sign Up?</h1>
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <h3 style="font-weight: bold">Farmers Information</h3>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin-bottom: 10px;">
                                    <label for="selectD">Register for: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Services</option>
                                          <option value="1">High Value Crops</option>
                                          <option value="2">Corn Value Crop</option>
                                          <option value="3">Rice Crop</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">Last Name:</label>
                                            <input type="text" name="last_name" id="first_name" class="form-control input-lg" tabindex="1" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group" >
                                        <label for="last_name">First Name:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" tabindex="2" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="password">Middle Name:</label>
                                            <input type="text" name="password" id="password" class="form-control input-lg" tabindex="5" placeholder="Middle Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="password_confirmation">Contact Number:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" tabindex="6" placeholder="Contact Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="inputC">
                                            <label for="start">Birth Date:</label>
                                            <input type="date" id="start" name="trip-start"
                                                value="2000-01-01"
                                                min="1900-01-01" max="2050-12-31" style="width: 100%; padding: 3px;">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                    <label for="selectD">Civil Status: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Status</option>
                                          <option value="1">Married</option>
                                          <option value="2">Single</option>
                                          <option value="3">Widowed</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="row" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                    <label for="selectD">Sex: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Sex</option>
                                          <option value="1">Male</option>
                                          <option value="2">Female</option>
                                      </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">Religion:</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" value="Religion">
                                        </div>
                                    </div>
                                </div>
                                <div class="column" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-12">
                                        <div class="form-group">
                                            <label for="password">Place of Birth:</label>
                                            <input type="text" name="password" id="password" class="form-control input-lg" placeholder="Place of Birth">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="loginB" style="width: 50%" id="nextBCreate">Next</button>
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="closeB" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>

    <div class="popup2nd">
        <div class="popup-content2nd">
            <div class="popup-child2">
                    <form role="form">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <h3 style="font-weight: bold">Farmers Address</h3>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                  <div class="col-xs-12 col-sm-6 col-md-12">
                                        <div class="form-group" >
                                        <label for="last_name">Street/Subdiv/Sitio:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Street/Subdiv/Sitio">
                                        </div>
                                  </div>
                                </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group" >
                                        <label for="last_name">Barangay:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Barangay">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group" >
                                        <label for="last_name">Municipality:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Municipality">
                                        </div>
                                    </div>
                            </div>
                            <div class="row" style="text-align: left">
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="form-group">
                                            <label for="password_confirmation">Zipcode:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Zipcode">
                                    </div>
                                </div>
                            </div>
                            <h3 style="font-weight: bold">Person to contact in case of emergency</h3>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group" >
                                        <label for="last_name">Full Name:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Full Name">
                                        </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                            <label for="password_confirmation">Contact Number:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Contact Number">
                                    </div>
                                </div>
                            </div>
                                <br>
                                <div class="column" style="text-align: center">
                                    <button type="button" class="loginB" style="width: 25%" id="backBCreate">Back</button>
                                    <button type="button" class="loginB" style="width: 25%" id="next1BCreate">Next</button>
                                </div>
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="close1B" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>

    <div class="popup3rd">
        <div class="popup-content3rd">
            <div class="popup-child2">
                    <form role="form">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <h3 style="font-weight: bold">Farm Land Description</h3>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                  <div class="col-xs-12 col-sm-6 col-md-12">
                                    <label for="selectD">Farm Type: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 10px; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Services</option>
                                          <option value="1">High Value Crops</option>
                                          <option value="2">Corn Value Crop</option>
                                          <option value="3">Rice Crop</option>
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group" >
                                        <label for="last_name">Barangay:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Barangay">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group" >
                                        <label for="last_name">Municipality:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Municipality">
                                        </div>
                                    </div>
                            </div>
                            <div class="row" style="text-align: left">
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="form-group">
                                            <label for="password_confirmation">Total farm area:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Total farm area">
                                    </div>
                                </div>
                            </div>
                            <h3 style="font-weight: bold">Farmers Account</h3>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                    <div class="col-xs-12 col-sm-6 col-md-12">
                                            <div class="form-group" >
                                            <label for="last_name">Username:</label>
                                                <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Username">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                            <label for="password_confirmation">Password:</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                            <label for="password_confirmation">Confirm Password:</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                                <div class="column" style="text-align: center">
                                    <button type="button" class="loginB" style="width: 25%" id="vakCreate">Back</button>
                                    <button type="button" class="loginB" style="width: 25%" id="submitV">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="close2B" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>
<!-- Registration Form End -->

<!-- Privacy Policy popup start -->
<div class="popupPrivacyP">
        <div class="popup-contentPrivacyP">
            <div class="popup-child2">
                <div style="text-align: center; overflow-y: scroll; height: 700px">
                    <h1>Privacy Policy for Ayala District City Agriculturist</h1>
                    <hr>
                    <div style="text-align: justify; padding: 0 2.5em 0 2.5em">
                        <p>At AyalaDistrictCityAgriculturist, accessible from https://ayaladistrictcityagriculturist.000webhostapp.com/, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by AyalaDistrictCityAgriculturist and how we use it.</p>

                        <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

                        <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in AyalaDistrictCityAgriculturist. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href="https://www.privacypolicygenerator.info">Free Privacy Policy Generator</a>.</p>
                    </div>
                    <br>
                    <h2>Consent</h2>
                    <hr>
                    <div style="text-align: justify; padding: 0 2.5em 0 2.5em">
                
                        <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>
                    </div>
                    <br>
                    <h2>Information we collect</h2>
                    <hr>
                    <div style="text-align: justify; padding: 0 2.5em 0 2.5em">

                        <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
                        <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
                        <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>
                    </div>
                    <br>
                    <h2>How we use your information</h2>
                    <hr>
                    <div style="text-align: justify; padding: 0 2.5em 0 2.5em">
                    <p>We use the information we collect in various ways, including to:</p>

                    <ul>
                    <li>Provide, operate, and maintain our website</li>
                    <li>Improve, personalize, and expand our website</li>
                    <li>Understand and analyze how you use our website</li>
                    <li>Develop new products, services, features, and functionality</li>
                    <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
                    <li>Send you emails</li>
                    <li>Find and prevent fraud</li>
                    </ul>
                    </div>
                    <br>
                    <h2>Log Files</h2>
                    <hr>
                    <div style="text-align: justify; padding: 0 2.5em 0 2.5em">
                    <p>AyalaDistrictCityAgriculturist follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>
                    </div>


                    <br>
                    <h2>Advertising Partners Privacy Policies</h2>
                    <hr>
                    <div style="text-align: justify; padding: 0 2.5em 0 2.5em">
                    <P>You may consult this list to find the Privacy Policy for each of the advertising partners of AyalaDistrictCityAgriculturist.</p>

                    <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on AyalaDistrictCityAgriculturist, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

                    <p>Note that AyalaDistrictCityAgriculturist has no access to or control over these cookies that are used by third-party advertisers.</p>
                    </div>

                    <br>
                    <h2>Third Party Privacy Policies</h2>
                    <hr>
                    <div style="text-align: justify; padding: 0 2.5em 0 2.5em">
                    <p>AyalaDistrictCityAgriculturist's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

                    <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>
                    </div>
                    <br>
                    <h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>
                    <hr>
                    <div style="text-align: justify; padding: 0 2.5em 0 2.5em">
                    <p>Under the CCPA, among other rights, California consumers have the right to:</p>
                    <p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
                    <p>Request that a business delete any personal data about the consumer that a business has collected.</p>
                    <p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
                    <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
                    </div>
                    <br>
                    <h2>GDPR Data Protection Rights</h2>
                    <hr>
                    <div style="text-align: justify; padding: 0 2.5em 0 2.5em">

                    <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
                    <p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
                    <p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
                    <p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
                    <p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
                    <p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
                    <p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
                    <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
                    </div>
                    <br>
                    <h2>Children's Information</h2>
                    <hr>    
                    <div style="text-align: justify; padding: 0 2.5em 0 2.5em">
                    <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

                    <p>AyalaDistrictCityAgriculturist does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
                    </div>
                    <br>
                        <div>
                            <input type="checkbox" id="terms1" name="terms1">
                            <label for="terms1"> I agree to the privacy policy</label>
                        </div>
                    <br>
                    <a href=""><button type="button" class="loginB" style="width: 50%">Submit</button></a>
                    <br>
                </div>
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="close2B" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>
<!-- Privacy Policy End -->

<!-- Request Form -->

<!-- Request Form End -->

    <section class="supp">
        <div class="container" style="text-align: center;">
            <div>
                <h1 id="program">DATA-DRIVEN SOLUTION</h1>
            </div>
            <hr class="hr1">
            <div>
                <h3>INDUSTRIES</h3>
                <p>Our farm management software portfolio supports all stakeholders of agrified value chain<br>
                    Find out how we solve real-life challenges in your industry
                </p>
            </div>
        </div>
        <div class="parentCon">
            <div>
                <img src="./img/HVC.jpg" width="320" height="auto" style="border-radius: 0.6em">
                <br>
                <center><a href="https://pcic.gov.ph/wp-content/uploads/2019/01/HVCC-Final.pdf"><button class="btn1">Learn more</button></a></center>
            </div>
            <div>
                <img src="./img/CORN.jpg" width="320" height="auto" style="border-radius: 0.6em">
                <br>
                <center><a href="https://pcic.gov.ph/wp-content/uploads/2019/01/01-Corn-Crop-Insurance-September-03.pdf" ><button class="btn2">Learn more</button></a></center>
            </div>
            <div>
                <img src="./img/RICE.jpg" width="320" height="auto" style="border-radius: 0.6em">
                <br>
                <center><a href="https://pcic.gov.ph/wp-content/uploads/2019/01/01-Rice-Crop-Insurance-September-03.pdf"><button class="btn3" id="aboutUs">Learn more</button></a></center>
            </div>
        </div>
        <br>
        <br>
        <div class="container" style="text-align: center;">
            <div>
                <h1>THE STORY OF AYALA DISTRICT</h1>
                <h1>AGRICULTURIST</h1>
            </div>
            <hr class="hr2">
            <br>
            <br>
            <section class="parentCon1">
                <article class="column" >
                    <p>Ayala Field  Office was among of the first 3 field offices established in the 1980's to cater 
                        the needs of the farmers and implement the different programs of the City Agriculturist Office.</p>
                </article>
                <article class="column" >   
                    <p>Ayala Field  Office was among of the first 3 field offices established in the 1980's to cater 
                        the needs of the farmers and implement the different programs of the City Agriculturist Office</p>
                </article>
            </section>
        </div>
        <br>
        <br>
        <div class="container" style="text-align: center;">
            <div>
                <h1 id="personnelT">LEADERSHIP TEAM</h1>
            </div>
        </div>
        <hr class="hr3">
        <br>
        <br>
        <div class="gridParent">
            <div class="gridChild1">
                <img src="./img/sir1.jpg" width="250" height="250" class="img6" style="border-radius: 10em">
                <div style="text-align: center;">
                    <h3>Agricultural Technologist</h3>
                    <h5>Medardo L. Lozada</h5>
                </div>
            </div>
            <div class="gridChild2">
                <img src="./img/sir2.jpg" width="250" height="auto" class="img1" style="border-radius: 10em">
                <div style="text-align: center;">
                    <h3>Agricultural Technologist</h3>
                    <h5>Vie Jay N. Eullaran</h5>
                </div>
            </div>
            <div class="gridChild3">
                <img src="./img/maam1.jpg" width="250" height="auto" class="img2" style="border-radius: 10em">
                <div style="text-align: center;">
                    <h3>Aquaculturist 2</h3>
                    <h5>Grace Caceres</h5>
                </div>
            </div>
            <div class="gridChild4">
                <img src="./img/maam2.jpg" width="250" height="auto" class="img3" style="border-radius: 10em">
                <div style="text-align: center;">
                    <h3>Agriculturist 2</h3>
                    <h5>Haji Monira G. Inggal</h5>
                </div>
            </div>
            <div class="gridChild5">
                <img src="./img/maam3.jpg" width="250" height="auto" class="img4" style="border-radius: 10em">
                <div style="text-align: center;">
                    <h3>Agricultural Technician</h3>
                    <h5>Meiselin C. Paclibar</h5>
                </div>
            </div>
            <div class="gridChild6">
                <img src="./img/maam4.jpg" width="250" height="auto" class="img5" style="border-radius: 10em">
                <div style="text-align: center;">
                    <h3>Agricultural Technologist</h3>
                    <h5>Margie E. Bernardo</h5>
                </div>
            </div>
        </div>
        <hr id="contact" style="width: 1000px; background: green; border: 2px solid green; border-radius: 1em; margin-top: 80px">
        <div class="contact" id="#">
            <div class="contact-form">
                <div class="container">
                 <form>
                  <div class="row">
                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <h1 style="color: green;" >Get in Touch</h1> 
                   </div>
                   <div class="col-lg-8 col-md-8 col-sm-12 right">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com" name="email">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control form-control-lg">
                        </textarea>
                      </div>
                      <input type="submit" class="btn4" value="Send" name="">
                   </div>
                  </div>
                 </form>
                </div>
               </div>
        </div>
      </section>
      <footer>
        <main>
            <div class="box1">
                <h3>LOGO</h3>
                <p>Lorem Ipsum.</p>
                <p>Lorem Ipsum.</p>
                <p>Lorem Ipsum.</p>
            </div>
            <div class="box2">
                <h3>ABOUT</h3>
                <p>Lorem Ipsum.</p>
                <p>Lorem Ipsum.</p>
                <p>Lorem Ipsum.</p>
            </div>
            <div class="box3">
                <h3>QUICK LINKS</h3>
                <p>Lorem Ipsum.</p>
                <p>Lorem Ipsum.</p>
                <p>Lorem Ipsum.</p>
            </div>
            <div class="box4">
                <h4>RiseTech</h4>
            </div>
        </div>
        </main>
      </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    
        function myFunctionAd() {
            var x = document.getElementById("inPassAd");
            var y = document.getElementById("hideAd1");
            var z = document.getElementById("hideAd2");

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
        function myFunctionReqLog() {
            var x = document.getElementById("inPassReqLog");
            var y = document.getElementById("hideReqLog1");
            var z = document.getElementById("hideReqLog2");

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }

        function myFunctionPer() {
            var x = document.getElementById("inPassPer");
            var y = document.getElementById("hidePer1");
            var z = document.getElementById("hidePer2");

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }

        function myFunction() {
            var x = document.getElementById("inPass");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }

        function myFunction2() {
            var x = document.getElementById("inPass2");
            var y = document.getElementById("hide1-2");
            var z = document.getElementById("hide2-2");

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }

        function myFunction1() {
            var x = document.getElementById("inPass1-1");
            var y = document.getElementById("hide1-1");
            var z = document.getElementById("hide2-1");

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }

        function myFunction11() {
            var x = document.getElementById("inPass1-2");
            var y = document.getElementById("hide1-12");
            var z = document.getElementById("hide2-12");

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
        
        document.getElementById("submitV").addEventListener("click", function(){
            document.querySelector(".popupPrivacyP").style.display = "flex";
            document.querySelector(".popup3rd").style.display = "none";
        })

        document.getElementById("vakCreate").addEventListener("click", function(){
            document.querySelector(".popup2nd").style.display = "flex";
            document.querySelector(".popup3rd").style.display = "none";
        })
        
        document.getElementById("next1BCreate").addEventListener("click", function(){
            document.querySelector(".popup2nd").style.display = "none";
            document.querySelector(".popup3rd").style.display = "flex";
        })
        
        document.getElementById("nextBCreate").addEventListener("click", function(){
            document.querySelector(".popup3").style.display = "none";
            document.querySelector(".popup2nd").style.display = "flex";
        })

        document.getElementById("backBCreate").addEventListener("click", function(){
            document.querySelector(".popup3").style.display = "flex";
            document.querySelector(".popup2nd").style.display = "none";
        })

        document.getElementById("submitRequest").addEventListener("click", function(){
            document.querySelector(".popup4services").style.display = "flex";
            document.querySelector(".popupAdSelect").style.display = "none";
        })

        document.getElementById("submitCrop").addEventListener("click", function(){
            document.querySelector(".popup3crops").style.display = "flex";
            document.querySelector(".popupAdSelect").style.display = "none";
        })

        document.getElementById("forPass").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";
            document.querySelector(".popup-2").style.display = "flex";
        })

        document.getElementById("xB-2").addEventListener("click", function(){
            document.querySelector(".popup-2").style.display = "none";
            document.querySelector(".popup").style.display = "flex";
        })

        document.getElementById("xB-1").addEventListener("click", function(){
            document.querySelector(".popup-1").style.display = "none";
            document.querySelector(".popup").style.display = "flex";
        })

        document.getElementById("farmer").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "flex";
            document.querySelector(".popup-1").style.display = "none";
            document.querySelector(".popup-2").style.display = "none";
        })

        // document.getElementById("request").addEventListener("click", function(){
        //     document.querySelector(".popupReq").style.display = "flex";
        // })
        document.getElementById("request").addEventListener("click", function(){
            document.querySelector(".popupReqLog").style.display = "flex";
        })

        document.getElementById("personnel").addEventListener("click", function(){
            document.querySelector(".popupPer").style.display = "flex";
        })

        document.getElementById("admin").addEventListener("click", function(){
            document.querySelector(".popupAd").style.display = "flex";
        })

        document.getElementById("closeB").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";
            document.querySelector(".popupPer").style.display = "none";
        })
        
        document.getElementById("registerB").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";
            document.querySelector(".popup3").style.display = "flex";
        })

        document.getElementById("xB-3").addEventListener("click", function(){
            document.querySelector(".popup3").style.display = "none";
            document.querySelector(".popup").style.display = "flex";
        })
</script>
</body>
</html>
<style>
html{
    /*filter: invert(0);*/
    scroll-behavior: smooth;
}
.inputC{
    width: 85%; 
    height: auto; 
    padding: 5px;
    margin-bottom: 20px;
    background-color: transparent;
    border-radius: 3px;
}
label {
    display: block;
    font-weight: 200;
    font: 1.5rem 'Fira Sans', sans-serif;
}
input, label {
    margin: .4rem 0;
}
body {
	font-family: 'Poppins', sans-serif;
}
header .carousel-inner .item {
	height: 100vh;
}
.farmer{
    pointer-events: ;
}
.personnel{
    pointer-events: ;
}
.admin{
    pointer-events: ;
}
/*CONTACT SECTION*/
.contact-form{
 margin: 6em 0;
 position: relative;  
}

.contact-form h1{
 padding:2em 1px;
 color: #F97300; 
}
.contact-form .right{
 max-width: 600px;
}
.contact-form .right .btn-secondary{
 background:  #F97300;
 color: #fff;
 border:0;
}
.contact-form .right .form-control::placeholder{
 color: #888;
 font-size: 16px;
}
/* .popupReq{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    z-index: 10;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.popup-contentReq{
    height: auto;
    width: 500px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
} */
.popupPrivacyP{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    z-index: 120;
}
.popup-contentPrivacyP{
    height: auto;
    width: 800px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}

.popup3rd{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    z-index: 120;
}
.popup-content3rd{
    height: auto;
    width: 650px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}

.popup2nd{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    z-index: 120;
}
.popup-content2nd{
    height: auto;
    width: 650px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}
.popup4services{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    z-index: 120;
}
.popup-content4services{
    height: auto;
    width: 550px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}

.popup3crops{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    z-index: 120;
}

.popup-content3crops{
    height: auto;
    width: 550px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}

.popupAdSelect{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    z-index: 10;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.popup-contentAdSelect{
    height: auto;
    width: 400px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}

.popupReqLog{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    z-index: 10;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.popup-contentReqLog{
    height: auto;
    width: 500px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}
.popupAd{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    z-index: 10;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.popup-contentAd{
    height: auto;
    width: 500px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}
.popupPer{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    z-index: 10;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.popup-contentPer{
    height: auto;
    width: 500px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}
.popup3{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    z-index: 10;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.popup-content3{
    height: auto;
    width: 650px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}
.popIn3{
    background-color: transparent;
    margin: 16px auto;
    display: relative;
    width: 90%;
    padding: 8px;
    margin-left: 20px;
    border: none;
    border-bottom: 2px solid black;
}
/*POPUP START*/
.popup{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    z-index: 10;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.popup-content{
    height: auto;
    width: 800px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active{
    -webkit-box-shadow: 0 0 0 30px white inset !important;
}
input:focus, textarea:focus, select:focus{
    outline: none;
}
::placeholder{
    color: #ccc;
}
.input-box{
    display: flex;
    flex-direction: row;
}
.fas{
    position: absolute;
    margin: 0;
    padding: 33px 25px 0 0;
}
.eye{
    position: relative;
    padding-right: 10px;
}
.eye2{
    position: relative;
    padding-right: 40px;
}
#key{
    margin: 0;
    position: absolute;
    padding: 33px 0 0 30px;
}
#hide1{
    display: none;
}
#hidePer1{
    display: none;
}
#hideAd1{
    display: none;
}
#hideReqLog1{
    display: none;
}
.popIn{
    background-color: transparent;
    margin: 16px auto;
    display: relative;
    width: 90%;
    padding: 8px;
    margin-left: 20px;
    border: none;
    border-bottom: 2px solid black;
}
.popup-1{
    z-index: 10;
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.popup-content-1{
    height: auto;
    width: 900px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}
.popInSession{
    text-align: center;
    color: transparent;
    /*margin: 15px 0;*/
    margin: 0;
    padding: 0;
    width: 0;
    height: 0;
    background-color: transparent;
    display: relative;
    /*width: 90%;*/
    /*padding: 8px;*/
    /*margin-left: 20px;*/
    border: none;
}
.popIn-1{
    margin: 15px 0;
    background-color: transparent;
    display: relative;
    pointer-events: ;
    width: 90%;
    padding: 8px;
    margin-left: 20px;
    border: none;
    border-bottom: 2px solid black;
}
.popup-2{
    z-index: 10;
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.popup-content-2{
    height: auto;
    width: 850px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}
.popIn-2{
    margin: 20px auto;
    background-color: transparent;
    display: relative;
    width: 100%;
    padding: 8px;
    margin-left: 50px;
    border: none;
    border-bottom: 2px solid black;
}
.regB{
    margin-top: 0px;
}
.closeB, .loginB, .registerB, .resetB-1, .forB-2, .submitB, .loginPer, .loginAd, .loginReqLog, .reqCrop, .reqRequest{
    color: green;
    display: inline;
	background: white;
	font-size: 12px;
	font-weight: bold;
	padding: 8px 20px;
	margin-right: 20px;
	border-radius: 20px;
	border: 2.5px solid green;
}
.closeB:hover, .loginB:hover, .registerB:hover, .resetB-1:hover, .forB-2:hover, .submitB:hover,
.loginPer:hover, .loginAd:hover, .loginReqLog:hover, .loginReqLog:hover, .reqCrop:hover, .reqRequest:hover{
    background-color: green;
    border: 2.5px solid white;
    color: white;
}
/*NAV START*/
h1{
    font-weight: bold;
}
main{
    color: white;
    display: grid;
    grid-template-columns: 50% 25% 25%;
}
.box1{
    text-align: justify;
    padding: 0 5em 0 50px;
}
.box2{
    text-align: justify;
    padding: 0 5em 0 0;
}
.box3{
    text-align: justify;
    padding: 0 5em 0 0;
}
.box4{
    background-color: rgba(0,128,0, 1);
    margin-top: 50px;
    padding: 15px 0 15px 0;
    grid-column: 1/4;
}
.gridParent{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    justify-items: center;
    justify-content: center;
    gap: 15px 10px;
}
.img1{
    box-shadow: 10px 10px 5px #ccc;
      -moz-box-shadow: 10px 10px 5px #ccc;
      -webkit-box-shadow: 10px 10px 5px #ccc;
      -khtml-box-shadow: 10px 10px 5px #ccc;
}
.img2{
    box-shadow: 10px 10px 5px #ccc;
      -moz-box-shadow: 10px 10px 5px #ccc;
      -webkit-box-shadow: 10px 10px 5px #ccc;
      -khtml-box-shadow: 10px 10px 5px #ccc;
}
.img3{
    box-shadow: 10px 10px 5px #ccc;
      -moz-box-shadow: 10px 10px 5px #ccc;
      -webkit-box-shadow: 10px 10px 5px #ccc;
      -khtml-box-shadow: 10px 10px 5px #ccc;
}
.img4{
    box-shadow: 10px 10px 5px #ccc;
      -moz-box-shadow: 10px 10px 5px #ccc;
      -webkit-box-shadow: 10px 10px 5px #ccc;
      -khtml-box-shadow: 10px 10px 5px #ccc;
}
.img5{
    box-shadow: 10px 10px 5px #ccc;
      -moz-box-shadow: 10px 10px 5px #ccc;
      -webkit-box-shadow: 10px 10px 5px #ccc;
      -khtml-box-shadow: 10px 10px 5px #ccc;
}
.img6{
    box-shadow: 10px 10px 5px #ccc;
      -moz-box-shadow: 10px 10px 5px #ccc;
      -webkit-box-shadow: 10px 10px 5px #ccc;
      -khtml-box-shadow: 10px 10px 5px #ccc;
}
.parentCon{
    max-width: 100%;
    height: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}
.parentCon1{
    display: flex;
    padding-left: 60px;
}
article {
    text-align: justify;
    padding: 0 5em 0 0;
}
.supp{
    padding: 40px 0 40px 0;
    background-color: rgba(128,128,128, 0.2);
}
.btn1, .btn2, .btn3{
    color: green;
	background: white;
	font-size: 12px;
	font-weight: bold;
	padding: 8px 20px;
	margin: 20px;
	border-radius: 20px;
	border: 2.5px solid green;
	cursor: pointer;
}
.btn4{
    color: green;
	background: white;
	font-size: 12px;
	font-weight: bold;
	padding: 8px 20px;
    width: 400px;
	margin: 20px;
    margin-left: 90px;
	border-radius: 20px;
	border: 2.5px solid green;
	cursor: pointer;
}
.btn1:hover, .btn2:hover, .btn3:hover, .btn4:hover{
    background-color: green;
    border: 2.5px solid white;
    color: white;
}
.hr1, .hr2, .hr3{
    width: 500px;
    background: green;
    border: 2px solid green;
    border-radius: 1em;
}
.hrSel{
    width: 200px;
    background: green;
    border: 2px solid green;
    border-radius: 1em;
}
.hrCrops{
    width: 330px;
    background: green;
    border: 2px solid green;
    border-radius: 1em;
}
footer{
    display: block;
    padding: 50px 0 0 0;
    background-color: rgba(0,128,0, 0.8);
    text-align: center;
}
.navbar{
    z-index: 1;
}
.navbar-inverse {
	background-color: transparent;
	border-color: transparent;
}
.navbar-inverse .navbar-brand {
	color: #fff;
	font-size: 40px;
    /*text-shadow: 0px 0px 6px rgba(255,255,255,0.9);*/
    /*background: white;*/
    /*-webkit-background-clip: text;*/
    /*-webkit-text-fill-color: transparent;*/
    text-shadow: 2px 4px 3px rgba(0,0,0,0.7);
	padding: 40px 15px;
	font-weight: 1000;
}
.nav.navbar-nav.navbar-right {
	margin: 25px 0;
}
.navbar-inverse .navbar-nav>li>a {
	color: #fff;
    /*text-shadow: 0px 0px 6px rgba(255,255,255,0.9);*/
    text-shadow: 2px 4px 3px rgba(0,0,0,0.7);
    font-weight: 700;
    font-size: 15.3px;
	text-transform: uppercase;
}
.banner {
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
	background-repeat: no-repeat;
	height: 100vh;
}
.carousel-caption {
	padding-bottom: 250px;
	font-family: poppins;
}
.carousel-caption {
	padding-bottom: 250px;
	font-family: poppins;
}
.carousel-caption h2 {
	font-size: 70px;
	text-transform: uppercase;
	font-weight: bold;
}
.carousel-caption h2 span {
	color: white;
}
.carousel-caption a {
	background: rgba(0, 255, 0, 0.7);
	padding: 15px 35px;
	display: inline-block;
	margin-top: 15px;
	color: #fff;
	text-transform: uppercase;
	border-radius: 25px;
}
.carousel-caption h3 {
    color: rgba(0, 255, 0, 0.7);
}
.carousel-control.right {
	background-image: none;
}
.carousel-control.left {
	background-image: none;
}
.carousel-indicators .active {
	background-color: #EDBB00;
	border-color: #EDBB00;
}
@media only screen and (min-width: 380px) and (max-width: 991px) {
	.carousel-caption {
		padding-bottom: 350px;
	}
	.carousel-caption h2 {
		font-size: 50px;
	}
}
@media only screen and (max-width: 380px) {
	.navbar-inverse .navbar-brand {
		font-size: 30px;
		padding: 20px 15px;
	}
	.navbar-collapse {
		background: rgba(0, 0, 0, 0.5);
	}
	.carousel-caption {
		padding-bottom: 120px;
	}
	.carousel-caption h2 {
		font-size: 25px;
	}
	.carousel-caption h3 {
		font-size: 18px;
	}
	.carousel-caption a {
		padding: 10px 25px;
	}
    .dropbtn {
    color: white;
    background-color: transparent;
    padding: 14px;
    font-size: 15.3px;
    border: none;
    }
}
.dropbtn {
  color: white;
  font-family: 'Poppins', sans-serif;
  background-color: transparent;
  /*text-shadow: 0px 0px 6px rgba(255,255,255,0.9);*/
  text-shadow: 2px 4px 3px rgba(0,0,0,0.7);
  padding: 14px;
  font-weight: 700;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  /*background-color: rgba(76, 88, 76, 0.3);*/
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  text-shadow: 2px 4px 3px rgba(0,0,0,0.5);
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: transparent;}
</style>