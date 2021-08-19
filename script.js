$('input[type="button"]').click(function () {
    var prefDesc = $(this).attr('id');
    if (!prefDesc) {
        var valbutton = $(this).val();
        alert('O valor deste botão é ' + SEGMENT_FB_PIXEL_ID);

    } else {
        e = document.getElementById('item-desc-' + prefDesc);
        if ($(e).hasClass('hidden')) {
            $(e).fadeOut(300).removeClass('hidden');
        } else {
            $(e).fadeIn(300).addClass('hidden');
        }
    }
});
