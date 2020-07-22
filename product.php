<!DOCTYPE html>
<html lang="en-US">

<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">


<?php
include('header.php');
?>

<style type="text/css"> 
.banner-img-hw{ height:500px; max-width: : 300px;}

.content-block{
   height: 300px;
   width: 300px;
   padding-top: 10px;
} 
.margin{
   padding-left: 150px;
  padding-top: 35px;
  padding-bottom:30px;
 
}
.txt{
   padding-top: 20px;
}
.imgcss{
   height: 200px;
   /*max-width:300px;*/
  max-width: 270px;
   padding-right: 3px; 
   padding-bottom: 20px; 
  
}

#third-block{
  padding-right:100px; 
   padding-left: 10px; 
   padding-top: 10px;
}

.container {
  position: relative;
  width: 100%;
  height: 100%;
  padding-left:15px;
}
.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBAAA;
  overflow: hidden;
  width: 100%;
  height: 100%;
  transform: scale(0);
  transition: .2s ease;

}

/* When you mouse over the container, the overlay text will "zoom" in display */
.container:hover .overlay {
  transform: scale(1);
  width: 320px;
}

/* Some text inside the overlay, which is positioned in the middle vertically and horizontally */
.text {
  color:white;
  font-size: 30px;
  position: absolute;
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}


</style>


<section>
   <div id="head">
      <div class="line">
         <h1><b>Our Products</b></h1>
      </div> 
   </div>

<!-- CAROUSEL -->    
      <div id="carousel">
         <div id="header-carousel" class="owl-carousel owl-theme">
            <div class="item">
               <img class="banner-img-hw" src="img/newimg3.jpg" alt="">      
               <div class="carousel-text">
                  <div class="line">
                     <div class="s-12 l-9"><br><br><br>
                        <h2><b>The Finest Supplier of Manpower</b> </h2>
                     </div>
                     <div class="s-12 l-9">
                        <p>The Finest supplier of Manpower
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <img class="banner-img-hw" src="img/newimg4.jpg" alt="">      
               <div class="carousel-text">
                  <div class="line">
                     <div class="s-12 l-9"><br><br><br>
                  <h2><b>Industrial Labours & House Keeping</b></h2>
                     </div>
                     <div class="s-12 l-9">
                        <p>Job Work Resources
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <img class="banner-img-hw" src="img/newimg1.jpg" alt="">      
               <div class="carousel-text">
                  <div class="line">
                     <div class="s-12 l-9"><br><br><br><br>
                        <h2><b>Skilled / Unskilled Employees</b></h2>
                     </div>
                     <div class="s-12 l-9">
                        <p>We Provides Skiled and Unskilled Employee.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <img class="banner-img-hw" src="img/newimg4.jpg" alt="">      
               <div class="carousel-text">
                  <div class="line">
                     <div class="s-12 l-9"><br><br><br>
                        <h2><b>Best Construction Themes Provides</b></h2>
                     </div>
                     <div class="s-12 l-9">
                        <p>Requirement Construction Themes 
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


<style>
   @media screen and (min-width:320px) and (max-width:480px){
      .margin { padding: 0 0%; }
      #third-block { padding: 0}
      .content-block { width: 100% }
   }
   @media screen and (min-width:480px) and (max-width:575px){
      .margin { padding: 0 5%; }
      .content-block { width: 100% }
      .imgcss { max-width: 500px; width:100%;}
      #third-block { padding: 0}
   }
</style>
 <!-- <div id="content"> -->
   <!-- <div class="margin"> -->
    <!-- <div class="line"> -->
      <div class="s-12 m-6 l-4">
         <div class="content-block margin-bottom text-center">
         <i class="icon-users icon2x"></i>
         <h3><b>Automation industry</b></h3>
         <p>We are offering knowledge person in Mechanical AutoCAD engineering and
            technology.This includes to the design and production of various services.</p>
         </div>
      </div>
      <div class="s-12 m-6 l-4">
         <div class="content-block margin-bottom text-center">
         <i class="icon-math_black icon2x"></i>
         <h3><b>Engineering Industry</b></h3>
         <p>Industrial engineers design and change how things are done to increase quality,
          safety and productivity.We provide mechanical, technician, electrical in engineering industry.</p>
         </div>
      </div>
      <div class="s-12 m-6 l-4">
         <div class="content-block margin-bottom text-center">
         <i class="icon-layout_radial icon2x"></i>
         <h3><b>Automation showroom</b></h3>
         <p>We are offering the jobs as a sales and marketing, driver, technician, ITI fitter in Automobile showroom.</p>
         </div>
      </div>
      <div class="s-12 m-6 l-4">
         <div class="content-block margin-bottom text-center">
         <i class="icon-home icon2x"></i>
         <h3><b>Sugar Industry</b></h3>
         <p>We are providing the Machine Operators mainly work with heavy machinery, helper,
            packaging, etc. Operator assists with the installation of their equipment and helps maintain it by performing periodic tests.</p>
         </div>
      </div>

  <div class="s-12 m-6 l-4">
         <div class="content-block margin-bottom text-center">
            <i class="icon-data_science_black icon2x"></i>
            <h3><b>Commercial complex</b></h3>
            <p>We are providing data entry operator, receptionist, sales executive, cashier,
                office boy, office assistant.</p>
         </div>
      </div>

      <div class="s-12 m-6 l-4">
      <div class="content-block margin-bottom text-center">
         <i class="icon-reorder icon2x"></i>
         <h3><b>Foundry</b></h3>
         <p>A foundry  worker  takes  up a  wide  range of  tasks  to  make  products that involve  melting  and  pouring  metal.</p>
         </div>
      </div>
     
      <div class="s-12 m-6 l-4">
         <div class="content-block margin-bottom text-center">
            <i class="icon-sli-basket-loaded icon2x"></i>
            <h3><b>Shopping complex-</b></h3>
            <p>We are providing cashier, sales executive, housekeeping, accountant, etc in
                  shopping complex.</p>
            </div>
         </div>

      <div class="s-12 m-6 l-4">
        <div class="content-block margin-bottom text-center">
         <i class="icon-joystick icon2x"></i>
         <h3><b>Service Industry</b></h3>
         <p>We have catered to the needs of a number of industries including retail warehousing, various supply chain services, engineering,health care, hospitality, engineering etc.</p>
         </div>
      </div>
      <div class="s-12 m-6 l-4">
         <div class="content-block margin-bottom text-center">
         <i class="icon-sli-wrench icon2x"></i>
         <h3><b>Government organization-</b></h3>
         <p>Tender based work in the government hospital, industry, etc.</p>
         </div>
      </div>
      
   </div>
<!-- </div>
</div> 
</div>          
</div> -->


<!-- GALLERY -->	
 <div id="third-block">
    <h2 class="txt"><b>Gallary</b></h2>
      <p class="subtitile"><b>Manpower suppliers for Construction,multiplex and shopping malls.</b></p>
      <div class="margin">

      <div class="s-12 m-12 l-3">
         <div class="container p-0 pb-4">
            <img  class="imgcss" src="img/mp3.jpg" alt="Avatar">
            <div class="overlay">
            <div class="text">Man Power Supply</div>
            </div>
         </div>
      </div>

      <div class="s-12 m-12 l-3">
         <div class="container p-0 pb-4">
            <img  class="imgcss" src="img/mp4.jpg" alt="Avatar">
            <div class="overlay">
            <div class="text">House Keeping Labours</div>
            </div>
         </div>
      </div>

      <div class="s-12 m-12 l-3">
         <div class="container p-0 pb-4">
            <img  class="imgcss" src="img/mp5.jpg" alt="Avatar">
            <div class="overlay">
            <div class="text">Skilled/Unskilled Labours</div>
            </div>
         </div>
      </div>

   <div class="s-12 m-12 l-3">
         <div class="container p-0 pb-4">
            <img  class="imgcss" src="img/mp6.jpg" alt="Avatar">
            <div class="overlay">
            <div class="text">Gardening</div>
            </div>
         </div>
      </div>

</div>
</div>
</div>  

<!-- Fourth Block -->
<style type="text/css">#fourth-block{
  padding-bottom: 20px;
  padding-top: 20px;
  text-align: center;
}</style>
<div id="fourth-block">
            <div class="line">
               <div id="news-carousel" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2><b>Our Introduction</b></h2>
                   <p class="s-12 m-12 l-8 center">M.P. Enterprises is an old Pune based organization specializes in providing multiple industrial
                     services to the Pune Corporate Sector, Chakan MIDC, Bhosari MIDC, Pimpri-Chinchwad MIDC,
                     Ranjangaon MIDC, Shiraval-Shindewadi MIDC,etc..
                     </p>
                  </div>
                  <div class="item">
                     <h2><b>Our Team</b></h2>
                     <p class="s-12 m-12 l-8 center">We are a professionally managed company having a huge pool of professionals with a
                     competent and trusted workforce. They are inducted after verification of credentials, proof of
                     residence, last employment record, group behavior etc.
                     </p>
                  </div>
                  <div class="item">
                     <h2><b>Services</b></h2>
                    <p class="s-12 m-12 l-8 center">We are working efficiently regarding record keeping of all companies.
                     All the records under the Labour Act. EPFO Act. & ESIC Act. Etc. is maintained properly & timely.
                     </p>
                  </div>
               </div>
            </div>
             <br>
            <a href="https://www.facebook.com/pages/Vision-Design-graphic-ZOO/154664684553091"><i class="fa fa-facebook circle"></i></a>
            <a href="https://twitter.com/MyResponsee"><i class="fa fa-twitter circle"></i></a>
           <a href="https://accounts.google.com/signin/v2/usernamerecovery?hl=en&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fa fa-google-plus circle"></i></a>
         </div>
      </section>      
<!-- FOOTER -->   
<?php
include('footer.php');
?> 
   </body>
</html>

<style type="text/css">

.circle{
   border-radius: 50%;
   margin: 0.15em;
   font-size: 2em;
   }
   
.fa-twitter{
   background: #4099FF;
   color: #FFFFFF;
  padding: 0.05em 0.07em;
   }

.fa-google-plus{
  color: #FFFFFF;
  background: #dd4b39;
  padding: 0.1em 0.1em;
  }  
.fa-facebook{
   background: #3B5998;
   color: #FFFFFF;
  padding: 0.05em 0.3em;
   }
</style>
