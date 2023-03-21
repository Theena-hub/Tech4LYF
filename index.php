<html>
    <?php include("head.php") ?>
    <body>
      <style>
        @media (min-width:768px) {
          .chat_free_main{
            padding-left:20px;
          }
          
        }
        .hero1{
          height: 100vh;
          width: 100%;
          padding:0;
          background: url(img/hero-img.png);
          background-position: bottom;
          background-size: cover;
          background-repeat: no-repeat;
          position: relative;
        }
        
        .hero-flex-box{
          display: flex;
          justify-content: center;
          align-items: center;
          height:100%;
        }
        .hero-flex-box .row{
          width:100%;
        }
        .hero-main-left{
          /* padding-top:1%; */
          position: relative;
        }
        .hero-main-left h3{
          color:rgba(255, 255, 255, .9);
          position: relative;
          display: inline-block;
        }
        .hero-main-left h3:after{
          position: absolute;
          content: "";
          height:1px;
          width:100px;
          top:50%;
          right:0;
          transform: translate(120%, 150%);
          background-color: rgba(255, 255, 255, 0.877);
        }
        .hero-main-left h1{
          padding-top:10px; 
          font-weight: 600;
          font-size: 58px;
          color: white;
          /*text-transform: uppercase;*/
          /* height: 87px; */
          /* width: auto; */
          top: 224px;
        }
       @media (max-width:992px) {
        .hero-main-left h1{
          padding-top:10 !important;
          /* margin:0 !important; */
        }
       }
        @media (min-width:992px){
          .hero-main-left h1{
          padding-top:10px; 
          font-weight: 500;
          font-size: 48px;
          color: white;
        
        }
        }
        @media(min-width:1200px)
{
  .hero-main-left h1{
    padding-top: 20px;
    font-weight: 550;
    font-size: 42px;
    color: white;
    
  }
}
        .hero1 nav{
          padding-top:20px;
          /* position: absolute; */
          
          
        }
        
        .hero-main-left p{
          font-size: 24px;
          color: rgba(255, 255, 255, .9);
          padding-top:40px;
          font-weight: 400 !important;
          letter-spacing: 1px;

        }
        .hero-main-left input{
          border:1px solid rgba(255, 255, 255, .8);
          border-radius: 3px;
          padding: 10px 40px;
          background-color: transparent;
          color: rgba(255, 255, 255, .8);
          margin-top:20px;

        }
        .hero-left-col .circ{
          position: absolute;
          bottom:0;
          left:0;
          transform: translate(-5%,25%);
        }
      
       @media (max-width:768px) {
        
  .hero-main-left h3{
    /* text-align: left; */
    font-size: 20px;
    /* right: 53px; */
    margin-top: -60px;
  }
  .hero-main-left h1{
    padding-top: 20px;
    font-weight: 500;
    font-size:28px;
    color: white;
    
  }
@media(min-width:768px)
{
  .hero-main-left h1{
    /* padding-top: 20px; */
    font-weight: 400;
    font-size: 42px;
    color: white;
    
  }
}

  .nav{
    width: 100%;
  }
  .hero1 nav{
    padding-top:20px;
    position: relative;
    /* text-align: center;    */
  }
  /* @media (min-width:768px)
  {
    .hero1 nav{
    padding-top:20px;
    position: relative;
    text-align: center;   
  }
  } */
  .hero-main-left{
    position: relative;
    text-align: left;
  }
  
  .hero-main-left p{
    font-size: 18px;
    color: rgba(255, 255, 255, .9);
    padding-top:25px;
    font-weight: 300 !important;
    letter-spacing: 1px;
  }
       }
       .float{
    position: relative;
    -webkit-animation: floatBubble 0.9s infinite;
        -webkit-animation-direction:alternate;
      }
    
    
    @-webkit-keyframes floatBubble{
     from{
            top:-30;
            -webkit-animation-timing-function: ease-in;
    
       }
    
    
       to {
          top: 10px;
          -webkit-animation-timing-function: ease-out;
       }
    
    }
    .secimg_pencil{
      width:25px;
      left:66%; 
      z-index:-1;
      height:auto;
       position: absolute;
    -webkit-animation: pencilBubble 1s infinite;
        -webkit-animation-direction:alternate;
      }
    @media(min-width:768px){
      .secimg_pencil{
      width:35px;
      left:80%; 
      
    }
    }
    
    @-webkit-keyframes pencilBubble{
      from{
            top:0;
            -webkit-animation-timing-function: ease-in;
       }
       to {
          top:20px;
          -webkit-animation-timing-function: ease-out;
       }
    
    }
    @media (min-width:1200px){
      .secimg_pencil{
      width:55px;
      left:80%; 
      z-index:-1;
      height:auto;
      
       position: absolute;      }
    }
    .secimg_cap{
      left:30%;
      z-index: -1;
      width:47px;
      height:auto;
       position: absolute;
    -webkit-animation: capBubble 1s infinite;
        -webkit-animation-direction:alternate;
      }
    @media (min-width:768px) {
      .secimg_cap{
        width:56px;
        left:31px;
      }
    }
      @media (min-width:1200px){
      .secimg_cap{
        left:47px;
      z-index: -1;
      width:81px;
      height:auto;
       position: absolute;
      }
    }
    @-webkit-keyframes capBubble{
     from{
            top:40;
            -webkit-animation-timing-function: ease-in;
    
       }
    
    
       to {
        
          top:0px;
          -webkit-animation-timing-function: ease-out;
       }
    
    }.secimg .subtract{
      z-index:2000;
      width:53%;
       height:auto;
       
}
@media(min-width:768px){
.secimg .subtract{
      z-index:2000;
      width:93%;
       height:auto;
       
}
}

    .secimg_chatbox{
      position: absolute;
      z-index:0;
      width:17%;
      right:90px;
       height:auto;
       bottom: 67%;
    }
    @media(min-width:768px){
      .secimg_chatbox{
      position: absolute;
      z-index:0;
      width:30%;
      right:21px;
       height:auto;
    }}
    .lightgif img{
      width:60%;
      height:auto;
      z-index:-1;
    }
    @media(min-width:768px){
      .lightgif img{
        width:100%;
        height:auto;
        z-index:-1;
      }
    }
    .arrow{
      width:39%;
      height:auto;
      top:888;
      left:110;
      margin:auto
    }
    @media (min-width:768px) {
      .arrow{
        width:92%;
        left:0;
      }
    }
    .arrow1{
      position: absolute;
      z-index:-1;
      left:86px;
      width:49%;
    }
    @media(min-width:768px){
      .arrow1{
left:0;
width:100%;
      }
    }
    #logotech{
      width:35%;
      height:auto;
    }
@media(min-width:768px){
  #logotech{
    width:20%;
  }
}
      </style>
<?php //  include 'nav.php';?>
      <div class="container-fluid hero1" id="hero">
        <div class="container">
          <nav class="container">
            <a href="#"><img id="logotech" src="img/t4l_logo_white.svg" alt="logo"></a>
          </nav>
          <div class="hero-ani" id="hero-ani">
            <img class="ani-tri" id="ani1" src="img/hero-tri.svg">
            <img class="ani-tri" id="ani2" src="img/hero-tri.svg">
            <img class="ani-tri" id="ani3" src="img/hero-tri.svg">
            <img class="ani-tri" id="ani4" src="img/hero-tri.svg">
            <img class="ani-tri" id="ani5" src="img/hero-tri.svg">
            <img class="ani-tri" id="ani6" src="img/hero-tri.svg">
            <img class="ani-tri" id="ani7" src="img/hero-tri.svg">
            <img class="ani-tri" id="ani8" src="img/hero-tri.svg">
      
          </div>
          <div class="hero-flex-box">
            <div class="row">
              <div class="col-lg-8 hero-left-col" style=" position:relative;">
                <img class="circ" src="img/hero-circle.svg">

                <div class="hero-main-left">
                  <h3>Seeking</h3>
                  <h1 class="text-ani hero_ani_type"></h1>
                  <h1 class="">Software Developers ?</h1>
                  <p>Discover the top notch Software developers in chennai</p>
                  <input type="button" class="" value="Learn More">
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Main Banner Section - End -->

<!-- Nav Bar Section - Start -->
<?php  include('nav.php');?>
       <!-- About_Us Section - Start -->
       <div class="container-fluid" style="background-color: #FBFBFB;">

         <div class="container about_session">  
             <div class="row">
                 <div class="col-md-7 about_tittle" style="margin:auto">
                     <p id="about_text">About <span >Us</span></p>
                      
                       <p id="about_para">We are a bunch of young souls with wise headsworking together to gratify 
                         customer-specific requirements. We code, we design, we write and that’s how we breathe. Being
                          in this field for more than <span >5</span> year’s, we’re proud to proclaim 
                          that we gratified all our clients, and indeed we’re overwhelmed with affirming comments</p>
                 </div>
         
                 <div class="col-md-5" style="margin:auto">
                   
                   <img  class="img-fluid"style="width:100%;height:auto;margin:auto" src="img/animation_640_l6xf9oi9.gif" >
                 </div>
             </div>
         </div>
       </div>
 <!-- owl-carousel -->
 <style>
            .home_world_main{
              padding-top:40px;
            }
            .home_world_main h4{
                font-size: 28px;
                font-weight: 600;
                text-align: center;
                margin-bottom:15px;
            }
            .home_world_main p{
                width:90%;
                font-size:14px;
                text-align: center;
                margin: auto;
            }
            .home_world_main .caro_img{
                height: 250px;
                display: flex;
                /* margin-top: 40px; */
                justify-content: center;
                align-items: center;
                position: relative;
            }
            .home_world_main .caro_img img{
                width:430px;
                height: auto;
            }
            .home_world_main .caro_img .overlay_caro{
                position: absolute;
                background:rgba(224, 64, 72, 1);
                height:80px;
                width:80px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                border-radius:100px;

            }
            .home_world_main .caro_img .overlay_caro img{
                width:20px;
                height:auto;
                margin-bottom: 5px;
            }
            .home_world_main .caro_img .overlay_caro h3{
                font-size: 18px;
                font-weight: 600;
                color:#fff;
                margin-bottom: 0px;
            }
            .home_world_main .caro_img .overlay_caro label{
                color:#fff;
                font-size: 10px;
                margin:0;
            }
            @media (min-width:576px) {
                .home_world_main .caro_img{
                    height: 300px;
                }
                .home_world_main .caro_img img{
                    width:500px;
                }
                .home_world_main p{
                    width:80%;
                    text-align: center;
                    margin: auto;
                }
                
            .home_world_main .caro_img .overlay_caro{
                
                height:80px;
                width:80px;
                
            }
            .home_world_main .caro_img .overlay_caro img{
                width:20px;
                
                margin-bottom: 2px;
            }
            .home_world_main .caro_img .overlay_caro h3{
                font-size: 18px;
                font-weight: 600;
                
            }
            .home_world_main .caro_img .overlay_caro label{
                
                font-size: 12px;
                margin:0;
            }
            }
            @media (min-width:768px) {
                .home_world_main h4{
                    font-size: 40px;
                    margin-bottom:30px;

                }
            .home_world_main p{
                font-size:16px;
            }
                .home_world_main .caro_img{
                    height: 400px;
                }
                .home_world_main .caro_img img{
                    width:680px;
                }
                .home_world_main p{
                    width:60%;
                    text-align: center;
                    margin: auto;
                }
                
            .home_world_main .caro_img .overlay_caro{
                
                height:100px;
                width:100px;
                
            }
            .home_world_main .caro_img .overlay_caro img{
                width:25px;
                
                margin-bottom: 3px;
            }
            .home_world_main .caro_img .overlay_caro h3{
                font-size: 20px;
                font-weight: 600;
                
            }
            .home_world_main .caro_img .overlay_caro label{
                
                font-size: 14px;
                margin:0;
            }
            }
            @media (min-width:992px) {
                .home_world_main .caro_img{
                    height: 450px;
                }
                .home_world_main .caro_img img{
                    width:800px;
                }
                .home_world_main p{
                    width:60%;
                    text-align: center;
                    margin: auto;
                }
                
            .home_world_main .caro_img .overlay_caro{
                
                height:100px;
                width:100px;
                
            }
            .home_world_main .caro_img .overlay_caro img{
                width:25px;
                
                margin-bottom: 3px;
            }
            .home_world_main .caro_img .overlay_caro h3{
                font-size: 20px;
                font-weight: 600;
                
            }
            .home_world_main .caro_img .overlay_caro label{
                
                font-size: 14px;
                margin:0;
            }
            }
            @media (min-width:1200px) {
                .home_world_main .caro_img{
                    height: 500px;
                }
                .home_world_main .caro_img img{
                    width:950px;
                }
                .home_world_main p{
                    width:60%;
                    text-align: center;
                    margin: auto;
                }
                
            .home_world_main .caro_img .overlay_caro{
                
                height:120px;
                width:120px;
                
            }
            .home_world_main .caro_img .overlay_caro img{
                width:35px;
                
                margin-bottom: 5px;
            }
            .home_world_main .caro_img .overlay_caro h3{
                font-size: 24px;
                font-weight: 600;
                
            }
            .home_world_main .caro_img .overlay_caro label{
                
                font-size: 16px;
                margin:0;
            }
            }
            @media (min-width:1400px) {
                .home_world_main .caro_img{
                    height: 600px;
                }
                .home_world_main .caro_img img{
                    width:1000px;
                }
                .home_world_main p{
                    width:60%;
                    text-align: center;
                    margin: auto;
                }
                
            .home_world_main .caro_img .overlay_caro{
                
                height:150px;
                width:150px;
                
            }
            .home_world_main .caro_img .overlay_caro img{
                width:45px;
                
                margin-bottom: 5px;
            }
            .home_world_main .caro_img .overlay_caro h3{
                font-size: 28px;
                font-weight: 600;
                
            }
            .home_world_main .caro_img .overlay_caro label{
                
                font-size: 16px;
                margin:0;
            }
            }
        </style>
        <div class="container">
            <div class="home_world_main">
                <div class="owl-carousel owl-world owl-theme">
                    <div class="item" style="">
                        <h4>We Are Spreading</h4>
                        <p>Brand Builders, web developers & app developers, digital campaigners, and storytellers - all at one station. #Tech4LYF is your one-stop solution for all your digital needs. Besides </p>
                        <div class="caro_img">
                            <img src="./img/home_world_caro1.svg" style="" alt="">
                            <!-- <div class="overlay_caro">
                                <img src="./img/caro_globe.png" alt="">
                                <h3>15</h3>
                                <label for="">Countries</label>
                            </div> -->
                        </div>
                    </div>
                    <div class="item" style="">
                        <h4>We Are Humongous</h4>
                        <p>Brand Builders, web developers & app developers, digital campaigners, and storytellers - all at one station. #Tech4LYF is your one-stop solution for all your digital needs. Besides </p>
                        <div class="caro_img">
                            <img src="./img/home_world_caro2.svg" style="" alt="">
                            <!-- <div class="overlay_caro">
                                <img src="./img/caro_globe.png" alt="">
                                <h3>15</h3>
                                <label for="">Countries</label>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="item"><h4>2</h4></div> -->
                    
                </div>
            </div>
        </div>
        
<!-- <div class="about-session5 mg-tb-60"> 
  
	<div class="section-padding">
	  <div class="screenshot_sliders owl-carousel">
		  
      <div class="item abt-session">
      <h3 class="text-center">
      We Are Humonogous

    </h3>
    <p>Brand Builders, web developers & app developers,
       digital campaigners, and storytellers - all at one station.
        #Tech4LYF is your one-stop solution for all your digital needs. Besides </p>
        <div class="mapcountry">
          <!-- <img src="" alt=""> 
          <img src="img\country.svg" >		
        </div>
      </div>
		  
      
      <div class="item abt-session">
      <h3 class="text-center">
    We Are Humonogous
  </h3>
  <p>Brand Builders, web developers & app developers,
       digital campaigners, and storytellers - all at one station.
        #Tech4LYF is your one-stop solution for all your digital needs. Besides </p>
        <div class="mapcountry1">
          <img src="img\country.svg">	
        </div>		
      </div>
      
	  </div>
	</div>     
</div> -->

<!-- <div class="container section2">
    <div class="row">
        <div class="col-md-3 box1 mg-auto">
          <img style="width:100%;height:auto;top:1000px;left:104px;" src="img/Group 110.svg" alt="about-us">
        </div>


        <div class="col-md-3  box2 mg-auto">
          <div class="card country_session" style="border:none">
          <img class="chd-1"  src="img/76469-globe-world 1.gif" alt="globe word">
          <div class="text-center country" style="border: none;">
         
          <p> <span>15 </span><br>countries</p>
          </div>
          </div>
        </div>
      
        <div class="col-md-3  box3 mg-auto">
        <div class="card country_session" style="border:none">
          <img src="img/98723-search-users 1.gif" alt="search">
          <div class="text-center  country" style="border: none;">

          <p> <span>50</span><br>Teams</p>
          </div>
        </div>
        </div>

        <div class="col-md-3  box4 mg-auto">
          <div class="card country_session" style="border:none">
          <img  src="img/69983-team-work 2.gif" alt="team work">
          <div class="text-center country " style="border: none;">
       
          <p> <span>985 </span><br>Active Users</p>
          </div>
        </div>
        </div>

    </div>

</div> -->
<!-- session4 -->

<div class="container-fluid " style="padding: 0;margin-bottom:60px">
  <div class="row " style="justify-content: space-between;margin:0">
    <div class="col-7" style="margin: auto 0;padding:0">
        <div class="session4-bg" style="background: #F3F3F3;">
          <h3 style="">Discover our universe <span style="  ">!</span> </h3>
          <p>We are expanding our services in every fields</p>
        </div>
     

    </div>
    <div class="col-4 astronaut" >
      <img  class="img-fluid" style="" src="img/89032-victory-sign-baby-astronaut 2.gif" alt="astronaut">

    </div>
  </div>
</div>
<!-- caro -->
<style>
  .moon{
    position: absolute;
    z-index: -1;
   
  }
  @media(max-width:767px){
    .moon{
     display:none;
    }
    .caro_style .stargp1{
      display:none;
    }
    .caro_style .stargp2{
      display:none;
    }
    .caro_style .stargp3{
      display:none;
    }
    .caro_style .stargp4{
      display:none;
    }
    .caro_style .stargp5{
      display:none;
    }
    .caro_style .stargp6{
      display:none;
    }
    .caro_style .stargp7{
      display:none;
    }
  }
  @media(min-width:768px){
    .moon{
      width:70px;
      position: absolute;
    z-index: -1;
    }
  }
  @media(min-width:992px){
    .moon{
      width:100px;
    }
  }
  @media(min-width:1200px){
    .moon{
      width:130px;
    }
  }
  @media(min-width:1400px){
    .moon{
      width:170px;
    }
  }
  .caro_style .stargp1{
    position: absolute;
    z-index: -1;
    bottom:600px;
    right:39px;
    width:20px;
  }
  .caro_style .stargp2{
    position: absolute;
    z-index: -1;
    bottom: 300;
    right: 75px;
    width: 100px;
  }
  .caro_style .stargp3{
    position: absolute;
    z-index: -1;
    bottom:500px;
    right:20px;
  }
  .caro_style .stargp4{
    position: absolute;
    z-index: -1;
    bottom:145px;
    right: 20px;
  }
  .caro_style .stargp7{
    position: absolute;
    z-index: -1;
    bottom:145px;
    right: 20px;
  }
  @media(max-width:767px){
    .caro_style .stargp1{
   display:none;
  }
  }
  @media(min-width:768px){
    .caro_style .stargp1{
    position: absolute;
    z-index: -1;
    bottom: 400px;
    right: 231px;
  }
  .caro_style .stargp2{
    bottom: 250px;
    right: 50px;
    width: 70px;

  }
  .caro_style .stargp3{
   
    position: absolute;
    z-index: -1;
    bottom: 250px;
    left: 20px;
    width: 20px;

  }
  .caro_style .stargp7 {
    position: absolute;
    z-index: -1;
    bottom: 30px;
    right: 50px;
    width: 18px;
  }
  .caro_style .stargp4 {
    position: absolute;
    z-index: -1;
    bottom: 219px;
    right: 20px;
    width: 18px;
  }
    .caro_style .stargp6{
   
   position: absolute;
   z-index: -1;
   bottom: 100px;
    left: 21px;
    width: 19px

 }
 .caro_style .stargp5 {
    position: absolute;
    z-index: -1;
    bottom: 350px;
    left: 130px;
    width: 18px;
  }

}
.caro_style .stargp1  {
            color: #008000;          
            animation: animate 
                2s linear infinite;
                animation-direction:alternate;
}

.caro_style .stargp3 {
            color: #008000;          
            animation: animate 
                2s linear infinite;
                animation-direction:alternate;
}
.caro_style .stargp4  {
            color: #008000;          
            animation: animate 
                2s linear infinite;
                animation-direction:alternate;
}
.caro_style .stargp5  {
            color: #008000;          
            animation: animate 
                2s linear infinite;
                animation-direction:alternate;
}
.caro_style .stargp6  {
            color: #008000;          
            animation: animate 
                2s linear infinite;
                animation-direction:alternate;
}
.caro_style .stargp7  {
            color: #008000;          
            animation: animate 
                2s linear infinite;
                animation-direction:alternate;
}
  
  @media(min-width:992px){
    .caro_style .stargp2{
    position: absolute;
    z-index: -1;
    bottom: 350px;
    right: 127px;
    width: 85px;
    
  } 
  .caro_style .stargp1{
    position: absolute;
    z-index: -1;
    bottom: 530px;
    right: 321px;
    width: 19px;

  } 
  .caro_style .stargp1  {
    color: #008000;          
    animation: animate 
    2s linear infinite;
    animation-direction:alternate;
  }
  .caro_style .stargp5{
    position: absolute;
    z-index: -1;
    bottom:500px;
    left:150px;
    width:19px;
  } 
  .caro_style .stargp5 {
    color: #008000;          
    animation: animate 
    2s linear infinite;
    animation-direction:alternate;
  }
  .caro_style .stargp3{
    position: absolute;
    z-index: -1;
    bottom: 300px;
    right: 158px;
    width: 20px;
  } 
  .caro_style .stargp3  {
    color: #008000;          
    animation: animate 
    2s linear infinite;
    animation-direction:alternate;
        }
        .caro_style .stargp7{
    position: absolute;
    z-index: -1;
    bottom:200px;
    right:144px;
  } 
  .caro_style .stargp7  {
    color: #008000;          
    animation: animate 
    2s linear infinite;
    animation-direction:alternate;
        }    
        .caro_style .stargp4{
    position: absolute;
    z-index: -1;
    bottom:333px;
    right:39px;
    width:16px;
  } 
  
  .caro_style .stargp4  {
            color: #008000;          
            animation: animate 
                2s linear infinite;
                animation-direction:alternate;
        }
        .caro_style .stargp6{
    position: absolute;
    z-index: -1;
    bottom:200px;
    left:60px;
    width:20px;
  } 
  .caro_style .stargp6{
    color: #008000;          
    animation: animate 
    2s linear infinite;
    animation-direction:alternate;
        }
      }
      @keyframes animate {
            0% {
                transform: scale(.8);
            }  
            100% {
                transform:scale(1.1);
                filter:drop-shadow(1px 2px 3px red);

            }
            
        }




  @media(min-width:1200px){
  
  .caro_style .stargp1{
    position: absolute;
    z-index: -1;
    bottom: 650px;
    right: 353px;
    width: 22px;

  } 
  /* .caro_style .stargp2{
    position: absolute;
    z-index: -1;
    bottom: 350px;
    right: 127px;
    width: 85px;
    
  } */
  
  .caro_style .stargp1  {
    color: #008000;          
    animation: animate 
    2s linear infinite;
    animation-direction:alternate;
  }
  .caro_style .stargp5{
    position: absolute;
    z-index: -1;
    bottom:500px;
    left:130px;
    width:19px;
  } 
  .caro_style .stargp5 {
    color: #008000;          
    animation: animate 
    2s linear infinite;
    animation-direction:alternate;
  }
  .caro_style .stargp3{
    position: absolute;
    z-index: -1;
    bottom:500px;
    right: 40px;
  } 
  .caro_style .stargp3  {
    color: #008000;          
    animation: animate 
    2s linear infinite;
    animation-direction:alternate;
        }
        .caro_style .stargp7{
    position: absolute;
    z-index: -1;
    position: absolute;
    z-index: -1;
    bottom: 200px;
    right: 144px;
    width: 30px;
  } 
  .caro_style .stargp7  {
    color: #008000;          
    animation: animate 
    2s linear infinite;
    animation-direction:alternate;
        }    
     .caro_style .stargp4{
    position: absolute;
    z-index: -1;
    bottom: 450px;
    right:65px;
    width:30px;
  } 
  
  .caro_style .stargp4  {
            color: #008000;          
            animation: animate 
                2s linear infinite;
                animation-direction:alternate;
        }
        .caro_style .stargp6{
    position: absolute;
    z-index: -1;
    bottom:400px;
    right:39px;
    width:20px;
  } 
  .caro_style .stargp6{
    color: #008000;          
    animation: animate 
    2s linear infinite;
    animation-direction:alternate;
        }
        @keyframes animate {
            0% {
                transform: scale(.8);
            }  
            100% {
                transform:scale(1.1);
                filter:drop-shadow(1px 2px 3px red);

            }
            
        }
  .caro_style .stargp2{
    position: absolute;
    z-index: -1;
    bottom:450px;
    right:45px;
    width:130px;
  }
  .caro_style .stargp3{
    position: absolute;
    z-index: -1;
    bottom: 250px;
    left: 100px;
    width: 20px;
  }
  .caro_style .stargp4{
    position: absolute;
    z-index: -1;
    bottom:450px;
    right:65px;
  }
  .caro_style .stargp5{
    position: absolute;
    z-index: -1;
    
  bottom:600px;   
   left:182px;   
    width:30px;
  }
  .caro_style .stargp6{
    position: absolute;
    z-index: -1;
    bottom:450px;
    left:69px;
     width:30px;
  }
  }

  @media(min-width:1400px){
  
  .caro_style .stargp1{
    position: absolute;
    z-index: -1;
    bottom: 800px;
    right: 300px;
    width:25px;

  } 
  .caro_style .stargp2{
    position: absolute;
    z-index: -1;
    bottom: 350px;
    right: 127px;
    width: 200px;
    
  }
  
  .caro_style .stargp1  {
    color: #008000;          
    animation: animate 
    2s linear infinite;
    animation-direction:alternate;
  }
  .caro_style .stargp5{
    position: absolute;
    z-index: -1;
    bottom:750px;
    left:130px;
    width:19px;
  } 
  .caro_style .stargp5 {
    color: #008000;          
    animation: animate 
    2s linear infinite;
    animation-direction:alternate;
  }
  .caro_style .stargp3{
    position: absolute;
    z-index: -1;
    bottom:500px;
    right: 40px;
  } 
  .caro_style .stargp3  {
    color: #008000;          
    animation: animate 
    2s linear infinite;
    animation-direction:alternate;
        }
        .caro_style .stargp7{
    position: absolute;
    z-index: -1;
    position: absolute;
    z-index: -1;
    bottom: 200px;
    right: 144px;
    width: 30px;
  } 
  .caro_style .stargp7  {
    color: #008000;          
    animation: animate 
    2s linear infinite;
    animation-direction:alternate;
        }    
     .caro_style .stargp4{
    position: absolute;
    z-index: -1;
    bottom: 450px;
    right:65px;
    width:30px;
  } 
  
  .caro_style .stargp4  {
            color: #008000;          
            animation: animate 
                2s linear infinite;
                animation-direction:alternate;
        }
        .caro_style .stargp6{
    position: absolute;
    z-index: -1;
    bottom:400px;
    right:39px;
    width:20px;
  } 
  .caro_style .stargp6{
    color: #008000;          
    animation: animate 
    2s linear infinite;
    animation-direction:alternate;
        }
        @keyframes animate {
            0% {
                transform: scale(.8);
            }  
            100% {
                transform:scale(1.1);
                filter:drop-shadow(1px 2px 3px red);

            }
            
        }
  .caro_style .stargp2{
    position: absolute;
    z-index: -1;
    bottom:500px;
    right:45px;
    width:145px;
  }
  .caro_style .stargp3{
    position: absolute;
    z-index: -1;
    bottom: 250px;
    left: 100px;
    width: 20px;
  }
  .caro_style .stargp4{
    position: absolute;
    z-index: -1;
    bottom:450px;
    right:65px;
  }
  .caro_style .stargp5{
    position: absolute;
    z-index: -1;
    
  bottom:750px;   
   left:182px;   
    width:30px;
  }
  .caro_style .stargp6{
    position: absolute;
    z-index: -1;
    bottom:510px;
    left:69px;
     width:30px;
  }
  }


  /* @media(min-width:1400px){
    .caro_style .stargp1{
    position: absolute;
    z-index: -1;
    bottom:235px;
    left: 39px;
  }
  } */
  .caro_style .img-fluid{
    z-index:-1;
    max-width: 100%;
    height: auto;
  
  }
  @media(min-width:768px){
    .caro_style .img-fluid{
    /* z-index:-1; */
    max-width: 75%;
    /* height: auto; */
    z-index:-1;
    max-width:90%;
    height: auto;
  }
  }
  @media(min-width:1200px){
    .caro_style .img-fluid{
    /* z-index:-1; */
    max-width: 85%;
    /* height: auto; */
  }
  }
  @media(min-width:1400px){
    .caro_style .img-fluid{
    /* z-index:-1; */
    max-width: 95%;
    /* height: auto; */
  }
  }
  /* .caro_style .stargp2{
    max-width: 30px;
    top: 300px;
    position: absolute;
  }
  .caro_style .stargp3{
    max-width: 30px;
    top: 300px;
    position: absolute;
  } */
  </style>
<div class="container caro_style" style="position:relative;">
<img class="moon" src="img/moonuu..gif"> 
<img class="img-fluid stargp1" src="img/vec3.png">
<img class="img-fluid stargp2" src="img/vec4.png">
        <img class="img-fluid stargp3" src="img/vec3.png">
        <img class="img-fluid stargp7" src="img/vec2.png">
<img class="img-fluid stargp4" src="img/vec7.png">
          <img class="img-fluid stargp5" src="img/vec7.png">
<img class="img-fluid stargp6" src="img/vec2.png">

<div class="container-fluid">
            <div class="container" style="position: relative;">
           
                <div class="circ-caro">
                    <img src="img/cc1.png" class="" alt="">
                    <div class="inner-circ" id="inner-circ">
                        <div class="inner" >
                          <!-- <img class="moon" src="img/moonuu..gif"> -->
                            <div class="circle circle1" >
                            <!-- <img class="moon" src="img/moonuu..gif">  -->
                                <img src="img/t4lyf-logo.svg" id="circ_img1" class="img-fluid" alt="">
                            </div>
                            <div class="circle circle2">
                                <img src="img/t4l-logo.png" id="circ_img2" class="img-fluid" alt="">
                            </div>
                            <div class="circle circle3">
                                <img src="img/t4lyf-logo.svg" id="circ_img3" class="img-fluid" alt="">
                            </div>
                            <div class="circle circle4">
                                <img src="img/t4l-logo.png" id="circ_img4" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="inner-btn">
                    <button type="button" onclick="circ_cng('prev')"><img src="img/btnarr.svg" alt=""></button>
                    <button type="button" onclick="circ_cng('next')"><img src="img/btnarr.svg" alt=""></button>
                </div>
                <div class="inner-img">
                    <img id="big-img" style="" src="img/t4lyf-logo.svg" alt="">
                </div>
                <div class="inner-cnt">
                    <img src="img/caro-tri.svg" class="img-fluid" style="" alt="">
                    <div class="cnt_main" id="caro_cnt_main">
                        <p id="caro-p1" class="caro-para active">we provide 24/7 assistance for the domain we given you
to which we give full servicebale access1</p>
<p id="caro-p2" class="caro-para">we provide 24/7 assistance for the domain we given you
to which we give full servicebale access2</p>
<p id="caro-p3" class="caro-para">we provide 24/7 assistance for the domain we given you
to which we give full servicebale access3</p>
<p id="caro-p4" class="caro-para">we provide 24/7 assistance for the domain we given you
to which we give full servicebale access4</p>
                    </div>
                </div>
            </div>
        </div>
        </div>

<div class="container-fluid " style="padding:0">

      <div class="container mg-tb-60 text-center">
        <div class="why_heading_main">
          <h3 class="why_heading">
            <p style="color:var(--primary)">hy</p>
            <p style="font-weight:600;">Choose Us</p>
           
          </h3>

        </div>
        <p class="text-center starts_gif" style="margin: auto; ">Brand builders,web developers $ app developers,digital campaigners and storytellers-all 
          at one station. we're totally approachable and ready to answer all your queiers 24/7

        </p>
        <img style="width:200px; height:auto;left:504px; top:2000px;padding:5px;" src="img/start.gif" alt="star">

      </div>
      <!--next page-->
      <div class="container  textfont">
        <div class="row">
          <div class="col-md-7" style="margin:auto;">

            <p id="chat1">CHAT & EXPLORE </p>
              <P id="chat2">Free consultation</P>
              <div class="head_ul"></div>
              <p id="chat3">Let's catch up over cofee.Let out your musings and we shall help you explore the most recommeded solutions for your industry</p>
          
          </div>
          <div class="col-md-5">
            <div class="secimg" style="position:relative;text-align:center;">
           
            <img  class="img-fluid secimg_chatbox" src="img/chatb box.png" alt="about-us">
            <img  class="img-fluid subtract" style="" src="img/Subtract.png" alt="about-us">
            <img  class="img-fluid secimg_pencil"  src="img/pencil.png">
            <img class="img-fluid secimg_cap" src="img/cap.png">
          </div>
           
          </div>
        </div>
      </div>
      <!--end page-->

      <!-- next page-->
      <div class="container-fluid lightbgpd" style="">
        
      
      <div class="container">
        <div class="row md-row-rev">
          <div class="col-md-4 lightgif" style="position:relative;text-align:center;">
            <img style="" src="img\ezgif.com-gif-maker.gif" alt="about-us">
            <!-- <img  class="img-fluid" style="" src="img/Group 981.svg" alt="about-us"> -->
          </div>
          <div class="col-md-8 md-pt-45" style="margin:auto";>
          <div class="chat_free_main">

            <p id="chat11">CHAT & EXPLORE </p>
        <P id="chat12">Highly skilled</P>
        <div class="head1_ul"></div>
        <p id="chat13">Our team embraces a bunch of  highly skilled professionals who heedfully craft your digital needs.</p>
          </div>        
          </div>
        </div>
      </div>
    </div>
      <!--end-->

      <!--start page-->
      <div class="container mg-tb-60">
        <div class="row">
          <div class="col-md-8" style="margin:auto";>
            <p id="chat111">CHAT & EXPLORE </p>
        <P id="chat222">100% Result oriented</P>
        <div class="head2_ul"></div>
        <p id="chat333">Let's catch up over cofee.Let out your musings and we shall help ypu explore the most recommeded solutions for your industry</p>
          </div>
          <div class="col-md-4" style="position:relative;">
            <img class="float arrow" style="" src="img/why2 (1) 1.png" alt="about-us">
            <img class="arrow1"style=" " src="img/arrowhead.svg" alt="about-us">
          </div>
        </div>
      </div>
<!--end--> 
</div>

<style>
  .container-well p{
      width:70%;
      margin:auto;
    }
  @media (min-width:576px) {
    .container-well p{
      width:50%;
    }
    
  }
  @media (min-width:768px) {
    .container-well p{
      width:70%;
    }
    
  }
  @media (min-width:992px) {
    .container-well p{
      width:70%;
    }
    
  }
  @media (min-width:1200px) {
    .container-well p{
      width:100%;
    }
    
  }
  @media (max-width:768px) {
    .cli_img{
      display:none;
    }
  }
  .text_center h2{
    margin-bottom: 1rem;
    text-align:center;
  }
</style>
<div class="container-well text_center" style="padding:40px 0;background-color: rgba(250, 250, 250, 1); text-align: center;   margin: 0px;">
<h2>Customers who love us</h2>
<p style="color:#00000080;font-size:14px; font-weight:400; ">We have spread them the technology with <label style="color:#e04048">♥.</label> we would love to do that to you!</p>
  <div class="circle">
   <div class="row" style="margin:0;">
    <div class="col-md-3 cli_img" style="padding: 0;">
      <div style="position:relative; display: flex;justify-content:start;">
        <img src="img/Group 76.png" alt="about-us">
        <div class="circ_overlay">
          <img src="img/roundtext.svg" alt="">
        </div>
      </div>
    </div>     
    <style>
     .cli_caro .item img{
      filter:grayscale(1);
      transition:.5s;

     }
     .cli_caro .item:hover img{
      filter:grayscale(0);

     }
     
/* @media (min-width: 768px){
.cli_caro{
    flex: 0 0 auto;
    width:100% !important;
}
} */

    </style>
    <div class="col-lg-9 cli_caro" style="padding:0">
      <div class="caro-1 owl-carousel owl-theme">
        <div class="item">
          <img src="img/taskbot 1.png" alt="">
        </div>
        <div class="item">    
            <img src="img/grubspot 1.png" alt=""></div>
        <div class="item"><img src="img/proactive 1.png" alt=""></div>
        <div class="item"><img src="img/Group.png" alt=""></div>
  
    </div>
    </div>
  </div>
</div> 
</div>

<div class="container-fluid mg-tb-60" style="background:url(img/map-background.svg); background-position: center; background-size: contain; background-repeat: no-repeat; " >
  <div class="container con_h2">
    <h2 id="container-head">What Our <span>Clients</span> Say</h2>
      <div class="testi-class">
        <div class=" caro-2 owl-carousel owl-theme">
          <div class="item carousel-item active">
            <div class="flex-box">
              <div class="overlay-main">
                  <div class="over-sub"></div>
                  <img class="" style="border-radius: 100px;" src="img\image.jpg" >
                </div>
              </div>
              <p class="overview"><b>Richard Selvaraj</b>Flicker Designs</p>
              <p class="testimonial">I approached them for Web design and they are hitherto friednly and are helping me in establishing my business as friendship of others. They are young souls who are all very futurstic and dedicative. The best web developers in the city, I can surely say that dont hesitate todrll through the obstacles in providing the best apps and website for you</p>
            </div>
            <div class="item carousel-item active">
              <div class="flex-box">
                <div class="overlay-main">
                  <div class="over-sub"></div>
                  <img class="" style="border-radius: 100px;" src="img\images .jpg" >
                </div>
              </div>
              <p class="overview"><b>Ajith Kumar</b>Media Analyst</p>
              <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
            </div>
            <div class="item carousel-item active">
              <div class="flex-box">
                <div class="overlay-main">
                  <div class="over-sub"></div>
                  <img class="" style="border-radius: 100px;"  src="img\image2.jpg" >
                </div>
              </div>
              <p class="overview"><b>Antonio Moreno</b>Web Developer</p>
              <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
            </div>
        </div>  
    </div>
  </div>
</div>

<div class=" index mg-tb-60">
  <!-- <div class="container ind-card-session"> -->

    <div class="card card-ind-session">
      <div class="row" style="width:100%">
        <div class="col-lg-6 coffe-bg-img" style="">
          <div class="index-head">
            <p>Lets grab a</p> 
              <h3>Cofee together !</h3>
              <div style="position:relative; text-align:center;">

                <img src="img/coffee.gif" class="img-fluid" style="width:80%">
                <img src="img/coff_dots.png" class="overlay_coff" alt="">
              </div>
           <style>
              .overlay_coff{
                position: absolute;
                width: 200px !important;
                left:-10px;
                bottom:-30px; 
              }
              @media (min-width:992px) {
                
              .overlay_coff{
                position: absolute;
                width: 140px !important;
                left:-10px;
                bottom:-30px; 
              }
              }
              @media (min-width:1200px) {
                
              .overlay_coff{
                position: absolute;
                width: 170px !important;
                left:-10px;
                bottom:-30px; 
              }
              }
              @media (min-width:1400px) {
                
              .overlay_coff{
                position: absolute;
                width: 200px !important;
                left:-10px;
                bottom:-30px; 
              }
              }
           </style>
             
          </div>
        </div>
        <div class="col-lg-6 index-img">
           <div class=" card-form-index">
             <p>Send a Message</p>
             <h3>Let’s  Get  To  Work</h3>
             <div class="index-form">
              <input class="form-control " type="text" name="name" value="" placeholder="Your Name" required>
              <input class="form-control " type="text"  name="email" value="" placeholder="Your Email" required>

              <textarea class="form-control "   name="message"  clos="15" rows="5" placeholder="Message"></textarea>
              <input type="button" class="index-button" value="Send Messages"> 
            </div>

           </div>
   
  
          </div>
        </div>
        <!-- </div> -->
      </div>
    </div>

   <?php include("footer.php")?>
    <!-- <div class="container-fluid footer">
      <div class="container">
        <div class="row" style="justify-content: center; align-items: center;">
          <div class="col-md-4">
            <h3>QUICK LINKS</h3>
            <ul style="list-style:none">
              <li><a href="#">Best Web Developers in Chennai</a></li>
              <li><a href="#">Best Android App developers in Chennai</a></li>
              <li><a href="#">Best iOS App developers in CHennai</a></li>
              <li><a href="#">Best Digital Marketing Agency in Chennai</a></li>
              <li><a href="#">Best SEO Company in Chennai</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <div class="footer-flex">
              <img src="img/logo_main_1.png" alt="">
              <div class="overlay-footer">
                <img src="img/footer-circ1.svg" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <img src="img/t4l-logo.png" style="width:60%; height:auto" alt="">
            <div class="footer-icons">
              <div class="inner-main-icon">
                <img src="img/fb.png" alt="">
              </div>
              <div class="inner-main-icon">
                <img src="img/insta.png" class="img-2" alt="">
              </div>
              <div class="inner-main-icon">
                <img src="img/twitter.png"  class="img-2" alt="">
              </div>
            </div>
            <p>Made with ❤️ in India by Tech4LYF.</p>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Testimonial Page - Start-->
    
    

     <!-- internal link -->
     
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js"></script>

     <!-- internal js -->
    

     <!-- <script src="js/about.js"></script> -->
    <script src="js/src.js"></script>


        </body>
    
<script>

      

$('.caro-1').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  lazyLoad: false,
  autoplay:true,
  autoplayTimeout: 3000,
  slideTransition: 'linear',
  autoplaySpeed: 3000,
  // center: true,
  responsive:{
      0:{
          items:2
      },
      600:{
          items:3
      },
      1000:{
          items:4
      }
  }
})

$('.owl-carowl').owlCarousel(
            {
            loop: true,
            margin: 20,
            nav: true,
            autoplay: true,
            center: true,
            responsive: {
                0: {
                    items: 1

                },
                1000: {
                    items: 3

                }
            }
        })
    </script> 

<!-- owl-carousel -->

   <script>
    var owl = $('.screenshot_sliders').owlCarousel({
    loop: true,
    responsiveClass: true,
    nav: true,
    margin: 0,    
    autoplayTimeout: 4000,
    smartSpeed: 400,
    autoplay:false  ,
    center: true,
    touchDrag  : true,
    mouseDrag  : true,
    navText: ['&#8592;', '&#8594;'],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1
        },
        1200: {
            items: 1
        }
    }
});


jQuery(document.documentElement).keydown(function (event) {    
    if (event.keyCode == 37) {
    
    } else if (event.keyCode == 39) {
     
    }
    
});
   </script> 


  <script type="text/javascript">
    $(function() {
    // Owl Carousel
    var owl = $(".caro-2");
    owl.owlCarousel({
      items: 1,
      margin: 10,
      loop: true,
      nav: false,
      autoplay:true,
      navText:["<b><</b>","<b>></b>"]
      });
    });



    
  </script>
  <script>
    $('.owl-world').owlCarousel({
    loop:true,
    margin:10,
    items:1,
    nav:false,
    
})
        </script>

 </html>


