$(document).ready(function() {
	$("#sendmessage").click(function() {
		var fullname = $("#fullname").val();
		var email = $("#email").val();
		var website = $("#website").val();
		var comment    = $("#comment").val();
		$.ajax({
			url: 'get_data.php',
			type: 'POST',
			data: {name: fullname, email: email, website: website, comment: comment},
			success: function (data) {
				$("#successmsg").html(data);
			}
		})
		return false;
	});
});