console.log(123);
$('.js-toggle').on('click' , function(){
    $(this)
    .siblings()
    .slideToggle();

 /*   $(this)
    .siblings()
    .slideUp();
 */  
});
