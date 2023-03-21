<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>
<body>
<?php include 'nav.php';?>

<div class="container-fluid contact">
  <div class="container contact-session">

    <div class=" card-session">
      <div class="row">
        <div class="col-md-7">
          <div class="contact-head">
            <h2>Get In Touch</h2>
            <p>we provide 24/7 assistance for the domain we 
             given youto which we give full access</p>
             <div class="contact-form">
              <input class="form-control " type="text" name="name" value="" placeholder=" Your name" required><br>
              <input class="form-control " type="text"  name="email" value="" placeholder=" your Email" required><br>
              <input class="form-control " type="phone"  name="phone" value="" placeholder="Phone Number" required><br>
              <textarea class="form-control " type="textarea"  name="message" value="" clos="15" rows="6" placeholder="Your message"></textarea><br>
               <div class="sendbtn">
                    
                <button class="redbtn">Send Message</button>    
                </div>
             </div>
          </div>
        </div>
        <div class="col-md-5  contact-img" style="margin:auto;">
          <img  class="img-fluid" src="img\contact-welcome.svg">
  
        </div>
      </div>
    </div>
  </div>
</div>

<div class="contact-session2">
  <div class="container" style="padding:17px">
    <div class="row">
      
        <div class="col-lg-7">
          <div class="map-frame">
            <iframe id="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.004892544962!2d80.1336021145534!3d13.098876290772436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5263bdf228cf6b%3A0xc3dc59824337538!2sTech4LYF%20Codeground!5e0!3m2!1sen!2sin!4v1664190877932!5m2!1sen!2sin"
            width="100%" height="auto" style="width:100%;;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="col-lg-5  " id="cont-form">
          <div class="card contactform" style="border: none;">
            <p>We are a young company but we grew fast, thanks to the support of all our valuable customers.</p>
              <ul>
               <li>34/label You can enter your details and message here. We will contact you as soon as possible.</label> </li>
                <label><li>Call us, send us a message, or simply come to visit us.</li></label>
              </ul>                  
              <form action="" style="width:100%">
                <div class="session2-form">
                  <img  class="img-fluid icon" src="img\email.png">
                  <input class="form-control sec-form " type="text"  name="email" value="" placeholder="Email:">
                </div>
                <div class="session2-form">
                  <img  class="img-fluid icon" src="img\callicon.svg">
                <input class="form-control sec-form" type="phone"  name="phone" value="" placeholder="phone:">
                </div>
                <div class="session2-form txt-area">
                  <img  class="img-fluid icon" src="img\locicon.png">
                <textarea class="form-control sec-form" type="textarea"  name="message" value="" clos="15" rows="5" placeholder="Your Name:"></textarea>
                </div> 
                <div class="sendbtn">
                    
                <button class="redbtn">Send Message</button>    
                </div>
              </form>           
            </div>
            
        </div>
    </div>
  </div>
</div> 


<?php include 'footer.php';?>
 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="js\contact.js"></script>
   <script>
    document.getElementById("iframe").style.height=document.getElementById("cont-form").offsetHeight+"px";
   </script>
</body>
</html>
