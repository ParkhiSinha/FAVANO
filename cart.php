<!DOCTYPE html>
<html>
<head>
  <title>Favano-Shopping Cart</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/favanoshop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
  <style>
    /* Add your own CSS styles here */
    /* Customize the appearance of the shopping cart */
body {
  font-family: Arial, sans-serif;
  margin: 20px;
}

h1 {
  text-align: center;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

table th, table td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tfoot td {
  text-align: right;
}

button {
  display: block;
  margin: 20px auto;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

/* Highlight the selected row */
tr.selected {
  background-color: #f5f5f5;
}

/* Style the remove button */
.remove-button {
  background-color: #f44336;
  color: #fff;
  border: none;
  border-radius: 4px;
  padding: 5px 10px;
  cursor: pointer;
}

.remove-button:hover {
  background-color: #d32f2f;
}
/* Set the image size */
td img {
  width: 130px;
  height: 130px;
}
  </style>
</head>
<body>
  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>  
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/Logo White.jpg" style="width: 210px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="submenu">
                            <a href="javascript:;">Pages</a>
                            <ul>
                            <li><a href="about_login.php">About Us</a></li>
                                    <li><a href="product_login.php">Products</a></li>
                                    <li><a href="single-product.php">Single Product</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="index_login.php">Explore</a></li>
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
  <h1>Shopping Cart</h1>
  <table>
    <thead>
      <tr>
        <th>Product</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody id="cartItems">
      <tr>
        <td><img src="assets/images/Women's LC Lauren Conrad Squareneck Peasant Top.png" alt="Product 1"></td>
        <td>Squareneck Top X</td>
        <td>Rs 550</td>
        <td><input type="number" value="1" class="quantity"></td>
        <td>Rs 550</td>
        <td><button class="remove-button">Remove</button></td>
      </tr>
      <tr>
        <td><img src="assets/images/women-01.jpg" alt="Product 2"></td>
        <td>New Green Jacket</td>
        <td>Rs 1250</td>
        <td><input type="number" value="1" class="quantity"></td>
        <td>Rs 1250</td>
        <td><button class="remove-button">Remove</button></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3"></td>
        <td><strong>Total:</strong></td>
        <td id="totalAmount">Rs 1800</td>
      </tr>
    </tfoot>
  </table>
  <button id="checkoutButton"><a href="Payment.php">Checkout</a></button>
  <!-- ***** Footer Start ***** -->
  <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="first-item">
                    <div class="logo">
                        <img src="assets/images/Logo White.jpg"  style="width: 210px;" alt=" Favano ecommerce templatemo ">
                    </div>
                    <ul>
                        <li><a href="#">Main Road Ranchi 834002</a></li>
                        <li><a href="#">favano@company.com</a></li>
                        <li><a href="#">010-020-0340</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>Shopping &amp; Categories</h4>
                <ul>
                    <li><a href="#">Women’s Shopping</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Homepage</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Help &amp; Information</h4>
                <ul>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Tracking ID</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="under-footer">
                    <p>Copyright © 2022 Favano Co., Ltd. All Rights Reserved. </p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/slick.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="assets/js/custom.js"></script>

<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });

</script>

</body>
  </html>