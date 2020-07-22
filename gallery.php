<!DOCTYPE html>
<html lang="en-US">

<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">

<?php
include('header.php');
?>

<style type="text/css">


  /* Container needed to position the overlay. Adjust the width as needed */

.container {
  position: relative;
  width: 100%;
  padding-left:15px;
  
}

/* Make the image to responsive */
.imgcss{ height: 300px;
  width: 278px;
  padding-bottom: 10px;
/*width: 500px; */
 border-bottom-right-radius: 50px; 
  border-bottom-left-radius: 50px; 
  border-top-left-radius: 50px;
   border-top-right-radius: 50px;

}

/* The overlay effect (full height and width) - lays on top of the container and over the image */
.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding-bottom: 10px;
  background-color: #008CBAAA;
  overflow: hidden;
  width: 100%;
  height: 100%;
  transform: scale(0);
  transition: .2s ease;
   border-bottom-right-radius: 50px; 
    border-bottom-left-radius: 50px; 
     border-top-left-radius: 50px;
   border-top-right-radius: 50px;

}

/* When you mouse over the container, the overlay text will "zoom" in display */
.container:hover .overlay {
  transform: scale(1);
}

/* Some text inside the overlay, which is positioned in the middle vertically and horizontally */
.text {
  color: white;
  font-size: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.subtitile{
  color: black!important;
    padding-bottom: 10px;
}

</style>
<!-- Gallary -->
<section>
   <div id="head">
    <div class="line">
      <h1><b>Our Gallary</b></h1>
    </div>
  </div>

       <div id="content">
        <div class="margin">
            <div class="line">
               
  <div class="s-12 m-6 l-4">
        <div class="container">
         <img  class="imgcss" src="img/mp3.jpg" alt="Avatar">
          <p class="subtitile"> Best Man Power Suppliers.
          </p>
          <div class="overlay">
          <div class="text">Office Cleaning</div>
        </div>
        </div>
    </div>

  <div class="s-12 m-6 l-4">
    <div class="container">
      <img  class="imgcss" src="img/gallary.jpeg" alt="Avatar">
      <p class="subtitile">Housekeeping work like Loading,Unloading.
      </p>
      <div class="overlay">
      <div class="text">Man Power Supply</div>
      </div>
    </div>
  </div>

  <div class="s-12 m-6 l-4">
      <div class="container">
      <img  class="imgcss" src="img/mp2.jpeg" alt="Avatar">
      <p class="subtitile"> We provide Electrician Turner Driver.
      </p>
      <div class="overlay">
      <div class="text">Skilled/unskilled Labour</div>
      </div>
      </div>
  </div>

  <div class="s-12 m-6 l-4">
    <div class="container">
      <img  class="imgcss" src="img/mp7.jpg" alt="Avatar">
      <p class="subtitile">We Offered the jobs Production Manager,Store Manager.
      </p>
      <div class="overlay">
      <div class="text">Industrial Labour</div>
      </div>
    </div>
  </div>

<div class="s-12 m-6 l-4">
    <div class="container">
      <img  class="imgcss" src="img/mp4.jpg" alt="Avatar">
      <p class="subtitile">Best Construction Provide Design Engineer.
      </p>
      <div class="overlay">
      <div class="text">House Keeping Labours</div>
      </div>
    </div>
</div>

<div class="s-12 m-6 l-4">
  <div class="container">
      <img  class="imgcss" src="img/mp5.jpg" alt="Avatar">
      <p class="subtitile">We Provide the Office work Employees.
      </p>
      <div class="overlay">
      <div class="text">Job Works</div>
      </div>
  </div>
</div>

<div class="s-12 m-6 l-4">
  <div class="container">
      <img  class="imgcss" src="img/mp6.jpg" alt="Avatar">
      <p class="subtitile">We Provide the Gardener for Gardening services.
      </p>
      <div class="overlay">
      <div class="text">Gardening</div>
      </div>
  </div>
</div>

<div class="s-12 m-6 l-4">
    <div class="container">
      <img  class="imgcss" src="img/mp8.jpg" alt="Avatar">
      <p class="subtitile">Unskilled Employees provider.
      </p>
      <div class="overlay">
      <div class="text">Supervisor</div>
      </div>
    </div>
  </div>

<div class="s-12 m-6 l-4">
    <div class="container">
      <img  class="imgcss" src="img/image8.jpeg" alt="Avatar">
      <p class="subtitile">Skilled Employees of MPEnterprises.
      </p>
      <div class="overlay">
      <div class="text">Production Manager</div>
      </div>
    </div>
  </div>



</div>
</div>
</div>


<!-- Fourth Block -->

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
                      competent and trusted workforce.They are inducted after verification of credentials,proof of
                      residence last employment record, group behavior etc.
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
#fourth-block{
  padding-bottom: 20px;
  padding-top: 20px;
  text-align: center;
}
</style>


