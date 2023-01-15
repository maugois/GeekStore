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


// Começo menu - bars
var header = document.getElementById('myHeader');
var navigationHeader = document.getElementById('nav-menu');
var showSidebar = false;

function toggleSidebar()
{
    showSidebar = !showSidebar;
    if(showSidebar)
    {
        navigationHeader.style.marginLeft = '-5vw';
        navigationHeader.style.animationName = 'showSidebar';
    }
    else
    {
        navigationHeader.style.marginLeft = '-200em';
        navigationHeader.style.animationName = 'closeSidebar';
    }
}

function closeSidebar()
{
    if(showSidebar)
    {
        showSidebar = true;
        toggleSidebar();
    }
}

window.addEventListener('resize', function(event) {
    if(window.innerWidth > 999 && showSidebar) 
    {  
        showSidebar = true;
        toggleSidebar();
    }
});
// Fim menu - bars
