$(document).ready(function () {
    $("body").on("click", "a", function (event) {
        let id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});


(function($) {
    $(function() {

        $('#up').click(function() {
            $('html, body').animate({scrollTop: 0},500);
            return false;
        })

    })
})(jQuery)