<?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        // include database connection file
        include_once ("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($connection, "INSERT INTO `customer`(`first_name`, `last_name` , `email` , `phone` , `address`) VALUES ('$first_name','$last_name','$email','$phone','$address');");


     // Show message when user added
     header("Location: index.php");
    }
    
    ?>