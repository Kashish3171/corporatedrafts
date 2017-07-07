<?php
    $count_file = 'counter.txt';
    $ip_file = 'ip.txt';
    
    if(!file_exists($count_file)){ fopen($count_file, 'w'); }
    if(!file_exists($ip_file)){ fopen($ip_file, 'w'); }
    
    function counto(){
        global $count_file, $ip_file;
        $ip = $_SERVER['REMOTE_ADDR'];
        
        if(!in_array($ip, file($ip_file, FILE_IGNORE_NEW_LINES))){
            $hit = (file_exists($count_file)) ? file_get_contents($count_file) : 0;
            
            file_put_contents($ip_file, $ip."\n", FILE_APPEND);
            file_put_contents($count_file, ++$hit);
        }
    }
    
    counto();
?>
<?php

$imp="";
if(isset($_POST['name']))
{
  
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['mnumber'];
  $state=$_POST['state'];
  $query=$_POST['query'];

  if(empty($name) || strlen($name)>45)
    {
      
      $imp="Invalid Name. Name can not be empty and maximum fifteen characters are allowed";
      
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
     {
              $imp="Invalid Email Address.";
              
     }

     else if(strlen($number)!=10)
     {
              $imp="Invalid Mobile Number. Mobile number can have text character and length must be ten digits.";
              
     }
     else if(strlen($query)<10 || strlen($query)>500)
     {
 
      $imp="Invalid Query. Minium number of characters allowed are 10. Maximum number of characters allowed are 500.";
    
     }

  else{

      $connect=mysqli_connect('localhost','solfacin_kashish','184171AS','solfacin_cd');
      if(mysqli_connect_errno($connect))
      {  
      header("location:bad-request/");
      }
      mysqli_query($connect,"INSERT INTO contactus(name,email,mnumber,state,query) VALUES('$name','$email','$number','$state','$query')");

      $to = "nbfcdoctor@gmail.com"; 
  
    
      $subject = "CONTACT US FORM";
      $subject2 = "Copy of your form submission";

      $message = "A user filled the following contact us form at corporatedrafts.com"."\n\n"."Name:" ." ". $name .".". "\n\n " ."Email:"." ".$email."."."\n\n "."Mobile No.:"." ".$number. "."."\n\n " . "State:"." ". $state."."."\n\n ". "User's Query:"." ".$query.".";
    
    

       $message2 = "Thank you for contacting us. We will get back to you as soon as possible. Here's a copy of the form you submitted."."\n\n"."Name:" ." ". $name .".". "\n\n " ."Email:"." ".$email."."."\n\n "."Mobile No.:"." ".$number. "."."\n\n " . "State:"." ". $state."."."\n\n". 
        "Your Query:"." ".$query."."."\n\n"."\n\n"."\n\n"."You received this email in response of the form you submitted at www.corporatedrafts.com."."\n\n"."For any doubts or queries you can write to us at helpcorporatedrafts@gmail.com" ."\n\n"."You can also give us a call at 09953138698.";
     
      $headers = "From:CorporateDrafts";
      $headers2 = "From:CorporateDrafts";

     if( mail($to,$subject,$message,$headers) && mail($email,$subject2,$message2,$headers2) )
      {
       header('location:thank-you/');
       }
     else{
         
        header('location:bad-request/');
        }
    }
  }


?>
<?php
if(isset($_POST['subemail']) && !empty($_POST['subemail']))
{
    $subemail=$_POST['subemail'];
    if (!filter_var($subemail, FILTER_VALIDATE_EMAIL))
     {
            $imp="Invalid Email Address";
     }


  else{
  $connect=mysqli_connect('localhost','solfacin_kashish','184171AS','solfacin_cd');
  if(mysqli_connect_errno($connect))
  {
    header("location:bad-request/");
  }
  
  mysqli_query($connect,"INSERT INTO subscription(subemail) VALUES('$subemail')");

   $to = "nbfcdoctor@gmail.com"; 
  
    
    $subject = "SUBSCRIPTION FORM";
    $subject2 = "Successfully Subscribed";

    $message = "A user filled the following subscription form at corporatedrafts.com"."\n\n"."Email:"." ".$subemail.".";
    
    

    $message2 = "You have successfully subscribed with us. Thank you for subscribing with us. We will keep you updated as much as possible.". "\n\n"."\n\n"."\n\n"."You received this email in response of the form you submitted at www.corporatedrafts.com."."\n\n"."For any doubts or queries you can write to us at helpcorporatedrafts@gmail.com" ."\n\n"."You can also give us a call at 09953138698.";
     
    $headers = "From:CorporateDrafts";
    $headers2 = "From:CorporateDrafts";
    
    if( mail($to,$subject,$message,$headers) && mail($subemail,$subject2,$message2,$headers2) )
    {
      
      $imp="You have successfuly subscribed to our updates.";
     
    }
    else{
      $imp="";
    header("location:bad-request/");
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
  <link rel="icon" href="images/logotd2.ico">
  <title>CorporateDrafts|We help you grow</title>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Cabin Sketch' rel='stylesheet'>
<link href="https://file.myfontastic.com/ttfHDvcZkwkELuDBjAqpHQ/icons.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.1.2/jquery.flip.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen and (max-width: 767px)"   href="css/style1.css">

  <link rel="stylesheet" type="text/css" media="screen and (min-width:768px) and (max-width:991px)"   href="css/style2.css">

  <link rel="stylesheet" type="text/css" media="screen and (min-width:992px) and (max-width:1199px)"   href="css/style4.css">

  <link rel="stylesheet" type="text/css" media="screen and (min-width:1200px)"   href="css/style3.css">

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>-->
<style type="text/css">
  body,html{
    width: 100%;
  }
</style>
<meta name="keywords" content="corporate drafts, corporate,private limited company, one person company, public limited company,limited liability partnership, Proprietorship registering, Partnership Registration, Section 8 Company, name change company,
address change company, directors partners change,Authorized share capital increase, change moa aoa, fast track exit, income tax returns, tds returns, vat sales tax returns, service tax returns, excise returns, gst compliances, gst Migration, next nbfc compliances, companies act documents, securities law documents, income tax documents, foreign exchange management, trademark documents, copyright documents, micro small medium enterprises, pf and esi registering , pollution licenses, import export code, copyright registration, trademark registration, patent registration, iso registration, past year papers, diagrams, study material, rtp,training, coaching,ca,cma,cs">
<meta name="description" content="CorporateDrafts information and services corporatedrafts offer">
<meta name="author" content="Kashish Goyal">
<style type="text/css">.gst {
       position: absolute;
    top: 50%;
    /* background-color: rgba(0, 150, 136, 0.69); */
    padding: 20px 0px;
    height: 200px;
    text-align: center;
    font-family: Cabin Sketch;
    font-size: 30px;
    color: white;
    left: 3%;
    width: 500px;
}
.countdown{
      padding: 30px 30px;
    margin-left: 60px;
}

.countdown li {
    float: left;
    height: 70px;
    border-radius: 50%;
    margin-right: 20px;
    background-color: #fcffff;
    color: #E91E63;
    /* text-align: center; */
    display: flex;
    align-items: center;
    justify-content: center;
    /* padding: 5px; */
    /* font-family: verdana; */
    width: 70px;
    border: 2px solid white
}
#countdown1:after{
  content: 'Days';content: 'Days';
    /* background-color: white; */
    color: #fbfcfc;
    position: absolute;
    top: 85%;
    /* margin-right: 30px; */
    padding: 0px 10px;
    font-size: 20px;
}
#countdown2:after{
  content: 'Hours';
    /* background-color: white; */
    color: #fbfcfc;
    position: absolute;
    top: 85%;
    /* margin-right: 30px; */
    padding: 0px 10px;
    font-size: 20px;
}
#countdown3:after{
  content: 'Minutes';
    /* background-color: white; */
    color: #fbfcfc;
    position: absolute;
    top: 85%;
    /* margin-right: 30px; */
    padding: 0px 10px;
    font-size: 20px;
}
#countdown4:after{
  content: 'Seconds';
    /* background-color: white; */
    color: #fbfcfc;
    position: absolute;
    top: 85%;
    /* margin-right: 30px; */
    padding: 0px 10px;
    font-size: 20px;
}
legend.fieldBorder{
       
    font-size: 35px !important;
    font-weight: bold !important;
    text-align: left !important;
    width: auto;
    padding: 0 10px;
    border-bottom: none;
    margin-bottom: 0 !important;
    color: #E91E63;
  }
  fieldset.fieldBorder{
     padding: 15px;
    -webkit-box-shadow: 0px 0px 0px 0px #000;
    box-shadow: 0px 0px 0px 0px #000;
    border-radius: 6px;
    position: relative;
    color: white;
    float: none;box-shadow: 2px 3px 13px 1px rgba(158, 158, 158, 0.08);
  }
  fieldset{
    
    border: 1px solid #cccccc;
    margin: 15px 0 15px 0;
  }
  .gstend{
    display: none; position: absolute;
    top: 50%;
    /* background-color: rgba(0, 150, 136, 0.69); */
    padding: 20px 0px;
    height: 200px;
    text-align: center;
    font-family: Cabin Sketch;
    font-size: 30px;
    color: white !important;
    left: 3%;
    width: 500px;

  }
@media screen and (max-width: 991px)
{
  .gst{
    display: none;

  }
}

</style>
</head>
<body >
<?php 
if(!empty($imp))
{
    echo '<script language="javascript">';
    echo 'alert("';
    echo $imp;
    echo '")';
    echo '</script>';
}              
?>
<div class="mask"></div>
<div class="mask1">
<!--NAVIGATION BAR-->
   <header>

  
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        
          <button type="button" class="navbar-toggle" data-target="#myNav" data-toggle="collapse">
          <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
              </button> 
            <div class="collapse navbar-collapse " id="myNav">
          <ul class="nav navbar-nav nav1">
            <li class="d1f"><a href="">HOME</a></li>
              <li class="dropdown d1f">
        
                <a class="dropdown-toggle" data-toggle="dropdown">START BUSINESS</a>
                  <ul class="dropdown-menu dm1">
                
                     <img src="images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">START BUSINESS</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="start-business/private-limited-company" class="dnav">Private Limited Company</a></li>
                     

<li><span class="glyphicon glyphicon-hand-right"></span> <a href="start-business/one-person-company" class="dnav">One Person Company</a></li>
                     

<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="start-business/public-limited-company" class="dnav">Public Limited Company</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="start-business/limited-liability-partnership" class="dnav">Limited Liability Partnership </a></li> 
                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="start-business/Proprietorship-registration" class="dnav">Proprietorship Registration</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="start-business/Partnership-Registration" class="dnav">Partnership Registration</a></li>  
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="start-business/Section-8-Company" class="dnav">Section 8 Company Registartion</a></li>
                      
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
                  </ul>
        
              </li>   

        <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown" >MANAGE BUSINESS</a>
            <ul class="dropdown-menu dm2" style="">
             <img src="images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">MANAGE BUSINESS</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="manage-business/name-change-company" class="dnav">Name Change Of Company</a></li>
                     

<li><span class="glyphicon glyphicon-hand-right"></span> <a href="manage-business/address-change-company" class="dnav">Address Change Of Company</a></li>
                     


                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="manage-business/directors-partners-change" class="dnav">Directors Partners Change</a></li> 
                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="manage-business/Authorized-share-capital-increase" class="dnav">Authorised Share Capital Increase</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="manage-business/change-moa-aoa" class="dnav">Change in Moa and Aoa</a></li>  
                       <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="manage-business/fast-track-exit" class="dnav">Fast Track Exit</a></li>  
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
          
            </ul>
        
        </li>

            <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown" >COMPLIANCES</a>
            <ul class="dropdown-menu dm3" style="">
             <img src="images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">COMPLIANCES</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="compliances/income-tax-returns" class="dnav">Income Tax Returns</a></li>
                     

<li><span class="glyphicon glyphicon-hand-right"></span> <a href="compliances/tds-returns" class="dnav">TDS Returns</a></li>
                     

<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="compliances/vat-sales-tax-returns" class="dnav">VAT Sales Tax Returns</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="compliances/service-tax-returns" class="dnav">Service Tax Returns</a></li> 

                      
                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="compliances/excise-returns" class="dnav">Excise Returns</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="compliances/gst-compliances" class="dnav">GST Compliances</a></li>  
                      
                      
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="compliances/gst-migration" class="dnav">GST Migration</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="compliances/next-nbfc-compliances" class="dnav">Next NBFC Compliance</a></li> 
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
            
            </ul>
        
        </li>

            <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown" >DOWNLOADS</a>
            <ul class="dropdown-menu dm4" style="">
            <img src="images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">DOWNLOADS</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="downloads/companies-act-documents" class="dnav">Companies Act Documents</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="downloads/securities-law-documents" class="dnav">Securities Law Documents </a></li>
                     

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="downloads/income-tax-documents" class="dnav">Income tax Documents</a></li> 
                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="downloads/foreign-exchange-management" class="dnav">Foreign Exchange Management</a></li>  
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="downloads/trademark-documents" class="dnav">Trademark Documents</a></li>
                      
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="downloads/copyright-documents" class="dnav">Copyright Document</a></li>
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
          
            </ul>
        
        </li>

    
         
            

        <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown">GOVT. LICENSING</a>
            <ul class="dropdown-menu dm5" style="">
              <img src="images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links1">

                      <div class="divd1header1" ><span class="d1Header">GOVT. LICENSING</span></div>
                      <ul class="d1Links1">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="government-licensing/micro-small-medium-enterprises" class="dnav">Micro Small And Medium Enterprises</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="government-licensing/pf-esi-registration" class="dnav">PF And Esi Registration</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="government-licensing/pollution-licenses" class="dnav">Pollution Licenses</a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="government-licensing/import-export-code" class="dnav">Import Export Code</a></li> 
                      </ul> 
                     </div>
                         <div class="links2">

                      <div class="divd1header1" ><span class="d1Header">PROTECT BUSINESS</span></div>
                         <ul class="d1Links1">

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="government-licensing/protect-business/copyright-registration" class="dnav">Copyright Registration</a></li>  
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="government-licensing/protect-business/trademark-registration" class="dnav">Trademark Registration</a></li>
                      
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="government-licensing/protect-business/patent-registration" class="dnav">Patent Registration</a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="government-licensing/protect-business/iso-registration" class="dnav">ISO Registration</a></li>
                    </ul></div>
                    </div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
          
           
            </ul>
        
        </li>
          <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown" >STUDENTS</a>
            <ul class="dropdown-menu dm6" style="">
                  <img src="images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links11">

                      <div class="divd1header2" ><span class="d1Header">CA</span></div>
                      <ul class="d1Links22">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="students/ca/past-year-papers" class="dnav">Past Year Papers</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="students/ca/diagrams" class="dnav">Diagrams </a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="students/ca/study-material" class="dnav">Study Material</a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="students/ca/rtp" class="dnav">RTP</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="students/ca/training" class="dnav">Training</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="students/ca/coaching" class="dnav">Coaching</a></li> 
                      </ul> 
                     </div>
                         <div class="links11">

                      <div class="divd1header2" ><span class="d1Header">CS</span></div>
                         <ul class="d1Links22">
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="students/csa/past-year-papers" class="dnav">Past Year Papers</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="students/csa/diagrams" class="dnav">Diagrams</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="students/csa/study-module" class="dnav">Study Module</a></li>


                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="students/csa/training" class="dnav">Training</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="students/csa/coaching" class="dnav">Coaching</a></li> 
                    </ul></div>
                    <div class="links11">

                      <div class="divd1header2" ><span class="d1Header">CMA</span></div>
                      <ul class="d1Links22">
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="students/cma/past-year-papers" class="dnav">Past Year Papers</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="students/cma/diagrams" class="dnav">Diagrams </a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="students/cma/study-module" class="dnav">Study Module</a></li>


                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="students/cma/training" class="dnav">Training</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="students/cma/coaching" class="dnav">Coaching</a></li> 
                     </div>
                    </div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
          
<!--
              <span class="d1Header">STUDENTS</span>
              <img src="images/d1-4.jpg" class="d1">
              <ul class="d1Links">
            
              <li><a href="#" class="dnav">CA</a></li>
              <li><a href="#" class="dnav">CS</a></li>
              <li><a href="#" class="dnav">CMA</a></li>
              
              </ul>-->
            </ul>
        
        </li>

        <li class="d1f"><a href="contact">CONTACT US</a></li>
      </ul>
      <!--
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
      </ul>-->
        </div></div></nav></header>

        
        <!--NAVIGATION BAR-->
      

  
<!--content LEVEL-1-->

    <section class="d2">
      <video autoplay loop  class="d2">
         <source src="videos/sl.mp4" type="video/mp4">
         <img src="images/d2mob.jpg" alt="Image Here">
         </video>


     
      <div class="t"> 
      <span class="slidet">Hey, We Are</span><br>
      <span class="slidet1">Corporate Drafts</span><br>
      <span class="slidet">serving thousands of growing business</span><br><br><br>
      </div>
      <div class="gst">
        <span>GST launching in India in</span><br>
        <ul class="countdown">
          <li id="countdown1"></li>
          <li id="countdown2"></li>
          <li id="countdown3"></li>
          <li id="countdown4"></li>
        </ul>
      </div>
        <div class="gstend">
        <fieldset class="fieldBorder">
          <legend class="fieldBorder">
            <span class="glyphicon glyphicon-heart"></span>
          </legend>
          <span class="d1text">GST launched in India on 1 July 2017</span>
        </fieldset>
        </div>
        <form action="" method="POST" class="f">

      <span class="slidet2 d2f">Contact Us</span>
      
          <div class="row form-group d2g">
              <div class="col-md-6" >
                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required maxlength="50">

              </div>  
              <div class="col-md-6">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email-id" required maxlength="100">

              </div>  
          </div>

          <div class="row form-group">
              <div class="col-md-6">
                <input type="Numeric" class="form-control" id="mnumber" name="mnumber" placeholder="Mobile Nunber" required pattern="[7-9]{1}[0-9]{9}">
              </div>  
              <div class="col-md-6">
                <select name="state" id="state" class="form-control" required>
                  <option value="">State</option>
                  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                  <option value="Daman and Diu">Daman and Diu</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Lakshadweep">Lakshadweep</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Orissa">Orissa</option>
                  <option value="Pondicherry">Pondicherry</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttaranchal">Uttaranchal</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="West Bengal">West Bengal</option>
                </select>

              </div>  
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <input type="text" class="form-control" placeholder="Your Query" id="query" name="query" required minlength="10" maxlength="500">
            </div>
          </div>
          
            
              <button type="submit" class="btn btn-danger d2 col-md-12">CONTACT US</button>
            
          
        </form>
      
    
  </section>
<!--CONTENT LEVEL-1 -->
<!--CONTENT LEVEL-2-->

  <section class="d3">
     <ul  class="d3">
            <a href="https://www.facebook.com/corporatedrafts" target="_blank" class="d3"><li  class="d3f"><span class="icon-facebook icon-facebook1"></span></li></a>

            <a href="https://plus.google.com/b/114559504369930511115/114559504369930511115" target="_blank" class="d3"><li class="d3g"><span class="icon-google-plus icon-google-plus1"  ></span></li></a>
            <a href="https://www.linkedin.com/organization/13283422/admin/updates" target="_blank" class="d3"><li  class="d3t"><span class="icon-linkedin icon-twitter1"  ></span></li></a>
            <a href="#" class="d3" ><li  class="d3r" ><span class="icon-rss last icon-rss1" > </span></li></a>
            </ul>
          
    <div class="d3">
      
          <span  class="d3">HELLO, WE ARE CORPORATE DRAFTS</span>
   
      
  


      <p  class="d3 d3a">Corporatedrafts is online business services platform dedicated to helping people easily start and grow their business, at an affordable cost and with the high standards of Work. Our aim is to help the entrepreneur on the legal and regulatory requirements, and be a partner throughout the business lifecycle.

 </p>
      <br><p class="d3 opt">At Corporatedrafts we are a team of Chartered Accountants, Company Secretaries, Lawyers and other professional  getting solution to all your legal needs under One Umbrella in major cities in India.
At Corporatedrafts we set high goals and achieve them. </p></div>



<img src="images/d3-4.jpg"  class="d3">
    
   
  </section>

<!--END-CONTENT-LEVEL-2-->
<!--CONTENT-LEVEL-3-->

  <section  class="d4">
  
  <div class="d4f"> 
  <h4 class="d4">
Business Fusion</h4>
  <p class="d4">Corporatedrafts provides you the complete business solution. We have experience of registering thousands of new businesses. We are registering a wide range of business entities like Limited Companies, Limited Liability Partnership, Non-Banking Finance Company, Private Limited Company, One Person Company, Nidhi Company, Trust, Society and Section 8 Company.</p>
   </div>
     <div class="d4s"> 

  <h4 class="d4">Growth</h4>
  <p class="d4">Corporatedrafts helps you to grow your business. We corporatedrafts not only provide you the legal advisory, we provide you the ways through which you can grow your business. We have specialized team of marketing experts and business analyst who can help you to grow your business. We have a team of specialize person in field of Company Matters.</p>
   </div>
     <div class="d4t"> 

  <h4 class="d4">Compliance</h4>
  <p class="d4">Corporatedrafts will provide you the mechanism to comply with all the legal and regulatory compliances. We have a team of specialize person in field of Company Matters, Income tax Matters, GST Matters and Legal Matters and the regulators.We have a team of specialize person in field of Company Matters, Income tax Matters, GST Matters and Legal Matters and the regulators. </p>
   </div>
      

  </section>


  <!--END-CONTENT-LEVEL-3-->

  <section  class="d5">
    <div class="d5">
      
          <h3 class="d5">WHAT, WE OFFER </h3>
            <br>


      <p  class="d5">Corporatedrafts has won  Awards for Startup Consulting Enterprise of the Year. Last Year Corporatedrafts  has helped many startups to register their business and operate thousands of businesses by offering a range of business services. 

Our aim is to help the entrepreneur on the legal and regulatory requirements, and be a partner throughout the business lifecycle. </p>
      <br><p class="d5">Startups to Register their business with ease, Corporatedrafts is India's largest online business services platform dedicated to helping people easily start and grow their business, at an affordable cost. </p>
       
    </div>
   

    <div id="mycarousel" class="carousel" data-ride="carousel" >
  

    <div class="carousel-inner" role="listbox" >
      <div class="item active">
        <img src="images/d5-1.jpg"  width="640" height="425">
          <div class="carousel-caption">
            <h3 >GST Registration</h3>
              <p>Register at cheap price</p>
          </div>
      </div>
      <div class="item">
          <img src="images/d5-2.jpg" width="640" height="425">
          <div class="carousel-caption">
            <h3>Start Business</h3>
              <p>Start Business with corporatedrafts</p>
          </div>
      </div>
        <div class="item">
          <img src="images/d5-3.jpg"  width="640" height="425">
          <div class="carousel-caption">
            <h3>Manage Business</h3>
              <p>Manage Business with corporatedrafts</p>
          </div>
      </div>
        <div class="item">
          <img src="images/d5-4.jpg"  width="640" height="425">
          <div class="carousel-caption">
            <h3>Document Downloads</h3>
              <p>Download For Free</p>
          </div>
      </div></div>

    <ol class="carousel-indicators" >
      <li data-target="#mycarousel" data-slide-to="0" class="active " style="background-color: teal;"></li>

      <li data-target="#mycarousel" data-slide-to="1" style="background-color: brown;"></li>

      <li data-target="#mycarousel" data-slide-to="2" style="background-color: black;"></li>

      <li data-target="#mycarousel" data-slide-to="3" style="background-color:chocolate;"></li>
    </ol>
 
    </div>
<a class="right d5c" href="#mycarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right d5-carousel-gly" aria-hidden="true" style="color: black;"></span>
    <span class="sr-only d5-carousel-gly">Next</span>
  </a>
  </section>

  <!--END-CONTENT-LEVEL-3-->
  <!--CONTENT-LEVEL-4-->
  
<section class="d6">
   
          <h3 class="d6">Quick Links</h3>

        
      <div class="d6">
      
      <div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.pmindia.gov.in/" class="d6">PMO</a>
      </div>
    
<div class="col-sm-2" >
<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.cci.gov.in/"  target="_blank" class="d6">CCI</a>
      </div>
<div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.sfio.nic.in/websitenew/main2.asp" target="_blank" class="d6">SFIO</a>
      </div>
<div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.iica.in/" target="_blank" class="d6">IICA</a>
      </div>
<div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.ibbi.gov.in/" target="_blank" class="d6">IBBI</a>
      </div>
<div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.nfcgindia.org/" target="_blank" class="d6">NFCG</a>
      </div>
<div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://compat.nic.in/" target="_blank" class="d6">CAT</a>
      </div>
<div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.icai.org/" target="_blank" class="d6">ICAI(CA)</a>
      </div>
<div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.icsi.edu/" target="_blank" class="d6">ICSI(CS)</a>
      </div>
<div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://icmai.in/" target="_blank" class="d6">ICAI(CMA)</a>
      </div>
<div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.mca.gov.in/" target="_blank" class="d6">MCA</a>
      </div>


<div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://mca.gov.in/XBRL/" class="d6">XBRL</a>
      </div>
<div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="https://www.tin-nsdl.com/" class="d6">TIN</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://sezindia.gov.in/index.asp" class="d6">SEZ</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.sebi.gov.in/sebiweb/" class="d6">SEBI</a>
      </div>
      <div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="https://rbi.org.in/" class="d6">RBI</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://pib.nic.in/newsite/mainpage.aspx" class="d6">PIB</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://epfindia.com/" class="d6">PF</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="https://nse-india.com/" class="d6">NSE</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://msme.gov.in/" class="d6">MSME</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://nclt.gov.in/" class="d6">NCLT</a>
      </div>
      <div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.mca.gov.in/MinistryV2/aboutefilingforllp.html" class="d6">LLP</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://itat.nic.in/" class="d6">ITAT</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.cpeicai.org/" class="d6">CPE</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.cag.gov.in/" class="d6">CAG</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.incometaxindia.gov.in/Pages/default.aspx" class="d6">Income Tax</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://incometaxindiaefiling.gov.in/" class="d6">I.T.E-Filing</a>
      </div>
      <div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://lawmin.nic.in/" class="d6">LawMin</a>
      </div>
      <div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
       
        <a href="http://www.investindia.gov.in/" target="_blank" class="d6">Invest India</a>
      </div>
      <div class="col-sm-2" style="float: none;display: inline-block;">

<span class="glyphicon glyphicon-chevron-right"></span>

        <a href="contact/" class="d6">Contact Us</a>
      </div>

      </div>
      <!--END-CONTENT-LEVEL-4-->
      <!--FOOTER-->
      
      <footer class="footer">
      <p class="footer">Copyright <span class="glyphicon glyphicon-copyright-mark"></span> Corporatedrafts.com. All rights reserved.</p>
 
       <p class="footer2">The site is best viewed in Internet Explorer 9.0 +, Firefox 24+ or Chrome 4.0+.</p>
            <p class="footer1">The site is devloped and maintained by <a href="https://in.linkedin.com/in/kashish-goyal-24566512a" target="_blank" class="footer">Kashish Goyal.</a> Logo designed by <a href="http://www.freepik.com" target="_blank" class="footer">Patrickss / Freepik.</a></p>
      </footer>

      </section>

  


 <a href="#" class="back-to-top">
 
<i class="icon-move-up"></i>
 
</a>
  
   </div>
   
   
    <div class="subscribe" >
    <div class="sub-img">

    </div>
    <div class="imgrgt">
    <div class="subheader">

      <span class="subspan">Corporate drafts would like to send you latest updates</span>

    </div>
  
     
    <form action="" method="POST" class="sub-form">
  

 
 <div class="form-grp">
    

      <label for="Email">Email</label>
      <input type="email" name="subemail" id="subemail" placeholder="Email" class="form-control" required maxlength="100" autofocus="true">
    </div>
     
    
    <button class="btn  sub-button" type="submit">subscribe</button>
 
        <button type="button" class="btn sub-close" >close</button>
    </form>
  
    
</div>


</div>
  <script src="scripts/script.js"></script>
  <script>
var end = new Date('07/01/2017 01:0 AM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
          
           document.getElementsByClassName('gst')[0].style.display= 'none';

           document.getElementsByClassName('gstend')[0].style.display= 'block';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown1').innerHTML = days;
        document.getElementById('countdown2').innerHTML = hours;
        document.getElementById('countdown3').innerHTML = minutes;
        document.getElementById('countdown4').innerHTML = seconds;
    }

    timer = setInterval(showRemaining, 1000);
</script>
</body>
</html>

