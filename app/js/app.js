$(document).foundation();

$(function(){
	$('.dating').fdatepicker({
		format: 'dd-mm-yyyy',
		disableDblClickSelection: true,
		leftArrow:'<',
		rightArrow:'>',
		closeButton: false
	});
});

$(document).ready(function(){
    $('.refund-method input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".selected").not(targetBox).hide();
        $(targetBox).show();
    });

    $('.rel-family-type input[type="radio"]').click(function(){
    		var inputValue = $(this).attr("value");
    		var targetField = $("." + inputValue);
    		$(".selectedfield").not(targetField).hide();
        $(targetField).show();
    });



    $("select#relationship").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".rel-family-type").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".rel-family-type").hide();
            }
        });
    }).change();

    $("select#pretr-maried-civility").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".pretr-civility").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".pretr-civility").hide();
            }
        });
    }).change();

    $("select#empr-maried-civility").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".empr-civility").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".empr-civility").hide();
            }
        });
    }).change();
});

