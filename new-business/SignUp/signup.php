<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2/18/2019
 * Time: 4:31 PM
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_business";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
    if ( isset( $_POST['submit'] ) ) {
        // retrieve the form data by using the element's name attributes value as key
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
//        $email = $_POST['email'];
//        $user_password = $_POST['user_password'];
//        $mobile_number = $_POST['mobile_number'];
//        $n_id = $_POST['n_id'];
//        $present_address = $_POST['present_address'];
//        $permanent_address = $_POST['permanent_address'];
//        $nationality = $_POST['nationality'];
//        $website = $_POST['website'];
//        $occupation= $_POST['occupation'];
//        $interest = $_POST['interest'];

        //insertion
        $sql ="INSERT INTO `user_info_investor`(`USER_ID`, `first_name`, `last_name`, `email`, `user_password`, `mobile_number`, `n_id`, `present_address`, `parmanent_address`, `nationalitiy`, `website`, `ocupation`, `interest`)
         VALUES ('00','$first_name','$last_name','z','b','c','a','b','c','a','b','c','x')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
       }
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="style.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css">

    <style>

    </style>

</head>

<body>

<div class="container">
    <h1 class="well">Registration Form</h1>
    <div class="col-lg-12 well">
        <div class="row">
            <form action="" method="post">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter First Name Here.." class="form-control" name="first_name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter Last Name Here.." class="form-control" name="last_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Present Address</label>
                        <textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Permanent Address</label>
                        <textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>City</label>
                            <input type="text" placeholder="Enter City Name Here.." class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>State</label>
                            <input type="text" placeholder="Enter State Name Here.." class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Zip</label>
                            <input type="text" placeholder="Enter Zip Code Here.." class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Title</label>
                            <input type="text" placeholder="Enter Designation Here.." class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Company</label>
                            <input type="text" placeholder="Enter Company Name Here.." class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" placeholder="Enter Phone Number Here.." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" placeholder="Enter Email Address Here.." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" placeholder="Enter your password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" placeholder="Enter Website Name Here.." class="form-control">
                    </div>
                    <button type="submit" class="btn btn-lg btn-info" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>