<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content=" ">
<meta name="keywords" content=" ">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Font awesome-->
<script src="https://kit.fontawesome.com/10cd2eeed0.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--    google font-->
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"></link>
<link rel="stylesheet" href="guidestyle.css" type="text/css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"></link>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</script>
<!==============internal css===================>
<style>
body{
height: 100px;
background-postion: center;
background-repeat: no-repeat;
background-color: powderblue;
background-size: cover;
}
h1
{
font-type: curive;
color: white;
text-shadow:2px 2px 8px grey;
font-size: 30pt;
}
</style>
</head>
<!=====================BODY START=====================>
<body style="background-image: url('img/blackbg.jpg');">
<div>
<title>GM car rentals</title>
<div class="responsive-sm">
<nav class="navbar navbar-expand-sm navbar-dark bg1" style="height: auto; padding-right: 30px;background-image: url('img/blackbg.jpg');">
<a href="aboutus.php" class="navbar-brand"><img src="img/gif1.gif" style = "height: 80px; width:80px; border-radius: 60px;"></a>
        <h2 style="font-family: cursive;color: white;font-weight: bold;style="padding-right: 10px;"> GM car rentals </br></h2>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
            <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="collapse navbar-collapse" id="mymenu">
            <ul class="navbar-nav sm-auto" style="float: right; padding-right: 10px;">
               <li class="nav-item"><a href="index.php" class="nav-link" style="font-family: verdana; font-weight: bold; color: white;"><span class="glyphicon glyphicon-user"></span>Home</a></li>
              <li class="nav-item"><a href="cars.php" class="nav-link" style="font-family: verdana; font-weight: bold; color: white;">Cars</a></li>
              <li class="nav-item"><a href="pricetable.php" class="nav-link"style="font-family: verdana; font-weight: bold; color: white;">Price Table</a></li>
                <li class="nav-item"><a href="aboutus.php" class="nav-link" style="font-family: verdana; font-weight: bold; color: white;  ">About us</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link" style="font-family: verdana; font-weight: bold;color: white; ">Contact us</a></li>
            </ul>
        </div>
    </nav>
</div></br>
<!===========Database part start====================>
<h1 style="text-align: center;">
Welcome: <?php echo $_POST["first_name"];
?><br>
As you have selected to travel from <?php echo $_POST["s_city"]; ?> <br> to <?php echo $_POST["d_city"]; ?>, our support staff will call you shortly on your contact number <?php echo $_POST["number"];?> <br>
Your vehicle type is <?php echo $_POST["Vehicle_Type"]; ?><br>
Thanks for choosing us.</h1></br></br>

<?php
$con= mysqli_connect("localhost","root","","carrental") or die (mysqli_error($con));
$first_name=mysqli_real_escape_string($con,$_POST['first_name']);
$s_city=mysqli_real_escape_string($con,$_POST['s_city']);
$d_city=mysqli_real_escape_string($con,$_POST['d_city']);
$number=mysqli_real_escape_string($con,$_POST['number']);
$Vehicle_Type=mysqli_real_escape_string($con,$_POST['Vehicle_Type']);

$user_registration_query="insert into customer(first_name,s_city,d_city,number,Vehicle_Type) values('$first_name','$s_city','$d_city','$number','$Vehicle_Type')";
$user_registration_submit=mysqli_query($con, $user_registration_query) or die (mysqli_error($con));

?>
</br></br></br></br></br></br></br>
<!===========Database part end====================>
<!--------------------------------------------FOOTER-------------------------------------------------------------------------!>
<!-- Footer -->
<?php
	include ('footer.php');
?>

</footer>
<!-- Footer -->
<!--------------------------------------------FOOTER END------------------------------------------------------------------!>
</body>
</head>
</html>
