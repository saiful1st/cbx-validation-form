$(document).ready(function() {
	$('#sendmessage').click(function() {
		var fullname = $('#cname').val();
		var email 	= $('#cemail').val();
		var website = $('#website').val();
		var comment = $('#ccomment').val();
		$.ajax({
			url: 'get_data.php',
			type: 'POST',
			data: {name: fullname, email: email, website: website, comment: comment},
			success: function(data){
				$('#successmsg').html(data);
			}
		})
		return false;
		
	});
});