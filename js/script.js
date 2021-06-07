var bLazy = new Blazy();

/* timer */
function update() {
    var Now = new Date(), Finish = new Date();
    Finish.setHours(23);
    Finish.setMinutes(59);
    Finish.setSeconds(59);
    if (Now.getHours() === 23 && Now.getMinutes() === 59 && Now.getSeconds === 59) {
        Finish.setDate(Finish.getDate() + 1);
    }
    var sec = Math.floor((Finish.getTime() - Now.getTime()) / 1000);
    var hrs = Math.floor(sec / 3600);
    sec -= hrs * 3600;
    var min = Math.floor(sec / 60);
    sec -= min * 60;
    $(".timer .hours").text(pad(hrs));
    $(".timer .minutes").text(pad(min));
    $(".timer .seconds").text(pad(sec));
    setTimeout(update, 200);
}

function pad(s) {
    return ('00' + s).substr(-2)
}

update();

/*scroll*/
$(function () {
    $("a[href^='#']").click(function () {
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top + "px"});
        return false;
    });
});


$('.add_to_cart').on('click', function () {
    $('.modal_contain').show();
    $('.shadow_site').show();
    $('.modal_contain .image img').attr('src', $(this).closest('li').find('img').attr('src'));
    $('input[name=comment]').val($(this).closest('.main').find('.product_article').text());
});

$('.contacts a').on('click', function (){
    $('.modal_contain_clbk').show();
    $('.shadow_site').show();
});

$('.modal_contain .close').on('click', function () {
    $('.modal_contain').hide();
    $('.shadow_site').hide();
});

$('.modal_contain_clbk .close').on('click', function () {
    $('.modal_contain_clbk').hide();
    $('.shadow_site').hide();
});