<?php
@include 'connection.php';

if(isset($_POST['submit'])){

    $a = $_POST['name'];
    $b = $_POST['contact'];
	$c = $_POST['salery'];
    $insert = "INSERT INTO Empp_reg(empp_name, empp_cont, empp_salery) VALUES('$a','$b','$c')";
        mysqli_query($conn, $insert);
        header('location:employeeform.php');

};

?> 
<html>
<head>
    <meta name="=viewport" content="with=device-width, initial-scale=1.0">
    <title>Login Form </title>
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
<div class="screen">
<div class="screen_content">
<form class="login" method="post">
<div class="login_feild">
<i class="login_icon fas fa-user"></i>
<input type="text" name="name" class="login_input" placeholder="Employee Name"></div>
<div class="login_feild">
<i class="login_icon fa-sharp fa-solid fa-address-card"></i>
<input type="number" name="contact" class="login_input" placeholder="Contact No"></div>
<div class="login_feild">
<i class="login_icon fa-solid fa-wallet"></i>
<input type="text" name="salery" class="login_input" placeholder="Employee Salery"></div>
<div class="login_feild">
<input type="submit" name="submit" class="login_input" value="REGISTER">
</div>
</form>

</div>
<div class="screen_background">
<span class="screen_background_shape screen_background_shape4"></span>
<span class="screen_background_shape screen_background_shape3"></span>
<span class="screen_background_shape screen_background_shape2"></span>
<span class="screen_background_shape screen_background_shape1"></span>
</div>
</div>
</div>
</body>
</html>