$("#ConnectForm").click(function() {
	$.post($("#contactForm").attr("action"), $("#contactForm :input").serializeArray(), function(info) { $("#result").html(info); });
	clearInput();
});

$("#contactForm").submit(function(){
	return false;
});

function clearInput(){
	$("#contactForm :input").each(function(){
		$(this).val('');
	});
};
 