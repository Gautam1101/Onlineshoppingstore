<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "product");
if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {
       $item_array_id= array_column($_SESSION["shopping_cart"],"item_id");
       if(!in_array($_GET["id"],$item_array_id))
       {
         $count = count($_SESSION["shopping_cart"]);
         $item_array=array(
            'item_id' => $_GET['id'],
            'item_name' => $_POST['hidden_name'],
            'item_price' => $_POST['hidden_price'],
            'item_quantity' => $_POST['quantity'],
         );
         $_SESSION["shopping_cart"][$count]=$item_array;
       }
       else
       {
          echo '<script>alert("Item Already Added")</script>';
          echo '<script>window.location="mycart.php"</script>';
       }


    }
    else
    {
        $item_array =array(
            'item_id' => $_GET['id'],
            'item_name' => $_POST['hidden_name'],
            'item_price' => $_POST['hidden_price'],
            'item_quantity' => $_POST['quantity'],
        );
        $_SESSION["shopping_cart"][0]=$item_array;
    }
}

if (isset($_GET["action"]))
{
    if($_GET["action"]=="delete")
  {
    foreach($_SESSION["shopping_cart"] as $keys=>$values)
    {
        if($values["item_id"]==$_GET["id"])
        {
            unset($_SESSION["shopping_cart"][$keys]);
            echo '<script>alert("item removed")</script>';
            echo '<script>window.location="mycart.php"</script>';
        }
    }
   }
}
?>
<!DOCTYPE html>
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

  <style>
      * {box-sizing: border-box}
      body {
      font-family: Verdana, sans-serif; 
      margin:0
      }
      .mySlides {display: none}
      img {vertical-align: middle;}
      .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
      }
      /* Next & previous buttons */
      .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
      }
      /* Position the "next button" to the right */
      .next {
      right: 0;
      border-radius: 3px 0 0 3px;
      }
      /* On hover, add a black background color with a little bit see-through */
      .prev:hover, .next:hover {
      background-color: rgba(0,0,0,0.8);
      }
      /* Caption text */
      .text {
      color: #ffffff;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
      }
      /* Number text (1/3 etc) */
      .numbertext {
      color: #ffffff;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
      }
      /* The dots/bullets/indicators */
      .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #999999;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
      }
      .active, .dot:hover {
      background-color: #111111;
      }
      /* Fading animation */
      .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 5s;
      animation-name: fade;
      animation-duration: 5s;
      }
      @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
      }
      @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
      }
      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
      .prev, .next,.text {font-size: 11px}
      }
    </style>
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
</head>
<!=====================BODY START=====================>
<body style="background-image: url('#'); background-color: black;">
<div>
<title>Online Shopping Store</title>
<div class="responsive-sm">
<nav class="navbar navbar-expand-sm navbar-dark bg1" style="height: auto; padding-right: 30px;background-image: url('img/blackbg.jpg');">
<a href="aboutus.php" class="navbar-brand"><img src="img/gif1.gif" style = "height: 80px; width:80px; border-radius: 60px;"></a>
        <h2 style="font-family: cursive;color: white;font-weight: bold;style="padding-right: 10px;"> Online Shopping Store </br></h2>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
            <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="collapse navbar-collapse" id="mymenu">
            <ul class="navbar-nav sm-auto" style="float: right; padding-right: 10px;">
               <li class="nav-item"><a href="cart1.php" class="nav-link" style="font-family: verdana; font-weight: bold; color: white;"><span class="glyphicon glyphicon-user"></span>Home</a></li>
              <li class="nav-item"><a href="products.php" class="nav-link" style="font-family: verdana; font-weight: bold; color: white;">Products</a></li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="portfolio.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-weight: bold; font-type: verdana;">Categories</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="clothes.php">Clothes</a>
                  <a class="dropdown-item" href="shoes.php">Shoes</a>
                <a class="dropdown-item" href="watches.php">Watches & Belts</a>
              </div>
            </li>
                <li class="nav-item"><a href="aboutus.php" class="nav-link" style="font-family: verdana; font-weight: bold; color: white;  ">About us</a></li>
                <li class="nav-item"><a href="mycart.php" class="nav-link" style="font-family: verdana; font-weight: bold;color: white; ">Mycart</a></li>
            </ul>
        </div>
    </nav>
</div></br>
<!======================================BANNER==============================>
</br></br>
<div class="slideshow-container-fluid" style="padding: 10px;">
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/toycar1.jpg" style="width:100%">
        <div class="text">London, Ebgland</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="img/toycar2.jpg" style="width:100%">
        <div class="text">Sunset in Romania</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="img/toycar3.jpg" style="width:100%">
        <div class="text">New York, USA</div>
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
  <script>
      var slideIndex = 0;
      showSlides();
      
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none"; 
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1} 
        slides[slideIndex-1].style.display = "block"; 
        setTimeout(showSlides, 10000); // Change image every 10seconds
      }
    </script>
<!======================================BANNER==============================>
<!=====================BODY START=====================>


<!----------------------------BOX IMAGES------------------------------------------->

<!----------------------------BOX IMAGES------------------------------------------->
<div class="container-fluid">
<?php 
$query = "SELECT *FROM cart1 ORDER BY id ASC";
$result= mysqli_query($connect, $query);
if(mysqli_num_rows($result)>0)
{
while($row= mysqli_fetch_array($result))
{
?>
<!=====================================Start CARS LIST=========================================>
<div style="text-align: center; background-image: url('#'); padding-left: 50px;">
<h1 style="color: powderblue";> Enjoy The Best Deals </h1>
<h2> & On Time Delivery.</h2> </br></br>
<div class="row">
<form method="post" action="mycart.php?action=add&id=<?php echo $row['id'];?>">    
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0" >
<div class="card" style="width:220px;height:335px; box-shadow: 6px 6px 8px grey; border-radius: 10pt;">
      <img src="img/jaguar.jpeg" alt="Jaguar" style="width:220px;height:200px;border-radius: 10pt; ">
      <h4 class="text-info"> <?php echo $row['name'];?></h4>
      <h4 class="text-danger"> <?php echo $row['price'];?></h4>
      <div style="padding-left:10px;">
      <input type="text" name="quantity" calss="form-control" value="1" style="width: 50px; text-align: center;"/>
      <input type="hidden" name="hidden_name" value="<?php echo $row['name'];?>"/>
      <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>"/>
      <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart" />
      </div>
    </div>
</br>
</div>
</form>
<form method="post" action="mycart.php?action=add&id=<?php echo $row['id'];?>">    
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0" >
<div class="card" style="width:220px;height:335px; box-shadow: 6px 6px 8px grey; border-radius: 10pt;">
      <img src="img/jaguar.jpeg" alt="Jaguar" style="width:220px;height:200px;border-radius: 10pt; ">
      <h4 class="text-info"> <?php echo $row['name'];?></h4>
      <h4 class="text-danger"> <?php echo $row['price'];?></h4>
      <div style="padding-left:10px;">
      <input type="text" name="quantity" calss="form-control" value="1" style="width: 50px; text-align: center;"/>
      <input type="hidden" name="hidden_name" value="<?php echo $row['name'];?>"/>
      <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>"/>
      <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart" />
      </div>
    </div>
</br>
</div>
</form>
<form method="post" action="mycart.php?action=add&id=<?php echo $row['id'];?>">    
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0" >
<div class="card" style="width:220px;height:335px; box-shadow: 6px 6px 8px grey; border-radius: 10pt;">
      <img src="img/jaguar.jpeg" alt="Jaguar" style="width:220px;height:200px;border-radius: 10pt; ">
      <h4 class="text-info"> <?php echo $row['name'];?></h4>
      <h4 class="text-danger"> <?php echo $row['price'];?></h4>
      <div style="padding-left:10px;">
      <input type="text" name="quantity" calss="form-control" value="1" style="width: 50px; text-align: center;"/>
      <input type="hidden" name="hidden_name" value="<?php echo $row['name'];?>"/>
      <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>"/>
      <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart" />
      </div>
    </div>
</br>
</div>
</form>
<form method="post" action="mycart.php?action=add&id=<?php echo $row['id'];?>">    
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0" >
<div class="card" style="width:220px;height:335px; box-shadow: 6px 6px 8px grey; border-radius: 10pt;">
      <img src="img/jaguar.jpeg" alt="Jaguar" style="width:220px;height:200px;border-radius: 10pt; ">
      <h4 class="text-info"> <?php echo $row['name'];?></h4>
      <h4 class="text-danger"> <?php echo $row['price'];?></h4>
      <div style="padding-left:10px;">
      <input type="text" name="quantity" calss="form-control" value="1" style="width: 50px; text-align: center;"/>
      <input type="hidden" name="hidden_name" value="<?php echo $row['name'];?>"/>
      <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>"/>
      <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart" />
      </div>
    </div>
</br>
</div>
</form>
<form method="post" action="mycart.php?action=add&id=<?php echo $row['id'];?>">    
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0" >
<div class="card" style="width:220px;height:335px; box-shadow: 6px 6px 8px grey; border-radius: 10pt;">
      <img src="img/jaguar.jpeg" alt="Jaguar" style="width:220px;height:200px;border-radius: 10pt; ">
      <h4 class="text-info"> <?php echo $row['name'];?></h4>
      <h4 class="text-danger"> <?php echo $row['price'];?></h4>
      <div style="padding-left:10px;">
      <input type="text" name="quantity" calss="form-control" value="1" style="width: 50px; text-align: center;"/>
      <input type="hidden" name="hidden_name" value="<?php echo $row['name'];?>"/>
      <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>"/>
      <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart" />
      </div>
    </div>
</br>
</div>
</form>
<form method="post" action="mycart.php?action=add&id=<?php echo $row['id'];?>">    
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0" >
<div class="card" style="width:220px;height:335px; box-shadow: 6px 6px 8px grey; border-radius: 10pt;">
      <img src="img/jaguar.jpeg" alt="Jaguar" style="width:220px;height:200px;border-radius: 10pt; ">
      <h4 class="text-info"> <?php echo $row['name'];?></h4>
      <h4 class="text-danger"> <?php echo $row['price'];?></h4>
      <div style="padding-left:10px;">
      <input type="text" name="quantity" calss="form-control" value="1" style="width: 50px; text-align: center;"/>
      <input type="hidden" name="hidden_name" value="<?php echo $row['name'];?>"/>
      <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>"/>
      <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart" />
      </div>
    </div>
</br>
</div>
</form>
<form method="post" action="mycart.php?action=add&id=<?php echo $row['id'];?>">    
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0" >
<div class="card" style="width:220px;height:335px; box-shadow: 6px 6px 8px grey; border-radius: 10pt;">
      <img src="img/jaguar.jpeg" alt="Jaguar" style="width:220px;height:200px;border-radius: 10pt; ">
      <h4 class="text-info"> <?php echo $row['name'];?></h4>
      <h4 class="text-danger"> <?php echo $row['price'];?></h4>
      <div style="padding-left:10px;">
      <input type="text" name="quantity" calss="form-control" value="1" style="width: 50px; text-align: center;"/>
      <input type="hidden" name="hidden_name" value="<?php echo $row['name'];?>"/>
      <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>"/>
      <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart" />
      </div>
    </div>
</br>
</div>
</form>
<form method="post" action="mycart.php?action=add&id=<?php echo $row['id'];?>">    
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0" >
<div class="card" style="width:220px;height:335px; box-shadow: 6px 6px 8px grey; border-radius: 10pt;">
      <img src="img/jaguar.jpeg" alt="Jaguar" style="width:220px;height:200px;border-radius: 10pt; ">
      <h4 class="text-info"> <?php echo $row['name'];?></h4>
      <h4 class="text-danger"> <?php echo $row['price'];?></h4>
      <div style="padding-left:10px;">
      <input type="text" name="quantity" calss="form-control" value="1" style="width: 50px; text-align: center;"/>
      <input type="hidden" name="hidden_name" value="<?php echo $row['name'];?>"/>
      <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>"/>
      <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart" />
      </div>
    </div>
</br>
</div>
</form>
<form method="post" action="mycart.php?action=add&id=<?php echo $row['id'];?>">    
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0" >
<div class="card" style="width:220px;height:335px; box-shadow: 6px 6px 8px grey; border-radius: 10pt;">
      <img src="img/jaguar.jpeg" alt="Jaguar" style="width:220px;height:200px;border-radius: 10pt; ">
      <h4 class="text-info"> <?php echo $row['name'];?></h4>
      <h4 class="text-danger"> <?php echo $row['price'];?></h4>
      <div style="padding-left:10px;">
      <input type="text" name="quantity" calss="form-control" value="1" style="width: 50px; text-align: center;"/>
      <input type="hidden" name="hidden_name" value="<?php echo $row['name'];?>"/>
      <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>"/>
      <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart" />
      </div>
    </div>
</br>
</div>
</form>
<form method="post" action="mycart.php?action=add&id=<?php echo $row['id'];?>">    
<div class="col-md-6 col-lg-3 mb-3 mb-lg-0" >
<div class="card" style="width:220px;height:335px; box-shadow: 6px 6px 8px grey; border-radius: 10pt;">
      <img src="img/jaguar.jpeg" alt="Jaguar" style="width:220px;height:200px;border-radius: 10pt; ">
      <h4 class="text-info"> <?php echo $row['name'];?></h4>
      <h4 class="text-danger"> <?php echo $row['price'];?></h4>
      <div style="padding-left:10px;">
      <input type="text" name="quantity" calss="form-control" value="1" style="width: 50px; text-align: center;"/>
      <input type="hidden" name="hidden_name" value="<?php echo $row['name'];?>"/>
      <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>"/>
      <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart" />
      </div>
    </div>
</br>
</div>
</form>
</div>	
</div>

</br></br></br></br></br></br>
<!=================================================================================>
<!------------------------------------------------------->

<?php
}
}
?>

</div>
<?php
	include ('footer.php');
?>

</footer>
<!-- Footer -->
<!--------------------------------------------FOOTER END---------------------------------------------------->
</body>
</html>