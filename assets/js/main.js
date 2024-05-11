function sendZap(lnurl) {
    jQuery.ajax({
        url: ajaxurl,
        method: 'POST',
        data: {
            action: 'send_zap',
            lnurl: lnurl
        },
        success: function(response) {
            alert('Zap sent successfully!');
        },
        error: function() {
            alert('Failed to send Zap.');
        }
    });
}
