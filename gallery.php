<?php
session_start();
?>

<html>

  <head>
     <title>SEKU MESS</title>
    <h1>All images of seku mess</h1>
<style>
#header {
    background-color:green;
    color:white;
    text-align:center;
    padding:5px;
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:15px;	 	 
}
.header {
  text-align: center;
  padding: 32px;
}
.Gallery_Upload {
  background-color:whitesmoke;
  padding: 10px 80px 60px;
  margin: 10px 0px 60px;
  border: 4px solid black;
  opacity:0.9;
} 
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
video {
    max-width: 100%;
    height: auto;
}
</style>

  <link rel="stylesheet" type = "text/css" href ="css/contactus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

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
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li class="active"><a href="contactus.php">Contact Us</a></li>
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
              
            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>
    <br>

<body>

<div id="header">
<h1>seku mess gallery</h1>
</div>

<div id="section">
<h2>All messes at SEKU</h2>
<p>All the seku messes are situated within seku.</p>
    <p>we have <span style="color: green">KITCHEN A MESS</span> situated within the seku yatta hostels.</p>
     <p>we have <span style="color: green">TURKEL MESS</span> situated within the seku turkwel hostel.</p>
<p>we have <span style="color: green">VICTORIA MESS</span> situated within the seku victoria hostel.</p>
    <!-- Photo Grid -->
    <div class="img">
  <a target="_blank" href="images/victoria4.jpg">
    <img src="images/victoria4.jpg" alt="victoria4" width="300" height="200">
  </a>
  <div class="desc">this is victoria</div>
</div>
<div class="img">
  <a target="_blank" href="images/victoria10.jpg">
    <img src="images/victoria10.jpg" alt="victoria10" width="300" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="img">
  <a target="_blank" href="images/victoria10.jpg">
    <img src="images/victoria10.jpg" alt="victoria10" width="300" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="img">
  <a target="_blank" href="images/victoria14.jpg">
    <img src="images/victoria14.jpg" alt="victoria14" width="300" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
<div class="img">
  <a target="_blank" href="images/victoria10.jpg">
    <img src="images/victoria10.jpg" alt="victoria10" width="300" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
<div class="img">
  <a target="_blank" href="images/victoria10.jpg">
    <img src="images/victoria10.jpg" alt="victoria10" width="300" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
<div class="img">
  <a target="_blank" href="images/victoria10.jpg">
    <img src="images/victoria10.jpg" alt="victoria10" width="300" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="img">
  <a target="_blank" href="images/victoria14.jpg">
    <img src="images/victoria14.jpg" alt="victoria14" width="300" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
<div class="video">
<video width="400" controls>
  <source src="mov_bbb.mp4" type="video/mp4">
  <source src="mov_bbb.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
</div>
        
<div class="Gallery_Upload">
    <form  action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
        <input type="text" name="filename" placeholder="file name..."><br>
         <input type="text" name="filetitle" placeholder="image title..."><br>
        <input type="text" name="filedesc" placeholder="image description..."><br>
         <input type="file" name="file">
        <button type="Submit" name="Submit">UPLOAD</button>
    </form>
    </div>
  