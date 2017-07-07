<?php

if(isset($_POST['name']))
{
 

    $name=$_POST['name'];
    $regemail=$_POST['regemail'];
    $mob=$_POST['mno'];
    $reg=$_POST['regtype'];

    if(empty($name) || strlen($name)>45)
    {
      echo '<script language="javascript">';
      echo 'alert("Invalid Name. Name can not be empty and maximum fifteen characters are allowed")';
      echo '</script>';
    }
    else if (!filter_var($regemail, FILTER_VALIDATE_EMAIL))
     {
              echo '<script language="javascript">';
              echo 'alert("Invalid Email Address.")';
              echo '</script>';
     }

     else if(strlen($mob)!=10)
     {
        echo '<script language="javascript">';
              echo 'alert("Invalid Mobile Number. Mobile number can have numeric character and length must be ten digits.")';
              echo '</script>';
     }

     else
     {  $connect=mysqli_connect('localhost','solfacin_kashish','184171AS','solfacin_cd');
        if(mysqli_connect_errno($connect))
        {
          header('location:../../bad-request/');
        }

        mysql_query($connect,"INSERT INTO registration(name,regemail,mno,regtype) VALUES('$name','$regemail','$mob','$reg')");


      $to = "nbfcdoctor@gmail.com"; 
      $subject = $reg;
      $subject2="Successfully Registered For"." ". $reg;

      $message = "A user filled the following"." ".$reg." "."form at corporatedrafts.com"."\n\n"."Name:" ." ". $name .".". "\n\n " ."Email:"." ".$regemail."."."\n\n "."Mobile No.:"." ".$mob. ".";
    
    

    $message2 = "Thank you for registering with us. We will get back to you as soon as possible. Here's a copy of the form you submitted."."\n\n"."Name:" ." ". $name .".". "\n\n " ."Email:"." ".$regemail."."."\n\n "."Mobile No.:"." ".$mob. "."."\n\n"."\n\n"."\n\n"."You received this email in response of the form you submitted at www.corporatedrafts.com."."\n\n"."For any doubts or queries you can write to us at helpcorporatedrafts@gmail.com" ."\n\n"."You can also give us a call at 09953138698.";
     
    $headers = "From:CorporateDrafts";
    $headers2 = "From:CorporateDrafts";

     if( mail($to,$subject,$message,$headers) && mail($regemail,$subject2,$message2,$headers2) )
    {
      
          header('location:../../thank-you/');
    }
    else{
    
        
          header('location:../../bad-request/');
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
    header("location:../../bad-request/");
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
      
      echo '<script language="javascript">';
      echo 'alert("You have successfuly subscribed to our updates.")';
      echo '</script>';
     
    }
    else{
    
    header("location:../../bad-request/");
    }
  }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Proprietorship Registration</title>
	  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  
  <link rel="icon" href="../../images/logotd2.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://file.myfontastic.com/ttfHDvcZkwkELuDBjAqpHQ/icons.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.1.2/jquery.flip.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen and (max-width: 767px)"   href="../../css/style1.css">

  <link rel="stylesheet" type="text/css" media="screen and (min-width:768px) and (max-width:991px)"   href="../../css/style2.css">

  <link rel="stylesheet" type="text/css" media="screen and (min-width:992px) and (max-width:1199px)"   href="../../css/style4.css">

  <link rel="stylesheet" type="text/css" media="screen and (min-width:1200px)"   href="../../css/style3.css">
<style type="text/css">
 body,html{
  width: 100%;
 }
</style>

<meta name="keywords" content="Public Limited Company Registration, public, limited,company,registration,register,company,DIN,DSC,MOA,AOA,minimum requirments for company registering, roc, pan,tan,start business,new business, business,advantages for public limited company, steps for public limited company, how to register company">
<meta name="description" content="Public Limited Company Registration">
</head>
</head>
<body>
 <div class="maskr">

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
            <li class="d1f"><a href="../../">HOME</a></li>
              <li class="dropdown d1f">
        
                <a class="dropdown-toggle"  data-toggle="dropdown">START BUSINESS</a>
                  <ul class="dropdown-menu dm1">
                
                     <img src="../../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">START BUSINESS</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../private-limited-company" class="dnav">Private Limited Company</a></li>
                     

<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../one-person-company" class="dnav">One Person Company</a></li>
                     

<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="" class="dnav">Public Limited Company</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../limited-liability-partnership" class="dnav">Limited Liability Partnership </a></li> 
                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../Proprietorship-registration" class="dnav">Proprietorship Registration</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../Partnership-Registration" class="dnav">Partnership Registration</a></li>  
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../Section-8-Company" class="dnav">Section 8 Company Registartion</a></li>
                      
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
                  </ul>
        
              </li>   

        <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown" >MANAGE BUSINESS</a>
            <ul class="dropdown-menu dm2" style="">
             <img src="../../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">MANAGE BUSINESS</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../manage-business/name-change-company" class="dnav">Name Change Of Company</a></li>
                     

<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../manage-business/address-change-company" class="dnav">Address Change Of Company</a></li>

                     
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../manage-business/directors-partners-change" class="dnav">Directors Partners Change</a></li> 
                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../manage-business/Authorized-share-capital-increase" class="dnav">Authorised Share Capital Increase</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../manage-business/change-moa-aoa" class="dnav">Change in Moa and Aoa</a></li>  
                      
                       <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../manage-business/fast-track-exit" class="dnav">Fast Track Exit</a></li> 
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
          
            </ul>
        
        </li>

            <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown" >COMPLIANCES</a>
            <ul class="dropdown-menu dm3" style="">
             <img src="../../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">COMPLIANCES</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../compliances/income-tax-returns" class="dnav">Income Tax Returns</a></li>
                     

<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../compliances/tds-returns" class="dnav">TDS Returns</a></li>
                     

<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../compliances/vat-sales-tax-returns" class="dnav">VAT Sales Tax Returns</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../compliances/service-tax-returns" class="dnav">Service Tax Returns</a></li> 

                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../compliances/excise-returns" class="dnav">Excise Returns</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../compliances/gst-compliances" class="dnav">GST Compliances</a></li>  
                      
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../compliances/gst-migration" class="dnav">GST Migration</a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../compliances/next-nbfc-compliance" class="dnav">Next NBFC Compliance</a></li> 
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
            
            </ul>
        
        </li>

            <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown" >DOWNLOADS</a>
            <ul class="dropdown-menu dm4" style="">
            <img src="../../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">DOWNLOADS</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../downloads/companies-act-documents" class="dnav">Companies Act Documents</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../downloads/securities-law-documents" class="dnav">Securities Law Documents </a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../downloads/income-tax-documents" class="dnav">Income tax Documents</a></li> 
                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../downloads/foreign-exchange-management" class="dnav">Foreign Exchange Management</a></li>  
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../downloads/trademark-documents" class="dnav">Trademark Documents</a></li>
                      
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../downloads/copyright-documents" class="dnav">Copyright Document</a></li>
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
          
            </ul>
        
        </li>

    
         
            

        <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown">GOVT. LICENSING</a>
            <ul class="dropdown-menu dm5" style="">
              <img src="../../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links1">

                      <div class="divd1header1" ><span class="d1Header">GOVT. LICENSING</span></div>
                      <ul class="d1Links1">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../government-licensing/micro-small-medium-enterprises" class="dnav">Micro Small And Medium Enterprises</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../government-licensing/pf-esi-registration" class="dnav">PF And Esi Registration</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../government-licensing/pollution-licenses" class="dnav">Pollution Licenses</a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../government-licensing/import-export-code" class="dnav">Import Export Code</a></li> 
                      </ul> 
                     </div>
                         <div class="links2">

                      <div class="divd1header1" ><span class="d1Header">PROTECT BUSINESS</span></div>
                         <ul class="d1Links1">

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../government-licensing/protect-business/copyright-registration" class="dnav">Copyright Registration</a></li>  
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../government-licensing/protect-business/trademark-registration" class="dnav">Trademark Registration</a></li>
                      
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../government-licensing/protect-business/patent-registration" class="dnav">Patent Registration</a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../government-licensing/protect-business/iso-registration" class="dnav">ISO Registration</a></li>
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
                  <img src="../../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links11">

                      <div class="divd1header2" ><span class="d1Header">CA</span></div>
                      <ul class="d1Links22">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/ca/past-year-papers" class="dnav">Past Year Papers</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/ca/diagrams" class="dnav">Diagrams </a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/ca/study-material" class="dnav">Study Material</a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/ca/rtp" class="dnav">RTP</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/ca/training" class="dnav">Training</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/ca/coaching" class="dnav">Coaching</a></li> 
                      </ul> 
                     </div>
                         <div class="links11">

                      <div class="divd1header2" ><span class="d1Header">CS</span></div>
                         <ul class="d1Links22">
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/csa/past-year-papers" class="dnav">Past Year Papers</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/csa/diagrams" class="dnav">Diagrams</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/csa/study-module" class="dnav">Study Module</a></li>


                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/csa/training" class="dnav">Training</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/csa/coaching" class="dnav">Coaching</a></li> 
                    </ul></div>
                    <div class="links11">

                      <div class="divd1header2" ><span class="d1Header">CMA</span></div>
                      <ul class="d1Links22">
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/cma/past-year-papers" class="dnav">Past Year Papers</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/cma/diagrams" class="dnav">Diagrams </a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/cma/study-module" class="dnav">Study Module</a></li>


                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/cma/training" class="dnav">Training</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/cma/coaching" class="dnav">Coaching</a></li> 
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

        <li class="d1f"><a href="../../contact">CONTACT US</a></li>
      </ul>
      <!--
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
      </ul>-->
        </div></div></nav></header>

        

<!--CONTENT-LEVEL-2-->
<section class="e1" style='background-image: url("../../images/pl16-min.png");'>
<div class="e1div">
 <span class="e1span">
   Easily Register a Proprietorship
 </span><br><br>
 <p>A sole proprietorship, also known as the sole trader or simply a proprietorship, is a type of business entity that is owned and run by one individual and in which there is no legal distinction between the owner and the business. </p><br>
 <span class="emibox">Starting From ₹5000/-</span><br><br><br>
 <span class="e1span1">Free Features</span>
 <ul>
 <li><span>1</span>PAN + TAN </li>
 <li><span>2</span>Vat / Service Tax/ GST Registration</li>
 <li><span>3</span>MSME Registration</li>
 </ul>

<div style="" class="e1div1">
 <button class="btn btn-primary ghostbtn">Get Started</button>

 <a class="btn btn-primary gh1" href="form.php" >Get Started</a></div>
<div  class="e1div2">
<span class="icon-angle-double-down"></span>
</div>
</div>
</section>
<section class="e2">
   <span class="e2span">
   5 SIMPLE STEPS
 </span><br>
 <p>to Register a Proprietorship in India</p>
 <div class="e2div">
 <div class="e2div2 e2a">
 <div class="e2div1">
 <span class="e2span1">STEP 1</span>
 </div>
 <div class="e2div3">
 <span class="e2span2">PAN card of Applicant
 </span></div>
 </div>
 <div class="e2div2 e2b">
 <div class="e2div1">
 <span class="e2span1">STEP 2</span>
 </div>
 <div class="e2div3">
 <span class="e2span2">Address Proof of Applicant (Voter ID, Passport, Aadhar, Driving License)
 </span></div>
 </div>
 <div class="e2div2 e2c">
 <div class="e2div1">
 <span class="e2span1">STEP 3</span>
 </div>
 <div class="e2div3">
 <span class="e2span2">Cancelled Cheque of Bank Account

 </span></div>
 </div>
 <div class="e2div2 e2d">
 <div class="e2div1">
 <span class="e2span1">STEP 4</span>
 </div>
 <div class="e2div3">
 <span class="e2span2">Registered Office Address Proofs
 </span></div>
 </div>
 <div class="e2div2 e2e">
 <div class="e2div1">
 <span class="e2span1">STEP 5</span>
 </div>
 <div class="e2div3">
 <span class="e2span2">Four photographs of Applicant and Rubber Stamp
 </span></div>
 </div>
 </div>
 <br>
</section>
<br>
<section class="e3">
  <span class="e2span">
   ADVANTAGES & BENEFITS
 </span><br>
 <p>Why to Register Proprietorship</p>
 <div class="e3div">
  <div class="e3div1">
  <div class="front">
  <span>Business Name</span></div>
   <div class="back">
  <p>Since the name of a proprietorship is not registered, a proprietorship can choose to have any name - as long as it does not infringe on a registered trademark. However, since the name is not registered, any other person can also use the same business name unless trademark registration is obtained.
  </p>
  </div>
  </div>

  <div class="e3div2">
   <div class="front">
  <span>
Easy to Start
</span>
  </div>
   <div class="back">
  <p>Proprietorship needs minimal registration. Therefore, it is one of the easiest form of business entity to start with minimal formalities. However, after starting up a Proprietorship, it is relatively harder to open a bank account or obtain a payment gateway in the name of the business - since more registrations like VAT or Service Tax or GST Registration may be required.
  </p>
  </div></div>

 <div class="e3div3">
   <div class="front">
  <span>Single Promoter</span></div>
   <div class="back">
  <p>Proprietorship is the only type of business entity that can be registered and operated by one person. To register a one person company, a nominee Director is required and for all other types of entities like company or LLP or partnership firm, two or more promoters are required.
  </p>
  </div></div>
 <div class="e3div4">
   <div class="front">
  <span>Lower Taxes</span></div>
    <div class="back">
  <p>Proprietorship with less than Rs. 3 lakhs of income is not required to pay any income tax, as proprietorship's are taxed as the individual owing the business. However, unlike a company or LLP, a proprietorship cannot enjoy some of the tax deductions, which could potentially increase the tax liability.
  </p>
  </div></div>

  <div class="e3div5">
   <div class="front">
  <span>
Easy To Close
</span></div>
  <div class="back">
  <p>The Proprietor and the proprietorship are one and the same for all legal purposes. Hence, there is no formality for winding up or closing a proprietorship. In most cases, to close a proprietorship, only the tax registrations obtained in the name of the proprietor must be cancelled.
  </p>
  </div></div>
 <div class="e3div6" style="display: inline-block;float: none;margin-left: 0px;">
   <div class="front">
  <span>And Many More</span></div>
  <div class="back">
  <p>
  </p>
  </div></div>
  </div>


</section>


<section class="e4">
   <span class="e2span">
  MINIMUM REQUIREMENTS
 </span><br>
 <p>for Proprietorship Registration</p>
 <div class="e4div1">
 <div class="e4div2 e4div3">
 <ul>
 <li><span>1</span>Only <strong>one person</strong> is required to start a Proprietorship.</li>

 <li><span>2</span>A Proprietorship can have only<strong> one promoter.</strong>.</li>
 </div>

 
 </div>

</section>

<section class="e5" >
   <span class="e2span">
  WHAT ALL YOU GET</span><br>
 <p>with Proprietorship Registration</p>
 <div class="e5div">
   <ul>
   <li class="e5a"> <span><strong>DSC</strong> For Promotors and Directors</span></li>
    <li class="e5b"><span><strong>Director Identification Number</strong> of Directors</span></li>
     <li class="e5c"><span><strong>Consultancy Services</strong> free for one Year</span></li>
      <li class="e5d"><span><strong>MOA + AOA</strong></span></li>
       <li class="e5e"><span>Incorporation <strong>Certificate</strong></span></li>
    <li class="e5f"><span>New <strong>Incorporation</strong> Kit</span></li>
     <li class="e5g"><span>Comapny <strong>TAN Number</strong></span></li>
      <li class="e5h"><span>Company <strong>PAN Card </strong></span></li>
       <li class="e5i"><span><strong>Bank Account</strong> Documents + <strong>Opening</strong> of Bank Account</span></li>
        <li class="e5j"><span>Free<strong> Income Tax Return</strong> For 1 year</span></li>
        <li class="e5k"><span>Free<strong> Minutes</strong> For 1 year</span></li>
      <li class="e5l">  <span>Free<strong> Registers</strong> For 1 year</span></li>
      <li style="float: none;border:none;height: 0px;box-shadow: none;"></li>
   </ul>
 </div>
</section>
<section class="e6">
  <span class="e2span">
 FAQs</span><br>
 <p>On How to Register Proprietorship in India</p>
 <div class="e6div">
 <ul>
 <li class="li1"><span>1.</span>What are the documents Required to Start a Proprietorship?</li>
    <div class="e6li1">
   1. PAN 2. Address Proof ( Voter ID, Passport, DL or Aadhar) 3. Electricity bill + Rent agreement where you want to run your business.
    </div>
    
    <li class="li2"><span>2.</span>How to open a Bank Account for Proprietorship ?</li>
    <div class="e6li2">Corproatedrafts.com has tied up with various banks. We will guide you through the process and help you open a bank account.
    </div>

    <li class="li3"><span>3.</span>Will i get a registration certificate for my Proprietorship concern ?</li>
    <div class="e6li3">
Proprietorship firms do not have a Certificate of Incorporation or Certificate of Registration. The identity and legitimacy of a Proprietorship firm is established by registering with the various Government authorities..
    </div>
    <li class="li4"><span>4.</span>Can i have Partners in Proprietorship firm ?</li>
    <div class="e6li4">
   Proprietorship firms are business entity that are owned, managed and controlled by one person. So Partners cannot be inducted into a Proprietorship firm.
    </div>
    <li class="li5"><span>5.</span>What are the annual compliances for proprietorship ?</li>
    <div class="e6li5">Proprietorship will have to file their annual tax return with the Income Tax Department. Other tax filings like service tax filing or VAT/CST filign= may be necessary from time to time, based on the business activity performed. However, annual report or accounts need not be filed with the Ministry or Corporate Affairs, which is required for Limited Liability Partnerships and Companies.

    </div>
    <li class="li6"><span>6.</span>How will CorporateDrafts help me Register my Proprietorship ?</li>
    <div class="e6li6">CorporateDrafts  will understand your business requirements and help you start a Proprietorship by obtaining the relevant registrations. We will help obtain the necessary registrations to help the Proprietor open a bank account in the name of the business, thereby proving an identity for the business..
    </div>
    <li class="li7"><span>7.</span>What are the requirements to be a Proprietor ?</li>
    <div class="e6li7">
You need to be a Citizen and Resident of India having PAN Card and Valid Address Proof ( Voter ID, Passport , Driving License or Aadhar).
    </div>
    <li class="li8"><span>8.</span>Is there any capital requirement to register a Proprietorship ?</li>
    <div class="e6li8">

There is no limit on the minimum capital for starting a Proprietorship. Therefore, a Proprietorship can be started with any amount of minimum capital.

    </div>
    <li class="li9"><span>9.</span> Is my Proprietorship a Saperate Legal Entity ?</li>
    <div class="e6li9">No, the Proprietorship firm and the Proprietor are one and the same. The PAN Card of the Proprietor will be the PAN Card of the Proprietorship business and There will be no separate legal identity for the business. The assets and liabilities of the Proprietorship business and the Proprietor will also be one and the same.
    </div>
    <li class="li10"><span>10.</span>Can i transfer my Proprietorship firm ?</li>
    <div class="e6li10">
  A business operated by proprietorship firm cannot be transferred to another person, Intangible assets like Government approvals, registrations, etc., cannot be transferred to another person because PAN can not be changed.
    </div>
    <li class="li11"><span>11.</span>Can i get investment in my proprietorship ?</li>
    <div class="e6li11">Proprietorship firms are business entity that are owned, managed and controlled by one person. So Proprietorship firms cannot issue shares or have investors.
    </div>
    <li class="li12"><span>12.</span>Is Audit Required for Proprietorship ?</li>
    <div class="e6li12">

It is not necessary for Proprietorships to prepare audited financial statements each year. However, a tax audit may be necessary based on turnover and other criterion.

    </div>
    <li class="li13"><span>13.</span>
Can i convert my Proprietorship into Company / LLP
 ?</li>
    <div class="e6li13">Yes, there are procedures for converting your Proprietorship business into a Company or a LLP at a later date. However, the procedures to convert a proprietorship business into a Company or LLP expensive and time-consuming, PAN and all Relevant registration will be applied again and hence it is wise for many entrepreneurs to consider and start a LLP or Company instead of a Proprietorship.
    </div>
  
 </ul>
 </div>
</section>
<section class="d6">
   
          <h3 class="d6">Quick Links</h3>

        
      <div class="d6">
      
      <div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.pmindia.gov.in/" class="d6" target="_blank">PMO</a>
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
        <a href="http://mca.gov.in/XBRL/" class="d6" target="_blank">XBRL</a>
      </div>
<div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="https://www.tin-nsdl.com/" class="d6" target="_blank">TIN</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://sezindia.gov.in/index.asp" class="d6" target="_blank">SEZ</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.sebi.gov.in/sebiweb/" class="d6" target="_blank">SEBI</a>
      </div>
      <div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="https://rbi.org.in/" class="d6" target="_blank">RBI</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://pib.nic.in/newsite/mainpage.aspx" class="d6" target="_blank">PIB</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://epfindia.com/" class="d6" target="_blank">PF</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="https://nse-india.com/" class="d6" target="_blank">NSE</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://msme.gov.in/" class="d6" target="_blank">MSME</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://nclt.gov.in/" class="d6" target="_blank">NCLT</a>
      </div>
      <div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.mca.gov.in/MinistryV2/aboutefilingforllp.html" class="d6" target="_blank">LLP</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://itat.nic.in/" class="d6" target="_blank">ITAT</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.cpeicai.org/" class="d6" target="_blank">CPE</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.cag.gov.in/" class="d6" target="_blank">CAG</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://www.incometaxindia.gov.in/Pages/default.aspx" class="d6" target="_blank">Income Tax</a>
      </div><div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://incometaxindiaefiling.gov.in/" class="d6" target="_blank">I.T.E-Filing</a>
      </div>
      <div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
        <a href="http://lawmin.nic.in/" class="d6" target="_blank">LawMin</a>
      </div>
      <div class="col-sm-2">

<span class="glyphicon glyphicon-chevron-right"></span>
       
        <a href="http://www.investindia.gov.in/" target="_blank" class="d6">Invest India</a>
      </div>
      <div class="col-sm-2" style="float: none;display: inline-block;">

<span class="glyphicon glyphicon-chevron-right"></span>

        <a href="../../contact"  class="d6">Contact Us</a>
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
    
    <div class="subscribe1" >
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

<div class="registration">
<div class="regheader">

      <span class="subspan"></span>

        <button type="button" class="reg-close" >&times;</button>
    </div>
 <div class="reg-content">
 <div class="img-reg"></div>
 <form action="" method="POST" class="regf">
 
   <div class="form-group">

     <label for="name">Name</label>
     <input type="text" name="name" class="form-control" placeholder="Name" maxlength="40" required autofocus="true">
     </div>
        <div class="form-group">
     <label for="email">Email</label>
     <input type="email" name="regemail" class="form-control" placeholder="Email" maxlength="100" required autofocus="true">
     </div>
        <div class="form-group">
     <label for="Mobile Number">Mobile Number</label>
     <input type="numeric" name="mno" class="form-control" placeholder="Mobile Number" required pattern="[7-9]{1}[0-9]{9}" autofocus>
      </div>
         <div class="form-group">
     <label for="regtype">Registration</label>
     <input type="text" name="regtype" class="form-control" value="Proprietorship Registration" readonly="true">
     </div>
     
         
    <button class="btn reg-button" type="submit">register</button>

    <button type="button" class="reg-close reg-close1 btn">close</button>
 </form>   
</div>
</div>

<script src="../../scripts/script.js"></script>
<script type="text/javascript">

</script>
 

</body>
</html>