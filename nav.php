<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <style>
    
.nav {
  /* height: 100px; */

   list-style-type: none; 
  background-color: #ffffff;
  position: relative;
  align-items: center; 
 display: flex;
 justify-content: space-between;
  overflow: hidden;
  width: 100%;
  border: none;


 
 
}

@media (max-width:768px) {
  .md-pt-45{
    padding-top: 45px;
  }
  
}
.md-row-rev{
  flex-direction: column-reverse;
}
@media(min-width:768px){
  .md-row-rev{
    flex-direction: row;
  }
}
.btn {
  font-family: 'Inter';
  height: auto;
  border-radius: 0.25rem;
  text-align: center;
  cursor: pointer;
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 30px;
}
.btn-dark .btn {
  color: #fff;

}
.nav > .nav-header {
  display: inline;

}

.nav > .nav-header > .nav-title > .navbrand >{
  padding: 10px 10px 10px 10px;
}

.nav > .nav-btn {
  display: none;
}

.nav > .nav-links {
  display: inline;
  align-items: center;
  font-size: 18px;
}

.nav a.nav-link {
  display: inline-block;
 margin: 0px  15px;
  padding: 13px 10px 13px 20px;
  text-decoration: none;
  color: #0a0000;
}


.nav a.nav-link:hover {
  color: #e04048;
}
.nav a.nav-link.active{
  color: #E04048;
}

.nav > #nav-check {
  display: none;
}

@media (max-width:600px) {
  .nav > .nav-btn {
    display: inline-block;
    position: absolute;
    right: 0px;
    top: 0px;
  }}
  .nav > .nav-btn > label {
    display: inline-block;
    width:100%;
    height:auto;
    padding: 13px;
  }
  .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
    background-color: rgba(0, 0, 0, 0.3);
  }
  .nav > .nav-btn > label > span {
    display: block;
    width:100%;
    height:auto;
    border-top: 2px solid #eee;
  }
  .nav > .nav-links {
    position: absolute;
    display: block;
    width: 100%;
    background-color: #333;
    height: 0px;
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 50px;
    left: 0px;
  }
  .nav > .nav-links > a {
    display: block;
    width: 100%;
  }
  .nav > #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
  .nav > #nav-check:checked ~ .nav-links {
    height: calc(100vh - 50px);
    overflow-y: auto;
  }
    .navbar {
  /* height: 5rem; */
  padding: 0 0rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border: none;
}

.btn {
  font-family: 'Inter';
  height: auto;
  border-radius: 0.25rem;
  text-align: center;
  cursor: pointer;
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 30px;
  
}
#btn_nav{
  background-color: #E04048;
  color: #ffffff;
  display: none;
}
@media (min-width:992px) {
  
#btn_nav{
  background-color: #E04048;
  color: #ffffff;
display: inline-block;
margin-left: 15px;
width: 138px;
}
}
.p-btn {
  color: #FFFFFF;
 
}
.cta-btn{
    display: flex;

}
.cta-btn .btn{
    margin: 1 0rem 2rem;
      color: #ffffff;
}

.navbar {
  /* height: 5rem; */
  padding: 0 0rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border: none;
}

.logo img{
    width: 205px;
    /* position: absolute;
    right: 73.33%;
    top: 3.91%; */
}
@media (min-width:1200px){
  .logo img{
  width:210px;
  height:auto;
}
}
@media (max-width:768px){
  .sticky-top .nav .logo img{
  width:100px;
  height:auto;
}
}
.nav-link ul{
    display: flex;
    align-items: center;
    margin-left: 40%;
}
.nav-link ul li{
  font-family: 'Inter';
  margin:8px 2px 20px 50px;
  padding-bottom: 2px;
  color: #232323;
  cursor: pointer;
  list-style: none;
  font-style: normal;
  font-weight: 500;
  font-size: 21px;
  line-height: 29px;
  letter-spacing: 0.0015em;
}
.nav-link ul li.active{
  color: #E04048;
}
.nav-link ul li:hover{
  color: #E04048;
}
.logo img{
    /* width:100%; */
    height:auto;
    /* position: absolute;
    right: 73.33%;
    top: 3.91%; */
}
@media (max-width:768px){
  .sticky-top .nav .logo img{
  /* width:100%; */
  height:auto;
}
}
.nav-link ul{
    display: flex;
    align-items: center;
    margin-left: 40%;
}
.nav-link ul li{
  font-family: 'Inter';
  margin:8px 2px 20px 50px;
  padding-bottom: 2px;
  color: #232323;
  cursor: pointer;
  list-style: none;
  font-style: normal;
  font-weight: 500;
  font-size: 21px;
  line-height: 29px;
  letter-spacing: 0.0015em;
}
.nav-link ul li.active{
  color: #E04048;
}
.nav-link ul li:hover{
  color: #E04048;
}
/* .navbar-toggler{
  height: auto;
  border:none;
} */
.navbar-expand-lg{
  flex-wrap: wrap;
    justify-content: flex-start;
}
@media (min-width: 992px){
  .navbar-expand-lg{
  flex-wrap: wrap !important;
    justify-content: flex-start;
}
}
</style>
  
<div class="container-fluid sticky-top" style="background: #ffffff;    box-shadow: 0 0 20px 0px rgb(0 0 0 / 20%);">
            <div class="container">
              <nav class="nav navbar navbar-expand-lg">
          
                <a href ="#" class="navbar-brand logo">
                  <img src="img/t4l-logo.png" alt="logo"></a>
                <button class="navbar-toggler active" id="tog-btn" onclick="togShow()" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon" style="display: flex; justify-content: center; align-items: center;"><i class=" fa fa-solid fa-bars"></i></span>
                </button>
                <!-- <button class="navbar-toggler" data-bs-toggle="collapse" type="button"  data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button> -->
        
              
                <div id="tog-show"class="collapse navbar-collapse" style="justify-content: end;" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="brand.php">Brands</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="about.php">About</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    
                  </ul>
                  <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" id="btn_nav" type="submit">Search</button>
                  </form> -->
                </div>
                <button type="button" id="btn_nav"  class="btn">Get a Proposal</button>
              </nav>
            </div>
          </div>
<script type="text/javascript"> 
  function togShow() {
            document.getElementById("tog-show").classList.add("show");
            document.getElementById('tog-btn').setAttribute("onclick","togHide()")
        }
        function togHide() {
            document.getElementById('tog-show').classList.remove("show");
            document.getElementById('tog-btn').setAttribute("onclick","togShow()")
        }

</script>          

  
</body>
</html>