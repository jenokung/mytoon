function createCookie(name, value, days) {
    var expires;

    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = encodeURIComponent(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return decodeURIComponent(c.substring(nameEQ.length, c.length));
    }
    return null;
}



jQuery(function($) {

    var ck = readCookie("sarw-popup");

    if (!(ck == 1)) {
        //----- OPEN
        $('.sarw-popup').fadeIn(350);
        //----- CLOSE
        $('.sarw-enter').on('click', function(e) {
            createCookie('sarw-popup', '1', '7'); //1 week cookie
            $('.sarw-popup').fadeOut(350);
        });
        //----- Exit
        $('.sarw-exit').on('click', function(e) {
            window.location.href = "https://google.com";
        });
    }



});


