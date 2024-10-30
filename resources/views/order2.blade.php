<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LONSDALE -  Water Refiling Station</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/demo.css">
	


</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5">
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                       <h6 class="text-uppercase fw-bold">Our Location</h6>
                        <span>Brgy. Adlas, Silang Cavite</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Email Us</h6>
                        <span>example.email@email.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Contact Us</h6>
                        <span>+63 000 0000 000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
        <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
            <a href="index" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-white"><i class="fa fa-water text-primary me-2"></i>Lonsdale</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index2" class="nav-item nav-link active">Home</a>
                    <a href="about2" class="nav-item nav-link">About Us</a>
                    <a href="order2" class="nav-item nav-link">Order</a>
					<a href="account" class="nav-item nav-link">Account <i class="bi bi-person"></i></a>
					<a href="index" class="nav-item nav-link bg-primary tesxt-white px-5 ms-3 d-none d-lg-block">Logout <i class="bi bi-box-arrow-right"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Order</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="index2">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Order</h6>
        </div>
    </div>
    <!-- Page Header Start -->

<!-- Start-->

<form action="order2" method="POST">
    @csrf

    <main> 

<div class="container-fluid py-6 px-5">
    <div class="row g-5">
        <div class="col-lg-7">
            <div class="contact-form bg-light p-5">
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <input type="text" name="name" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="number" name="phone_no" class="form-control border-0" placeholder="Phone number" style="height: 55px;">
                    </div>

                    <div class="col-12 col-sm-6">
                        <input type= "select" class="form-control border-0" placeholder="Mode of Payment (Gcash/COD)" readonly style="height: 55px; ">
                            <select name="payment_mode" id="Mode">
                                    <option value="GCash">Gcash</option>
                                    <option value="Cash on Delivery">Cash on delivery</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-12">
                        <textarea name="address" class="form-control border-0" rows="4" placeholder="Your Address"></textarea>
                    </div>
                    <div class="col-12">
                        <input type="text" name="landmarks" class="form-control border-0" placeholder="Landmarks" style="height: 55px;">
                    </div>
                    
                </div>
            </div>
        </div>
           <div class="col-lg-5 pb-5" style="min-height: 400px;">
                    <div class="position-relative bg-dark-radial h-100 ms-5">
                    <iframe class="w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d979.3171882191479!2d120.97094099514979!3d14.25798948911438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd7fac6af1bc3b%3A0x21c9de7b24109886!2sLonsdale%20Water%20Refilling%20Station!5e1!3m2!1sen!2sph!4v1666510285970!5m2!1sen!2sph"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>


 
 <section class="container content-section ">
   <div class="row g-2">
  
    <div class="columns medium-8">
        <h1>Our Products</h1>
        <div class="shop-items">
            <div class="product medium-4 columns" data-name="Normal Gallon" data-price="25" data-id="0">
                <img class="shop-item-image" src="img/ngallon2.jpg" alt="Normal Gallon" />
                <h3>Normal Gallon</h3>
                <input type="hidden" name="normal_gallon" class="count" value="1"/>
                <button type="button" class="tiny">Add to cart</button>
            </div>
            <div class="product medium-4 columns" data-name="Round Gallon" data-price="25" data-id="1">
                <img class="shop-item-image" src="img/rgallon.jpg" alt="Round Gallon"/>
                <h3>Round Gallon</h3>
                <input type="hidden" name="round_gallon" class="count" value="1"/>
                <button type="button" class="tiny">Add to cart</button>
            </div>
            <div class="product medium-4 columns" data-name="Water Bottle" data-price="350" data-id="2">
                <img class="shop-item-image" src="img/wbottle.jpg"alt="Water Bottle"/>
                <h3>Water Bottle (box of 25)</h3>
                <input type="hidden" name="water_bottle" class="count" value="1"/>
                <button type="button" class="tiny">Add to cart</button>
            </div>
        </div>
    </div>
	 <div class="columns medium-4">
        <div class="cart">
            <h1>Cart items</h1>
			<hr>
            <div id="cartItems">Loading cart...</div>
		<hr>
            <h3>Total price: </h3><strong id="totalPrice">0 </strong>
			<div class="row">
                <div class="medium-6 columns">
                    <button type="button" class="btn btn-primary w-25 py-4.5" id="clear">Clear the cart</button>
                
                    <button type="submit" class="btn btn-primary w-25 py-4.5" title="Work in progress">Checkout</button>
                </div>
            </div>
        </div>
 </div>
</div>
</section>
</form>
<script type="text/template" id="cartT">
  <% _.each(items, function (item) { %> <div class = "panel"> <h3> <%= item.name %> </h3>  <span class="label">
<%= item.count %> piece<% if(item.count > 1)
{%>
<%}%> for ₱  <%= item.total %></span > </div>
<% }); %>
</script>
     <!-- END  -->
</main>

    <!-- Footer Start -->
    <div class="footer container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="index" class="navbar-brand">
                    <h1 class="m-0 display-4 text-uppercase text-white"><i class="fa fa-water text-primary me-2"></i>Lonsdale</h1>
                </a>
                
                <p><i class="fa fa-map-marker-alt me-2"></i>Brgy. Adlas Silang Cavite</p>
                <p><i class="fa fa-phone-alt me-2"></i>+63 000 0000 000</p>
                <p><i class="fa fa-envelope me-2"></i>example.email@email.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="row g-5">
                    <div class="col-sm-6">
                        <h4 class="text-white text-uppercase mb-4">Quick Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="index2"><i class="fa fa-angle-right me-2"></i>Home</a>
                            <a class="text-white-50 mb-2" href="about2"><i class="fa fa-angle-right me-2"></i>About Us</a>
                            <a class="text-white-50 mb-2" href="order2"><i class="fa fa-angle-right me-2"></i>Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark bg-light-radial text-white border-top border-primary px-0">
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="py-4 px-5 text-center text-md-start">
                <p class="mb-0">&copy; <a class="text-primary" href="#">Lonsdale - Water Refilling Station</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js'></script>
    <script src="js/main.js"></script>
	<script  src="js/scriptcart.js"></script>
</body>

</html>