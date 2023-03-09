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
            <li><a href="farmer_dash_body.php" style="color: rgba(0, 255, 0, 0.8)"><i class="fas fa-desktop"></i><span>Dashboard</span></a></li>
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
<div class="container-fluid">
    <div class="row-fluid" style="background-color: white; min-height: 600px; padding:10px;">
        <div class="span12">
            <div class="printGrp" style="display: flex; flex-direction: row; gap: 20px; justify-content: flex-end; border: 2px solid black;
                padding: 15px 0 15px 0; margin-top: 10px; flex-wrap: wrap; background-color: rgba(0, 128, 0, 0.7); position: relative">
                    <div style="left: 10px; position: absolute">
                        <h3 style="font-weight: bolder; color: white">History Log</h3>
                    </div>
                    <div style="margin: 0 10px 0 0">
                            <!-- <label for="middlename">Program: </label>
                            <input class="inputC" type="text" name="middlename" placeholder="Program" required> -->
                        <label for="drpProg" style="font-weight: bold">Status:</label>
                            <select id="mylist2" onchange="myFunction2()" style="width: 150px; height: auto; padding: 2.5px" class="drpProg">
                                <option value="">None</option>
                                <option value="Approved">Approved</option>
                                <option value="Declined">Declined</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-hover table-sm" id="myTable">
                            <thead>
                                <tr>
                                    <th>Reference No.</th>
                                    <th>Request</th>
                                    <th>Kilo</th>
                                    <th>Date issued</th>
                                    <th>Reason of decline</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <th scope="row">834729</th>
                                        <td>Soil Sampling</td>
                                        <td><strong>---</strong></td>
                                        <td>12/7/2019</td>
                                        <td>Personnel Unavailable</td>
                                        <td><em style="color: red"><h4>Declined</h4></em></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">987852</th>
                                        <td>Pechay seed</td>
                                        <td>1</td>
                                        <td>12/7/2019</td>
                                        <td><strong>--------</strong></td>
                                        <td><em style="color: green"><h4>Approved</h4></em></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">842634</th>
                                        <td>Technical Assistance</td>
                                        <td><strong>---</strong></td>
                                        <td>12/7/2019</td>
                                        <td><strong>--------</strong></td>
                                        <td><em style="color: green"><h4>Approved</h4></em></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">645245</th>
                                        <td>Tomato seed</td>
                                        <td>10</td>
                                        <td>12/7/2019</td>
                                        <td>Kilo Out of Range</td>
                                        <td><em style="color: red"><h4>Declined</h4></em></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">183478</th>
                                        <td>Corn seed</td>
                                        <td>2</td>
                                        <td>12/7/2019</td>
                                        <td><strong>--------</strong></td>
                                        <td><em style="color: green"><h4>Approved</h4></em></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">656733</th>
                                        <td>Mustasa seed</td>
                                        <td>7</td>
                                        <td>12/7/2019</td>
                                        <td>Kilo Out of Range</td>
                                        <td><em style="color: red"><h4>Declined</h4></em></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
function myFunction1() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("mylist1");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[5];
                if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }       
        }
    }

        function myFunction2() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("mylist2");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[4];
                if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function myFunction3() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
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

    document.getElementById("viewCrop").addEventListener("click", function(){
            document.querySelector(".popup3").style.display = "flex";
        })

      document.getElementById("viewService").addEventListener("click", function(){
            document.querySelector(".popup4").style.display = "flex";
        })
</script>
<!-- <style>
.navDash ul{
  margin: 0;
  padding: 0;
  position: relative;
  list-style-type: none;
}
.navDash ul ul{
  position: absolute;
  text-align: left;
  left: 250px;
  width: 250px;
  top: 42px;
  background: #2f323a;
  display: none;
  box-shadow: 2px 2px 10px grey;
}
.navDash ul .dash{
  position: relative;
}
.navDash ul .dash:hover > ul{
  display: initial;
}
.navDash ul .dash_two ul{
  width: 180px;
  position: absolute;
  left: 250px;
  top: 0;
}
.navDash ul .dash_two:hover ul{
  display: initial;
}
.navDash ul .split ul{
  top: 60px;
}

.card-box {
    position: relative;
    color: #fff;
    padding: 20px 10px 40px;
    margin: 20px 0px;
}
.card-box:hover {
    text-decoration: none;
    color: #f1f1f1;
}
.card-box:hover .icon i {
    font-size: 100px;
    transition: 1s;
    -webkit-transition: 1s;
}
.card-box .inner {
    padding: 5px 10px 0 10px;
}
.card-box h3 {
    font-size: 27px;
    font-weight: bold;
    margin: 0 0 8px 0;
    white-space: nowrap;
    padding: 0;
    text-align: left;
}
.card-box p {
    font-size: 15px;
}
.card-box .icon {
    position: absolute;
    top: auto;
    bottom: 5px;
    right: 5px;
    z-index: 0;
    font-size: 72px;
    color: rgba(0, 0, 0, 0.15);
}
.card-box .card-box-footer {
    position: absolute;
    left: 0px;
    bottom: 0px;
    text-align: center;
    padding: 3px 0;
    color: rgba(255, 255, 255, 0.8);
    background: rgba(0, 0, 0, 0.1);
    width: 100%;
    text-decoration: none;
}
.card-box:hover .card-box-footer {
    background: rgba(0, 0, 0, 0.3);
}
.bg-blue {
    background-color: #00c0ef !important;
}
.bg-green {
    background-color: #00a65a !important;
}
.bg-orange {
    background-color: #f39c12 !important;
}
.bg-red {
    background-color: #d9534f !important;
}
</style> -->
<?php
include "farmer_dash_footer.php";
?>