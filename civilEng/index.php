<!-- PHP Code -->
      <?php
         class GenralInfo{
         
         private $companyName = "Kkonstruction Solutions Ltd" ;
         private $firstName = "Eng.Paul Aubin ";
         private $lastName = " ";
         private $designation = "";
         private $website = "http://www.abcstudycentre.com";
        
         private $facebookLink = "11";
         private $instagramLink = "12";
         private $twitterLink = "13";
         private $linkedlnLink = "14";
         private $youtubeChannelLink = "15";
         private $logoUrl = "16";

         // WDU info
        private $wduUrl = "https://wedigitizeu.com/index.html";

        function setWduUrl($wduUrl) { $this->wduUrl = $wduUrl; }
       function getWduUrl() { return $this->wduUrl; }
         
         function setCompanyName($companyName) { $this->companyName = $companyName; }
         function getCompanyName() { return $this->companyName; }
         function setFirstName($firstName) { $this->firstName = $firstName; }
         function getFirstName() { return $this->firstName; }
         function setLastName($lastName) { $this->lastName = $lastName; }
         function getLastName() { return $this->lastName; }
         function setDesignation($designation) { $this->designation = $designation; }
         function getDesignation() { return $this->designation; }
         function setPrimaryPhoneNo($primaryPhoneNo) { $this->primaryPhoneNo = $primaryPhoneNo; }
         function getPrimaryPhoneNo() { return $this->primaryPhoneNo; }
         function setSecondaryPhoneNo($secondaryPhoneNo) { $this->secondaryPhoneNo = $secondaryPhoneNo; }
         function getSecondaryPhoneNo() { return $this->secondaryPhoneNo; }
         function setWhatsAppNo($whatsAppNo) { $this->whatsAppNo = $whatsAppNo; }
         function getWhatsAppNo() { return $this->whatsAppNo; }
         function setAddess($addess) { $this->addess = $addess; }
         function getAddess() { return $this->addess; }
         function setEmailId($emailId) { $this->emailId = $emailId; }
         function getEmailId() { return $this->emailId; }
         function setWebsite($website) { $this->website = $website; }
         function getWebsite() { return $this->website; }
         function setGoogleMap($googleMap) { $this->googleMap = $googleMap; }
         function getGoogleMap() { return $this->googleMap; }
         function setFacebookLink($facebookLink) { $this->facebookLink = $facebookLink; }
         function getFacebookLink() { return $this->facebookLink; }
         function setInstagramLink($instagramLink) { $this->instagramLink = $instagramLink; }
         function getInstagramLink() { return $this->instagramLink; }
         function setTwitterLink($twitterLink) { $this->twitterLink = $twitterLink; }
         function getTwitterLink() { return $this->twitterLink; }
         function setLinkedlnLink($linkedlnLink) { $this->linkedlnLink = $linkedlnLink; }
         function getLinkedlnLink() { return $this->linkedlnLink; }
         function setYoutubeChannelLink($youtubeChannelLink) { $this->youtubeChannelLink = $youtubeChannelLink; }
         function getYoutubeChannelLink() { return $this->youtubeChannelLink; }
         function setLogoUrl($logoUrl) { $this->logoUrl = $logoUrl; }
         function getLogoUrl() { return $this->logoUrl; }
   }
         
         class AboutUs{
         
         private $aboutUs ='<p style="color:black">"<strong>Kkonstruction solutions Ltd"
</strong>
<p style="color:black"> Modern architectural design including(3DModelling and Free-interior designing) 
.Structural design and detailing
.BOQ (estimation and costing)
.General Construction with Consultants.
. Engineering Software shortcourses</strong>. "</p>

';
         
         function setAboutUs($aboutUs) { $this->aboutUs = $aboutUs; }
         function getAboutUs() { return $this->aboutUs; }
         
         }

class YoutubeVideos{

   private $youtubeUrl;

   function setYoutubeUrl($youtubeUrl) { $this->youtubeUrl = $youtubeUrl; }
   function getYoutubeUrl() { return $this->youtubeUrl; }


}

class Address {
private $address;
private $gMapUrl;
private $email;
private $mobile;
private $area;

function setAddress($address) { $this->address = $address; }
function getAddress() { return $this->address; }
function setGMapUrl($gMapUrl) { $this->gMapUrl = $gMapUrl; }
function getGMapUrl() { return $this->gMapUrl; }
function setEmail($email) { $this->email = $email; }
function getEmail() { return $this->email; }
function setMobile($mobile) { $this->mobile = $mobile; }
function getMobile() { return $this->mobile; }
function setArea($area) { $this->area = $area; }
function getArea() { return $this->area; }


}
class Services{
  private $services;

function setServices($services) { $this->services = $services; }
function getServices() { return $this->services; }
}
class ShareLink{
private $shareLink;

function setShareLink($shareLink) { $this->shareLink = $shareLink; }
function getShareLink() { return $this->shareLink; }

}


         
         $genralInfo = new GenralInfo();
         $aboutUs = new AboutUs();
         //Youtube Video Section
         $youtubeVideo1 = new YoutubeVideos();
         $youtubeVideo1->setYoutubeUrl("https://www.youtube.com/embed/tvwjt25IJAs");
         $youtubeVideo2 = new YoutubeVideos();
         $youtubeVideo2->setYoutubeUrl("https://www.youtube.com/embed/PArN-9gkS30");
         // Mathikere Address
         $mattikereAddress = new Address();
      
         $mattikereAddress->setAddress('Address: country:Kenya, City : Nairobi
Street:Kangundo Road
House: First floor, Governor Plaza , Suite No.C8');
         $mattikereAddress->setEmail('aubindeco@gmail.com');
         $mattikereAddress->setArea('Nairobi');
         $mattikereAddress->setMobile('+254727017220');
         $mattikereAddress->setGMapUrl('https://g.page/abcstudycenter?share');

         

         //Basaveshwara Nagr Address
         $basveshwaraAddress = new Address();

         $basveshwaraAddress->setAddress('');
         $basveshwaraAddress->setEmail('');
         $basveshwaraAddress->setArea('');
         $basveshwaraAddress->setMobile('');
         $basveshwaraAddress->setGMapUrl('');

         //Services
         $service = new Services();
         $service->setServices('<p style="text-align: left;"><strong><span class="elementor-icon-list-text">&nbsp;IX, X (STATE, CBSE, ICSE)</span></strong></p>
<p style="text-align: left;"><strong><span class="elementor-icon-list-text">&nbsp;I &amp; II PUC COMMERCE with CA-CPT</span></strong></p>
<p style="text-align: left;"><strong><span class="elementor-icon-list-text">&nbsp;I &amp; II PUC SCIENCE<br />&nbsp;(PCMB / PCMCs / PCME)</span></strong></p>
<p style="text-align: left;"><strong><span class="elementor-icon-list-text">&nbsp;With JEE / NEET / K-CET / <span style="color: #ff6600;">PRACTICLES</span></span></strong></p>');
              
         //Share Link
         $shareLink = new ShareLink();

         $shareLink->setShareLink('http://wedigitizeu.com/dvcard/abc-study-centre');
         
         
         echo $genralInfo->getFacebookLink();
         echo $genralInfo->getTwitterLink();
         echo $genralInfo->getLinkedlnLink();
         echo $genralInfo->getYoutubeChannelLink();
         echo $genralInfo->getLogoUrl();


         ?>
      <!-- PHP Code Ends -->


<!DOCTYPE html>
<html>
   <head>
      <head>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
         <script src="jquery.bvalidator.min.js"></script>
         <script src="themes/gray4/gray4.js"></script>
         <script src="themes/presenters/default.min.js"></script>
         <link  rel="stylesheet" href="themes/gray4/gray4.css" />



        

         <!-- HTML Meta Tags -->
         <title><?php  echo $genralInfo->getCompanyName();?></title>
         <meta name = "title" content="<?php  echo $genralInfo->getCompanyName();?>">
         <meta name = "author" content="WDU"> 
         <meta name = "keywords" content="Digital Visiting Card, Visiting Card, Online visiting card">
         <meta name = "description" content="ABC is committed to the overall success of students. We assure students to provide an amazing success through the correct inputs of knowledge">
         <meta name = "language" content="English">
         <meta http-equiv = "Content-Type" content="text/html; UTF-8">
            <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
         <!-- Font-icon css-->
         <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

         

         <link rel='stylesheet' href='panel/all.css'>
         <link rel="stylesheet" href="panel/awesome.min.css">
         <!-- Required css  -->
         
         <link rel="stylesheet" href="css.css" >
         <link rel="stylesheet" href="mobile_css.css" >
         <script src="master_js.js"></script> -->
         <link rel="stylesheet" href="panel/card_css4.css" >

         <script>
            $(document).ready(function(){
               $('.mobile_home').on('click',function(){
                  $('#header').toggleClass('add_height');
                  
               })
            })
            
         </script>

         <style>
            .full_page_alert {position: fixed;
            width: -webkit-fill-available;
            height: -webkit-fill-available;
            background: white;
            top: 0;
            z-index: 9999999;
            padding: 63px;
            text-align: center;}
         </style>
        
   </head>
   <body>
      
      <!----------------------copy from here ------------------------->
      <div class="card" id="home" >
         <!-- <div class="view_counter"><i class="fa fa-eye"></i> <br>36</div> -->
         <div class="card_content">
            <img src="images/logo.jpg">
               <div class="card_content2">
           <h2 style="font-size:16px;color: #dedede;">Modern architectural design.</h2>
            <h2><?php echo $genralInfo->getCompanyName();?></h2>
          <!--   <p><span>SSLC | </span><span> CBSE | </span><span>PUC | </span><span>NEET | </span>
               <span>JEE |</span><span> KCET</span>
            </p><br> -->
            <p><?php echo $genralInfo->getFirstName()." ".$genralInfo->getLastName(); ?></p>
            <p><?php echo $genralInfo->getDesignation(); ?></p>
            <!-- 
               -->
         </div>
         <div class="dis_flex">
            <a href="tel:<?php echo  $mattikereAddress->getMobile();?>" target="_blank">
               <div class="link_btn"><i class="fa fa-phone"></i> Call</div>
            </a>
            <a href="https://api.whatsapp.com/send?phone=<?php echo '+91'.$mattikereAddress->getMobile();?>&amp;text=Hi%2C+ABC+Study+Centre" target="_blank">
               <div class="link_btn"><i class="fa fa-whatsapp"></i> WhatsApp</div>
            </a>
            <a href="<?php echo $mattikereAddress->getGMapUrl(); ?>" target="_blank">
               <div class="link_btn"><i class="fa fa-map-marker"></i> <?php echo $mattikereAddress->getArea();?></div>
            </a>
           <!--  <a href="<?php echo $basveshwaraAddress->getGMapUrl(); ?>" target="_blank">
               <div class="link_btn"><i class="fa fa-map-marker"></i> <?php echo $basveshwaraAddress->getArea();?> </div>
            </a> -->
            <a href="Mailto:<?php echo $mattikereAddress->getEmail();?>" target="_blank">
               <div class="link_btn"><i class="fa fa-envelope"></i> Mail</div>
            </a>
            <a href="<?php echo $genralInfo->getWebsite();?>" target="_blank">
               <div class="link_btn"><i class="fa fa-globe"></i> Website</div>
            </a>
         </div>
         
         <div class="contact_details">
            <strong>Branch : <span style='color: #ff6600;'><?php echo $mattikereAddress->getArea();?></span></strong>
            <div class="contact_d">
               <i class="fa fa-phone" aria-hidden="true"></i>
               <p><?php echo  $mattikereAddress->getMobile();?></p>
            </div>
            <div class="contact_d">
               <i class="fa fa-map-marker"></i>
               <p>
                 <?php echo  $mattikereAddress->getAddress();;?>                           
               </p>
            </div>
            <div class="contact_d">
               <i class="fa fa-envelope"></i>
               <p><?php echo  $mattikereAddress->getEmail();?></p>
            </div>
            
         </div>

        <!--  <div class="contact_details">
            <strong>Branch : <span style='color: #ff6600;'><?php echo $basveshwaraAddress->getArea();?></span></strong>
            <div class="contact_d">
               <i class="fa fa-phone" aria-hidden="true"></i>
            <p><?php echo  $basveshwaraAddress->getMobile();?></p>
            </div>
            <div class="contact_d">
               <i class="fa fa-map-marker"></i>
               <p>
                 <?php echo  $basveshwaraAddress->getAddress();;?>                           
               </p>
            </div>
            <div class="contact_d">
               <i class="fa fa-envelope"></i>
               <p><?php echo  $basveshwaraAddress->getEmail();?></p>
            </div>
            
         </div> -->


         <div class="dis_flex">
            <div class="share_wtsp">
               <form action="https://api.whatsapp.com/send" id="wtsp_form" target="_blank">
                  <input type="text"  name="phone" placeholder="WhatsApp Number with Country code  " value="+91">
                  <input type="hidden" name="text" value="<?php echo $shareLink->getShareLink();?>">
                  <div class="wtsp_share_btn" onclick="subForm()">Share on <i class="fa fa-whatsapp"></i> </div>
               </form>
               <script>
                  $(document).ready(function(){
                     $('.wtsp_share_btn').on('click',function(){
                        $('#wtsp_form').submit();
                     })
                     
                  })
               </script>
            </div>
         </div>
         <div class="dis_flex">
            <a href="contact_abc_center.vcf?id=117">
               <div class="big_btns">Save to Contacts <i class="fa fa-download"></i></div>
            </a>
            <div class="big_btns" id="share_box_pop">Share <i class="fa fa-share-alt"></i></div>
            <div class="share_box">
               <div class="close" id="close_sharer">&times;</div>
               <p>Share My Digital Card </p>
               <a href="https://api.whatsapp.com/send?text=<?php echo  $shareLink->getShareLink(); ?>">
                  <div class="shar_btns">
                     <i class="fa fa-whatsapp" id="whatsapp2"  target="_blank"></i>
                     <p>WhatsApp</p>
                  </div>
               </a>
               <a href="sms:?body=<?php echo  $shareLink->getShareLink(); ?>" target="_blank">
                  <div class="shar_btns">
                     <i class="fa fa-comment" ></i>
                     <p>SMS</p>
                  </div>
               </a>
               <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo  $shareLink->getShareLink(); ?>" target="_blank">
                  <div class="shar_btns">
                     <i class="fa fa-facebook" ></i>
                     <p>Facebook</p>
                  </div>
               </a>
               <a href="https://twitter.com/intent/tweet?text=<?php echo  $shareLink->getShareLink(); ?>" target="_blank">
                  <div class="shar_btns">
                     <i class="fa fa-twitter"></i>
                     <p>Twitter</p>
                  </div>
               </a>
               <a href="#" target="_blank">
                  <div class="shar_btns">
                     <i class="fa fa-instagram"></i>
                     <p>Instagram</p>
                  </div>
               </a>
               <a href="https://www.linkedin.com/cws/share?url=<?php echo  $shareLink->getShareLink(); ?> " target="_blank">
                  <div class="shar_btns">
                     <i class="fa fa-linkedin"></i>
                     <p>Linkedin</p>
                  </div>
               </a>
            </div>
            <script>
               $(document).ready(function(){
                  $('#close_sharer,#share_box_pop').on('click',function(){
                     $('.share_box').slideToggle();
                  });
               })
               
               
            </script>
         </div>
         <div class="dis_flex">
         </div>
      </div>
      <div class="card2">
         <h3>Scan QR Code to download the contact details</h3>
         <img class = "img-responsive" src="images/dvQRCode.png" id="qr_code_d">
      </div>
      <!--------------about us ---------------------------> 
      <div class="card2" id="about_us">
         <h3>About Us</h3>
         <?php
            echo $aboutUs->getAboutUs();
            
            ?>
      </div>

      <div class="card2" id="product_services">
         <h3>We Conduct Coaching Classes for:</h3>
        
           <span style="color:black"> <?php echo $service->getServices();?></span> 
            
            
      </div>


      <!------------shopping online-------------------------->
      <!--------------youtube videos--------------------------->  
      <div class="card2" id="youtube_video">
         <h3>Youtube Videos</h3>
        
         <iframe src="<?php echo  $youtubeVideo1->getYoutubeUrl(); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      
      </div>
      </div>
      <!----------image gallery----------------------->     
      <div class="card2" id="gallery">
         <h3>Image Gallery</h3>

         <div class="img_gall">
            <img src="images/3.jpg">
         </div>
         <div class="img_gall">
            <img src="images/1.jpg">
         </div>

         <div class="img_gall">
            <img src="images/2.jpg">
         </div>
       <div class="img_gall">
            <img src="images/4.jpg">
         </div>
      </div>

       <!----------Study material----------------------->     
<!--       <div class="card2" id="study_material">
         <h3>Study Material</h3>

         <div class="img_gall">
            <img src="images/study4.jpg">
         </div>

         <div class="img_gall">
            <img src="images/study2.jpg">
         </div>

           <div class="img_gall">
            <img src="images/study3.jpg">
         </div>

           

           <div class="img_gall">
            <img src="images/study5.jpg">
         </div>
         
      </div> -->

      
      <!----------payment info----------------------->   
      <!----------email to  info-----------------------> 
      <div class="card2" id="enquery">
         <form data-bvalidator-validate action="#" method="post">
            <h3>Contact Us</h3>
            <input type="" name="c_name" data-bvalidator="required" placeholder="Enter Your Name" required>
            <input type="" name="c_contact" maxlength="13"  data-bvalidator="required" placeholder="Enter Your Mobile No" required>
            <input type="email" name="c_email"   data-bvalidator="required" placeholder="Enter Your Email Address">
            <textarea name="c_msg"  data-bvalidator="required" placeholder="Enter your Message or Query" required></textarea>
            <input  type="submit" Value="Send!" name="email_to_client">
         </form>
         

         <br>
         <br>
         <br>
               <a href="<?php echo $genralInfo->getWduUrl(); ?>"><div class="create_card_btn">We Digitize U || Digital Support and Services || 2021</div></a>

         <style>
            .create_card_btn {
            background: linear-gradient(45deg, black, black);
            color: white;
            width: auto;
            padding: 20px;
            border-radius: 2px;
            line-height: 0.8;
            margin: 11px auto;
            font-size: 9px;
            text-align: center;
            }
            #svg_down{position: fixed;
            bottom: 0;
            z-index: -1;
            left: 0;}
         </style>
         <br>
         <br>
         <br>
         <br>
         <div class="menu_bottom">
            <div class="menu_container">
               <div class="menu_item" onclick="location.href='#home'"><i class="fa fa-home"></i> Home</div>
               <div class="menu_item" onclick="location.href='#about_us'"><i class="fa fa-briefcase"></i>About Us</div>
               <div class="menu_item" onclick="location.href='#product_services'"><i class="fa fa-ticket"></i>Courses</div>
               <div class="menu_item" onclick="location.href='#study_material'"><i class="fa fa-book"></i>Study Material </div> 
               <div class="menu_item" onclick="location.href='#gallery'"><i class="fa fa-image"></i>Gallery</div>
               <div class="menu_item" onclick="location.href='#youtube_video'"><i class="fa fa-video-camera"></i>Youtube Videos</div>
               <!-- <div class="menu_item" onclick="location.href='#payment'"><i class="fa fa-money"></i>Payment</div> -->
               <div class="menu_item" onclick="location.href='#enquery'"><i class="fa fa-comment"></i>Enquery</div>
            </div>
         </div>
      </div>
   </body>
</html>