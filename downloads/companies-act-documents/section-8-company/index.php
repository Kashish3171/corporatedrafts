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
    header("location:../../../bad-request/");
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
    
    header("location:../../../bad-request/");
    }
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Comapnies Act Documents</title>
    <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://file.myfontastic.com/ttfHDvcZkwkELuDBjAqpHQ/icons.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.1.2/jquery.flip.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen and (max-width: 767px)"   href="../../../css/style1.css">

  <link rel="stylesheet" type="text/css" media="screen and (min-width:768px) and (max-width:991px)"   href="../../../css/style2.css">

  <link rel="stylesheet" type="text/css" media="screen and (min-width:992px) and (max-width:1199px)"   href="../../../css/style4.css">

  <link rel="stylesheet" type="text/css" media="screen and (min-width:1200px)"   href="../../../css/style3.css">
<style type="text/css">
 body,html{
  width: 100%;
 }
</style>
</head>
<body style="background-color:#f7f7f7;background-repeat: no-repeat;background-attachment: fixed;background-position: center;background-size: contain;">
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
            <li class="d1f"><a href="../../../">HOME</a></li>
              <li class="dropdown d1f">
        
                <a class="dropdown-toggle"  data-toggle="dropdown">START BUSINESS</a>
                  <ul class="dropdown-menu dm1">
                
                     <img src="../../../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">START BUSINESS</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../../private-limited-company" class="dnav">Private Limited Company</a></li>
                     

<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../../one-person-company" class="dnav">One Person Company</a></li>
                     

<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../public-limited-company" class="dnav">Public Limited Company</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../limited-liability-partnership" class="dnav">Limited Liability Partnership </a></li> 
                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../Proprietorship-registration" class="dnav">Proprietorship Registration</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../Partnership-Registration" class="dnav">Partnership Registration</a></li>  
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../Section-8-Company" class="dnav">Section 8 Company Registartion</a></li>
                      
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
                  </ul>
        
              </li>   

        <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown" >MANAGE BUSINESS</a>
            <ul class="dropdown-menu dm2" style="">
             <img src="../../../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">MANAGE BUSINESS</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../../manage-business/name-change-company" class="dnav">Name Change Of Company</a></li>
                     

<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../../manage-business/address-change-company" class="dnav">Address Change Of Company</a></li>

                     
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../manage-business/directors-partners-change" class="dnav">Directors Partners Change</a></li> 
                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../manage-business/Authorized-share-capital-increase" class="dnav">Authorised Share Capital Increase</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../manage-business/change-moa-aoa" class="dnav">Change in Moa and Aoa</a></li>  

                       <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../manage-business/fast-track-exit" class="dnav">Fast Track Exit</a></li> 
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
          
            </ul>
        
        </li>

            <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown" >COMPLIANCES</a>
            <ul class="dropdown-menu dm3" style="">
             <img src="../../../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">COMPLIANCES</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../../compliances/income-tax-returns" class="dnav">Income Tax Returns</a></li>
                     

<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../../compliances/tds-returns" class="dnav">TDS Returns</a></li>
                     

<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../compliances/vat-sales-tax-returns" class="dnav">VAT Sales Tax Returns</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../compliances/service-tax-returns" class="dnav">Service Tax Returns</a></li> 

                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../compliances/excise-returns" class="dnav">Excise Returns</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../compliances/gst-compliances" class="dnav">GST Compliances</a></li>  
                      
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../compliances/gst-migration" class="dnav">GST Migration</a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../compliances/next-nbfc-compliance" class="dnav">Next NBFC Compliance</a></li> 
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
            
            </ul>
        
        </li>

            <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown" >DOWNLOADS</a>
            <ul class="dropdown-menu dm4" style="">
            <img src="../../../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">DOWNLOADS</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../../downloads/companies-act-documents" class="dnav">Companies Act Documents</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../downloads/securities-law-documents" class="dnav">Securities Law Documents </a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../downloads/income-tax-documents" class="dnav">Income tax Documents</a></li> 
                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../downloads/foreign-exchange-management" class="dnav">Foreign Exchange Management</a></li>  
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../downloads/trademark-documents" class="dnav">Trademark Documents</a></li>
                      
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../downloads/copyright-documents" class="dnav">Copyright Document</a></li>
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
          
            </ul>
        
        </li>

    
         
            

        <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown">GOVT. LICENSING</a>
            <ul class="dropdown-menu dm5" style="">
              <img src="../../../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links1">

                      <div class="divd1header1" ><span class="d1Header">GOVT. LICENSING</span></div>
                      <ul class="d1Links1">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../../government-licensing/micro-small-medium-enterprises" class="dnav">Micro Small And Medium Enterprises</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../government-licensing/pf-esi-registration" class="dnav">PF And Esi Registration</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../government-licensing/pollution-licenses" class="dnav">Pollution Licenses</a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../government-licensing/import-export-code" class="dnav">Import Export Code</a></li> 
                      </ul> 
                     </div>
                         <div class="links2">

                      <div class="divd1header1" ><span class="d1Header">PROTECT BUSINESS</span></div>
                         <ul class="d1Links1">

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../government-licensing/protect-business/copyright-registration" class="dnav">Copyright Registration</a></li>  
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../government-licensing/protect-business/trademark-registration" class="dnav">Trademark Registration</a></li>
                      
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../government-licensing/protect-business/patent-registration" class="dnav">Patent Registration</a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../government-licensing/protect-business/iso-registration" class="dnav">ISO Registration</a></li>
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
                  <img src="../../../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links11">

                      <div class="divd1header2" ><span class="d1Header">CA</span></div>
                      <ul class="d1Links22">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../../students/ca/past-year-papers" class="dnav">Past Year Papers</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../students/ca/diagrams" class="dnav">Diagrams </a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../students/ca/study-material" class="dnav">Study Material</a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../students/ca/rtp" class="dnav">RTP</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../students/ca/training" class="dnav">Training</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../students/ca/coaching" class="dnav">Coaching</a></li> 
                      </ul> 
                     </div>
                         <div class="links11">

                      <div class="divd1header2" ><span class="d1Header">CSA</span></div>
                         <ul class="d1Links22">
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../../students/csa/past-year-papers" class="dnav">Past Year Papers</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../students/csa/diagrams" class="dnav">Diagrams</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../students/csa/study-module" class="dnav">Study Module</a></li>


                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../students/csa/training" class="dnav">Training</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../students/csa/coaching" class="dnav">Coaching</a></li> 
                    </ul></div>
                    <div class="links11">

                      <div class="divd1header2" ><span class="d1Header">CMA</span></div>
                      <ul class="d1Links22">
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../../../students/cma/past-year-papers" class="dnav">Past Year Papers</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../students/cma/diagrams" class="dnav">Diagrams </a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../students/cma/study-module" class="dnav">Study Module</a></li>


                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../students/cma/training" class="dnav">Training</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../../../students/cma/coaching" class="dnav">Coaching</a></li> 
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

        <li class="d1f"><a href="../../../contact">CONTACT US</a></li>
      </ul>
      <!--
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
      </ul>-->
        </div></div></nav></header>
        <!--end of content level 1-->
        <!--Content Level 2-->



    <section class="z1">
       <ul  class="d3 z1ul">
            <a href="https://www.facebook.com/corporatedrafts" target="_blank" class="d3"><li  class="d3f"><span class="icon-facebook icon-facebook1"></span></li></a>

            <a href="#" class="d3"><li class="d3g"><span class="icon-google-plus icon-google-plus1" target="_blank"  ></span></li></a>
            <a href="https://www.linkedin.com/organization/13283422/admin/updates" target="_blank" class="d3"><li  class="d3t"><span class="icon-linkedin icon-twitter1"  ></span></li></a>
            <a href="#" class="d3 cr"><li  class="d3r"><span class="icon-rss last icon-rss1" > </span></li></a>
            </ul>


    <div class="z1a">


     <div class="z1b"> <span>Procedure for Conversion Into Section 8 Company</span></div>

     <br><br>
      <p>
      <!-------------------------------------------------INUPUT-TEXT---------------------------------------------------------------------------------------->
      (1) A limited company registered under this Act or under any previous company law, with any of the objects specified in clause (a) of sub-section (1) of section 8 and the restrictions and prohibitions as mentioned respectively in clause (b) and (c) of that sub-section, and which is desirous of being registered under section 8, without the addition to its name of the word ―Limited‖ or as the case may be, the words ―Private Limited‖, shall make an application in Form No.INC.12 along with the fee as provided in the Companies (Registration offices and fees) Rules, 2014 to the Registrar for a licence under subsection (5) of section 8.<br><br>
      (2) The application under sub-rule (1), shall be accompanied by the following documents, namely:-
      (a)  the memorandum and articles of association of the company;<br><br>
 
 
    (b) the declaration as given in Form No.INC.14 by an Advocate, a Chartered accountant, Cost Accountant or Company Secretary in Practice, that the memorandum and articles of association have been drawn up in conformity with the provisions of section 8 and rules made thereunder and that all the requirements of the Act and the rules made thereunder relating to registration of the company under section 8 and matters incidental or supplemental thereto have been complied with;<br><br>
    (c) For each of the two financial years immediately preceding the date of the application, or when the company has functioned only for one financial year, for such year (i) the financial statements, (ii) the Board‘s reports, and (iii) the audit reports, relating to existing companies<br><br>
    (d) a statement showing in detail the assets (with the values thereof), and the liabilities of the company, as on the date of the application or within thirty days preceding that date;<br><br>
    (e) an estimate of the future annual income and expenditure of the company for next three years, specifying the sources of the income and the objects of the expenditure;<br><br>
    (f) the certified copy of the resolutions passed in general/ board meetings approving registration of the company under section 8; and<br><br>
    (g) a declaration by each of the persons making the application in Form No.INC.15.<br><br>
    (3) The company shall, within a week from the date of making the application to the Registrar, publish a notice at his own expense, and a copy of the notice, as published, shall be sent forthwith to the Registrar and the said notice shall be in Form No. INC.26 and shall be published-<br><br>
    (a) at least once in a vernacular newspaper in the principal vernacular language of the district in which the registered office of the proposed company is to be situated or is situated, and circulating in that district, and at least once in English language in an English newspaper circulating in that district;<br><br>
    (b) on the websites as may be notified by the Central Government.<br><br>
    (4) The Registrar may require the applicant to furnish the approval or concurrence of any appropriate authority, regulatory body, department or Ministry of the Central Government or the State Government(s).<br><br>
    (5) The Registrar shall, after considering the objections, if any, received by it within thirty days from the date of publication of notice, and after consulting any authority, regulatory body, Department or Ministry of the Central Government or the State Government(s), as it may, in its discretion, decide whether the license should or should not be granted.<br><br>
    (6) The licence shall be in Form No.INC.16. or Form No.INC.17, as the case may be, and the Registrar shall have power to include in the licence such other conditions as may be deemed necessary by him.<br><br>
    (7) The Registrar may direct the company to insert in its memorandum, or in its articles, or partly in one and partly in the other, such conditions of the license as may be specified by the Registrar in this behalf.


      <!-------------------------------------------------INUPUT TEXT---------------------------------------------------------------------------------------->
</p>

 </div>
   
    </section>






<!--footer-->
<section class="d6" style="margin-top: 0px;">
   
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

        <a href="../../../contact"  class="d6">Contact Us</a>
      </div>

      </div>
    
      
      <footer class="footer">
      <p class="footer">Copyright <span class="glyphicon glyphicon-copyright-mark"></span> Corporatedrafts.com. All rights reserved.</p>
 
       <p class="footer2">The site is best viewed in Internet Explorer 9.0 +, Firefox 24+ or Chrome 4.0+.</p>
            <p class="footer1">The site is devloped and maintained by <a href="https://in.linkedin.com/in/kashish-goyal-24566512a" target="_blank" class="footer">Kashish Goyal.</a> Logo designed by <a href="http://www.freepik.com" target="_blank" class="footer">Patrickss / Freepik.</a></p>
      </footer>

      </section>

</ul></li></ul></div></div></nav></header></div>
      <!--End of FOOTER-->

      <!--subscription box-->

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
 <!-- end of subscription box-->
<script src="../../../scripts/script.js"></script>
</body></html>
