$(document).ready(function(){
	function addBox(addId,sex){
		var startBox =$("#pictureBox"+sex);
		var pictureBox=$("#pictureBoxWomen").clone();
			pictureBox.removeAttr("hidden");
			pictureBox.attr("id","pictureBox"+addId);
			startBox.after(pictureBox);
	}
	for (var i = 6; i > 0; i--) {
		addBox(i,"Man");
	};
	for (var i = 2; i > 0; i--) {
		addBox(i,"Women");
	};

	$("#man").click(function(){
		$("#womenSide").hide();
		$("#menSide").show();
	});

	$("#women").click(function(){
		$("#menSide").hide();
		$("#womenSide").show();
	});
});