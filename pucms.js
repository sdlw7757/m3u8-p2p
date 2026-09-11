// 页面脚本：导航面板切换 + 禁用右键
$(document).ready(function () {
    $('.WANG-WANG').click(function () {
        $('.panel').slideToggle('slow');
    });
});

document.oncontextmenu = function () {
    return false;
};
