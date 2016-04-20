$(document).ready(function(){
	$("#cansel_button").click(function(){
		$("#quit-modal").modal('hide');
	});

	$("#ok_button").click(function(){
			window.open(location, '_self').close();
	});
});