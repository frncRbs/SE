<?php
include "connection.php";
include "personnel_dash_header.php";
?>
    <!--sidebar start-->
    <div class="sidebar bg-dark">
      <center>
        <img src="img/LOGO.png" class="profile_image" alt="">
        <a href="personnel_dash_profile.php"><i class="fas fa-user"></i><span class="prof">Profile</span></a>
      </center>
      <hr style="color: white">
      <nav class="nav1">
          <ul>
            <li><a href="personnel_dash_body.php" ><i class="fas fa-desktop"></i><span>Dashboard</span></a></li>
            <li class="dropdown">
              <a href="#"><i class="fas fa-cogs"></i><span>Features</span></a>
              <ul>
                  <li><a href="personnel_dash_farmers_request.php"><span>Farmers Request</span></a></li>
                  <li><a href="personnel_dash_farmers_search.php" style="color: green"><span>Search Request</span></a></li>
                  <li><a href="personnel_dash_approved_panel.php"><span>Approved Panel</span></a></li>
                  <li><a href="#" id="viewB"><span>Add Farmer</span></a></li>
                  <li><a href="#"><span>Farmer List</span></a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fas fa-info-circle"></i><span>About</span></a></li>
          </ul>
        <hr style="color: white">
      </nav>
      <nav class="nav2">
        <ul>
            <li class="dropdown">
              <a href="#"><i class="fas fa-cogs"></i><span>Home Features</span></a>
              <ul>
                  <li><a href="personnel_dash_home_image.php"><span>Customized Home Image</span></a></li>
                  <li><a href="personnel_dash_home_content.php"><span>Customized Home Content</span></a></li>
              </ul>
            </li>
        </ul>
      </nav>
    </div>
    <div class="popup">
        <div class="popup-content">
            <div class="popup-child1">
                <div class="col-md-4 well" id="leftPanel" style="padding: 5px">
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <img src="http://lorempixel.com/200/200/abstract/1/" alt="Texto Alternativo" class="img-circle img-thumbnail" style="border-radius: 10em; margin-top: 15px">
                                    <h2>Respituto P. Rompetrapu</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning">
                                        Personnel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-8 well" id="rightPanel" style="margin-top: 20px;">
                    <form role="form">
                    <h3>Farmers Profile</h3>
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="first_name">Name:</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" tabindex="1" value="Josie A. Katigbag" style="text-align: center">
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
                                            <input type="text" name="password" id="password" class="form-control input-lg" tabindex="5" value="69" style="text-align: center">
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
                                            <select class="selectD" style="width: 100%; height: auto; margin: 0; padding: 2px; background-color: transparent; border-radius: 3px" readonly>
                                                <option>Choose Sex</option>
                                                <option  selected value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="first_name">Position:</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" tabindex="1" value="High Value Crop" style="text-align: center" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="colorgraph" style="height: 10px">
                        <div class="row">
                        </div>
                    </form>
                </div>
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="closeB" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>
    <script>
      document.getElementById("viewB").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "flex";
        })

      document.getElementById("closeB").addEventListener("click", function(){
          document.querySelector(".popup").style.display = "none";
      })
    </script>
  <div class="content">
    <div class="printGrp" style="display: flex; flex-direction: row; gap: 20px; justify-content: flex-end; border: 2px solid black;
         padding: 15px 0 15px 0; margin-top: 10px; flex-wrap: wrap; background-color: rgba(0, 128, 0, 0.7); position: relative">
         <div style="left: 10px; position: absolute">
            <h3>Search Request</h3>
          </div>
            <div style="margin: 0 10px 0 0">
                <!-- <label for="middlename">Program: </label>
                   <input class="inputC" type="text" name="middlename" placeholder="Program" required> -->
                <label for="drpProg" style="font-weight: bold">Program:</label>
                    <select style="width: 150px; height: auto; padding: 2.5px" class="drpProg">
                        <option value="1">Select One</option>
                        <option value="2">High Value Crops</option>
                        <option value="3">Rice Crops</option>
                        <option value="4">Crops</option>
                    </select>
            </div>
            <div style="margin: 0 10px 0 0">
                <label for="drpBar" style="font-weight: bold">Barangay:</label>
                    <select style="width: 150px; height: auto; padding: 2.5px" class="drpBar">
                        <option value="1">Select One</option>
                        <option value="2">Zone 1</option>
                        <option value="3">Zone 2</option>
                        <option value="4">Zone 3</option>
                        <option value="5">Zone 4</option>
                    </select>
            </div>
            <div style="margin: 0 10px 0 0">
                <label for="middlename" style="font-weight: bold">Search name: </label>
                   <input class="inputC" type="text" name="middlename" placeholder="Search name" required>
            </div>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover table-sm" id="tableSearch">
                <thead>
                    <tr>
                    <th>Reference No.</th>
                    <th>Image</th>
                    <th>Full Name</th>
                    <!-- <th>First Name</th>
                    <th>Middle Name</th> -->
                    <th>Request</th>
                    <th>Unit(Kilo)</th>
                    <th>Date</th>
                    <th>Program</th>
                    <!-- <th>Username</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Status</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res=mysqli_query($link,"SELECT CONCAT(c.firstname, ' ', c.lastname) AS fullname, c.* FROM user_registration c");
                    while($row=mysqli_fetch_array($res))
                    {
                            echo "<tr>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; ?> <img src="<?php echo $row["image"]; ?>" height="100" width="100"> <?php echo "</td>";
                            echo "<td>"; echo $row["fullname"]; echo "</td>";
                            // echo "<td>"; echo $row["firstname"]; echo "</td>";
                            //echo "<td>"; echo $row["username"]; echo "</td>";
                            //echo "<td>"; echo $row["password"]; echo "</td>";
                            //echo "<td>"; echo $row["role"]; echo "</td>";
                            //echo "<td>"; echo $row["status"]; echo "</td>";
                            echo "<td>"; echo $row["username"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; ?> <button type="button" class="btn btn-success">View Message</button> <?php echo "</td>";
                            echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
<?php
include "personnel_dash_footer.php";
?>