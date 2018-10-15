<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/screen.css">

</head>
<body>

<div class="container ">
	
	    <h2>Validatin Form</h2>
		    <form class="cmxform" id="commentForm" action="action_page.php" method="post">

		        <div class="form-group col-sm-6">
		            <label for="email">Name:</label>
		            <input type="text" class="form-control" id="name cname" placeholder="Enter Name" name="name" minlength="2" required>
		        </div>

		        <div class="form-group col-sm-6">
		            <label for="email">Email:</label>
		            <input type="email" class="form-control" id="cemail" placeholder="Enter email" name="email" required>
		        </div>

		        <div class="form-group col-sm-6">
		            <label for="url">Website:</label>
		            <input type="url" class="form-control" id="url" placeholder="Enter web URL" name="url" required>
		        </div>

		        <div class="form-group col-sm-6">
		            <label for="pwd">Password:</label>
		            <input type="password" class="form-control form-control" id="cpassword" placeholder="Enter password" name="password" required>
		        </div>

		        <div class="form-group col-sm-6">
		            <label for="pwd">COMMENT:</label>
		            <textarea rows="5" class="form-control" id="ccomment" placeholder="Type Your Comment" name="comment" required></textarea>
		        </div>

		        <button type="submit" class="btn btn-primary mb-2">Submit</button>
		    </form>

</div>
<script src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.validate.js"></script>
<script src="assets/js/additional-method.js"></script>
<script>
    $("form").validate();
</script>
</body>
</html>
