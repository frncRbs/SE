<?php
include "connection.php";
?>
<script>
  //  document.getElementById("declineB").addEventListener("click", function(){
  //         document.querySelector(".popup3").style.display = "flex";
  //     })
      
  //     document.getElementById("closeDecB").addEventListener("click", function(){
  //         document.querySelector(".popup3").style.display = "none";
  //     })

</script>
<style>
body{
  margin: 0;
  padding: 0;
  font-family: "Roboto", sans-serif;
}
.popupDeactCon{
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
.popup-contentDeactCon{
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
.popupDeact{
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
.popup-contentDeact{
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
.popup4{
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
.popup-child5{
    display: flex;
    gap: 10px;
}
.popup-content4{
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
.popIn4{
    background-color: transparent;
    margin: 16px auto;
    display: relative;
    width: 90%;
    padding: 8px;
    margin-left: 20px;
    border: none;
    border-bottom: 2px solid black;
}
.popup3{
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
.popup-child4{
    display: flex;
    gap: 10px;
}
.popup-content3{
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
.popup2{
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
.popup-child3{
    display: flex;
    gap: 10px;
}
.popup-content2{
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
.popIn2{
    background-color: transparent;
    margin: 16px auto;
    display: relative;
    width: 90%;
    padding: 8px;
    margin-left: 20px;
    border: none;
    border-bottom: 2px solid black;
}
.popup1{
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
.popup-child2{
    display: flex;
    gap: 10px;
}
.popup-content1{
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
.popIn1{
    background-color: transparent;
    margin: 16px auto;
    display: relative;
    width: 90%;
    padding: 8px;
    margin-left: 20px;
    border: none;
    border-bottom: 2px solid black;
}
/* start */
.popup{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    display: none;
    flex-wrap: wrap;
    flex-wrap: ;
    justify-content: center;
    align-items: center;
    text-align: center;
    z-index: 120;
}
.popup-child1{
    display: flex;
    gap: 10px;
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
#leftPanel{
    background-color:green;
    border-radius: 1em;
    color:#fff;
    text-align: center;
}

#rightPanel{
    min-height:415px;
}

/* Credit to bootsnipp.com for the css for the color graph */
.colorgraph {
  height: 10px;
  border-top: 0;
  margin-bottom: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
.vl {
  border-left: 2px solid green;
  margin: 0 30px 0 30px;
  height: 20px;
}
.navbar{
  display: flex;
  flex-wrap: wrap-reverse;
}
#dash{
    display: flex;
    margin-left: 280px;
}
.parentCon{
    display: flex;
    flex-wrap: wrap-reverse;
    flex-direction: column;
}
main{
    padding-top: 80px;
    margin-left: 265px;
}
/* end */
.nav1, ul{
  margin: 0;
  padding: 0;
  position: relative;
  list-style-type: none;
}
.nav1 ul ul{
  position: absolute;
  text-align: left;
  left: 250px;
  width: 230px;
  top: 0;
  background: #2f323a;
  display: none;
  box-shadow: 2px 2px 10px grey;
}
.nav1 ul .dropdown{
  position: relative;
}
.nav1 ul .dropdown:hover ul{
  display: initial;
}

.nav2 ul{
  margin: 0;
  padding: 0;
  position: relative;
  list-style-type: none;
}
.nav2 ul ul{
  position: absolute;
  text-align: left;
  left: 250px;
  width: 300px;
  top: 0;
  background: #2f323a;
  display: none;
  box-shadow: 2px 2px 10px grey;
}
.nav2 ul .dropdown{
  position: relative;
}
.nav2 ul .dropdown:hover ul{
  display: initial;
}
#sidebar_btn{
    position: absolute;
    top: 32px;
}
header{
  position: fixed;
  background: #22242A;
  padding: 10px;
  padding-bottom: 20px;
  width: 100%;
  z-index: 1;
  height: auto;
}
.left_area h3{
  color: #fff;
  margin: 0;
  margin-left: 10px;
  padding-bottom: 10px;
  text-transform: uppercase;
  font-size: 22px;
  font-weight: 900;
}
.left_area span{
  color: rgba(0, 255, 0, 0.5);
}

.user_btn{
  padding: 5px;
  /* background: rgba(0, 255, 0, 0.5); */
  text-decoration: none;
  float: right;
  margin-top: -40px;
  margin-right: 110px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  color: #fff;
  transition: 0.5s;
  transition-property: background;
}
.user_btn:hover{
  color: #0B87A6;
}

/* .notif_btn{
  padding: 5px;
  /* background: rgba(0, 255, 0, 0.5); */
  /* text-decoration: none;
  float: right;
  margin-top: -40px;
  margin-right: 110px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  color: #fff;
  transition: 0.5s;
  transition-property: background;
}
.notif_btn:hover{
  color: #0B87A6;
} */

.logout_btn{
  padding: 5px;
  background: rgba(0, 255, 0, 0.5);
  text-decoration: none;
  float: right;
  margin-top: -40px;
  margin-right: 40px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  color: #fff;
  transition: 0.5s;
  transition-property: background;
}

.logout_btn:hover{
  background: #0B87A6;
}
/* sidebar */
.sidebar {
  background: #2f323a;
  margin-top: 70px;
  padding-top: 30px;
  position: fixed;
  left: 0;
  width: 250px;
  height: 100%;
  transition: 0.5s;
  transition-property: left;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.8);
}

.sidebar .profile_image{
  width: 130px;
  height: 130px;
  border-radius: 100px;
  margin-top: 5px;
  margin-bottom: 25px;
}

.prof{
  color: #fff;
  margin-top: 0;
  padding: 5px 0 5px 0;
  margin-right: 45px;
  margin-bottom: 20px;
}

.sidebar a{
  color: #fff;
  display: block;
  width: 100%;
  line-height: 60px;
  text-decoration: none;
  padding-left: 40px;
  box-sizing: border-box;
  transition: 0.5s;
  transition-property: background;
}

.sidebar a:hover{
  background: rgba(0, 255, 0, 0.5);
}

.sidebar i{
  padding-right: 10px;

}

label #sidebar_btn{
  z-index: 1;
  color: #fff;
  position: fixed;
  cursor: pointer;
  left: 300px;
  font-size: 20px;
  margin: 5px 0;
  transition: 0.5s;
  transition-property: color;
}

label #sidebar_btn:hover{
  color:  rgba(0, 255, 0, 0.3);
}

#check:checked ~ .sidebar{
  left: -190px;
}

#check:checked ~ .sidebar a span{
  display: none;
}

#check:checked ~ .sidebar a{
  font-size: 20px;
  margin-left: 170px;
  width: 80px;
}
.content{
  margin-left: 260px;
  padding-top: 90px;
  transition: 0.5s;
}
#check:checked ~ .content{
  margin-left: 60px;
}
#check{
  display: none;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
