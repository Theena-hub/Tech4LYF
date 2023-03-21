<!DOCTYPE html>
<html lang="en">
<head>
        <title>animation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        

        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,300;1,100;1,200&display=swap" rel="stylesheet">  
    </head>
    
<body>
    <style>
        .ani_background{
          background: url(img/background.png);
          background-position:center;
          background-size: cover;
          background-repeat: no-repeat;
          position: relative;
        
        }
        .ani_cloud{
            background: url(img/Cloud.png);
            background-position:0% 0%;
          background-size:500%;
          background-repeat: repeat-x;
           width:100%;
            height:100%;
        -webkit-animation: cloud 80s infinite linear;
    
        }
        @-webkit-keyframes cloud{
      from{
            
            background-position:0% 10%;
       }
       to {
         
          background-position:200% 10%;

       }
    
    }
        .ani_mountain{
            background: url(img/mountain.png);
            background-position:0% 0%;
          background-size: 500%;
          background-repeat: repeat-x;
          width:100%;
            height:100%;
            /* top:868px; */
            -webkit-animation: mountain 38s infinite linear;
        
        }
        @-webkit-keyframes mountain{
      from{
            
            background-position:0% 100%;
       }
       to {
         
          background-position:200% 100%;
       }
    
    }
   
    .ani_car {
       
        bottom:43px;
    position: absolute;
   width:121px;
    }
    .car_wheels{
    position: absolute;
    /* top: 95%; */
    bottom:20px;
    left:30px;
    transform: translate(-50%, -50%);
    width:26px;
    animation: car_wheel 1s infinite;
    animation-timing-function: linear;
  }
  @keyframes car_wheel {
    0%{
      transform:translate(-50%, -50%) rotate(0deg);
    }
    100%{
      transform:translate(-50%, -50%) rotate(360deg);
    }
    
  }
  /* @media(min-width:992px){
        .ani_car{
            background-size: 253%;
        }
    } */
  .car_wheels2{
    position: absolute;
    /* top:95%; */
    bottom:21px;
    left:103px;
    transform: translate(-50%, -50%);
    width:26px;
    animation: car_wheel2 1s infinite;
    animation-timing-function: linear;
  }
  @keyframes car_wheel2 {
    0%{
      transform:translate(-50%, -50%) rotate(0deg);
    }
    100%{
      transform:translate(-50%, -50%) rotate(360deg);
    }
    
  }
  @media(min-width:768px){
    .ani_mountain{
            background-size: 250%;
           
        }
        .ani_car{
            background-size: 277%;
            bottom: 25px;
    position: absolute;
    /* width: 104px; */
    width: 131px;
           
        }
        .car_wheels{
            bottom:6px;
    /* width: 35px; */
    width: 25px;
    left:31px;

        }
        .car_wheels2{
            left: 112px;
    width: 25px;
    bottom:6px;

        }
    }
  @media(min-width:992px){
    .ani_cloud{
        background-size:270%;
    }
    .ani_mountain{
            background-size:300%;
           
        }
        .ani_car{
            background-size: 277%;
            bottom: 37px;
    position: absolute;
    /* width: 104px; */
    width: 157px;
           
        }
        .car_wheels{
            bottom:13px;
    /* width: 35px; */
    width:30px;
    left:39px;

        }
        .car_wheels2{
            left: 132px;
    width:30px;
    bottom:14px;

        }
    }
    @media(min-width:1200px){
    .ani_mountain{
            background-size: 253%;
           
        }
        .ani_car{
            background-size: 277%;
            bottom: 37px;
    position: absolute;
    /* width: 104px; */
    width:205px;
           
        }
        .car_wheels{
            bottom:-6px;
    /* width: 35px; */
    width:46px;
    left:46px

        }
        .car_wheels2{
            left: 173px;
    width:46px;
    bottom:-4px;

        }
    }
        </style>
<div class="container-fluid ani_background" style="height:100vh;padding:0;">
           

            <div class="ani_cloud" >
             
                <div class="ani_mountain" >
                      
                      <img class="ani_car" src="img/car part.png">
                      <img class="car_wheels" src="img/car wheel.png">
                      <img class="car_wheels2" src="img/car wheel.png">
                 
                </div>
            </div>

          
</div>
</body>
</html>