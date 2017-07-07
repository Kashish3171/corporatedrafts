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
    header("location:../bad-request/");
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
    
    header("location:../bad-request/");
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en-US" class="chtml">
<head>
  <title>Contact Us CorporateDrafts</title>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  
  <link rel="icon" href="../images/logotd2.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://file.myfontastic.com/ttfHDvcZkwkELuDBjAqpHQ/icons.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.1.2/jquery.flip.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen and (max-width: 767px)"   href="../css/style1.css">

  <link rel="stylesheet" type="text/css" media="screen and (min-width:768px) and (max-width:991px)"   href="../css/style2.css">

  <link rel="stylesheet" type="text/css" media="screen and (min-width:992px) and (max-width:1199px)"   href="../css/style4.css">

  <link rel="stylesheet" type="text/css" media="screen and (min-width:1200px)"   href="../css/style3.css">

<meta name="keywords" content="contact us, corporatedrafts, helpcorporatedrafts, Corporate, drafts, conatct,address, phone, conatct us CorporateDrafts">
<meta name="description" content="Contact Us corporatedrafts">
</head>
</head>

<body class="cbody">
<div class="maskr">
    <!--HEADER-->
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
            <li class="d1f"><a href="../">HOME</a></li>
              <li class="dropdown d1f">
        
                <a class="dropdown-toggle" data-toggle="dropdown">START BUSINESS</a>
                  <ul class="dropdown-menu dm1">
                
                     <img src="../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">START BUSINESS</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../start-business/private-limited-company" class="dnav">Private Limited Company</a></li>
                     

<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../start-business/one-person-company" class="dnav">One Person Company</a></li>
                     

<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../start-business/public-limited-company" class="dnav">Public Limited Company</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../start-business/limited-liability-partnership" class="dnav">Limited Liability Partnership </a></li> 
                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../start-business/Proprietorship-registration" class="dnav">Proprietorship Registration</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../start-business/Partnership-Registration" class="dnav">Partnership Registration</a></li>  
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../start-business/Section-8-Company" class="dnav">Section 8 Company Registartion</a></li>
                      
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
                  </ul>
        
              </li>   

        <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown" >MANAGE BUSINESS</a>
            <ul class="dropdown-menu dm2" style="">
             <img src="../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">MANAGE BUSINESS</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../manage-business/name-change-company" class="dnav">Name Change Of Company</a></li>
                     

<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../manage-business/address-change-company" class="dnav">Address Change Of Company</a></li>
                     

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../manage-business/directors-partners-change" class="dnav">Directors Partners Change</a></li> 
                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../manage-business/Authorized-share-capital-increase" class="dnav">Authorised Share Capital Increase</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../manage-business/change-moa-aoa" class="dnav">Change in Moa and Aoa</a></li>  

                       <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../manage-business/fast-track-exit" class="dnav">Fast Track Exit</a></li> 
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
          
            </ul>
        
        </li>

            <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown" >COMPLIANCES</a>
            <ul class="dropdown-menu dm3" style="">
             <img src="../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">COMPLIANCES</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../compliances/income-tax-returns" class="dnav">Income Tax Returns</a></li>
                     

<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../compliances/tds-returns" class="dnav">TDS Returns</a></li>
                     

<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../compliances/vat-sales-tax-returns" class="dnav">VAT Sales Tax Returns</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../compliances/service-tax-returns" class="dnav">Service Tax Returns</a></li> 

                       
                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../compliances/excise-returns" class="dnav">Excise Returns</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../compliances/gst-compliances" class="dnav">GST Compliances</a></li>  
                  
                      
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../compliances/gst-migration" class="dnav">GST Migration</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../compliances/next-nbfc-compliances" class="dnav">Next NBFC Compliance</a></li>
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
            
            </ul>
        
        </li>

            <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown" >DOWNLOADS</a>
            <ul class="dropdown-menu dm4" style="">
            <img src="../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links">

                      <div class="divd1header" ><span class="d1Header">DOWNLOADS</span></div>
                      <ul class="d1Links">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../downloads/companies-act-documents" class="dnav">Companies Act Documents</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../downloads/securities-law-documents" class="dnav">Securities Law Documents </a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../downloads/income-tax-documents" class="dnav">Income tax Documents</a></li> 
                      </ul> 
                     
                         <ul class="d1Links">
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../downloads/foreign-exchange-management" class="dnav">Foreign Exchange Management</a></li>  
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../downloads/trademark-documents" class="dnav">Trademark Documents</a></li>
                      
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../downloads/copyright-documents" class="dnav">Copyright Document</a></li>
                    </ul></div></div>
                    <div class="drop-footer">
                      <span>Subscribe To Updates From Us</span>
                    </div>
          
            </ul>
        
        </li>

    
         
            

        <li class="dropdown d1f">
        
          <a class="dropdown-toggle" data-toggle="dropdown">GOVT. LICENSING</a>
            <ul class="dropdown-menu dm5" style="">
              <img src="../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links1">

                      <div class="divd1header1" ><span class="d1Header">GOVT. LICENSING</span></div>
                      <ul class="d1Links1">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../government-licensing/micro-small-medium-enterprises" class="dnav">Micro Small And Medium Enterprises</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../government-licensing/pf-esi-registration" class="dnav">PF And Esi Registration</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../government-licensing/pollution-licenses" class="dnav">Pollution Licenses</a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../government-licensing/import-export-code" class="dnav">Import Export Code</a></li> 
                      </ul> 
                     </div>
                         <div class="links2">

                      <div class="divd1header1" ><span class="d1Header">PROTECT BUSINESS</span></div>
                         <ul class="d1Links1">

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../government-licensing/protect-business/copyright-registration" class="dnav">Copyright Registration</a></li>  
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../government-licensing/protect-business/trademark-registration" class="dnav">Trademark Registration</a></li>
                      
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../government-licensing/protect-business/patent-registration" class="dnav">Patent Registration</a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../government-licensing/protect-business/iso-registration" class="dnav">ISO Registration</a></li>
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
                  <img src="../images/logo.png" class="d1">
                        <div class="drop-header">
                         <div class="links11">

                      <div class="divd1header2" ><span class="d1Header">CA</span></div>
                      <ul class="d1Links22">
                     
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../students/ca/past-year-papers" class="dnav">Past Year Papers</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../students/ca/diagrams" class="dnav">Diagrams </a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../students/ca/study-material" class="dnav">Study Material</a></li>

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../students/ca/rtp" class="dnav">RTP</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../students/ca/training" class="dnav">Training</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../students/ca/coaching" class="dnav">Coaching</a></li> 
                      </ul> 
                     </div>
                         <div class="links11">

                      <div class="divd1header2" ><span class="d1Header">CS</span></div>
                         <ul class="d1Links22">
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../students/csa/past-year-papers" class="dnav">Past Year Papers</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../students/csa/diagrams" class="dnav">Diagrams</a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../students/csa/study-module" class="dnav">Study Module</a></li>


                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../students/csa/training" class="dnav">Training</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../students/csa/coaching" class="dnav">Coaching</a></li> 
                    </ul></div>
                    <div class="links11">

                      <div class="divd1header2" ><span class="d1Header">CMA</span></div>
                      <ul class="d1Links22">
<li><span class="glyphicon glyphicon-hand-right"></span> <a href="../students/cma/past-year-papers" class="dnav">Past Year Papers</a></li>
                     
                     
<li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../students/cma/diagrams" class="dnav">Diagrams </a></li>
                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../students/cma/study-module" class="dnav">Study Module</a></li>


                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../students/cma/training" class="dnav">Training</a></li> 

                      <li> <span class="glyphicon glyphicon-hand-right"></span> <a href="../students/cma/coaching" class="dnav">Coaching</a></li> 
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

        <li class="d1f"><a href="">CONTACT US</a></li>
      </ul>
      <!--
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
      </ul>-->
        </div></div></nav></header>

        
        
    <!--END-HEADER-->

    <section class="c1">
        <div class="c1div"> 
      <span class="c1span" >WE WOULD LOVE TO HEAR FROM YOU</span><br><br>
       </div>
              
           
            <div class="c1ul"> 
           <ul class="c1li">
            <li  class="imp  "><a href="https://www.facebook.com/corporatedrafts" target="_blank" ><span class="icon-facebook icon-fb3"></span></a></li>

            <li class=""><a href="https://plus.google.com/b/114559504369930511115/114559504369930511115" target="_blank"><span class="icon-google-plus icon-google3"  ></span></a></li>
            <li  class=""><a href="https://www.linkedin.com/organization/13283422/admin/updates" target="_blank"><span class="icon-linkedin icon-twitter3"  ></span></a></li>
            <li  class="cr" ><a href="#" ><span class="icon-rss last icon-rss3" > </span></a></li>
            </ul>
              </div>
          
          <div class="contbtn1">
              <button class="btn btn-primary contbtn">Contact Us </button></div>
    </section>
    <section class="c2" >
      <div class="c2div">

      <div class="addressbar">
    
      <div class="adimg"></div>
      <div class="addiv">
      <div class="address">
      <br>
      <span>ADDRESS</span>
      <p>E-49, I-Floor, Jawahar Park <br>
         Laxmi Nagar, Delhi-110092
      </p>
      </div>
     <div class="address">
      <span>PHONE</span>
      <p>09953138698</p>
      </div>
       <div class="address">
      <span>EMAIL</span>
      <p>helpcorporatedrafts@gmail.com</p>
      </div>
      </div>
      </div>
<div class="c2form" id="map" >

  
    </div>
  </div>
    </section>


  


 <a href="#" class="back-to-top1">
 
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

     <script src="../scripts/script.js"></script>

     <script>
   function myMap() {
  var myCenter = new google.maps.LatLng(28.633155,77.274731);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter,
  animation:google.maps.Animation.BOUNCE});
  marker.setMap(map);

  var infowindow = new google.maps.InfoWindow({
    content: "<strong>"+"Corporate Drafts"+"</strong>"+"<br>"+ "E-49, I-Floor, Jawahar Park"+"<br>" +"Laxmi Nagar, Delhi-110092" +"<br>"+"India"
  });
  infowindow.open(map,marker);
}
       
     </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgmnLJaI41UzSuW2ITaWIdZw9YiVg3cTI&callback=myMap"></script>
</body>
</html>