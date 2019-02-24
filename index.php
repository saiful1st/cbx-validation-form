<?php 
	include 'inc/header.php';

?>

	<span id="successmsg"></span>
<h2>Contact Form</h2>
    <form class="cmxform" id="commentForm" action="" method="post">

        <div class="form-group col-sm-6">
            <label for="email">Name:</label>
            <input type="text" class="form-control" id="fullname" placeholder="Enter Name" name="name" minlength="2" required>
        </div>

        <div class="form-group col-sm-6">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
        </div>

        <div class="form-group col-sm-6">
            <label for="url">Website:</label>
            <input type="url" class="form-control" id="website" placeholder="Enter web URL" name="url" required>
        </div>

        <div class="form-group col-sm-6">
            <label for="pwd">COMMENT:</label>
            <textarea rows="5" class="form-control" id="comment" placeholder="Type Your Comment" name="comment" required></textarea>
        </div>

        <button type="submit" id="sendmessage" class="btn btn-primary mb-2">Submit</button>
    </form>

<?php include 'inc/footer.php'; ?>