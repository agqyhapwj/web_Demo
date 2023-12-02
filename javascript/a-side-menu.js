sidemenu();
function sidemenu() {
    // 隱藏選單
    $('.side-menu').hide();

    // menu-btn被摸到時就打開選單
    $('.menu-btn').click(function() {
        $('.side-menu').show();
    });

    // menu-btn再摸時關閉選單
    $('.close').click(function() {
        $('.side-menu').hide();
    });
}