$(function(){
    $(".shrink").click(function () {
        $(".menu").toggle(500,function(){
            if($(this).is(":visible")){
                $(".content").css("width","90vw");
                $(".shrink").attr("src","/img/in.gif");
            }else{
                $(".content").css("width","100vw");
                $(".shrink").attr("src","/img/out.gif");
            }
        });
    });
    $(".item .controller").click(function () {
        if($(this).parent('.item').find('.action').is(":visible")){
            $(this).parent('.item').find('.action').hide("slow");
        }else{
            $(".item .action").hide("slow");
            $(this).parent('.item').find('.action').show("slow");
        }

    });

    $(".table thead th input:checkbox").click(function () {
        if($(this).is(':checked')){
            $(this).parents("thead").next("tbody").find("input:checkbox").prop("checked",true);
        }else{
            $(this).parents("thead").next("tbody").find("input:checkbox").prop("checked",false);
        }
    })
        $(".add").click(function () {
            $(this).hide();
        })
        $(".add table").click(function (event) {
            event.stopPropagation();
        })
    $(".add .box").click(function (event) {
        event.stopPropagation();
    })
    $(".chpass").click(function () {
        $(this).hide();
    })
    $(".chpass table").click(function (event) {
        event.stopPropagation();
    })
})

function chpasswd() {
    $(".chpass").show();
}
