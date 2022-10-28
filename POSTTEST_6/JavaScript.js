// Dark Mode Home dan About Me
function dark() {
    var darkMode = document.getElementById("home");
    darkMode.style.background = "url('image/dark_bg.jpg')";
    darkMode.style.backgroundRepeat = "no-repeat";
    darkMode.style.backgroundSize = "cover";

    var welc = document.getElementById("welcome");
    welc.style.color = "white";

    var desc = document.getElementById("desc");
    desc.style.color = "white";
    desc.style.borderColor = "white";

    var foot = document.getElementById("foot");
    foot.style.background = "black";
    foot.style.color = "white";

    var nav = document.getElementById("container");
    nav.style.border = "1px solid white";

    var show = document.getElementById("show");
    show.style.color = "white";
    show.style.borderColor = "white";

    var text = document.getElementById("moreDesc");
    text.style.color = "white";
    text.style.borderColor = "white";

}

function light() {
    var darkMode = document.getElementById("home");
    darkMode.style.background = "url('image/bg.jpg')";
    darkMode.style.backgroundRepeat = "no-repeat";
    darkMode.style.backgroundSize = "cover";

    var welc = document.getElementById("welcome");
    welc.style.color = "black";

    var desc = document.getElementById("desc");
    desc.style.color = "black";
    desc.style.borderColor = "black"

    var foot = document.getElementById("foot");
    foot.style.background = "white";
    foot.style.color = "black";

    var show = document.getElementById("show");
    show.style.color = "black";
    show.style.borderColor = "black";

    var text = document.getElementById("moreDesc");
    text.style.color = "black";
    text.style.borderColor = "black";

}

function dark_ab() {
    var bg = document.getElementById("bg_abt");
    bg.style.background = "rgb(57, 57, 57)";

    var nav = document.getElementById("container");
    nav.style.border = "1px solid white";

    var foot = document.getElementById("foot");
    foot.style.background = "black";
    foot.style.color = "white";

    var bg_profile = document.getElementById("bg_profile");
    bg_profile.style.background = "#202124"

    var table = document.getElementById("tab");
    table.style.background = "black";
    table.style.color = "white";

    var profile = document.getElementById("profile");
    profile.style.borderColor = "white";
}

function light_ab() {
    var bg = document.getElementById("bg_abt");
    bg.style.background = "#D1D5DE";

    var nav = document.getElementById("container");
    nav.style.border = "1px solid black";

    var foot = document.getElementById("foot");
    foot.style.background = "white";
    foot.style.color = "black";

    var bg_profile = document.getElementById("bg_profile");
    bg_profile.style.background = "#8392AF"

    var table = document.getElementById("tab");
    table.style.background = "white";
    table.style.color = "black";

    var profile = document.getElementById("profile");
    profile.style.borderColor = "black";
}


// Function untuk Tema Home dan About ME
function theme () {
    if (document.getElementById("checkbox").checked) {
        dark()
    } else {
        light()
    }
}

function theme_ab () {
    if (document.getElementById("checkbox").checked) {
        dark_ab()
    } else {
        light_ab()
    } 
}


// Manipulasi DOM 
// Animasi Welcome
function welc_over() {
    const animate = document.getElementById("welcome");
    animate.style.transition = ".2s"
    animate.style.transform = "ScaleY(1.1)"
}

function welc_out() {
    const animate = document.getElementById("welcome");
    animate.style.transition = ".2s"
    animate.style.transform = "Scale(1)"
}

// Memberi Line Judul Web
function judul_over() {
    const line = document.getElementById("judul");
    line.style.transition = "0.1s"
    line.style.borderBottom = "2px solid white"
    line.style.paddingBottom = "0.2px"
}

function judul_out() {
    const line = document.getElementById("judul");
    line.style.transition = "0.1s"
    line.style.borderBottom = "0px solid white"
}

// Pop Up Saat Klik Icon Instagram pada About Me
function pop() {
    var konfirmasi = confirm("Apakah yakin ingin mengunjungi Instagram ?")

    if (konfirmasi == true){
        window.location.href = "https://instagram.com/ardisetiw"
    } 
}


// Add Event Listener

var button = document.getElementById("show");

button.addEventListener("click", function() {

    if (document.getElementById("moreDesc").style.display == "none" ){
        document.getElementById("moreDesc").style.display = "block"
        document.getElementById("show").innerHTML= "Show Less"
        document.getElementById("show").style.color = "white";
    } else {
        document.getElementById("moreDesc").style.display = "none"
        document.getElementById("show").innerHTML= "Show More"
        document.getElementById("show").style.color = "black";
    }


})

function feedback(){
    document.getElementById("pop_feed").style.display = "flex";
}

function close_feed() {
    document.getElementById("pop_feed").style.display = "none";
}

function loginpop(){
    document.getElementById("pop_login").style.display = "block";
}

function close_log() {
    document.getElementById("pop_login").style.display = "none";
}

function logout(){
    window.location.href = "index.php";
}