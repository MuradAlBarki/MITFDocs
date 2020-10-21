$(document).ready(function() {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function() {
        $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});

$('#home').click(function() {
    $('#page_content').load("/home")
});

$(".outline").click(function() {
    $('html, body').animate({
        scrollTop: $("#" + this.name).offset().top
    }, 1000);
});