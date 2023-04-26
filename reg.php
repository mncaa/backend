<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aarthi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <script type="text/javascript" src="assets/bootstrap.bundle.min.js"></script>
</head>
<style>
    header{z-index: 999;width: 100%;border-bottom: 1px solid #9999994d;}
header.a{background-color:#fff;box-shadow:0 2px 10px 0 rgba(0,0,0,.2);}
.nav-bar li{position: relative;}
header{background-color:rgba(255,255,255,.6);}
.pd{padding: 20px;}
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
    .bdy-style{margin-top: 20px;margin-bottom: 20px;}
.bdy-style h3{color: #000000;border-bottom: 2px dashed #808080;padding-bottom: 5px;}
.nav-item{color: #fff;cursor: pointer;}

.admin-area{list-style: none;text-align: center;background: #059f10;padding: 10px 0px;}
.admin-area li{display: inline;}
.admin-area li a{color: #fffa00;border-right: 1px solid#f5f5f5;padding: 0px 10px;text-decoration: none;}
.card{margin-bottom: 10px!important;}
.bg-dark{background-color: #313131!important;}
.card-body{padding: 5px 15px!important;font-size: 13px;flex: 1 1 auto;}
.text-white{color: #fff!important;}
.text-white{text-align: center!important;}
.nav-link{border-right: 1px solid #fff;padding: 0px 10px;}
</style>


<body>


<section class="reg">
<!-- The Modal -->
<div class="container pd-3">
<header></header>

<form name="f1" method="POST">
        <section class="heading">
    

    
<div class="reg">

<div class="card">
<div class="card-body">
<header><b>Register your Profile</b></header><br>
<div class="row">
<div class="col-md-6">

    <label class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="enter name" name="name" required="">
    <br>
    <label class="form-label">DOB</label>
    <input type="date" class="form-control"  name="dob" required="">
    <br>
    <label class="form-label">Email</label>
    <input type="email" class="form-control"  name="email" required="">
    <br>
   
    <select name="mname"  class="form-select" required="">
  <option selected class="form-control" name="mname">Merital Status</option>
  <option value="single">Single</option>
  <option value="unmaried">Unmaried</option>
  <option value="maried">Maried</option>


</select><br>
<select class="form-select" name="gname" required="" >
  <option selected class="form-control" name="gname">Gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>

</select><br>
    </div>
    <div class="col-md-6">
 
    <br>
    <label class="form-label">Native Place</label>
    <input type="text" class="form-control" placeholder="enter your Place" name="place" required="">
    <br>
    <label class="form-label">Education</label>
    <input type="text" class="form-control" placeholder="enter qualification" name="qname" required="">
    <br>
    <textarea class="form-label" name="mes" placeholder="Message" style="width: 100%; height:20vh;" required=""></textarea>
    <br>
 
<label class="form-label">Mobile Number</label>
    <input type="number" class="form-control" placeholder="enter your number" name="pno" required="">
    <br>
    
    <button class="btn btn-danger"  name="sub_btn" id="sub_btn">Register</button>

</div>

   
<br>
</div>
</div>
</div>

        </form>



</div>
</section>
<script src="api.js
"></script>
</body>
</html>