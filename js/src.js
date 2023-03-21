//Triangle Animation Section - Start
var hero_hit=document.getElementById("hero").offsetHeight;
for(i=1;i<=10; i++){
anime({
    targets: '#hero-ani #ani'+i,
    // translateY: [0, -hero_hit+100],
    translateY:[anime.random(hero_hit/2,-hero_hit/2),anime.random(hero_hit/2,-hero_hit/2)],
    translateX:[anime.random(-300,300),anime.random(-300,300)],
    // translateX: function(el, i, l) {
    //     return anime.random(-600,600)
    // },
    // translateY: function(el, i, l) {
    //     return anime.random(0,-hero_hit)
    // },
    easing: 'easeInOutSine',
    rotate: '2turn',
    duration:anime.random(10000,15000),
    direction: 'alternate',
    loop: true,
    delay: function(el, i, l) {
      return i * 1000;
    },
    endDelay: function(el, i, l) {
      return (l - i) * 10;
    }
  });
}
//Triangle Aniamtion Section - End
//Text Animation section - Start
document.addEventListener('DOMContentLoaded',function(event){
  // array with texts to type in typewriter
  var dataText = [ "Best", "Passionate"];

  // type one text in the typwriter
  // keeps calling itself until the text is finished
  function typeWriter(text, i, fnCallback) {
    // chekc if text isn't finished yet
    if (i < (text.length)) {
      // add next character to h1
     document.querySelector("h1").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';

      // wait for a while and call this function again for next character
      setTimeout(function() {
        typeWriter(text, i + 1, fnCallback)
      }, 270);
    }
    // text finished, call callback if there is a callback function
    else if (typeof fnCallback == 'function') {
      // call callback after timeout
      setTimeout(fnCallback, 700);
    }
  }
  // start a typewriter animation for a text in the dataText array
   function StartTextAnimation(i) {
     if (typeof dataText[i] == 'undefined'){
        setTimeout(function() {
          StartTextAnimation(0);
        }, 200);
     }
     // check if dataText[i] exists
    //  alert(dataText)
    if (i < dataText  .length) {
      // text exists! start typewriter animation
     typeWriter(dataText[i], 0, function(){
       // after callback (and whole text has been animated), start next text
       StartTextAnimation(i + 1);
     });
    }
  }
  // start the text animation
  StartTextAnimation(0);
});
//Text Animation Section - End


// window.onscroll = function() {myFunction()};

// Get the navbar
// var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
// var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}



cng_circ_caro();
var rot=0;
var rot_inner=0;
var set_img=0;
function cng_circ_caro(){
    setTimeout(() => {
        // alert("Delayed for 1 second.");\
        rot+=90;
        // if(rot/4==90){
        //     rot=0;
        // }
        rot_inner-=90;
        if(set_img==3){
            set_img=0;
        }
        else{
            set_img+=1;

        }

        set_all_img();
        cng_circ_caro();
    }, 7000);
}
function set_all_img(){
    var img_part=document.getElementsByClassName("circle");
    var cnt_part=document.getElementsByClassName("caro-para");
    // img_part[set_img].getElementsByTagName("img")[0].style.opacity=0;
    $("#inner-circ .circle img").css("opacity","0");
    $("#big-img").css("opacity","0");
    $("#big-img").css("opacity","0");
    $(".caro-para").removeClass("active");
    // $("#caro_cnt_main").css("width","0");
        $("#inner-circ .circle img").css({ WebkitTransform: 'rotate(' + rot_inner + 'deg)'});
        setTimeout(() => {
            $("#inner-circ .circle img").css("opacity","1");
            $("#big-img").css("opacity","1");
            document.getElementById("big-img").src=img_part[set_img].getElementsByTagName("img")[0].src;
            cnt_part[set_img].classList.add("active");
            
        },800);
            // $("#caro_cnt_main").css("width","100%");
        var circ=document.getElementById("inner-circ");
        circ.style.transform="translate(-50%, 0%) rotate("+rot+"deg)";
}
function circ_cng(tp){
    if(tp=="prev"){
        rot-=90;
        rot_inner+=90;
        if(set_img==0){
            set_img=3;
        }
        else{
            set_img-=1;
        }
    }
    else{
        
        rot+=90;
        rot_inner-=90;
        
        if(set_img==3){
            set_img=0;
        }
        else{
            set_img+=1;
        }
    }
    set_all_img();
}
