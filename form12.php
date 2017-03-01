<?php

$name=$_POST['fname'];
$add=$_POST['address'];
$nationality=$_POST['nationality'];
$DOB=$_POST['DOB'];
$email=$_POST['email'];
$number=$_POST['phoneno'];
$companyname=$_POST['companyname'];
$jobtitle=$_POST['jobtitle'];
$country=$_POST['country'];
$monthjoining=$_POST['monthjoining'];
$monthending=$_POST['monthending'];
$sname=$_POST['sname'];
$number1=$_POST['number1'];
$pyear=$_POST['pyear'];
$cname=$_POST['cname'];
$number2=$_POST['number_2'];
$pyear1=$_POST['pyear1'];
$graduation=$_POST['graduation'];
$Agg=$_POST['Agg'];
$gpYear=$_POST['gpYear'];
$obj=$_POST['Objectives'];
$skill=$_POST['skill'];
$projects=$_POST['project'];


?>
<html>
    <style>
    .body
        {
            font-family: ubuntu;
        }
    .shot
        {
            margin-left: 50px;
        }
    .container 
        {
      width:800px;
      margin:0 auto 0 auto;
      padding:40px;
      border:5px solid #cccccc;
      background:#ffffff; 
        }
        
    </style>
  <body>
      <div class="container">
      <div class="body">
    <center><h1>Resume</h1></center>
    <center><h2><?php echo"$name"; ?></h2></center>
   <?php if($obj ==!NULL)
          {
          echo "<h3>Objective:</h3>";
          echo "<div class='shot'>$obj<br></div>"; 
          }
   ?>
      
         
    <?php 
      if($sname==!NULL)
      {
        echo"<h3>Education:</h3>";
        echo"<div class='shot'>
              <font size=4px><b>School:</b><br></font>
                      $sname<br>";
                      echo"SSC%:&nbsp;$number1%<br>";
                      echo "Passing year:&nbsp;$pyear<br><br>";
        echo" <font size=4px><b>Jr.College:</b><br></font>
                       $cname<br>";
                       echo "HSC%:&nbsp;$number2%<br>";
                       echo "Passing year:&nbsp;$number2<br><BR>";
      }
      ?>
                        
              <?php if($graduation ==!NULL)
                {
            echo"<font size=4px><b>Graduation</b><br></font>";
            echo "$graduation<br>";
            echo "Aggrigate:&nbsp;$Agg<br>";
            echo "Passing year:&nbsp;$gpYear<br>";
                }
              else
              {
              }
              ?>
          </div>
    
    <?php
        if($companyname ==!NULL)
        {
    echo"<h3>Internship Highlights :</h3>";
    echo"<div class='shot'><h3>Company :</h3><font size=4px;><b>$companyname</b><br></font>";
    echo"Job Title:&nbsp;$jobtitle<br>";
    echo"Country:&nbsp;$country<br>";
    echo"Month of Joining:&nbsp;$monthjoining<br>";
    echo"Month of Ending:&nbsp;$monthending<br>"; 
        }
    ?>
      </div>  
    
    <?php 
      if ($skill==!NULL)
      {
    echo"<h3>Skills and ability :</h3>";
     echo "<div class='shot'>$skill<br></div>";
      }
      ?>
      
      <?php 
      if ($projects==!NULL)
      {
    echo"<h3>Projects :</h3>";
     echo "<div class='shot'>$projects<br></div>";
      }
      ?>
      
      <?php 
      if ($add==!NULL)
      {
    echo"<h3>Personal Information :</h3>";
    echo "<div class='shot'>Name : $name<br></div>";
    echo "<div class='shot'>Address : $add<br></div>";   echo "<div class='shot'>Nationality : $nationality<br></div>";
    echo "<div class='shot'>Date Of Birth : $DOB<br></div>"; 
    echo "<div class='shot'>Email-Id : $email<br></div>"; 
    echo "<div class='shot'>Contact No. : $number<br></div>";      
      }
      ?>
      
      
    </div>

    
</div>
          </div>
</div>
    </body>
</html>
