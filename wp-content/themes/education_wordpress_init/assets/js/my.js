jQuery(document).ready(function($) {
    if($('.phone_hidden').text().trim() === '') {
        $('.contacts__phoneblock_hidden').css({'display': 'none'});
    }
});
