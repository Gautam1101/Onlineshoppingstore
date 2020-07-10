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
table,th,td
{
border: 3px solid white;
border-collapse: collapse;
background-image: url('img/lw3.jpg');
}
th,td
{
padding: 15px;
font-size: 16pt;
color: black;
font-family: verdana;
}
h1
{
color: black;
font-type: verdana;
text-shadow:2px 2px 8px gray;
}
</style>
<!==============internal css===================>
</head>

<!=====================BODY START=====================>
<body style="background-image: url('img/toycar4.jpg');">
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
              <li class="nav-item"><a href="pricetable.php" class="nav-link"style="font-family: verdana; font-weight: bold; color: white;">Price Table</a></li>
                <li class="nav-item"><a href="aboutus.php" class="nav-link" style="font-family: verdana; font-weight: bold; color: white;  ">About us</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link" style="font-family: verdana; font-weight: bold;color: white; ">Contact us</a></li>
            </ul>
        </div>
    </nav>
</div></br>
<!======================================BANNER==============================>
<div class="banner" style=" margin-top: -20px;">
<marquee behavior="scroll" direction="left" >
            <h2 style="font-type: bold; color: white; font-family: cursive; text-shadow: 2px 2px 8px black;">Call us on 99378335xx for direct booking. </h2>
        </marquee>
</div>
<!======================================BANNER==============================>

<!====================================PRICE TABLE FOR TAXI===========================================>
<h1 style="color: white; text-align: center; text-shadow: grey;"> PRICE TABLE OF TAXI (WITH DRIVERS) </h1>
<h2 style="text-align: center;">Taxi will be any 4 seater sedan (like  Honda City, Swift Dzire, Honda Amage, Nissan Sunny). </h2></br></br>
<div>
<table style="width: 100%;padding-left: 20px; float: center;">
<tr>
<th> FROM </th>
<th> TO </th>
<th> PRICE </th>
</tr>
<tr>
<td> Jalandhar </td>
<td> Amritsar  </td>
<td> RS. price </td>
</tr>
<tr>
<td> Jalandhar </td>
<td> Chandigarh  </td>
<td> RS. price </td>
</tr>
<tr>
<td> Jalandhar </td>
<td> Ludhiana  </td>
<td> RS. price </td>
</tr>
<tr>
<td> Jalandhar </td>
<td> Delhi  </td>
<td> RS. price </td>
</tr>
<tr>
<td> Jalandhar </td>
<td> Ambala  </td>
<td> RS. price </td>
</tr>
<tr>
<td> Jalandhar </td>
<td> Dharmshala  </td>
<td> RS. price </td>
</tr>
<tr>
<td> Jalandhar </td>
<td> Dalhousie  </td>
<td> RS. price </td>
</tr>
<tr>
<td> Jalandhar </td>
<td> Amritsar Airport
     (Pickup or Drop)  </td>
<td> RS. price </td>
</tr>
<tr>
<td> Jalandhar </td>
<td> Delhi Airport
     (Pickup or Drop)</td>
<td> RS. price </td>
</tr>

</div>
</table>
<div></br></br></br>
<!====================price table end====================================>

</body>
</br></br></br></br></br></br></br>
<!--------------------------------------------FOOTER-------------------------------------------------------------------------!>
<!-- Footer -->
<?php
	include ('footer.php');
?>

</footer>
<!-- Footer -->
<!--------------------------------------------FOOTER END------------------------------------------------------------------!>
</html>