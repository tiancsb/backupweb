//scriptcito para calcular la altura de algunos elementos
		//Es window.load en lugar de document.ready porque este anda perfecto
$(window).load(function(){			
	var $minHeight = $("body").css("height");			
	var $height = $("#rootContainer").css("height");			
	//alert($height);
	$style="height: "+$height+" !important; min-height: "+$minHeight+" !important"
	$(".lateral").attr("style",$style);

	var $hContents = $("#contents").css('height');
	
	$difHeight = (parseInt($("#rootContainer").css("height"))-parseInt($hContents));
	$("#pusher").attr("style","height: "+$difHeight+"px");

});