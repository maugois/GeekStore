// Começo Footer e Header
window.onscroll = function() {
    myFunction();
    calcScrollValue();
};
    
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

let calcScrollValue = () => {
    let scrollProgress = document.getElementById("top-to-scroll");
        
    let pos = document.documentElement.scrollTop;
        
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        
    let calcScrollValue = Math.round((pos * 100) / calcHeight);

    if (pos > 100) {
        scrollProgress.style.display = "grid";
    } else {
        scrollProgress.style.display = "none";
    }

    scrollProgress.addEventListener("click", () => {
        document.documentElement.scrollTop = 0;
    });
};

window.onload = calcScrollValue;
// Fim Footer e Header

