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
	<title>Private Limited Company Registration</title>
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
<meta name="keywords" content="Private Limited Company Registration, private, limited,company,registration,register,company,DIN,DSC,MOA,AOA,minimum requirments for company registering, roc, pan,tan,start business,new business, business,advantages for private limited company, steps for private limited company, how to register company">
<meta name="description" content="Private Limited Company Registration">
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
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="" class="dnav">Private Limited Company</a></li>
                     

<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../one-person-company" class="dnav">One Person Company</a></li>
                     

<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../public-limited-company" class="dnav">Public Limited Company</a></li>
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
<section class="e1" style='background-image: url("../../images/pl11.png");'>
<div class="e1div">
 <span class="e1span">
   Easily Register a Company
 </span><br><br>
 <p>Private limited company is the popular corporate entity amongst small, medium and large businesses in India due to various advantages.We offer various company registrations. </p><br>
 <span class="emibox">Starting From ₹11500/-</span><br><br><br>
 <span class="e1span1">Free Features</span>
 <ul>
 <li><span>1</span>PAN + TAN </li>
 <li><span>2</span>2 DIN + 2 DSC</li>
 <li><span>3</span>MOA + AOA</li>
 <li><span>4</span>Free service of Compliances(1 Year)</li>
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
 <p>to Start Private Limited Company in India</p>
 <div class="e2div">
 <div class="e2div2 e2a">
 <div class="e2div1">
 <span class="e2span1">STEP 1</span>
 </div>
 <div class="e2div3">
 <span class="e2span2">
 Arrange Documents and Apply For DSC(Digital Signature)
 </span></div>
 </div>
 <div class="e2div2 e2b">
 <div class="e2div1">
 <span class="e2span1">STEP 2</span>
 </div>
 <div class="e2div3">
 <span class="e2span2">
  Apply For DIN(Director Identification Number)
 </span></div>
 </div>
 <div class="e2div2 e2c">
 <div class="e2div1">
 <span class="e2span1">STEP 3</span>
 </div>
 <div class="e2div3">
 <span class="e2span2">
Apply for Name and Prepare AOA, MOA and other documents

 </span></div>
 </div>
 <div class="e2div2 e2d">
 <div class="e2div1">
 <span class="e2span1">STEP 4</span>
 </div>
 <div class="e2div3">
 <span class="e2span2">
 Incorporation approval from ROC
 </span></div>
 </div>
 <div class="e2div2 e2e">
 <div class="e2div1">
 <span class="e2span1">STEP 5</span>
 </div>
 <div class="e2div3">
 <span class="e2span2">Company Incorporation Certificate
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
 <p>Why to Register Private Limited Company</p>
 <div class="e3div">
  <div class="e3div1">
  <div class="front">
  <span>Limited Liability Protection</span></div>
   <div class="back">
  <p>Many times startups need to borrow money and take things on credit. In case of normal Partnerships, Partners personal savings and property would be at risk incase business is not able to repay its loans. In a private limited company, only investment in business is lost, personal assets of the directors are safe.
  </p>
  </div>
  </div>

  <div class="e3div2">
   <div class="front">
  <span>Uninterrupted Existence</span>
  </div>
   <div class="back">
  <p>Private Limited Company has 'perpetual succession', meaning uninterrupted existence until it is legally dissolved. A company being a separate legal person, is unaffected by the death or other departure of any member and continues to be in existence irrespective of the changes in ownership.
  </p>
  </div></div>

 <div class="e3div3">
   <div class="front">
  <span>Easy Transferability</span></div>
   <div class="back">
  <p>Ownership of a business can be easily transferred in a company by transferring shares. The signing, filing and transfer of share transfer form and share certificates is sufficient to transfer ownership of a company. In a private limited company, the consent of other shareholders maybe required to effect share transfers.
  </p>
  </div></div>
 <div class="e3div4">
   <div class="front">
  <span>Borrowing Capacity</span></div>
    <div class="back">
  <p>Private Limited Companies can raise equity funds in India. Companies can also issue equity shares, preference shares, debentures and accept deposits with RBI permission. Banks and Financial Institutions prefer to provide funding to a company rather than partnership firms or proprietary concerns.
  </p>
  </div></div>

  <div class="e3div5">
   <div class="front">
  <span>Easy to attract Employees</span></div>
  <div class="back">
  <p>For startups putting together a team and keeping them for long time is a challenge, due to confidence attached to private limited structure, it is easy to hire people as well motivate them with corporate designations and stock options.
  </p>
  </div></div>
 <div class="e3div6" style="display: inline-block;float: none;margin-left: 0px;">
   <div class="front">
  <span>Owning Property</span></div>
  <div class="back">
  <p>Private Limited Company being an artificial person, can acquire, own, enjoy and alienate, property in its name. The property owned by a company could be machinery, building, intangible assets, land, residential property, factory, etc., No shareholder can make a claim upon the property of the company - as long as the company is a going concern.
  </p>
  </div></div>
  </div>


</section>


<section class="e4">
   <span class="e2span">
  MINIMUM REQUIREMENTS
 </span><br>
 <p>for Company Registration</p>
 <div class="e4div1">
 <div class="e4div2">
 <ul>
 <li><span>1</span>Minimum 2 Shareholders.</li>

 <li><span>2</span>Minimum 2 <strong>Directors</strong>.</li>
 </div>
 <div class="e4div2">
 <ul>
 <li><span>3</span>The <strong>directors</strong> and <strong>shareholders</strong> can be same person.</li>

 <li><span>4</span>One of the Directors must be <strong>Indian Resident</strong>.</li>
 </div>
 <div class="e4div2">
 <ul>
 <li><span>5</span><strong>Minimum Authorised Share Capital</strong> Rs. 100,000 (INR One Lac).</li>

 <li><span>6</span><strong>DIN </strong>(Director Identification Number) for all Directors.</li>
 </div>
 <div style="" class="e4div3 e4div2">
 <ul>
 <li><span>7</span><strong>DSC</strong> is ONLY for Directors/Promotors Not witness</li>
</ul>
 
 </div></div>

</section>

<section class="e5">
   <span class="e2span">
  WHAT ALL YOU GET</span><br>
 <p>with Company Registration</p>
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
 <p>On How to Register Company in India</p>
 <div class="e6div">
 <ul>
 <li class="li1"><span>1.</span>What documents required to set up Pvt. Ltd Company in India ?</li>
    <div class="e6li1">
    You need to arrange very simple documents of directors like photograph, Pan card and one address proof. For more details, please fill the above details and Get Started Now.
    </div>
    
    <li class="li2"><span>2.</span>Do I have to have a office(commercial) space to start a Comapny?</li>
    <div class="e6li2">
   No, commercial office space is not required. You can show your own residential or rented home address as the registered office address of the Company. This office address can be changed at any time after incorporation of the company. Once your startup is set up, stable and ready to move on to a nice corporate space you can change the registered office address by informing to the ROC office.
    </div>

    <li class="li3"><span>3.</span>Who is Registrar of Comapnies(ROC)?</li>
    <div class="e6li3">
ROC is a Government office with whom companies get registered. Every State has one ROC office except Maharashtra and Tamilnadu where there are two ROC offices. In Maharashtra companies are registered with Mumbai & Pune ROC. In Tamilnadu companies are incorporated at Chennai and Coimbatore ROCs. In all other States like Delhi there is only one ROC office, like at Bangalore, Hyderabad and so on.
    </div>
    <li class="li4"><span>4.</span>Do I have to physically visit ROC office while Setting up Comapny?</li>
    <div class="e6li4">
    No, CorporateDrafts provides complete online Company Incorporation process. All legal documentation with ROC and visits are done by CorporateDrafts.
    </div>
    <li class="li5"><span>5.</span>What is DIN?</li>
    <div class="e6li5">
   Director Identification Number (DIN) is a unique identification number required for a person to become a director of a company. DIN is issued by ROC office (Ministry of Corporate Affairs)
<br>
It is similar to a PAN Card number.DIN is to be mentioned in documents while appointing a person as a director of a company.
    </div>
    <li class="li6"><span>6.</span>What is DSC?</li>
    <div class="e6li6">
   A digital signature is electronic signature, which is in the form of codes. It is used for signing the electronic forms, filed with ROC for incorporation of Company. Digital Signature cannot be used in physical documents.
    </div>
    <li class="li7"><span>7.</span>What is Comapny name search? Why it is important for new company registration?</li>
    <div class="e6li7">
Company name is very important part in registration of company. The company name is divided into 3 Parts:<br>

1) Keyword (brand name like TATA or Flipkart)<br>

2) Activity word(i.e. showing nature of business like Software)<br>

3) Business Type word (i.e. Pvt. Ltd. or LLP). For Incorporation of company, the suggested name should not match with existing companies or trademark.
    </div>
    <li class="li8"><span>8.</span>What is MOA & AOA of Comapny?</li>
    <div class="e6li8">

MOA means Memorandum of Association and AOA means Articles of Association. These are the byelaws or rules based on which important matters like main business of the company or meetings is decided. These are standard legal documents prepared by Company Secretaries during registration of the Company.
    </div>
    <li class="li9"><span>9.</span>Can we change the official address of the cpompany after incorporation?</li>
    <div class="e6li9">
    Yes, we can definitely change the official address of the company anytime after incorporation.
    </div>
    <li class="li10"><span>10.</span>What is capital of company?</li>
    <div class="e6li10">
   Capital means investment made by shareholders into the company. Authorised capital is an amount up to which company can issue shares. This capital is mentioned during incorporation of the company based on which ROC registration fees and stamp duty is paid. Paid up capital is an actual investment which goes from shareholders into company bank account, against which share certificate is issue by the company.
    </div>
    <li class="li11"><span>11.</span>Do we have to deposit share capital in bank at the time of incorporation?</li>
    <div class="e6li11">
      No. After company is registered, it need to open a company bank account and then anytime within two months of incorporation, capital can be deposited into Company bank account.
    </div>
    <li class="li12"><span>12.</span>Does my business have to be some level of turnover to start Private Limited?</li>
    <div class="e6li12">
This is not true, a Private limited company is one of the mode of doing business, which means it can be started from scratch. For that matter even after incorporating a private limited there is no obligation that the company must have sales or turnover.
    </div>
    <li class="li13"><span>13.</span>Is Private Limited Incorporation to be renewed every year?</li>
    <div class="e6li13">
  No. Once the company is formed, it will be valid till it is officially closed down by the owners. No renewal or fees is required. However, every year companies have to file very basic returns with ROC office.
    </div>
    <li class="li14"><span>14.</span>Does PF, Service Tax or VAT is automatically applicable to Private Limited?</li>
    <div class="e6li14">
    There is no automatic applicability. Provident Fund (PF), Service Tax or VAT law applicability is same for all types of businesses like sole proprietorship, partnership firms and companies. These laws are applicable only after crossing certain threshold limits.
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
     <input type="text" name="regtype" class="form-control" value="Private Limited Company Registration" readonly="true">
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