$(document).ready(function(){
    $('.password_view_control').hover(function () {
        $('#old').attr('type', 'text');
        $('#password').attr('type', 'text');
        $('#confirm').attr('type', 'text');
    }, function () {
        $('#old').attr('type', 'password');
        $('#password').attr('type', 'password');
        $('#confirm').attr('type', 'password');
    });
});
$(function () {
  $('[data-toggle="popover"]').popover()
})
$('.pwpopover').popover();
$('.pwpopover').on('click', function (e) {
    $('.pwpopover').not(this).popover('hide');
});
