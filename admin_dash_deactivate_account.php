<?php
include "connection.php";
include "admin_dash_header.php";
?>
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="img/LOGO.png" class="profile_image" alt="">
      </center>
      <hr style="color: white">
      <nav class="nav1">
          <ul>
            <li><a href="admin_dash_body.php" ><i class="fas fa-desktop"></i><span>Dashboard</span></a></li>
            <li class="dropdown" style="z-index: 10;">
              <a href="#"><i class="fas fa-cogs"></i><span>Features</span></a>
              <ul>
                  <li><a href="#" id="viewB"><i class="fas fa-user-plus"></i><span>Register Coordinator</span></a></li>
                  <li class="dropdown_two split"><a href="#"><i class="fas fa-plus-square"></i><span>Set Program</span></a>
                      <ul>
                          <li><a href="admin_dash_add_crops.php"><i class="fas fa-plus-square"></i><span>Crops</span></a>
                          <li><a href="admin_dash_add_services.php"><i class="fas fa-plus-square"></i><span>Services</span></a>
                      </ul>
                  </li>
                  <li><a href="admin_dash_search_farmer.php"><i class="fas fa-search"></i><span>Search Farmer</span></a></li>
                  <li><a href="admin_dash_deactivate_account.php" style="color: rgba(0, 255, 0, 0.8)"><i class="fas fa-user-slash"></i><span>Activate Account</span></a></li>
              </ul>
            </li>
          </ul>
        <hr style="color: white">
      </nav>
      <nav class="nav2">
        <ul>
            <li class="dropdown">
              <a href="#"><i class="fas fa-tools"></i><span>Home Features</span></a>
              <ul>
                  <li><a href="admin_dash_home_image.php"><i class="fas fa-wrench"></i><span>Customized Home Image</span></a></li>
                  <li><a href="admin_dash_home_content.php"><i class="fas fa-wrench"></i><span>Customized Home Content</span></a></li>
              </ul>
            </li>
        </ul>
      </nav>
    </div>
    <div class="popup">
        <div class="popup-content">
            <div class="popup-child1">
                    <form role="form">
                    <h3>Create Coordinators Account</h3>
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <br>
                            <h5>Coordinators Information</h5>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <label for="selectD">Register for: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Services</option>
                                          <option value="1">High Value Crops Program</option>
                                          <option value="2">Rice Program</option>
                                          <option value="3">Corn Program</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="first_name">Last Name:</label>
                                            <input type="text" name="last_name" id="first_name" class="form-control input-lg" tabindex="1" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">First Name:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" tabindex="2" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="password">Middle Name:</label>
                                            <input type="text" name="password" id="password" class="form-control input-lg" tabindex="5" placeholder="Middle Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <!-- <div class="form-group">
                                            <label for="password_confirmation">Contact Number:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" tabindex="6" placeholder="Contact Number">
                                        </div> -->
                                        <label for="selectD">Position: </label>
                                            <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                                <option selected>Choose Services</option>
                                                <option value="1">High Value Crops Program</option>
                                                <option value="2">Rice Program</option>
                                                <option value="3">Corn Program</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="row" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="inputC">
                                            <label for="start">Birth Date:</label>
                                            <input type="date" id="start" name="trip-start"
                                                value="2000-01-01"
                                                min="1900-01-01" max="2050-12-31" style="width: 100%">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                    <!-- <label for="selectD">Civil Status: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Status</option>
                                          <option value="1">Married</option>
                                          <option value="2">Single</option>
                                          <option value="3">Widowed</option>
                                      </select> -->
                                      <div class="form-group">
                                            <label for="password_confirmation">Contact Number:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" tabindex="6" placeholder="Contact Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="password">Place of Birth:</label>
                                            <input type="text" name="password" id="password" class="form-control input-lg" placeholder="Place of Birth">
                                        </div>
                                    </div>
                                    <!-- <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="first_name">Religion:</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" value="Religion">
                                        </div>
                                    </div> -->
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <label for="selectD">Sex: </label>
                                        <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                            <option selected>Choose Sex</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                        </div>
                                    
                                </div>
                                <!-- <div class="column" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="password">Place of Birth:</label>
                                            <input type="text" name="password" id="password" class="form-control input-lg" placeholder="Place of Birth">
                                        </div>
                                    </div>
                                </div> -->
                                <br>
                                <button type="button" class="btn btn-success" style="width: 50%" id="nextB">Next</button>
                                <hr class="colorgraph" style="height: 10px">
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
    <div class="popup1">
        <div class="popup-content1">
            <div class="popup-child2">
                    <form role="form">
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <br>
                            <h5>Coordinators Address</h5>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Provincial Address:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Provincial Address">
                                        </div>
                                  </div>
                                </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Barangay Address:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Barangay">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Municipality Address:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Municipality">
                                        </div>
                                    </div>
                            </div>
                            <!-- <div class="row" style="text-align: left">
                                <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Zipcode:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Zipcode">
                                    </div>
                                </div>
                            </div> -->
                            <br>
                            <h5>Coordinators Login Information</h5>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                    <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                            <div class="form-group" >
                                            <label for="last_name">Username:</label>
                                                <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Username">
                                            </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Password:</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Confirm Password:</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                                <br>
                                <div class="column" style="text-align: center">
                                    <button type="button" class="btn btn-dark" style="width: 25%" id="backB">Back</button>
                                    <a href=""><button type="button" class="btn btn-success" style="width: 25%" id="next1B.com">Submit</button></a>
                                </div>
                                <hr class="colorgraph" style="height: 10px">
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
    <div class="popup2">
        <div class="popup-content2">
            <div class="popup-child2">
                    <form role="form">
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <br>
                            <h5>Farm Land Description</h5>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <label for="selectD">Farm Type: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Services</option>
                                          <option value="1">High Value Crops</option>
                                          <option value="2">Corn Value Crop</option>
                                          <option value="3">Rice Crop</option>
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Barangay:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Barangay">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Municipality:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Municipality">
                                        </div>
                                    </div>
                            </div>
                            <div class="row" style="text-align: left">
                                <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Total farm area:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Total farm area">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h5>Farmers Account</h5>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                    <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                            <div class="form-group" >
                                            <label for="last_name">Username:</label>
                                                <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Username">
                                            </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Password:</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Confirm Password:</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                                <br>
                                <div class="column" style="text-align: center">
                                    <button type="button" class="btn btn-dark" style="width: 25%" id="back1B">Back</button>
                                    <button type="button" class="btn btn-success" style="width: 25%" id="submitBx">Submit</button>
                                </div>
                                <hr class="colorgraph" style="height: 10px">
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
    <div class="popupDeact">
        <div class="popup-contentDeact">
            <div class="popup-child4">
                    <form role="form">
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <br>
                            <h5>Deactivate Account</h5>
                            <hr>
                            <div class="row" style="text-align: left; display: flex; justify-content: center">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px; ">
                                    <h4>Would you like to deactivate the account of "Respituto, Rompetrapu"?</h4>
                                  </div>
                                </div>
                            </div>
                                <br>
                                <div class="column" style="text-align: center">
                                    <a href="#" id="verPass"><button type="button" class="btn btn-success" style="width: 25%">Yes</button></a>
                                    <a href=""><button type="button" class="btn btn-danger" style="width: 25%" id="submitBx">No</button></a>
                                </div>
                                <hr class="colorgraph" style="height: 10px">
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="closeBDeact" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>
    <div class="popupDeactCon">
        <div class="popup-contentDeactCon">
            <div class="popup-child4">
                    <form role="form">
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <br>
                            <h5>Deactivate Account</h5>
                            <hr>
                            <div class="row" style="text-align: left; display: flex; justify-content: center">
                                <div class="column">
                                  <div class="col-xs-12 col-sm-12 col-md-12" style="margin: 10px 0 10px; ">
                                    <div class="form-group">
                                            <label for="password_confirmation">Verify Password:</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Verify Password">
                                        </div>
                                  </div>
                                </div>
                            </div>
                                <br>
                                <div class="column" style="text-align: center">
                                    <a href=""><button type="button" class="btn btn-success" style="width: 100%" id="back1B">Confirm</button></a>
                                </div>
                                <hr class="colorgraph" style="height: 10px">
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="closeBDeactCon" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>
  <div class="content">
  <div class="container-fluid">
      <div class="row-fluid" style="background-color: white; min-height: 600px; padding:10px;">
          <div class="span12">
              <div class="printGrp" style="display: flex; flex-direction: row; gap: 20px; justify-content: flex-end; border: 2px solid black;
                  padding: 15px 0 15px 0; margin-top: 10px; flex-wrap: wrap; background-color: rgba(0, 128, 0, 0.7); position: relative; z-index: 0">
                  <div style="left: 10px; position: absolute">
                      <h3 style="font-weight: bolder; color: white">Activation Account</h3>
                    </div>
                        <div style="margin: 0 10px 0 0">
                            <label for="middlename" style="font-weight: bold">Search name: </label>
                            <input id="myInput" onkeyup="myFunction3()" class="inputC" type="text" name="middlename" placeholder="Search name" required>
                        </div>
                  </div>
                  <hr>
                  <div class="table-responsive">
                      <table class="table table-hover table-sm" id="myTable">
                      <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>FirstName</th>
                                    <th>MiddleName</th>
                                    <th>LastName</th>
                                    <th>Date Active</th>
                                    <th>Role</th>
                                    <th>Deactivate</th>
                                    <th>Activate</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><img src="./img/prof1.jpg" height="100" width="100"></td>
                                        <td>Anthony</td>
                                        <td>Termulo</td>
                                        <td>Silencio</td>
                                        <td>04/4/2018</td>
                                        <td>Farmer</td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn3" style="width: 100%">Deactivate</button></td>
                                        <td><button id="activateA" type="button" class="btn btn-success btn4" style="width: 100%">Activate</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><img src="./img/prof4.jpg" height="100" width="100"></td>
                                        <td>Noel</td>
                                        <td>Ricarda</td>
                                        <td>Cruz</td>
                                        <td>04/4/2018</td>
                                        <td>Personnel</td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn3" style="width: 100%">Deactivate</button></td>
                                        <td><button id="activateA" type="button" class="btn btn-success btn4" style="width: 100%">Activate</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td><img src="./img/prof1.jpg" height="100" width="100"></td>
                                        <td>Steph</td>
                                        <td>Medina</td>
                                        <td>Samson</td>
                                        <td>04/4/2018</td>
                                        <td>Farmer</td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn3" style="width: 100%">Deactivate</button></td>
                                        <td><button id="activateA" type="button" class="btn btn-success btn4" style="width: 100%">Activate</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td><img src="./img/prof3.jpg" height="100" width="100"></td>
                                        <td>Pepe</td>
                                        <td>Lagrimas</td>
                                        <td>Saturno</td>
                                        <td>04/4/2018</td>
                                        <td>Farmer</td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn3" style="width: 100%">Deactivate</button></td>
                                        <td><button id="activateA" type="button" class="btn btn-success btn4" style="width: 100%">Activate</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td><img src="./img/prof4.jpg" height="100" width="100"></td>
                                        <td>Mark</td>
                                        <td>Redondo</td>
                                        <td>Pelaez</td>
                                        <td>04/4/2018</td>
                                        <td>Personnel</td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn3" style="width: 100%">Deactivate</button></td>
                                        <td><button id="activateA" type="button" class="btn btn-success btn4" style="width: 100%">Activate</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td><img src="./img/prof2.jpg" height="100" width="100"></td>
                                        <td>Jobert</td>
                                        <td>Mendoza</td>
                                        <td>Francisco</td>
                                        <td>04/4/2018</td>
                                        <td>Farmer</td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn3" style="width: 100%">Deactivate</button></td>
                                        <td><button id="activateA" type="button" class="btn btn-success btn4" style="width: 100%">Activate</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td><img src="./img/prof3.jpg" height="100" width="100"></td>
                                        <td>Helbert</td>
                                        <td>Reyes</td>
                                        <td>Quintos</td>
                                        <td>04/4/2018</td>
                                        <td>Farmer</td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn3" style="width: 100%">Deactivate</button></td>
                                        <td><button id="activateA" type="button" class="btn btn-success btn4" style="width: 100%">Activate</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td><img src="./img/prof1.jpg" height="100" width="100"></td>
                                        <td>Errold</td>
                                        <td>Marriscota</td>
                                        <td>Spence</td>
                                        <td>04/4/2018</td>
                                        <td>Farmer</td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn3" style="width: 100%">Deactivate</button></td>
                                        <td><button id="activateA" type="button" class="btn btn-success btn4" style="width: 100%">Activate</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td><img src="./img/prof2.jpg" height="100" width="100"></td>
                                        <td>Frank</td>
                                        <td>Sentino</td>
                                        <td>Remulo</td>
                                        <td>04/4/2018</td>
                                        <td>Farmer</td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn3" style="width: 100%">Deactivate</button></td>
                                        <td><button id="activateA" type="button" class="btn btn-success btn4" style="width: 100%">Activate</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td><img src="./img/prof3.jpg" height="100" width="100"></td>
                                        <td>Robert</td>
                                        <td>Mehares</td>
                                        <td>Sanson</td>
                                        <td>04/4/2018</td>
                                        <td>Personnel</td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn3" style="width: 100%">Deactivate</button></td>
                                        <td><button id="activateA" type="button" class="btn btn-success btn4" style="width: 100%">Activate</button></td>
                                    </tr>
                            </tbody>
                      </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
<script>

    function myFunction3() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

let elements = Array.from(document.getElementsByClassName('btn3'))
        for (let element of elements) {
        element.addEventListener('click', function(){
            document.querySelector(".popupDeact").style.display = "flex";
        })
      }

  document.getElementById("viewB").addEventListener("click", function(){
        document.querySelector(".popup").style.display = "flex";
    })

  document.getElementById("closeB").addEventListener("click", function(){
      document.querySelector(".popup").style.display = "none";
  })
  document.getElementById("nextB").addEventListener("click", function(){
        document.querySelector(".popup1").style.display = "flex";
        document.querySelector(".popup").style.display = "none";
    })
  document.getElementById("backB").addEventListener("click", function(){
        document.querySelector(".popup1").style.display = "none";
        document.querySelector(".popup").style.display = "flex";
    })
  document.getElementById("close1B").addEventListener("click", function(){
      document.querySelector(".popup1").style.display = "none";
  })
  document.getElementById("next1B").addEventListener("click", function(){
        document.querySelector(".popup2").style.display = "flex";
        document.querySelector(".popup1").style.display = "none";
    })
    document.getElementById("back1B").addEventListener("click", function(){
        document.querySelector(".popup2").style.display = "none";
        document.querySelector(".popup1").style.display = "flex";
    })
    document.getElementById("close2B").addEventListener("click", function(){
      document.querySelector(".popup2").style.display = "none";
  })

  
</script>
<?php
include "admin_dash_footer.php";
?>