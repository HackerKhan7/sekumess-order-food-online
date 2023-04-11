<?php
session_start();
?>

<html>

  <head>
    <title> Home | Seku Mess' </title>
      <style>
    * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1200px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  erw3jotransition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2.5s;
  animation-name: fade;
  animation-duration: 2.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 800px) {
  .text {font-size: 11px}
}

#header {
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:800px;
    width:200px;
    float:left;
    padding:5px;	      
}
#section {
    width:1000px;
    float:left;
    padding:10px;	 	 
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:10px;	 	 
}
ul#menu {
    padding: 90;
}

ul#menu li {
    display: inline;
}

ul#menu li a {
    background-color: greenyellow;
    color: black;
    padding: 20px 40px;
    text-decoration: none;
    border-radius: 10px 10px 0 0;
}

ul#menu li a:hover {
    background-color: orange;
}
    .column {
  float: right;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}
</style>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">

  <body>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Seku Mess'</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
              <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>
       </div>

      </div>
    </nav>
<h1 style =color:green;>WELCOME TO SEKU MESS SERVICES</h1><br>
    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"><img src="images/Sekulogo.png"></div><br>
        <div class="col-xs-5 line"><hr></div><br><br>
        <div class="tagline">Good Food is Good Mood</div>
        <div>
         <h2>Feeling Hungry?</h2>
        <P>click order now to order food</P>
        <a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a>
      
<div id="section">
<h2 style="color:black;">KITCHEN A</h2>
<p style="color:green;">It is located between Turkana hostel and Yatta hostels. It is opened for 12hours a day.</p>
<h2 style="color:black;">TURKWEL MESS</h2>
<p style="color:green;">It is located between Elementaita hostel and catholic church.It is found within the Turkwel building on the ground floor.It is opened as follows:</p>
<li style="color:black;">Morning hours from 6:00am to  8:30am</li>
<li style="color:black;">lunch hours from 12.00noon to 2:00pm</li>
<li style="color:black;">supper is served as from 6:00pm to 8:00pm</li>
<h2  style="color:black;">VICTORIA MESS</h2>
<p  style="color:green;">It is located near Graduation Square and found within the Victoria building on the ground floor.It is opened as follows:</p>
     <div class="column">
      <img src="images/victoria3.jpg" style="width:100%">
    </div>
<li  style="color:black;">Morning hours from 6:00am to  8:30am</li>
<li  style="color:black;">lunch hours from 12.00noon to 2:00pm</li>
<li  style="color:black;">supper is served as from 6:00pm to 8:00pm</li>
    <p style="color:green;">The following foods are available at all seku messes</p>
<ul style="color:black;"><li>Black tea</li>
	<li>Tea</li>
	<li>Chapati</li>
	<li>Mandazi</li>
	<li>Githeri</li>
	<li>Rice</li>
	<li>Beans</li>
	<li>Ndegu</li>
	<li>Beef stew</li>
	<li>Ugali</li>
	<li>Cabbage</li>
	<li>Sukuma wiki</li>
    <li>Eggs</li></ul>
    <p style="color:black;"><a  style="color:blue;" href="customerlogin.php">click here</a> to order food</p>
</div>
            </div>
</body>
</html>