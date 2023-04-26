<?php

include("api.php");
if(isset($_POST['input'])){
    $input =$_POST['input'];
    $query = "SELECT * FROM reg WHERE name LIKE '{$input}%' OR email LIKE '{$input}%' OR place LIKE '{$input}%'
    LIMIT 2";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){?>
    <table class="table table-bordered">
        <thead>
            <tr> 
                <th>Id</th>
                <th>Name</th>
                <th>Message</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>place</th>
                <th>Qualification</th>
                <th>Message</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
     <?php
while($row=mysqli_fetch_assoc($result)){
    $id =$row['id'];
    $name=$row['name'];
    $mname=$row['mname'];
    $dob=$row['dob'];
    $gname=$row['gname'];
    $place=$row['place'];
    $qname=$row['qname'];
    $mes=$row['mes'];
    $pno=$row['pno'];
    $email=$row['email'];
}


?>
<tr>
    <td><?php echo $id;?></td>
    <td><?php echo $name;?></td>
    <td><?php echo $mname;?></td>
    <td><?php echo $dob;?></td>
    <td><?php echo $gname;?></td>
    <td><?php echo $place;?></td>
    <td><?php echo $qname;?></td>
    <td><?php echo $mes;?></td>
    <td><?php echo $pno;?></td>
    <td><?php echo $email;?></td>
</tr>
</tbody>
    </table>
    <?php
}else{
    echo"<h6 class='text-danger text-center mt-3'>No data found</h6>";
}
}
?>