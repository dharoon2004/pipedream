<?php

@include 'config.php';

$query = "select * from Empp_reg";
$result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
	
</head>


<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">EMPLOYEE NAME</th>
      <th scope="col">CON NO</th>
      <th scope="col">SALERY</th>
    </tr>
  </thead>
  <tbody>
    <tr>
		<?php
			while($row = mysqli_fetch_assoc($result))
                {
            ?>
                <td><?php echo $row['empp_id']; ?></td>
                <td><?php echo $row['empp_name']; ?></td>
                <td><?php echo $row['empp_cont']; ?></td>
				<td><?php echo $row['empp_salery']; ?></td>
    </tr>
            <?php
                }
            ?>
  </tbody>
</table>



<script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>

</body>

</html>