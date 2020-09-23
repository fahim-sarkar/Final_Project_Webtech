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
    $ApplicationId = $_POST['ApplicationId'];
    $JobId = $_POST['JobId'];
    $Status = $_POST['Status'];
    $Description = $+POST['JobId'];
    $query = mysqli_query($con,"SELECT * FROM application_master WHERE ApplicationId='$ApplicationId' OR JobId='$JobId' OR Status='$Status' OR Description='$Description'");
    $sql = "INSERT INTO application_master (ApplicationId, JobId,Status,Description) VALUES ('$ApplicationId', '$JobId','$Status','Description')";
 
    //Make sure name is valid
    if(!preg_match("/^[a-zA-Z'-]+$/",$name)) { 
        die ("invalid first name");
    }
  
    //Response
    //Checking to see if name or email already exsist
    if(mysqli_num_rows($query) > 0) {
        echo "The ApplicationId, " . $_POST['ApplicationId'] . ", or JobId, " . $_POST['JobId'] . ", or Status, " . $_POST['Status'] . ",  or Description, " . $_POST['Description'] . ",already exists.";
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