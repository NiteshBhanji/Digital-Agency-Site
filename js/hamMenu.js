//JS For HamBurger Menu Button
var HamVar = 0;
function hamMenuToggle(x) {
    x.classList.toggle("change");

    if (HamVar == 0) {
        document.getElementById('hammenuid').style.display = "block";
        document.getElementById('innerhammenuid').style.opacity = "1";
        document.getElementById('innerhammenuid').style.animation = "fadeIn 1s";
        //document.body.style.height = "100vh";
        document.body.style.overflow = "hidden";
        HamVar = 1;
    } else {
        document.getElementById('hammenuid').style.display = "none";
        document.getElementById('innerhammenuid').style.opacity = "0";
        document.getElementById('innerhammenuid').style.animation = "fadeOut 1s";
        //document.body.style.height = "auto";
        document.body.style.overflow = "visible";
        HamVar = 0;
    }
}