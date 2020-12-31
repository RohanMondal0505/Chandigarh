// $(document).ready(()=>{
//     setTimeout(()=>{
//             // xBtn.classList.remove("close");
//             document.querySelector(".log-background").style.opacity=1;
//             document.querySelector(".log-background").style.visibility="visible";
//     },3000)
// })



// Logout Button Start ------------------
const logoutBtn = document.querySelector(".logout");
const loginBtn = document.querySelector(".logout-section a");
const loginSection = document.querySelector(".login-section");
const logoutSection = document.querySelector(".logout-section");

logoutBtn.addEventListener("click", ()=>{
    loginSection.style.visibility="hidden";
    logoutSection.style.visibility="visible";
    loginSection.style.opacity=0;
    logoutSection.style.opacity=1;
})

loginBtn.addEventListener("click", ()=>{
    document.querySelector(".log-background").style.opacity=1;
    document.querySelector(".log-background").style.visibility="visible";
    loginSection.style.visibility="visible";
    loginSection.style.opacity=1;
    logoutSection.style.visibility="hidden";
    logoutSection.style.opacity=0;
})
// x Logout Button End x ------------------ x



// Login || Signin Form Start ------------------
const xBtn = document.querySelector(".x-btn");

xBtn.addEventListener("click", ()=>{
    // xBtn.className = "x-btn close";
    document.querySelector(".log-background").style.opacity=0;
    document.querySelector(".log-background").style.visibility="hidden";
})

const logBtn = document.querySelector(".log-button-container .log-buttons button:nth-child(2)");
const signBtn = document.querySelector(".log-button-container .log-buttons button:last-child");
const backAni = document.querySelector(".log-button-container .log-buttons .backAni");
const logContainer = document.querySelector(".log-body-container .login-container");
const signContainer = document.querySelector(".log-body-container .signin-container");
const logBody = document.querySelector(".log-body-container");

signBtn.addEventListener("click", () => {
    if (backAni.style.left == "51%") {
        backAni.style.left = "-10px";
        logContainer.style.left = "0%";
        signContainer.style.left = "100%";
        signBtn.style.color = "#fff";
        logBtn.style.color = "#000";
        logBody.style.height = "28rem"
    } else {
        backAni.style.left = "51%";
        logContainer.style.left = "-100%";
        signContainer.style.left = "0%";
        signBtn.style.color = "#000";
        logBtn.style.color = "#fff";
        logBody.style.height = "47rem"
    }
})

logBtn.addEventListener("click", () => {
    if (backAni.style.left == "51%") {
        backAni.style.left = "-10px";
        logContainer.style.left = "0%";
        signContainer.style.left = "100%";
        logBtn.style.color = "#000";
        signBtn.style.color = "#fff";
        logBody.style.height = "28rem"
    } else {
        backAni.style.left = "51%";
        logContainer.style.left = "-100%";
        signContainer.style.left = "0%";
        logBtn.style.color = "#fff";
        signBtn.style.color = "#000";
        logBody.style.height = "47rem"
    }
})

// Validation
const inputType = document.querySelectorAll(".signin-container .form-group input");
const labelName = document.querySelectorAll(".signin-container .form-group label");
const form2 = document.getElementById("form2");

function iFocus(index) {
    labelName[index].style.bottom = "0rem";
    labelName[index].style.left = "0rem";
    labelName[index].style.color = "#000";
}

function iFocusout(index) {
    if (inputType[index].value.length == 0) {
        labelName[index].style.bottom = "-2.5rem";
        labelName[index].style.left = "1rem";
        labelName[index].style.color = "";
    }

}

form2.addEventListener("submit", (e) => {
    if (checkInput()) {
        e.preventDefault();
    }
})

function checkInput() {
    let result = true;

    if (inputType[0].value === '' || inputType[0].value == null) {
        result = setError(inputType[0]);
    } else {
        result = setSuccess(inputType[0]);
    }
    if (inputType[1].value === '' || inputType[1].value == null) {
        result = setError(inputType[1]);
    } else {
        result = setSuccess(inputType[1]);
    }
    if (inputType[2].value === '' || inputType[2].value == null) {
        result = setError(inputType[2]);
    } else {
        result = setSuccess(inputType[2]);
    }
    if (inputType[3].value === '' || inputType[3].value == null) {
        result = setError(inputType[3]);
    } else if (inputType[3].value === inputType[4].value) {
        result = setSuccess(inputType[4]);
    } else {
        result = setError(inputType[3]);
    }
    if (inputType[4].value === '' || inputType[4].value == null) {
        result = setError(inputType[4]);
    } else if (inputType[3].value === inputType[4].value) {
        result = setSuccess(inputType[4]);
    } else {
        result = setError(inputType[4]);
    }

    return result;
}

function setError(input) {
    input.className = "error";
    return true;
}

function setSuccess(input) {
    input.className = "success";
    return false;
}

function conditionCheckOnFocus() {
    const emailChecker = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    const numberChecker = /^[0-9]+$/;

    inputType[0].addEventListener("focusout", () => {
        if (inputType[0].value === '' || inputType[0].value == null) {
            result = setError(inputType[0]);
        } else {
            result = setSuccess(inputType[0]);
        }
    })
    inputType[1].addEventListener("focusout", () => {
        if (inputType[1].value === '' || inputType[1].value == null) {
            result = setError(inputType[1]);
        } else if (inputType[1].value.match(emailChecker)) {
            result = setSuccess(inputType[1]);
        } else {
            result = setError(inputType[1]);
        }
    })
    inputType[2].addEventListener("focusout", () => {
        if (inputType[2].value === '' || inputType[2].value == null) {
            result = setError(inputType[2]);
        } else if (inputType[2].value.match(numberChecker)) {
            if (inputType[2].value.length < 10 || inputType[2].value.length > 10) {
                result = setError(inputType[2]);
            } else {
                result = setSuccess(inputType[2]);
            }
        } else {
            result = setError(inputType[2]);
        }
    })
    inputType[3].addEventListener("focusout", () => {
        if (inputType[3].value === '' || inputType[3].value == null) {
            result = setError(inputType[3]);
        } else if (inputType[3].value === inputType[4].value) {
            result = setSuccess(inputType[3]);
        } else {
            result = setError(inputType[3]);
            result = setError(inputType[4]);
        }
    })
    inputType[4].addEventListener("focusout", () => {
        if (inputType[4].value === '' || inputType[4].value == null) {
            result = setError(inputType[4]);
        } else if (inputType[3].value === inputType[4].value) {
            result = setSuccess(inputType[3]);
            result = setSuccess(inputType[4]);
        } else {
            result = setError(inputType[3]);
            result = setError(inputType[4]);
        }
    })
}
conditionCheckOnFocus()

document.getElementById("file").addEventListener("click", ()=>{
    document.getElementById("fileLabel").innerText="";
})
// x Login || Signin Form End x ------------------ x



// Div Hover Start ------------------
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
// x Div Hover End x ------------------ x



// Slider Start ------------------
// $('.owl-carousel').owlCarousel({
//     loop:true,
//     items:1,
//     autoplay:true,
//     autoplayTimeout:2500,
//     autoplayHoverPause:true
// })
// x Slider End x ------------------ x



// Tabs Start ------------------
const tabs = document.querySelectorAll(".row-2 .bottom .tab");
const buttons = document.querySelectorAll(".row-2 .top ul li");

function clickToShow(index){
    setTimeout(() => {
        buttons.forEach((e) =>{
            e.style.backgroundColor="transparent";
            e.style.color="";
            e.style.zIndex="";
            e.style.boxShadow="";
        })
        buttons[index].style.backgroundColor="#fff";
        buttons[index].style.color="rgb(59, 50, 87)";
        buttons[index].style.zIndex="3";
        buttons[index].style.boxShadow="-5px -3px 5px rgba(0, 0, 0, .1),5px -5px 5px rgba(0, 0, 0, .1)";
        
        tabs.forEach((e) =>{
            e.style.visibility="hidden";
        })
        tabs[index].style.visibility="visible";
    }, 200);

}
clickToShow(0);


// Hotel Section
const hRoomFake = document.getElementById("hRoomFake");
const roomDone = document.getElementById("roomDone");
const roomCountMainDiv = document.querySelector(".roomCountMainDiv");

let rPlus = 1; 
let gPlus = 1;
function clickPlusR(){
    if(rPlus!=10 || gPlus!=10){
        if(rPlus==gPlus){
            gPlus+=1;
        }
        rPlus+=1;
        document.getElementById("rPlusCount").innerText=rPlus;
        document.getElementById("gPlusCount").innerText=gPlus;
        if(rPlus!=1){
            if(gPlus!=1){
                hRoomFake.value=rPlus + " Rooms, " + gPlus + " Guests";
            }else{
                hRoomFake.value=rPlus + " Rooms, " + gPlus + " Guest";
            }
        }else{
            hRoomFake.value=rPlus + " Room, " + gPlus + " Guest";
        }
    }
}
function clickPlusG(){
    if(gPlus<10){
        gPlus+=1;
        document.getElementById("gPlusCount").innerText=gPlus;
        if(gPlus!=1){
            hRoomFake.value=rPlus + " Room, " + gPlus + " Guests";
        }else{
            hRoomFake.value=rPlus + " Room, " + gPlus + " Guest";
        }
    }else if(rPlus==1){
        if(gPlus<8){
            gPlus+=1;
            document.getElementById("gPlusCount").innerText=gPlus;
            hRoomFake.value=rPlus + " Room, " + gPlus + " Guest";
        }
    }
}
function clickMinusR(){
    if(rPlus!=1){
        rPlus-=1;
        document.getElementById("rPlusCount").innerText=rPlus;
        if(rPlus==1){
            if(gPlus==1){
                hRoomFake.value=rPlus + " Room, " + gPlus + " Guest";
            }else{
                hRoomFake.value=rPlus + " Room, " + gPlus + " Guests";
            }
        }else{
            hRoomFake.value=rPlus + " Rooms, " + gPlus + " Guests";
        }
        if (rPlus==1 && gPlus>8) {
            gPlus=8;
            document.getElementById("gPlusCount").innerText=gPlus;
            hRoomFake.value=rPlus + " Room, " + gPlus + " Guests";
        }
    }
}
function clickMinusG(){
    if(gPlus!=1){
        gPlus-=1;
        document.getElementById("gPlusCount").innerText=gPlus;
        if(gPlus!=1){
            hRoomFake.value=rPlus + " Room, " + gPlus + " Guests";
        }else{
            hRoomFake.value=rPlus + " Room, " + gPlus + " Guest";
        }
        if (rPlus!=gPlus && rPlus>gPlus) {
            rPlus-=1;
            document.getElementById("rPlusCount").innerText=rPlus;
            if(gPlus!=1){
                hRoomFake.value=rPlus + " Rooms," + gPlus + " Guests";
            }else{
                hRoomFake.value=rPlus + " Room, " + gPlus + " Guest";
            }
        }
    }
}

hRoomFake.addEventListener("focus", ()=>{
    hRoomFake.style.borderBottom = "2px solid var(--blue)";
    roomCountMainDiv.style.display = "block";
    document.querySelector(".fa-chevron-down").style.transform = "rotate(180deg)";
});

roomDone.addEventListener("click", ()=>{
    hRoomFake.style.borderBottom = "2px solid #fff";
    roomCountMainDiv.style.display = "none";
    document.querySelector(".fa-chevron-down").style.transform = "rotate(0deg)";
    document.getElementById("hRoom").value=rPlus;
    document.getElementById("hGuest").value=gPlus;
});

// Flight Section
let fPassenger = 1;
function fightClick(icon){
    if(icon==='+'){
        fPassenger+=1;
        document.getElementById("fCount").innerText = fPassenger;
        document.getElementById("fCount2").innerText = fPassenger;
    }
    if(icon==='-' && fPassenger!=1){
        fPassenger-=1;
        document.getElementById("fCount").innerText = fPassenger;
        document.getElementById("fCount2").innerText = fPassenger;
    }
    document.getElementById("fPassenger").value = fPassenger;
}

// Train Section
let tPassenger = 1;
function trainClick(icon){
    if(icon==='+'){
        tPassenger+=1;
        document.getElementById("tCount").innerText = tPassenger;
        document.getElementById("tCount2").innerText = tPassenger;
    }
    if(icon==='-' && tPassenger!=1){
        tPassenger-=1;
        document.getElementById("tCount").innerText = tPassenger;
        document.getElementById("tCount2").innerText = tPassenger;
    }
    document.getElementById("tPassenger").value = tPassenger;
}

// Bus Section
let bPassenger = 1;
function busClick(icon){
    if(icon==='+'){
        bPassenger+=1;
        document.getElementById("bCount").innerText = bPassenger;
        document.getElementById("bCount2").innerText = bPassenger;
    }
    if(icon==='-' && bPassenger!=1){
        bPassenger-=1;
        document.getElementById("bCount").innerText = bPassenger;
        document.getElementById("bCount2").innerText = bPassenger;
    }
    document.getElementById("bPassenger").value = bPassenger;
}

// Car Section
let cPassenger = 1;
function carClick(icon){
    if(icon==='+'){
        cPassenger+=1;
        document.getElementById("cCount").innerText = cPassenger;
        document.getElementById("cCount2").innerText = cPassenger;
    }
    if(icon==='-' && cPassenger!=1){
        cPassenger-=1;
        document.getElementById("cCount").innerText = cPassenger;
        document.getElementById("cCount2").innerText = cPassenger;
    }
    document.getElementById("cPassenger").value = cPassenger;
}

// Food Section
// ------------

// x Tabs End x ------------------ x



// Blog Start ------------------

const blogBtn = document.querySelectorAll(".blogHeading .blogH-1 span");

const aniBar = document.querySelector(".blogHeading .blogH-1 .aniBar");

blogBtn[0].addEventListener("click", ()=>{
    aniBar.style.left = "4.5%";
    aniBar.style.width = "30%";
})
blogBtn[1].addEventListener("click", ()=>{
    aniBar.style.left = "45%";
    aniBar.style.width = "49%";
})

// Blog Tab
const blogContainer = document.querySelectorAll(".row-3 .blogMainContainer .blogContainer");

function clickToOpenBlogTab(index){
    blogContainer.forEach(e =>{
        e.style.visibility = "";
    })
    blogContainer[index].style.visibility = "visible";
    
    
    if(index == 1){
            blogContainer[0].style.left = "100%";
            blogContainer[1].style.left = "0%";
    }else {
        blogContainer[0].style.left = "0%";
        blogContainer[1].style.left = "-100%";
    }
}
clickToOpenBlogTab(0);



// x Blog End x ------------------ x