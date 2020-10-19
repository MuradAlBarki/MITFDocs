$(document).ready(function() {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function() {
        $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

    // $('#home').click(function() {
    //     window.location.href = window.location.origin + '/home';
    // });

    // $('#home').click(function() {
    //     $('#page_content').load('/home')
    // });

    $.get(
        "home",
        function(data) {
            $("#page_content").html('<p>Nooo</p>');
        }
    );


});