<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <h2>Stacked form</h2>
    <form action="action_page.php" method="post">

        <div class="form-group">
            <label for="email">First Name:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>

        <div class="form-group">
            <label for="email">Last Name:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
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
