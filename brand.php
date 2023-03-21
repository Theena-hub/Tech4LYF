<!DOCTYPE html>
<html lang="en">
<?php include("head.php") ?>
<body>
    <style>
        .hero{
            background-position:top right;
            height:100vh;
            background-repeat: no-repeat;
            background-size: 40vw 70vh;
            position: relative;
            overflow: hidden;
        }
        .hero::before{
            content:"";
            height:15vh;
            width:15vw;
            background:url(./img/Ellipse43421.svg);
            background-position: top left;
            background-size: contain;
            background-repeat: no-repeat;
            position: absolute;
            left:0;
            top:-35px;
        }
        .hero::after{
            content:"";
            height:70vh;
            width:70vw;
            background:url(./img/Ellipse4341.png);
            background-position: top right;
            background-size: contain;
            position: absolute;
            background-repeat: no-repeat;
            right:-150px;
            top:-150px;
        }
        .hero .hero-inner{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height:100vh;
        }
        .hero-main{
            position: relative;
        }
        .hero-main .overlay{
            position: absolute;
            width:105px;
            height:100%;
            bottom: -14px;
            right:33px;
            transform:translateX();
            /* padding:20px; */
        }
        .hero-main .owl-brand-hero .item{
            width:105px;
        }
        .hero-main .owl-brand-hero .item img{
            width:105px;
            height:auto;
        }
        .brand_hero_man_img_overlay{
            position: absolute;
            /* width:400px; */
            width: 112px;
    right: 95px;
    top: 24px;
        }
        @media(min-width:575px){
            .brand_hero_man_img_overlay{
                width:197px;
                right:157px;
                 top:32px;
            }
        }
        @media(min-width:768px){
            .brand_hero_man_img_overlay{
                width:223px;
                right:235px;
                 top:36px;
            }
        }
        @media(min-width:992px){
            .brand_hero_man_img_overlay{
                width:173px;
                right:138px;
                 top:31px;
            }
        }
        @media(min-width:1200px){
            .brand_hero_man_img_overlay{
                width:203px;
                right:169px;
                 top:44px;
            }
        }
        @media(min-width:1400px){
            .brand_hero_man_img_overlay{
                width:217px;
                right:202px;
                 top:46px;
            }
        }

        @media (min-width:576px) {

            .hero-main .overlay{
                width:180px;
            height:100%;
            bottom: -22px;
            right:57px;
            }
        .hero-main .owl-brand-hero .item{
            width:180px;
        }
        .hero-main .owl-brand-hero .item img{
            width:180px;
            height:auto;
        }
        }
        @media (min-width:768px) {
            .hero-main .overlay{
                width:205px;
            height:100%;
            bottom: -24px;
            right:119px;
            }
        .hero-main .owl-brand-hero .item{
            width:205px;
        }
        .hero-main .owl-brand-hero .item img{
            width:205px;
            height:auto;
        }
        }
        @media (min-width:992px) {
            .hero-main .overlay{
                width:160px;
            height:100%;
            bottom: -22px;
            right:50px;
            }
        .hero-main .owl-brand-hero .item{
            width:160px;
        }
        .hero-main .owl-brand-hero .item img{
            width:160px;
            height:auto;
        }
        }
        @media (min-width:1200px) {
            .hero-main .overlay{
                width:190px;
            height:100%;
            bottom: -25px;
            right:60px;
            }
        .hero-main .owl-brand-hero .item{
            width:190px;
        }
        .hero-main .owl-brand-hero .item img{
            width:190px;
            height:auto;
        }
        }
        @media (min-width:1400px) {
            .hero-main .overlay{
                width:205px;
            height:100%;
            bottom: -22px;
            right:90px;
            }
        .hero-main .owl-brand-hero .item{
            width:205px;
        }
        .hero-main .owl-brand-hero .item img{
            width:205px;
            height:auto;
        }
        }
        @media (max-width:575px) {
            .hero{
                height:70vh;
            }
            .hero .container{
                height:70vh;

            }
            .hero .hero-inner{
                height:70vh;
            }
            .hero-main{
                width:300px;
                margin:auto;
            }
        }
        @media (min-width:1200px) {
            .hero{
                height:80vh;
            }
            .hero .hero-inner{
                height:80vh;
            }
        }
    </style>
   <?php include 'nav.php';?>
    <div class="container-fluid hero">
        
        <div class="container ">
            <div class="hero-inner">
                <div class="row brandsecrow" style="">
                    <div class="col-lg-6" style="margin:auto">
                            <p class="brand-head">Explore</p>
                            <p class="brand-head1">Our <span class="brand-head2">Brands </span>lorrem</p>
                            <p class="brand-text">We at Tech4Lyf empathize your needs and serve with full
                            heart to porvide good softwares for you lorrem ipsum is a
                            </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-main text-center">
                            
                            <img src="img/hero-brand.svg" class="img-fluid brand_hero_img_main">
                            <img src="img/brand_hero_man.svg" class="img-fluid brand_hero_man_img_overlay">
                            <div class="overlay">
                                <div class="owl-carousel owl-brand-hero owl-theme">
                                    <div class="item">
                                        <img src="img/brand_hero_caro3.svg" class="img-fluid" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="img/brand_hero_caro3.svg" class="img-fluid" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="img/brand_hero_caro3.svg" class="img-fluid" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="img/brand_hero_caro3.svg" class="img-fluid" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <div class=" container brand-session2">
        <h3>Our Universe</h3>
        <p>Lorem ipsum dolor sit amet. 
            A feugiat elementum euismod blandit. Elementum mattis </p>
            <div class="brand-session-card">
            
                <div class="brand-card-item" style="padding:0;">
                    <div class="row" style="margin:0;margin-bottom:60px;gap:30px 0;">
                        <div class="col-md-4">
                            <div class="brdcard">
                                <div class="brand-card-img">
                                    <img class="img-fluid"src="img/t4lyf-logo.svg">                  
                                </div>
                                <div class="brand-card-para">                            
                                    <h3>Tech4LYF</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit. A feugiat elementum 
                                        euismod blandit. Elementum mattis </p>
                                        <div class="card-btn">
                                            <button type="button" class="btn btn-danger btn-lg">View Website<img src="img/colanicon.svg"></button>
                                        </div>  
                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" >
                            <div class="brdcard">
                                <div class="brand-card-img">
                                    <img class="img-fluid" style="" src="img/colan.svg">                  
                                </div>
                                <div class="brand-card-para">
                                    <h3>Colan Developers</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit. A feugiat elementum 
                                        euismod blandit. Elementum mattis </p>
                                        <div class="card-btn">
                                            <button type="button" class="btn btn-danger btn-lg">View Website<img src="img/colanicon.svg"></button>
                                        </div>
                                    
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="brdcard">
                                <div class="brand-card-img">
                                    <img class="img-fluid"style=""   src="img/colan.svg">                  
                                </div>
                                <div class="brand-card-para">                            
                                    <h3>Colan Developers</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit. A feugiat elementum 
                                        euismod blandit. Elementum mattis </p>
                                        <div class="card-btn">
                                            <button type="button" class="btn btn-danger btn-lg">View Website<img src="img/colanicon.svg"></button>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="brand-session3">
        <!-- <div class="row" style="margin:0;"> -->
            <!-- <div class="col-md-5 brand-bg-img"> -->
                <!-- <img class="img-fluid" src="img/akash.png" > -->
            <!-- </div> -->
            <!-- <div class="col-md-7" style="margin:auto;"> -->
                <!-- <div class="brand-session-head">
                    <div class="container "style="margin:auto;">
                    <h2>M. Akash Raja Singh</h2>
                    <h3>CEO, Tech4LYF</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque neque enim consectetur 
                        laoreet augue imperdiet aliquam. Malesuada condimentum sed tempor ullamcorper id lorem 
                        sit purus justo. Purus aliquam egestas auctor fermentum. At mi, vitae gravida amet 
                        dignissim dictum nullam sit.
                    </p>
                </div>
                </div>
            </div> -->
        <!-- </div> -->
    </div>

    <div class="brand-session4">
        <!-- <div class="row rowlst" style="margin:0;"> -->
            
            <!-- <div class="col-md-7" style="margin:auto;"> -->
               
                <!-- <div class="brand-session-head">
                    <div class="container">
                    <h2>M. Christofer</h2>
                    <h3>CEO, Tech4LYF</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque neque enim consectetur 
                        laoreet augue imperdiet aliquam. Malesuada condimentum sed tempor ullamcorper id lorem 
                        sit purus justo. Purus aliquam egestas auctor fermentum. At mi, vitae gravida amet 
                        dignissim dictum nullam sit.
                    </p>
                </div> -->
            <!-- </div> -->
            </div>
            <!-- <div class="col-md-5 brand-bg-img1">
                <img class="img-fluid" src="img/christofer.png" >
            </div> -->
        <!-- </div> -->
    <!-- </div> -->


<!-- <div class="container" style="text-align:center">
        <h2>Our Team</h2>
        <p>We work with companies all over the world. Join the experience
            and become one of our valuable partners.</p>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4" id="section-1">
                <div class="imgdiv1"><img class="img-fluid"src="img/img-11.png" alt="" style="width: 300px;height: 300px;">
                </div>
                <div class="icons1">
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <img class="img-fluid" src="img/Line.png" alt="">
                </div>
            </div>
            <div class="col-md-4" id="section-2">
                <div class="imgdiv2"><img class="img-fluid" src="img/img-22.png" alt="" style="width: 300px;height: 300px;">
                </div>
                <div class="icons2">
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <img class="img-fluid" src="img/Line.png" alt="">
                </div>
            </div>
            <div class="col-md-4" id="section-3">
                <div class="imgdiv3"><img class="img-fluid" src="img/img-33.png" alt="" style="width: 300px;height: 300px;">
                </div>
                <div class="icons3">
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <img class="img-fluid" src="img/Line.png" alt="">
                </div>
            </div>
        </div>
</div> -->
<?php include 'footer.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/55920b0bb1.js" crossorigin="anonymous"></script>

    <script>
        $('.owl-brand-hero').owlCarousel({
            loop:true,
            margin:0,
            nav:false,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:false,
            // animateOut: 'slideOutUp',
            // animateIn: 'slideInUp',
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    </script>
</body>
</html>
