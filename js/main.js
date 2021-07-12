let page = "";

window.onload = function() {
	$.get("./index.html", null,
	function(response, status) {
		$("#htmlbox").val(response);
	});
	chgPage('home');
}

function chgPage(id) {
	if (page != id) {
		if (page != "") {
			$("#" + page).hide(500);
		}
		$("#" + id).show(500);
		page = id;
	}
}
