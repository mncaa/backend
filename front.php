<!DOCTYPE html>
<html>
<head>
	<title>admin</title>

	<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<style>
	.header-bg{background: url(headimg.png)center center repeat;color: #dc3545;}
	.up_1{padding-top: 10px;padding-bottom: 10px;}
	.bus{text-align: center;font-weight: bold;font-size: 35px;margin-bottom: 0px !important;}
	p{margin-top: 0;}
	.bus_1{text-align: center;font-size: 20px;margin-bottom: 0px !important;}
	.mid{background: #000000;}
	.navbar{position: relative;display: flex;flex-wrap: wrap;align-items: center;justify-content: space-between;padding-top: 0.5rem;padding-bottom: 0.5rem;}
	.navbar-dark .navbar-brand{color: #fff;}
	.navbar-brand{padding-top: 0.3125rem;padding-bottom: 0.3125rem;margin-right: 1rem;font-size: 1.25rem;text-decoration: none;white-space: nowrap;}
	.navbar-dark .navbar-toggler{color: rgba(255,255,255,.55);border-color: rgba(255,255,255,.1);}
	button{cursor: pointer;}
	.navbar-toggler{padding: 0.25rem 0.75rem;font-size: 1.25rem;line-height: 1;background-color: transparent;border:1px solid transparent;border-radius: 0.25rem;transition: box-shadow .15s ease-in-out;}
	.page-area{height: auto;min-height: 600px;}
	.bg-white{background-color: #fff !important;}
	.container-sm{max-width: 720px;}
	@media(min-width: 576px){.container-sm{max-width: 540px;}}
.bdy-style{margin-top: 20px;margin-bottom: 20px;}
.bdy-style h3{color: #000000;border-bottom: 2px dashed #808080;padding-bottom: 5px;}
.nav-item{color: #fff;cursor: pointer;}
.dash{height: auto;min-height: 600px;}
.bg-white{background-color: #fff!important;}
label{display: inline-block;}
.admin-area{list-style: none;text-align: center;background: #059f10;padding: 10px 0px;}
.admin-area li{display: inline;}
.admin-area li a{color: #fffa00;border-right: 1px solid#f5f5f5;padding: 0px 10px;text-decoration: none;}
.card{margin-bottom: 10px!important;}
.bg-dark{background-color: #313131!important;}
.card-body{padding: 5px 15px!important;font-size: 13px;flex: 1 1 auto;}
.text-white{color: #fff!important;}
.text-white{text-align: center!important;}
.nav-link{border-right: 1px solid #fff;padding: 0px 10px;}

@media(min-width:576px){
.container-sm{max-width: 540px;}

}
@media(min-width:768px){
	.container-md, .container-sm{max-width: 720px;}
}
</style>
<body>
	<div class="container-fluid">
		<div class="row header-bg">
			<div class="col-lg-12 up_1">
				<p class="bus">God</p>
				<p class="bus_1">Life Is Short | New Life New Beginning</p>
			</div>
		</div>
	</div>
	<div class="mid">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<a class="navbar-brand d-lg-none d-xl-none" href="#">Life Is Short</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
				
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto menu-bar">
					<li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
					<li class="nav-item active"><a class="nav-link" href="#">About Us</a></li>
					<li class="nav-item active"><a class="nav-link" href="reg.php">Register</a></li>
					<li class="nav-item active"><a class="nav-link" href="#">Search Profile </a></li>
					<li class="nav-item active"><a class="nav-link" href="#">Pay Online </a></li>
					<li class="nav-item active"><a class="nav-link" href="#">Contact Us</a></li>
				</ul>
				
			</div>
	     </div>
	<div class="container bg-white dash">
				<ul class=" admin-area">
					<li><a  href="#">Dashboard</a></li>
					<li ><a href="reg.php">New Profile</a></li>
					<li ><a href="index.php">Manage Profile</a></li>
					<li ><a href="#">Manage Calls</a></li>
					<li ><a href="#">LogOut</a></li>
				</ul>
					<div class="row">
					<div class="col-lg-2">
						<div class="card bg-dark">
							<div class="card-body">
								<h6 class="text-white text-c enter">SMS Balance</h6>
								<h6 class="text-white text-c enter" id="smsBal">200</h6>
								
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="card bg-primary">
							<div class="card-body">
								<h6 class="text-white text-c enter">Active Profiles</h6>
								<h6 class="text-white text-c enter" id="actpro">200</h6>
								
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="card bg-warning">
							<div class="card-body">
								<h6 class="text-white text-c enter">View Profiles</h6>
								<h6 class="text-white text-c enter" id="viewpro">200</h6>
								
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="card bg-danger">
							<div class="card-body">
								<h6 class="text-white text-c enter">Total Login</h6>
								<h6 class="text-white text-c enter" id="toLogin">200</h6>
								
							</div>
						</div>
					</div>
				</div>
			</div>

				
		<script type="text/javascript" src="assets/bootstrap.bundle.min.js"></script>

</body>
</html>