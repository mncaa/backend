<?php
include 'api.php';


?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">

    <script type="text/javascript" src="assets/bootstrap.bundle.min.js"></script>
    </head>
    <body>

    <div class="search">
     <input type="text" id="search1" placeholder="search" class="form-control" autocomplete="off">
   
    </div>
    <div class="result" id="result"></div>
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
                    }
                });
               }else{
                $("#result").css("display","none");
               }
            });
        });

        </script>
    </body>