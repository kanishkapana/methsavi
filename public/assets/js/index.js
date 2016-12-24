$(document).ready(function(){

    $(document).on('click','.project-list-img-div',function(){

        if($(this).next('.project-list-div').find('.project-list').hasClass('hidden')) {

            $(this).find('.projects-arrow').attr('src','assets/img/red.png');
            $(this).next('.project-list-div').find('.project-list').removeClass('hidden');
        } else {

            $(this).find('.projects-arrow').attr('src','assets/img/green.png')
            $(this).next('.project-list-div').find('.project-list').addClass('hidden');
        }
    });
});