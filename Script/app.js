// menu toggle

const icon = document.getElementById("icon_menu");
const navbar = document.getElementById("navbar");

icon.addEventListener("click" , function() {
  navbar.classList.toggle("with-menu");
})


function removeMenu () {
  if (navbar.classList.length == 2 ) {
    navbar.classList.remove("with-menu");
  }
}


// calcul age

function age(birthday)
{
  birthday = new Date(birthday);
  return new Number((new Date().getTime() - birthday.getTime()) / 31536000000).toFixed(0);
}

document.getElementById("age").innerHTML=age("15 june 1995");



// Nav bar

const links = document.querySelectorAll(".menu_link");
const under = document.getElementById("under");
let titles = document.querySelectorAll("h2");



//initialisation underline


window.addEventListener("load" , 
function() {
    elementPositionSize(links[0]) ;

/* under.style.width=init[2] + "px";
under.style.left=init[0] + "px";
under.style.top=init[1] +  init[3] + 3 + "px" */
})


//event click on links

for(var i = 0 ; i < links.length ; i++) {
    links[i].addEventListener("click", function () {
        elementPositionSize(this);

        setTimeout(correctscroll, 600)
    })
}


//correction du scroll

function correctscroll (){  
    var scr = window.scrollY - 102;
    console.log(scr)
    window.scrollTo(0,scr)}


//récupération  des propiétés  du lien et placement de underline

function elementPositionSize (arg1) {
    var b = arg1.getBoundingClientRect();
    var pos = {
      clientX: arg1.offsetLeft,
      clientY: arg1.offsetTop,
      viewportX: (b.x || b.left),
      viewportY: (b.y || b.top)
    }

    var i =[pos.clientX, pos.clientY ,  arg1.offsetWidth , arg1.offsetHeight];
    under.style.width=i[2] + "px";
    under.style.left=i[0] + "px";
    under.style.top=i[1] +  i[3] + 3 + "px"
    return i;
  }

  window.addEventListener("resize" , function() {
     path = window.location.hash;
    if (path == "") {
      path = "#accueil"
      console.log(path)
    }
      underscrollResize(path.substr(1))
    

  })


  // appel au scroll ou resize

  function underscrollResize(arg1) {
    let path = "#" + arg1;
    console.log("ok");
    var link = document.querySelector('[href ="' + path + '"]');
    elementPositionSize(link);
   
}

  window.addEventListener("scroll" , function () {
    removeMenu();
    if (window.scrollY > 100) {
    for(var k = 0 ; k < titles.length ; k++) {
        var y = titles[k].getBoundingClientRect()
        var posS = {
            clientX: titles[k].offsetLeft,
            clientY: titles[k].offsetTop,
            viewportX: (y.x || y.left),
            viewportY: (y.y || y.top)}
            var h = window.innerHeight/2;
           
                    if (posS.viewportY < h) {
              var  i = titles[k]["attributes"][0].value;
              underscrollResize(i)
            }
          }
         
    } else {
        i = "accueil";
        underscrollResize(i);
    }
})

// Animation

const left = document.querySelectorAll(".logo,.accueil-part");
const right = document.querySelectorAll(".navbar_menu,.accueil-part2");

console.log(left)

window.addEventListener("load" , function () {
  const TL = gsap.timeline({paused :"true"});

  TL
  .staggerFrom(left, 1 , {left:-200 , opacity :0 , ease:"power2.out"}, 0)
  .staggerFrom(right, 1.5 , {right:-200, opacity: 0, ease:"power2.out"}, 0.3, '=-1')

  TL.play()
})



/* //ajax mail 


document.getElementById("form").addEventListener("submit", function(e){
  var data = new FormData (this);
  e.preventDefault();
  alert("")
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState==4 && this.status==200){
      if (this.response!="Votre message a été envoyé.") {
      document.getElementById("valid").style.backgroundColor="#f8d7da";
      document.getElementById("valid").style.color="#721c24"
      document.getElementById("valid").innerHTML=this.response;
      document.getElementById("valid").style.animationPlayState="running"; 
      } else {
        document.getElementById("valid").style.backgroundColor="transparent";
        document.getElementById("valid").style.border="none";
        document.getElementById("valid").style.color="#171717"
        document.getElementById("valid").innerHTML="";
        document.getElementById("valid").style.animationPlayState="running"; 
        document.getElementById("form").submit()
      }
      
    }else if (this.readyState==4) {
      console.log("erreur");
    }
  };

  xhr.open("POST", "src/mail.php",true);
  xhr.send(data);
  return false;
}) */
