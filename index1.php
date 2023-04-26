<?php
include 'api.php';
if(isset($_POST['sub_btn'])){
$name=$_POST['name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$mname=$_POST['mname'];
$gname=$_POST['gname'];
$place=$_POST['place'];
$qname=$_POST['qname'];
$mes=$_POST['mes'];
$pno=$_POST['pno'];

$sql="INSERT INTO reg(name,dob,email,mname,gname,place,qname,mes,pno) 
values('$name','$dob','$email','$mname','$gname','$place','$qname','$mes','$pno')";
$res=mysqli_query($con,$sql);
if(!$res){
   // echo"data inserted successfully";
   die(mysqli_error($con,$sql));
}

}

?>

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
.search{width:25%;margin-left: 75%;}
  </style>
<body>
<header></header>
<div class="container mt-3">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Register Profile
  </button>
  <div class="search">
     <input type="text" id="search1" placeholder="search" class="form-control" autocomplete="off">
   
    </div>
    <div class="result" id="result"></div>
</div>

<div class="container">
<table class="table  table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">DOB</th>
      <th scope="col">Email</th>
      <th scope="col">Merital Status</th>
      <th scope="col">Gender</th>
      <th scope="col">Native place</th>
      <th scope="col">Qualification</th>
      <th scope="col">Message</th>
      <th scope="col">Mobile Number</th>
    </tr>
  </thead>
  <tbody>
    <?php
  $sql="select * from reg";
$result=mysqli_query($con,$sql);
if($result){
	while($row=mysqli_fetch_assoc($result)){
       $id=$row['id'];
       $name=$row['name'];
       $dob=$row['dob'];
       $email=$row['email'];
       $mname=$row['mname'];
       $gname=$row['gname'];
       $place=$row['place'];
       $qname=$row['qname'];
       $mes=$row['mes'];
       $pno=$row['pno'];
       echo '<tr>
       <td><a href="edit.php?updateid='.$id.'"  style="color:blue;text-decoration:none;">AA0'.$id.'
       <div class="container mt-3">

</div></td>
       <td>'.$name.'</td>
       <td>'.$dob.'</td>
       <td>'.$email.'</td>
       <td>'.$mname.'</td>
       <td>'.$gname.'</td>
       <td>'.$place.'</td>
       <td>'.$qname.'</td>
       <td>'.$mes.'</td>
       <td>'.$pno.'</td>
      
       <td><button class="btn btn-danger"><a href="remove.php?remid='.$id.'" style="color:#fff;text-decoration:none;">Delete</a></button></td>
       </tr>';

           
		}
	}



	?>



  </tbody>
</table>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Register Profile</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form name="f1" method="POST">
        <section class="heading">
    

    
<div class="reg" id="result">

<div class="card">
<div class="card-body">
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
<select class="form-select" name="gname" required="">
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

</div>
<div class="modal-footer">
        <button class="btn btn-danger"  name="sub_btn" id="sub_btn">Submit</button>
      </div>
<br>
</div>
</div>
</div>

        </form>
      </div>

      <!-- Modal footer -->
     

    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $("#search1").keyup(function(){
                var input=$(this).val();
               // alert(input);

               if(input!=""){
                $.ajax({
                    url:"search1.php",
                    method:"POST",
                    data:{input:input},
                    success:function(data){
                        $("#result").html(data);
                        $("#result").css("display","block");
                    }
                });
               }else{
                $("#result").css("display","none");
               }
            });
        });
</script>

<script src="api.js"></script>
</body>
</html>
