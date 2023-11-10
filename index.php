<?php
include('shared/connection.php');
?>
<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="images/icon.ico">
    <title>  K.T.U Student Clearance Portal | Welcome </title>
    
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="js/validation.js"></script> 
</head>
<header id="main-header">
    <div class="container1">
        <img src="images/ktu_logo.png">
        <h1 style="font-size:40px"> K.T.University Clearance Portal</h1>
    </div>
</header>

<nav id="navbar">
    <div class="container">
    <li><a href="index1.php">Home</a></li>
              <!--<li><a href="products.php">Products</a></li>-->
              <li><a>Services</a>
                <ul>
                  
                  <li><a href="library.php">Library</a> 
                  <ul>
                      <li><a href="library_records.php">Library Records</a></li>
                     <!-- <li><a>Service 1 B</a></li>-->
                    </ul></li>
                  <li><a href="sports.php">Sports</a>
                  <ul>
                      <li><a href="sports_records.php">Sports Records</a></li>
                     <!-- <li><a>Service 1 B</a></li>-->
                    </ul>
                </li>
                </ul>
              </li>
              <li><a href="about.php">About</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="registrationform.php">Registrationform</a>
              <li><a href="contacts.php">Contacts</a>

                <ul>
                  
                  <li><a href="hod.php">H.O.D</a> 
                  <ul>
                      <li><a href="hod_login.php">H.O.D_login</a></li>
                      <li><a href="hod_logout.php">H.O.D_log-Out</a></li>
                      <li><a href="hod_server.php">H.O.D_Server</a></li>
                    </ul>
                </li>

                <li><a href="supervisor_dashboard.php">Supervisor</a> 
                  <ul>
                      <li><a href="supervisor_login.php">Supervisor_login</a></li>
                      <li><a href="supervisor_logout.php">Supervisor_log-Out</a></li>
                      <li><a href="supervisor_server.php">Supervisor_Server</a></li>
                    </ul>
                </li>

                <li><a href="account.php">Accountant</a> 
                  <ul>
                      <li><a href="account_records.php">Account_Records</a></li>
                     
                    </ul>
                </li>

                <li><a href="staff.php">Staff</a> 
                </li>
                  
                </li>
    </div>
</nav>
<div class="container" style="background-color: white">
    <section id="showcase">
        <div class="container">
            <img src="images/sk.jpg " style="width: 100%; height: 60%">
                <!--<p> Flexible Clearance Web Portal <br>Technology has come to stay with us with accompanying ramifications and mixed blessings.
                    <br>The influence of current and future Information Technology and their applications is beyond human imaginations. </p>
        -->
        </div>
    </section>
</div>

<div class="container">
    <footer id="main-footer">
        <p> Copyright &copy; 2018 KTU Clearance</p>
    </footer>
</div>
<style>
    body{
        background:white;
        color:#555;
        font-family:Arial, Helvetica,sans-serif;
        font-size:16px;
        line-height:1.6em;
        margin:0;
        overflow: hidden;

    }

    .container{
        width:80%;
        margin:auto;
        overflow:hidden;
        text-align: right; 
    }
    #main-header{

        background-color: rgb(7,133,191);
        color:white;
        box-sizing: border-box;


    }
    #main-header h1{

        position:relative;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

    }
    #navbar{
        background-color: #fff;
        color:#fff;
    }
    #navbar ul{
        padding:0;
        list-style: none;
    }
    #navbar li{
        display:inline;
    }
    #navbar a{
        color: black;
        text-decoration: none;
        font-size:18px;
        padding:5px;
    }

    #navbar a:hover{
        background-color: #ff2fb3;


    }
    #showcase {
        /*background-color: rgba(224, 230, 255, 0.89);*/
        /*min-height:380px;*/



    }
    #showcase p{
        color: #010101;
        line-height:2em;
        font-size: 22px;
        padding-top: 80px;
    }


    #main-footer{
        background: rgb(7,133,191);
        color:#fff;
        text-align: center;
        padding:5px;
        margin-top:0px;
    }
    @media(max-width:600px){
        #main{
            width:100%;
            float:none;
        }


    }
</style>
</body>
</html>

