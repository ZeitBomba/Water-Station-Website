<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>LONSDALE -  Water Refiling Station</title>

<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="css/fontawesome.min.css">
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/styleadmin.css">

<style>
a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: black;
  background-color: transparent;

}
a:active {
  color: black;
  background-color: transparent;

}


</style>

</head>
<body>

<div class="main-wrapper">

 <!-- Topbar Start -->
<div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm">
        <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
            <a href="indexadmin" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-white"><i class="fa fa-water text-primary me-2"></i>Lonsdale Admin</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
					<a href="index" class="nav-item nav-link bg-primary tesxt-white px-5 ms-3 d-none d-lg-block">Logout <i class="bi bi-box-arrow-right"></i></a>
                </div>
            </div>
        </nav>
    </div>
 <!-- Topbar END-->
 
  <!-- Sidebar START-->

<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="active">
<a href="indexadmin"><img src="img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
</li>

<li class="submenu">
<a href="saleslist"><img src="img/icons/sales1.svg" alt="img"><span> Sales</span> </span></a>
<ul>
<li><a href="saleslist">Sales List</a></li>

</ul>
</li>
<li class="submenu">
<a href="pendingorders;"><img src="img/icons/purchase1.svg" alt="img"><span> Purchase</span> </span></a>
<ul>
<li><a href="pendingorders">Pending Orders</a></li>
</ul>
</li>
</ul>
</div>
</div>
</div>

 <!-- Sidebar END-->

<!-- MAIN START -->

<!-- STATUS START -->

<div class="page-wrapper">
<div class="content">
<div class="row">
<div class="col-lg-4 col-sm-6 col-12">
<div class="dash-widget">
<div class="dash-widgetimg">
<span><img src="img/icons/dash1.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5><span class="counters" data-count="00">00</span></h5>
<h6>Total Montly Purchases</h6>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 col-12">
<div class="dash-widget dash1">
<div class="dash-widgetimg">
<span><img src="img/icons/dash2.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>₱<span class="counters" data-count="000.00">000.00</span></h5>
<h6>Total Weekly Sales</h6>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 col-12">
<div class="dash-widget dash2">
<div class="dash-widgetimg">
<span><img src="img/icons/dash2.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>₱<span class="counters" data-count="000.00">000.00</span></h5>
<h6>Total Montly Sales</h6>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-4 col-sm-6 col-12 d-flex">
<div class="dash-count">
<div class="dash-counts">
<h4>00</h4>
<h5>Pending Orders</h5>
</div>
<div class="dash-imgs">
<a href="pendingorders"><i data-feather="user"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 col-12 d-flex">
<div class="dash-count das1">
<div class="dash-counts">
<h4>00</h4>
<h5>Orders Served</h5>
</div>
<div class="dash-imgs">
<i data-feather="user-check"></i>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6 col-12 d-flex">
<div class="dash-count das2">
<div class="dash-counts">
<h4>00</h4>
<h5>Deliveries Made</h5>
</div>
</div>
</div>
<!-- STATUS END -->


<!-- TABLE START -->

<div class="row">
<div class="col-lg-7 col-sm-12 col-12 d-flex">
<div class="card flex-fill">
<div class="card-header pb-0 d-flex justify-content-between align-items-center">
<h5 class="card-title mb-0">Purchase & Sales</h5>
<div class="graph-sets">
<ul>
<li>
<span>Sales</span>
</li>
<li>
<span>Purchase</span>
</li>
</ul>
<div class="dropdown">
<button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
 2022 <img src="img/icons/dropdown.svg" alt="img" class="ms-2">
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<li>
<a href="javascript:void(0);" class="dropdown-item">2022</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item">2021</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item">2020</a>
</li>
</ul>
</div>
</div>
</div>
<div class="card-body">
<div id="sales_charts"></div>
</div>
</div>
</div>
<!-- TABLE END -->


<!-- PRODUCTS START -->
<div class="col-lg-5 col-sm-12 col-12 d-flex">
<div class="card flex-fill">
<div class="card-header pb-0 d-flex justify-content-between align-items-center">
<h4 class="card-title mb-0">Products</h4>
<div class="dropdown">
<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
<i class="fa fa-ellipsis-v"></i>
</a>
</div>
</div>

<div class="card-body">
<div class="table-responsive dataview">
<table class="table datatable ">
<thead>
<tr>
<th>No.</th>
<th>Products</th>
<th>Price</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td class="productimgname">
<a href="productlist" class="product-img">
<img src="img/ngallon2.jpg" alt="product">
</a>
<h4>Normal Gallon</h4>
</td>
<td>₱25.00</td>
</tr>
<tr>
<td>2</td>
<td class="productimgname">
<a href="order2" class="product-img">
<img src="img/rgallon.jpg" alt="product">
</a>
<h4>Round Gallon</h4>
</td>
<td>₱25.00</td>
</tr>
<tr>
<td>3</td>
<td class="productimgname">
<a href="productlist" class="product-img">
<img src="img/wbottle.jpg" alt="product">
</a>
<h4>Water Bottles Box of 25</h4>
</td>
<td>₱350.00</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- PRODUCTS END -->

<!-- MAIN END -->

<script src="js/jquery-3.6.0.min.js"></script>

<script src="js/feather.min.js"></script>

<script src="js/jquery.slimscroll.min.js"></script>

<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>

<script src="js/bootstrap.bundle.min.js"></script>

<script src="plugins/apexchart/apexcharts.min.js"></script>
<script src="plugins/apexchart/chart-data.js"></script>

<script src="js/script.js"></script>
</body>
</html>