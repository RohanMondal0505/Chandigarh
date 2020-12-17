// Logout Button Start
const logoutBtn = document.querySelector(".logout");
const loginBtn = document.querySelector(".logout-section a");
const loginSection = document.querySelector(".login-section");
const logoutSection = document.querySelector(".logout-section");

logoutBtn.addEventListener("click", ()=>{
    loginSection.style.display="none";
    logoutSection.style.display="block";
})

loginBtn.addEventListener("click", ()=>{
    loginSection.style.display="flex";
    logoutSection.style.display="none";
})
// x Logout Button End x




// Div Hover Start
const span2 = document.querySelectorAll(".headline span");
span2.forEach((e)=>{
    if(e.className == '1'){
        e.addEventListener("mouseover",()=>{
            document.querySelector(".box-1").style.display="block";
        })
        e.addEventListener("mouseout",()=>{
            document.querySelector(".box-1").style.display="none";
        })
    }
    if(e.className == '2'){
        e.addEventListener("mouseover",()=>{
            document.querySelector(".box-2").style.display="block";
        })
        e.addEventListener("mouseout",()=>{
            document.querySelector(".box-2").style.display="none";
        })
    }
    if(e.className == '3'){
        e.addEventListener("mouseover",()=>{
            document.querySelector(".box-3").style.display="block";
        })
        e.addEventListener("mouseout",()=>{
            document.querySelector(".box-3").style.display="none";
        })
    }
    if(e.className == '4'){
        e.addEventListener("mouseover",()=>{
            document.querySelector(".box-4").style.display="block";
        })
        e.addEventListener("mouseout",()=>{
            document.querySelector(".box-4").style.display="none";
        })
    }
})
// x Div Hover End x




// Slider Start
$('.owl-carousel').owlCarousel({
    loop:true,
    items:1,
    autoplay:true,
    autoplayTimeout:2500,
    autoplayHoverPause:true
})
// x Slider End x


// Tabs Start
const tabs = document.querySelectorAll(".row-3 .bottom .tab");
const buttons = document.querySelectorAll(".row-3 .top ul li");

function clickToShow(index){
    setTimeout(() => {
        buttons.forEach((e) =>{
            e.style.backgroundColor="#fff";
            e.style.color="";
            e.style.borderBottom="";
        })
        buttons[index].style.backgroundColor="";
        buttons[index].style.color="#fff";
        buttons[index].style.borderBottom="none";
        
        tabs.forEach((e) =>{
            e.style.visibility="hidden";
        })
        tabs[index].style.visibility="visible";
    }, 200);

}
clickToShow(0);

// x Tabs End x