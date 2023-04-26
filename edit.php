<?php
include 'api.php';
$id=$_GET['updateid'];
$sql="Select * from `reg` where id=$id";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$dob=$row['dob'];
$email=$row['email'];
$mname=$row['mname'];
$gname=$row['gname'];
$place=$row['place'];
$qname=$row['qname'];
$mes=$row['mes'];
$pno=$row['pno'];

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

$sql ="update  reg set id=$id, name='$name',dob='$dob', email='$email', mname='$mname',gname='$gname',
 place='$place',qname='$qname',mes='$mes',pno='$mes'
	where id=$id";
$res=mysqli_query($con,$sql);
if($res){
  //echo"updated successfully";
  header('location:index.php');
  
}else{
  die(mysqli_error($con));
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
<body>



<!-- The Modal -->

<form name="f1" method="POST">
        <section class="heading">
    

    
<div class="reg">

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
    
    <button class="btn btn-danger"  name="sub_btn" id="sub_btn">Update</button>

</div>

   
<br>
</div>
</div>
</div>

        </form>





</body>
</html>
