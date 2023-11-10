<!-- Application form -->
<?php
include("connection.php");
//include("display.php");

?>
<!Doctype html>
<html lang="en">
    <head>
        <title> </title>
        <link rel="stylesheet" href="formstyle.css">
        
    </head>
    <body>
<div>
<h2>Step 1: Your details</h2>
<form action="database.php" method="post" autocomplete="off" onsubmit="return validation()">
<p>
    <label>Full Name</label><br>
    <input type="text" id="fullname" name="fullname" required>
   <br> <span id="fullnames"></span><br>
</p>
<p>
    <label>Last Name</label><br>
    <input type="text" id="fullname" name="fullname" required>
   <br> <span id="fullnames"></span><br>
</p>
<p>
    <label>Contact Number</label><br>
   <!--  <span>Please enter Contact number</span>-->
     <input type="number" id="ph" name="ph" required maxlength="10">
     <br><span id="phs"></span><br>

</p>
<p>
    <label>Email Id</label><br>
    <!-- <span>Please Enter Email Id</span>-->
     <input type="text" id="em" name="em" required>
     <br> <span id="ems"></span><br>

</p>
<h2>Step 2: Card details</h2>
<p>
<label>Card type</label><br>
<input type="radio" id="cd1" name="cd" value="Visa">Visa
<br><span id="cd1s"></span><br>
<input type="radio" id="cd2" name="cd" value="Rupay">Rupay
<br><span id="cd2s"></span><br>
<input type="radio" id="cd3" name="cd" value="Master Card">Master Card
<br><span id="cd3s"></span><br>

</p>
<p>
    <label>Card Number</label><br>
   <!--  <span>Please Enter Card Number</span>-->
     <input type="number" id="cn" name="cn" required maxlength="16">
     <br> <span id="cns"></span><br>

</p>
<p>
    <label>Security Code</label><br>
    <!-- <span>Please Enter Security Code</span>-->
     <input type="" id="sc" name="sc" required maxlength="3">
     <br> <span id="scs"></span><br>

</p>
<p>
    <label>Name On Card</label><br>
    <!-- <span>Please Enter Name On Card</span>-->
     <input type="text" id="noc" name="noc" required >
     <br> <span id="nocs"></span><br>

</p>
<p>
    <input type="checkbox" id="terms" name="terms" value="true">
    <label>I Accepted Terms & Condition</label>
</p>
<p align="center" style="color: blue;">
    <input type="submit" onclick="validation()" name="submit"></input>
</p>
</form>
</div>
    </body>
    <script type="text/javascript">
        function validation(){
           // alert("Form Submitted Successfully");
              var fullname=document.getElementById('fullname').value;
              var ph=document.getElementById('ph').value;
              var em=document.getElementById('em').value;
              var cd1=document.getElementById('cd1').value;
              var cd2=document.getElementById('cd2').value;
              var cd3=document.getElementById('cd3').value;
              var cn=document.getElementById('cn').value;
              var sc=document.getElementById('sc').value;
              var noc=document.getElementById('noc').value;

              if(fullname=="")
              {
              document.getElementById('fullnames').innerHTML="Please enter full name";
              //return false;
              }
              else
              {
                document.getElementById('fullnames').innerHTML="";

              }
            //return false;
              
              if(ph=="")
              {
              document.getElementById('phs').innerHTML="Please enter valid number";
             // return false;
              }
              else
              {
                document.getElementById('fullnames').innerHTML="";

              }
              if(ph.length<10)
              {
                document.getElementById('phs').innerHTML="Please enter valid number";
              }
              else
              {
                document.getElementById('fullnames').innerHTML="";

              }
              if(em=="")
              {
              document.getElementById('ems').innerHTML="Please enter email";
              //return false;
              }
              else
              {
                document.getElementById('fullnames').innerHTML="";

              }
              if(em=="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/")
              {
                document.getElementById('ems').innerHTML="Please enter email";
              }
              else
              {
                document.getElementById('fullnames').innerHTML="";

              }
              if(cd1=="")
              {
              document.getElementById('cd1s').innerHTML="Please select";
              }
              else
              {
                document.getElementById('fullnames').innerHTML="";

              }
              
              if(cd2=="")
              {
              document.getElementById('cd2s').innerHTML="Please select";
              }
              else
              {
                document.getElementById('fullnames').innerHTML="";

              }
              if(cd3=="")
              {
              document.getElementById('cd3s').innerHTML="Please select ";
              }
              else
              {
                document.getElementById('fullnames').innerHTML="";

              } 
              if(cn=="")
              {
              document.getElementById('cns').innerHTML="Please enter card number";
              }
              else
              {
                document.getElementById('fullnames').innerHTML="";

              }
              if(sc=="")
              {
              document.getElementById('scs').innerHTML="Please enter security code";
              }
              else
              {
                document.getElementById('fullnames').innerHTML="";

              }
              if(noc=="")
              {
              document.getElementById('nocs').innerHTML="Please enter name on card";
              }
              else
              {
                document.getElementById('fullnames').innerHTML="";

              }
        }
    </script>
</html>