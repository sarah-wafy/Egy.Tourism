/*global $,alert,console*/
$(function(){
    'use strict';
    //Adjust Header Hight
    var myHeader= $('.header');
     var myslider=$('.bxslider');
    myHeader.height($(window).height());
    $(window).resize(function()
{
    myHeader.height($(window).height());
    myslider.each(function()
{
    $(this).css('paddingTop',($(window).height()-$('.bxslider li').height())/2);

});
});
//Links Add Active Class
$('.links li a').click(function()
{
    $(this).parent().addClass('active').siblings().removeClass('active');
});
//Adjust Bxslider list center
myslider.each(function()
{
    $(this).css('paddingTop',($(window).height()-$('.bxslider li').height())/2);

});
//Trigger the BxSlider
myslider.bxSlider(
    {
        pager:false
    }
);
//smooth scroll to div
$('.links li a').click(function()
{
    $('html,body').animate(
        {
            scrollTop:$('#' + $(this).data('value')).offset().top
        },1000
    );
});
});