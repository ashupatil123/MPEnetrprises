<?php
include('header.php');
?>

<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">

<section>
     <div id="head">
        <div class="line">
              <h1><b> Connect with Us</b></h1>
            </div>
         </div>
         <div id="content" class="left-align contact-page">
            <div class="line">
               <div class="margin">
                <div class="s-12 l-6">
                     <strong><h2>OUR OFFICE</h2></strong>
                     <address>
                     <strong><p><i class="icon-home icon"></i> 
                     Registered Office:</p></strong>
                      <div class="add-pad">
                         Office - C38,Third Floor, Bhosale garden society, Opposite Of Tiranga Hotel, Near Sahyadri Hospital, Hadapsar, 411028
                        <p>Mobile: 9921916293 / 9420402039 / 8208666545</p>
                        </div>

                      <strong><p><i class="icon-users icon"></i>
                      Corporate Office: </p></strong>
                          <div class="add-pad"> 
                            Kumar Prymus,
                           Pune-Solapur road,
                           Near by Kirloskar bridge,
                           Hadapsar,Pune,411028
                          <p>Contact: 02026812686</p>
                         </div>
                      
                      
                       <strong> <p><i class="icon-globe_black icon"></i>
                         www.mpenterprises.in</p></strong>
                       <strong> <p><i class="icon-mail icon"></i> mpenterprises453@gmail.com</p></strong>
                     </address>
                     <br />
                  </div>


            <div class="s-12 l-6">
                  <h2>CONTACT US</h2>
                <form method="post" class="customform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <div class="s-12 l-7"><input name="email" placeholder="Your e-mail" title="Your e-mail" type="text" required autofocus/></div>

                    <div class="s-12 l-7"><input name="name" placeholder="Your name" title="Your name" type="text" required /></div>

                    <div class="s-12"><textarea placeholder="Your massage" name="text" rows="5" required></textarea></div>

                    <div class="s-12 m-6 l-4"><button type="submit" name="submit">Submit Response</button></div>
                </form>
              </div>
            </div>
          </div>
        </div>



<?php 
if(isset($_POST['submit']))
{     
$to = $_POST['email'];
$from = 'ashvini.patil@nlpcube.com';
        $subject = "Email Confirmation";
         
         $message = "<p>Your Email from $from to $to has been Confirmed.</p>";

         $header = "From:$from \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n"; 
         $retval = mail ($to,$subject,$message,$header); 
}
 ?> 

<style type="text/css">
.map-hw{
    max-width: 100%;
   width: 100%;
  height: 500px;
  }
  .add-pad{
    padding-left: 40px;

  }
  .s-12{
    padding-top: 10px;
  }
  
</style>

<!-- MAP -->

  <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121074.86752500964!2d73.86214107657659!3d18.50223935900589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c2087779c215%3A0x5eaf7cf52b4e8a11!2sM.P.Enterprises%20(Labour%20Contractor%20in%20Pune)!5e0!3m2!1sen!2sin!4v1576123603081!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
                    <p class="s-12 m-12 l-8 center">We are working professionally and efficiently regarding record keeping of all companies.
                     All the records under the Labour Act. EPFO Act. & ESIC Act. Etc. is maintained properly & timely.
                    </p>
                  </div>
               </div>
            </div><br></br>
            <a href="https://www.facebook.com/pages/Vision-Design-graphic-ZOO/154664684553091"><i class="fa fa-facebook circle"></i></a>
            <a href="https://twitter.com/MyResponsee"><i class="fa fa-twitter circle"></i></a>
           <a href="https://accounts.google.com/signin/v2/usernamerecovery?hl=en&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fa fa-google-plus circle"></i></a>

         </div>
      </section>
 
  <?php
include('footer.php');
?>

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

