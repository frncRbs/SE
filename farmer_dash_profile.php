<?php
include "connection.php";
include "farmer_dash_header.php";
?>
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="img/LOGO.png" class="profile_image" alt="">
      </center>
      <hr style="color: white">
      <nav class="nav1">
          <ul>
            <li><a href="farmer_dash_body.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a></li>
            <li class="dropdown">
              <a href="#"><i class="fas fa-cogs"></i><span>Features</span></a>
              <ul>
                  <li><a href="#" id="viewCrop"><i class="fas fas fa-hand-holding-water"></i><span>Request Crops</span></a></li>
                  <li><a href="#" id="viewService"><i class="fas fa-hands-helping"></i><span>Request Service</span></a></li>
              </ul>
            </li>
          </ul>
        <hr style="color: white">
        </nav>
        <nav>
            <ul>
                <li><a href="farmer_dash_body.php"><i class="fas fa-question-circle"></i><span>Need Help?</span></a></li>
            </ul>
        </nav>
    </div>
    <div class="popup3">
        <div class="popup-content3">
            <div class="popup-child3">
                    <form role="form">
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <br>
                            <h3>Request for crops</h3>
                            <hr>
                            <div class="row" style="text-align: left; display: flex; justify-content: center">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <label for="selectD" style="font-weight: bold">Crops: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
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
                                <div class="row">
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
                                    <a href=""><button type="button" class="btn btn-success" style="width: 50%" id="submitBdec">Submit</button></a>
                                </div>
                                <hr class="colorgraph" style="height: 10px">
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
    <div class="popup4">
        <div class="popup-content4">
            <div class="popup-child3">
                    <form role="form">
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <br>
                            <h3>Request for services</h3>
                            <hr>
                            <div class="row" style="text-align: left; display: flex; justify-content: center">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <label for="selectD" style="font-weight: bold">Services:</label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose service</option>
                                          <option value="1">Soil Sampling</option>
                                          <option value="2">Technical Assistance</option>
                                          <option value="3">Financial Assistance</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="row">
                                    <div style="text-align: left; display: flex; justify-content: center">
                                        <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px; ">
                                            <label for="selectD" style="font-weight: bold">Purpose of Request:</label>
                                            <textarea name="selectD" id="selectD" cols="58" rows="5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit nesciunt quasi quibusdam officiis magnam numquam quae nostrum fugiat reiciendis tenetur ut, velit, quod beatae perferendis earum dolor maiores soluta quisquam?</textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                                <br>
                                <div class="column" style="text-align: center">
                                    <a href=""><button type="button" class="btn btn-success" style="width: 50%" id="submitBdec">Submit</button></a>
                                </div>
                                <hr class="colorgraph" style="height: 10px">
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
    <div class="content">
    <br>
        <hr>
        <div class="container" style="background-color: rgba(0,128,0, 0.1); padding-right: 30px">
            <br>
                <div class="row" id="main">
                    <div class="col-md-4 well" id="leftPanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <img src="./img/prof1.jpg" width="250" height="auto" alt="Texto Alternativo" class="img-circle img-thumbnail" style="border-radius: 10em; margin-top: 50px">
                                    <h2>Respituto P. Rompetrapu</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-group" style="padding-bottom: 10px">
                                        <button type="button" class="btn btn-info">
                                        Farmer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-8 well" id="rightPanel">
            <div class="row">
                <div class="col-md-12" style="margin: 35px 0 0 10px;">
                    <form role="form">
                    <h3>Edit Profile</h3>
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="first_name">Name:</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" tabindex="1" value="Respituto P. Rompetrapu" style="text-align: center">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                        <label for="last_name">Address:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" tabindex="2" value="Recodo Zamboanga City" style="text-align: center">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="password">Age:</label>
                                            <input type="text" name="password" id="password" class="form-control input-lg" tabindex="5" value="50" style="text-align: center">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="password_confirmation">Contact Number:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" tabindex="6" value="09067982233" style="text-align: center">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="inputC">
                                            <label for="start">Birth Date:</label>
                                            <input type="date" id="start" name="trip-start"
                                                value="2000-01-01"
                                                min="1900-01-01" max="2050-12-31" style="width: 100%" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                        <label for="selectD">Sex:</label>
                                            <select class="selectD" style="width: 100%; height: auto; margin: 0; padding: 2px; border-radius: 3px">
                                                <option>Choose Sex</option>
                                                <option  selected value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="first_name">Program:</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" tabindex="1" value="High Value Crop" style="text-align: center" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                        <label for="last_name">Email Address:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" tabindex="2" value="josie@yahoo.com" style="text-align: center" >
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        <div style="display: flex; justify-content: center">
                            <a href="#" id="printB"><button class="btn btn-success" style="margin: 0 10px 10px 0; width: 100%">Update</button></a>
                        </div>
                        <hr class="colorgraph" style="height: 10px; margin-bottom: 20px">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
<script>
document.getElementById("viewCrop").addEventListener("click", function(){
            document.querySelector(".popup3").style.display = "flex";
        })

      document.getElementById("viewService").addEventListener("click", function(){
            document.querySelector(".popup4").style.display = "flex";
        })
</script>
<?php
include "farmer_dash_footer.php";
?>