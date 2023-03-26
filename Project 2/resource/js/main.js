$(document).ready(function(){
    var mixer = mixitup('.container',{
        animation: {
            duration: 300
        }
    });
    
    $(".js-service-section").waypoint(function(direction){
        if(direction == "down"){
            $("nav").addClass("sticky");
        }
        else{
            $("nav").removeClass("sticky");
        }
    });



    // Smooth Scroll

    $("a").on("click", function(event){
        if(this.hash !== ""){
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                sctollTop: $(hash).offset.top}, 800, function(){
                    window.location.hash = hash;
                }
            );
        }
    });
    
});

function opennav(){
    document.getElementById("my-nav").style.width="100%";
}
function closenav(){
    document.getElementById("my-nav").style.width="0%";
}
