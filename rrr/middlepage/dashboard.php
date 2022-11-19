<?php
    $q1="SELECT * from request where h_id='".$_SESSION['hotel_id']."';";
    $result=mysqli_query($con,$q1);
    if($result){
    ?>
        <table class='container'>
                <tr>
                    <th>NGO ID</th>
                    <th>Food Name</th>
                    <th>Food Type</th>
                    <th>Food Quantity</th>
                    <th>Cooked Time</th>
                    <th>Pickup Time</th>
                    <th>Expiry Time</th>
                    <th>Date of Donation</th>
                    <th>Status</th>
                </tr>
        <?php
        while($a=mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $a['ngo_id'] ?></td>
                <td><?php echo $a['food_name'] ?></td>
                <td><?php echo $a['food_type'] ?></td>
                <td><?php echo $a['food_qty'] ?></td>
                <td><?php echo $a['cooked_time'] ?></td>
                <td><?php echo $a['pickup_time'] ?></td>
                <td><?php echo $a['expiry_time'] ?></td>
                <td><?php echo $a['r_date'] ?></td>
                <td><?php echo $a['status'] ?></td>
            </tr>
        <?php } ?>
        </table>
    <?php }
    else{
        echo "Error";
    } 
?>