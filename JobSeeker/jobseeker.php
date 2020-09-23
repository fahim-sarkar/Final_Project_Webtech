<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>

<div class="topnav">
 <div class="topnav-right"> <left><img src="logo.png" height="40" width="120"/></div>
  </left><a href="index.php">Home</a>
  <a class="active" href="jobseeker.php">Job Seeker </a>
 
 
</div>
   <br/>
   
 <button class="button-one"><h3>Our Job Seekers</h3></button>
 <div class="card">
<br/>

 <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
<tr>
  <th bgcolor="#006699" class="style3">&nbsp;</th>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Company Name</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Contact Person</strong></div></th>

<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Email</strong></div></th>
</tr>
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost","iadmin","1122334455","project");
// Select Database

// Specify the query to execute
$sql = "select * from employer_reg";
// Execute query
$result = mysqli_query($con,$sql) or die( mysqli_error($con));
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$CompanyName=$row['CompanyName'];
$ContactPerson=$row['ContactPerson'];
$Email=$row['Email'];

?>
<tr>
  <td class="style3"><img src="design/ico_archive2.gif" alt="" width="9" height="11" /></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CompanyName;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $ContactPerson;?></strong></div></td>

<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
</tr>
<?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>

<?php
// Close the connection
mysqli_close($con);
?>
</table>
    </td>
  </tr>
</table>
      <div class="social-media">
       
      </div>
    </div>



</div>

  </body>
</html>
