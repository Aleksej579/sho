'use strict';
//scrol--------------------------------------------------
$(window).scroll(function(){
    // 200px от верха
    if ($(window).scrollTop() > '950'){
        $("nav")
            .css("background-color", "rgba(0, 0, 0, 0.5)")
            .css("border-bottom", "1px solid grey");
        $("nav ul li a").css("color", "white");
    }else {
        $("nav")
            .css("background-color", "rgba(0, 0, 0, 0.0)")
            .css("border", "none");
        $("nav ul li a").css("color", "#b3b3b3");
    }
});