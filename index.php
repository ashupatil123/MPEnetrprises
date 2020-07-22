<!DOCTYPE html>
<html lang="en-US">

<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
<?php
include('header.php');
?>

<style type="text/css"> 
.banner-img-hw{ height:600px; } 
.txt{
   padding-top:20px;
}

.imgcss{
   height: 200px;
   max-width:280px;
   padding-right: 3px;  
  padding-bottom: 20px;
}

#third-block{
   padding-right:20px; 
   padding-left: 0px;
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
  width: 107%;
  height: 100%;
  transform: scale(0);
  transition:.2s ease;
  
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



<section class="section-paddind">
 <!-- CAROUSEL -->  
 	
         <div id="carousel">
            <div id="header-carousel" class="owl-carousel owl-theme">
              <div class="item">
                  <img class="banner-img-hw" src="img/newimg1.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9"><br></br><br></br><br></br>
                           <h2><b>The Finest Supplier of Manpower</b></h2>
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
                        <div class="s-12 l-9"><br></br><br></br><br></br><br></br>
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
                  <img class="banner-img-hw" src="img/newimg3.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9"><br></br><br></br><br></br><br></br>
                           <h2><b>Best Construction Theme Providers</b></h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>Requirement Construction Themes
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img class="banner-img-hw" src="img/newimg4.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9"><br></br><br></br><br></br>
                    <h2><b>Skilled / Unskilled Labour Provides</b></h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>We Provides Skilled and Unskilled Employees.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

<!-- FIRST BLOCK --> 	
         <div id="first-block">
            <div class="line">
               <h2><b>Some awesome blocks</b></h2>
             <p class="subtitile">
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-sli-people icon2x"></i>
                     <h3>Product</h3>
                     <p>We are a professionally managed company having a pool of professionals with a competent and trusted workforce.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-sli-shield icon2x"></i>
                     <h3>Service</h3>
                     <p>We Provide the Computerized Work,Daily site visit & supervision,Continual follow-up & supply review for customer’s satisfaction.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-sli-puzzle icon2x"></i>
                     <h3>Gallary</h3>
                     <p>Our Gallary Maintain in MPEnterprises like House Keeping,Labours,Skilled/Unskilled employee real demontration is here.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-sli-globe-alt icon2x"></i>
                     <h3>Contact</h3>
                     <p>Connect with our MPEnterprises team visit the our contact details are available for you available always services.</p>
                  </div>
               </div>
            </div>
         </div>

<!-- SECOND BLOCK --> 	
         <div id="second-block">
            <div class="line">
               <div class="margin-bottom">
                  <div class="margin">
                     <article class="s-12 l-8 center">
                        <h1><b>Our Vision</b></h1>
                        <p class="margin-bottom"><b>To be a leading  labours administrator in the region. Our aim is to enhance the well-being of our workforce progressively and promote the safety and health of those at work.To improve the utilization of human resources by providing a range of employment services to meet changes and needs in the labour market.To Ensure that risks to people's safety and health at work are properly managed by enforcement,education and promotion.</b></p>
                        <a class="button rounded-btn submit-btn s-12 l-4 center" href="product.php">Read more</a>  			
                     </article>
                  </div>
               </div>
            </div>
         </div>
<!-- GALLERY -->
	
<div id="third-block">
      <!-- <div class="line">-->
       <h2 class="txt"><b> gallery</b></h2>
      <p class="subtitile"><b>Manpower suppliers for Construction, multiplex and shopping malls.</b>
      </p>
  <div class="margin">

    <div class="s-12 m-6 l-3">
    <div class="container">
      <img  class="imgcss" src="img/mp3.jpg" alt="Avatar">
            <div class="overlay">
            <div class="text">Man Power Supply</div>
         </div>
   </div>
   </div>

      <div class="s-12 m-6 l-3">
         <div class="container">
            <img  class="imgcss" src="img/mp4.jpg" alt="Avatar">
            <div class="overlay">
            <div class="text">House Keeping Labours</div>
            </div>
         </div>
      </div>

      <div class="s-12 m-6 l-3">
         <div class="container">
            <img  class="imgcss" src="img/mp5.jpg" alt="Avatar">
            <div class="overlay">
            <div class="text">Skill/Unskilled Labours</div>
            </div>
         </div>
      </div>

      <div class="s-12 m-6 l-3">
         <div class="container">
            <img  class="imgcss" src="img/mp6.jpg" alt="Avatar">
            <div class="overlay">
            <div class="text">Gardening</div>
            </div>
         </div>
      </div>

   </div>
</div>


<!--Fourth Block-->


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
                     <p class="s-12 m-12 l-8 center">We are working professionally and efficiently regarding record keeping of all companies.
                     All the records under the Labour Act. EPFO Act. & ESIC Act. Etc. is maintained properly & timely.
                     </p>
                  </div>
               </div>
            </div>
            <br></br>

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
  #third-block{
    text-align: center;
  }
  #fourth-block{
  padding-bottom: 20px;
  padding-top: 20px;
  text-align: center;
}
  
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
