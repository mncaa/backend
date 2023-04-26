<?php      
session_start();
if(isset($_POST["log_btn"])){
  $conn = new mysqli("localhost", "root","","good");  
  $u =$_POST['uname'];
$p = $_POST['pname'];
$res=$conn->query("SELECT uname FROM persons where `uname`='{$u}' and `pname`='{$p}'");

if($res){
  if($res->num_rows >0){
 //  echo"sucess";
 header('location:front.php');
     }else{
    echo "<script>alert('invalid user')</script>";  
  }
}else{
  echo "Error:".$conn->error;
}
  $conn->close();
 }
?>
     

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    </head>
    <style>
        input{width: 50%;}
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
    }
    
  </style>
<body>
    <div class="container mt-3">
<div class="card mb-3">
    <div class="row g-0 d-flex align-items-cent+er">
      <div class="col-lg-4 d-none d-lg-flex">
      <img src="log.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">


  
<form class="f1" method="POST" action="login.php"> 
<div class="form-outline mb-4">
              <input type="text"  class="form-control" name="uname" />
              <label class="form-label" >User Name</label>
            </div>
  <br>
  <div class="form-outline mb-4">
              <input type="password"  class="form-control" name="pname" />
              <label class="form-label"  >Password</label>
            </div>
  <br>
  
  <button class="btn btn-primary" name="log_btn">Login</button>
</form>
        </div>
      </div>
    </div>
</div>
</div>
</div>
<!-- Section: Design Block -->




    
<script type="text/javascript" src="assets/bootstrap.bundle.min.js"></script>
    </body>
</html>