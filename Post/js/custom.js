$(document).ready(function() {
    
    var userFeed = new Instafeed({
        get: 'user',
        userId: '394917096',
        limit: 9,
        resolution: 'standard_resolution',
        accessToken: '394917096.1677ed0.64cd561164ea42f79e2b2bae2d9342bc',
        sortBy: 'most-recent',
        template: '<div class="col-sm-4 instaimg" style=" height:20vw; overflow:hidden; padding:2% 1%;"><a href="{{image}}" class="images1" target="_blank"><div class="imgcontainer"><img src="{{image}}" alt="{{caption}}" class="images2" style="width:100%; height:20vw; object-fit: cover; " /><div class="response"><p>&#10084;{{likes}}&nbsp;&nbsp;<img src="./post/comment.png" width="10%">{{comments}}</div></p></a></div><div class="caption"></div><div class="captiontext"><p>{{caption}}</p></div></div>',
    });

    userFeed.run();

    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });


});