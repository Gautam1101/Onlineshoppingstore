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
<body style="background-image: url('img/toycar4.jpg');">
<div>
<title>Online Shopping Store</title>
<div class="responsive-sm">
<nav class="navbar navbar-expand-sm navbar-dark bg1" style="height: 100px; padding-right: 30px;background-color: black;">
<a href="cart1.php" class="navbar-brand"><img src="img/gif1.gif" style = "height: 70px; width:70px; border-radius: 40px;margin-top: -30px;"></a>
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
                <a class="dropdown-item" href="shirts.php">Shirts ans T-shirts</a>
                <a class="dropdown-item" href="jeans.php">Jeans</a>
                  <a class="dropdown-item" href="shoes.php">Shoes</a>
                <a class="dropdown-item" href="belts.php">Watches & Belts</a>
              </div>
            </li>
                <li class="nav-item"><a href="aboutus.php" class="nav-link" style="font-family: verdana; font-weight: bold; color: white;  ">About us</a></li>
                <li class="nav-item"><a href="mycart.php" class="nav-link" style="font-family: verdana; font-weight: bold;color: white; ">Mycart</a></li>
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
<!=====================BODY START=====================>
<body style="background-color: white; text-align: center;">

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

<?php
}
}
?>
<div style="clear: both"></div>
</br>
<h3 style="text-align: center; color: white; font-size: 24pt;"> Order Details </h3>
<div class="table-responsive" style="text-align: center;">
<table class="table table-bordered" style="width: 700px; text-align: center;">
<tr>
<th width="40%"> Item Name</th>
<th width="40%"> Quantity</th>
<th width="40%"> Price</th>
<th width="40%"> Total</th>
<th width="40%"> Action</th>
</tr>
<?php
$total=0;
if(!empty($_SESSION["shopping_cart"]))
{
    foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
    ?>
    <tr>
    <td><?php echo $values["item_name"];?></td>
    <td><?php echo $values["item_quantity"];?></td>
    <td>$<?php echo $values["item_price"];?></td>
    <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
    <td><a href="mycart.php?action=delete&id=<?php echo $values["item_id"];?>"><span class="text-danzer">Remove</span></a></td>
    </tr>
    <?php
    $total = $total+($values["item_quantity"]*$values["item_price"]);
    }
}
?>
<tr>
<td colspan="3" style="align:right;">Total</td>
<td style="align:right;">$<?php echo number_format($total, 2);?></td>
</tr>
</table>
</div>
</div>
</div>

</br></br></br></br></br></br></br>


</div>
<?php
	include ('footer.php');
?>

</footer>
<!-- Footer -->
<!--------------------------------------------FOOTER END---------------------------------------------------->
</body>
</html>
