require('./bootstrap');

$(function () {
    // Allow carousel indicators stay alone outside the carousel
    $('#section-gallery #carousel-gallery').on('slide.bs.carousel', function (event) {
        $('[data-target="#' + event.target.id + '"][data-slide-to="' + event.from + '"]').removeClass('active');
        $('[data-target="#' + event.target.id + '"][data-slide-to="' + event.to + '"]').addClass('active');
    });

    // Initiate custom file input
    bsCustomFileInput.init();

    // Load comments
    const getTemplate = function (selector) {
        var html = $('template' + selector).html();
        return $(html).clone();
    }

    const nl2br = function (str) {
        return str.replace(/(\r\n|\n\r|\r|\n)/g, '<br>$1');
    }

    $.getJSON('/comments', function (data) {
        const container = $('#section-comments > .container');

        $.each(data, function(key, val) {
            if (key) {
                container.append($('<div>').addClass('separator'));
            }

            const hasPhotos = val.photos.length > 0;
            const template = getTemplate('.comment' + (hasPhotos ? (key % 2 ? '.image-right' : '.image-left') : '.image-none'));

            const timestamp = new Date(val.timestamp);

            template.find('.comment-author').text(val.author);
            template.find('.comment-date').text(timestamp.toLocaleDateString('zh-HK') + ' ' + timestamp.toLocaleTimeString('zh-HK'));
            template.find('.comment-text').html(nl2br(val.text));
            if (hasPhotos) {
                template.find('.comment-image > img').attr('src', val.photos[0]);
            }

            container.append(template);
        });
    });
});