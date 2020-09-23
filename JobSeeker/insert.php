<?php
 
    //Connection to MySQL
    $con = mysqli_connect('auth-db180.hostinger.com', 'u943645959_Teamjobportal','Fahim@Mushfiq@Ashfaq123', 'u943645959_jobportal');
 
    if(!$con) {
        die('Not Connected To Server');
    }
 
    //Connection to database
    if(!mysqli_select_db($con, 'tutorial')) {
        echo 'Database Not Selected';
    }
 
    //Create variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $query = mysqli_query($con,"SELECT * FROM feedback WHERE name='$name' OR email='$email' OR message='$message");
    $sql = "INSERT INTO feedback (name, email,message) VALUES ('$name', '$email','$message')";
 
    //Make sure name is valid
    if(!preg_match("/^[a-zA-Z'-]+$/",$name)) { 
        die ("invalid first name");
    }
  
    //Response
    //Checking to see if name or email already exsist
    if(mysqli_num_rows($query) > 0) {
        echo "The name, " . $_POST['name'] . ", or email, " . $_POST['email'] . ", or message, " . $_POST['message'] . ", already exists.";
    }
    elseif(!mysqli_query($con, $sql)) {
        echo 'Could not insert';
    }
    else {

        echo "Thank you, " . $_POST['name'] . ". Your information has been inserted.";
    }
 
    //Close connection
    mysqli_close($con);
 
?>