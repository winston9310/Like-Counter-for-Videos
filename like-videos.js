jQuery(document).ready(function($) {
    $('.reel').each(function() {
        var video = $(this);
        var likes = localStorage.getItem('video_' + video.attr('id')) || 0;

        video.on('dblclick', function(e) {
            var heart = $('<div class="heart">&#10084;</div>');
            heart.css({
                top: e.clientY - 20,
                left: e.clientX - 10,
                display: 'block'
            });
            $('body').append(heart);

            likes++;
            localStorage.setItem('video_' + video.attr('id'), likes);

            video.find('.like-counter .count').text(likes);

            setTimeout(function() {
                heart.fadeOut();
            }, 500); // half second before disapear 
        });

        var likeCounter = $('<div class="like-counter"><span>&#10084;</span> <span class="count">' + likes + '</span></div>');
        video.append(likeCounter);
    });
});
