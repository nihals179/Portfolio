$(document).ready(function(){
$(".link").click(function(e) {
  e.preventDefault();
  var href = $(this).attr('href');
    $(".head").css('transform', 'translateX(-110%)').addClass("right");
    $(".cen").css('transform', 'translateX(100%)').addClass("cenreset");
    setTimeout(link, 1200);
    function link(){
      window.location = href; 
    };
});
});
    
function openNav() {
  document.getElementById("mySidenav").style.width = "15%";
  document.getElementById("main").style.marginLeft = "15%"; 
document.getElementById("main").style.width = "85%"; 
    
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
    document.getElementById("main").style.width = "100%"; 
}

$(document).ready(function(){
    $(this).removeClass("run-animation").addClass("run-animation");
});