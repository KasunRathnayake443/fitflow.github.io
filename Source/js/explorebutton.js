function scrollToSection() {
    
    var targetElement = document.getElementById("scrollTarget");

    if (targetElement) {
       
        var targetOffset = targetElement.getBoundingClientRect().top;

      
        window.scrollTo({
            top: targetOffset + window.scrollY, 
            behavior: "smooth" 
        });
    }
}