$(document).ready(function(){

	$("#man").click(function(){
		$("#womenSide").hide();
		$("#menSide").show();
	});

	$("#women").click(function(){
		$("#menSide").hide();
		$("#womenSide").show();
	});
});