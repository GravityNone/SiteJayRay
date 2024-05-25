$(document).ready(function(){
			
  	$('.dropdown').hover(function () {
	 	clearTimeout($.data(this,'timer'));
	 	$('.dropdown-menu',this).stop(true,true).slideDown(200);
  	}, function () {
		$.data(this,'timer', setTimeout($.proxy(function() {
	  		$('.dropdown-menu',this).stop(true,true).slideUp(200);
		}, this), 100));
  	});

  	$(".list").click(function(){
		var listid = $(this).attr('data-listid');
		if($("#reason-" + listid).css("display") == "none"){
			$("#list-" + listid).removeClass("down").addClass("up");
			$("#reason-" + listid).css("display", "table-row");
			
		} else {
			$("#list-" + listid).removeClass("up").addClass("down");
			$("#reason-" + listid).css("display", "none");
		}
	});

	$(window).scroll(function(){
    	if($("body").scrollTop() >= 54) setTimeout($("#footer").children(".container").slideDown("slow"), 10000);
    })

	setInterval(function(){
		var maxwidth = $( window ).width();
		if(0 >= parseInt($("#cloud-1").css("left").substr(0, $("#cloud-1").css("left").length - 2))){ $("#cloud-1").css("left", maxwidth); } 
		if(0 >= parseInt($("#cloud-2").css("left").substr(0, $("#cloud-2").css("left").length - 2))){ $("#cloud-2").css("left", maxwidth); } 
		if(maxwidth <= parseInt($("#cloud-3").css("left").substr(0, $("#cloud-3").css("left").length - 2))){ $("#cloud-3").css("left", "0"); } 
		if(maxwidth <= parseInt($("#cloud-4").css("left").substr(0, $("#cloud-4").css("left").length - 2))){ $("#cloud-4").css("left", "0"); } 
		if(maxwidth <= parseInt($("#cloud-5").css("left").substr(0, $("#cloud-5").css("left").length - 2))){ $("#cloud-5").css("left", "0"); } 
		
		if(maxwidth <= parseInt($("#airplane-2").css("left").substr(0, $("#airplane-2").css("left").length - 2))){ $("#airplane-2").css({"left":"-200px", "top":"485px"}); } 

		$("#cloud-1").css("left", "-=1");
		$("#cloud-2").css("left", "-=2");
		$("#cloud-3").css("left", "+=0.5");
		$("#cloud-4").css("left", "+=2");
		$("#cloud-5").css("left", "+=1");

		$("#airplane-2").css({"left":"+=2", "top":"-=0.3"});
	}, 100)

});