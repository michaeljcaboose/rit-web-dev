function scrollToTop(targetID){
    var elementIn = document.getElementById(targetID);
    // get element location and reassign to top value
    var elementObject = elementIn.getBoundingClientRect();
    var elementY = elementObject.top;


    var startLocationY = document.body.scrollTop;
    var endLocationY = startLocationY + elementY;
    console.log("elY: "+ endLocationY);
    // -scrollDistance / (2000 / 15)
    var scrollStep = elementY / (2000 / 5);
    console.log("scrollStep: " +  scrollStep);

    var scrollInterval = setInterval(function () {
            if(document.body.scrollTop > endLocationY - 50) {
                window.scrollBy(0, scrollStep);
                console.log(document.body.scrollTop)
            }
            else{
                clearInterval(scrollInterval);
            }
        }, 5);

    console.log(elementY);
    console.log(document.body.scrollTop);
    window.scrollBy(0, scrollStep);
}