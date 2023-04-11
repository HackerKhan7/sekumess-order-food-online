<?php
session_start();
?>

<html>

  <head>
    <title> About | Seku Mess' </title>
<style>
div.mess {
    background-color:green;
    color:white;
    margin:10px;
    padding:20px;
}
    body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 28%;
  margin-bottom: 8px;
  padding: 12px 16px;
}

.card {
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
  margin: 6px;
}

.about-section {
  padding: 5px;
  text-align: center;
  background-color: green;
  color: white;
}

.container {
  padding: 6px 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
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
<div class="about-section">
    <h1>About Us</h1>
    <h3>Welcome <font color="blue"><strong>Seku Mess</strong></font></h3>
</div>
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
            <li class="active"><a href="aboutus.php">About</a></li>
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

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>

    <div class="wide">
        <div class="tagline">It's not our <font color="red"><strong>work life</strong></font>, it's our <font color="green"><strong><em>life's work</em>.</strong>
            <div class="tagline">The <font color="red"><strong>Designers</strong></font>, Seku <font color="green"><strong><em>Mess Services</em>.</strong>
    </div>
            </div>
                </font>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/w3images/team1.jpg" alt="Willy" style="width:100%">
      <div class="container">
        <h2>Willy Musyoka</h2>
        <p class="title">DataBase Administrator $ software Engineer</p>
        <p>undergraduate SEKU.</p>
        <p>Williammusyoka09@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team2.jpg" alt="Dorcas" style="width:100%">
      <div class="container">
        <h2>Jeptepkeny Dorcas</h2>
        <p class="title">System Analyst and Comp. Expert</p>
        <p>undergraduate SEKU.</p>
        <p>dorcasJeptepkeny@gmail.com</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="Kaloki" style="width:100%">
      <div class="container">
        <h2>Kaloki ken</h2>
        <p class="title">DataBase Admin</p>
        <p>undergraduate SEKU.</p>
        <p>kaloki@gmail.com</p>
      </div>
    </div>
  </div>
    
    <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="phillip" style="width:60%">
      <div class="container">
        <h2>Phillip mutua</h2>
        <p class="title">Designer</p>
        <p>undergraduate SEKU.</p>
        <p>phillip@gmail.com</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="joshua" style="width:100%">
      <div class="container">
        <h2>joshua nyamache</h2>
        <p class="title">web-developer</p>
        <p>undergraduate SEKU.</p>
        <p>joshnyamache@gmail.com</p>
      </div>
    </div>
  </div>
</div>
         </body>
</html>