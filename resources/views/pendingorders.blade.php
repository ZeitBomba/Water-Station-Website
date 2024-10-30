 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>LONSDALE -  Water Refiling Station</title>

<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="css/styleadmin.css">
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
<a href="pendingorders"><img src="img/icons/purchase1.svg" alt="img"><span> Purchase</span> </span></a>
<ul>
<li><a href="pendingorders">Pending Orders</a></li>
</ul>
</li>
</ul>
</div>
</div>
</div>

 <!-- Sidebar END-->

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>PENDING ORDER LIST</h4>
<h6>Manage your purchases</h6>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="table-top">
<div class="search-set">
<div class="search-path">
<a class="btn btn-filter" id="filter_search">
<img src="img/icons/filter.svg" alt="img">
<span><img src="img/icons/closes.svg" alt="img"></span>
</a>
</div>
<div class="search-input">
<a class="btn btn-searchset"><img src="img/icons/search-white.svg" alt="img"></a>
</div>
</div>
<div class="wordset">

</div>
</div>

<div class="card" id="filter_inputs">
<div class="card-body pb-0">
<div class="row">
<div class="col-lg col-sm-6 col-12">
<div class="form-group">
<input type="text" class="datetimepicker cal-icon" placeholder="Choose Date">
</div>
</div>
<div class="col-lg col-sm-6 col-12">
<div class="form-group">
<input type="text" placeholder="Enter Customer Name">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<a class="btn btn-filters ms-auto"><img src="img/icons/search-whites.svg" alt="img"></a>
</div>
</div>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table datanew">
<thead>
<tr>
<th>
<label class="checkboxs">
<input type="checkbox" id="select-all">
<span class="checkmarks"></span>
</label>
</th>
<th>Customer</th>
<th>Items</th>
<th>Quantity</th>
<th>Date</th>
<th>Status</th>
<th>Total Purchase</th>
<th>Payment Method</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td class="text-bolds">Apex Computershop</td>
<td>Bottled Water-B25</td>
<td>1</td>
<td>19 Nov 2022</td>
<td><span class="badges bg-lightgreen">Delivered</span></td>
<td>350</td>
<td><span class="badges bg-lightgreen">Paid</span></td>
<td>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="img/icons/check.svg" alt="img">
</a>
</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>


<script src="js/jquery-3.6.0.min.js"></script>

<script src="js/feather.min.js"></script>

<script src="js/jquery.slimscroll.min.js"></script>

<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>

<script src="js/bootstrap.bundle.min.js"></script>

<script src="js/moment.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>

<script src="plugins/select2/js/select2.min.js"></script>

<script src="plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="plugins/sweetalert/sweetalerts.min.js"></script>

<script src="js/script.js"></script>
</body>
</html>