<?php include('server.php') ?>

<?php 
 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>


</div>

<div class="topnav">
 <div class="topnav-right"><div class="dropdown"><a href="profile.php"><span>=online now</span> <img src="online.png" height="10" width="10"/>  </a>  <img src="logo.png" height="40" width="120"/></div></div>
  </left><a href="index.php">Home</a>
  <a href="profile.php">My Profile</a>
  <a href="SearchJob.php">Job Search</a>
  <a href="#">Education</a>
  <a href="#">Walkin Interview</a>
   <a href="Feedback.php" class="active">Feedback</a>
  <a href="logout.php">Logout <font color="#C1DCF9">( <?php echo $_SESSION['username'];?> )</font></a>

 
</div>
  
          


            
            </button>
          </div></div>

   </div>
  


<nav> 

<div class="card">
<center><img src="useravater.png" height="70" width="70"/>
</center>
<center><a href="profile.php"><font color="black">

<b><?php echo $_SESSION['username']; ?></b></font></a><br/>

[ <a href="edit_profile.php"><font color="#008CF9">Edit Profile</font></a> ]
<br/>
Email: 
             
<?php
$username=$_SESSION['username'];
// Establish Connection with Database
$con = mysqli_connect("auth-db180.hostinger.com","u943645959_Teamjobportal","Fahim@Mushfiq@Ashfaq123","u943645959_jobportal");
// Specify the query to execute
$sql = "select * from jobseeker_reg where username='".$username."'  ";
// Execute query
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
// Loop through each records 
$row = mysqli_fetch_array($result)
?>


<font color="black"><i><?php echo $row['email'];?></i></font><br/>
Phone Number: <font color="green"><i><?php echo $row['PhoneNumber'];?></i></font>
Address: <font color="gray"><?php echo $row['Address']; ?></font>
<i>Qualification:</i> <font color="red"><b><?php echo $row['Qualification']; ?></b></font>

</center>

</div>
<div class="card">
<left> <button class="button1"><img src="img/hotjobs.png" height="30" width="28"/> <h3>HOTJOBS<h3></button></left>
<div id="photo" style="text-align: left">
  <img style="vertical-align:middle" src="img/job1.png" alt="">
  <span style="vertical-align:middle">Glory Jute Limited.</span>

</div><hr/>

<div id="photo" style="text-align: left">
  <img style="vertical-align:middle" src="img/job2.jpg" alt="">
  <span style="vertical-align:middle">Glory Textile Ltd.</span>

</div><hr/>


<div id="photo" style="text-align: left">
  <img style="vertical-align:middle" src="img/job3.png" alt="">
  <span style="vertical-align:middle">Orion Pharma Ltd.</span>

</div><hr/>


<div id="photo" style="text-align: left">
  <img style="vertical-align:middle" src="img/job4.jpg" alt="">
  <span style="vertical-align:middle">Kazi IT Limited.</span>

</div><hr/>


<div id="photo" style="text-align: left">
  <img style="vertical-align:middle" src="img/job5.jpg" alt="">
  <span style="vertical-align:middle">BRAC</span>

</div><hr/><br/><br/><br/><br/>

</div>


</nav>









</div>





<center>

<div class="dcard">


<img src="img/right.png"/>  <h2> Feedback Submitted.Thank You</h2>



</center>

        

 




</div>
</div>

</body>
</html>





<style>





.circule{
  border-radius:50%;
  border:none;
  height:60px;
  width:60px;
  color:#ffffff;
  box-shadow: 0 13px 26px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.16);
  
  }


*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 2%;
 width: 80%;
}

.dcard{
     width: 75%;
     display: inline-block;
     box-shadow: 1px 1px 10px black;
     border-radius: 5px; 
     margin: 2%;
    }

.image img{
  width: 50%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: center;
  padding: 5px;
  
 }

h1{
  font-size: 8px;
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}






.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
}






.footer {
   position: absolute;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #0A2B45;
   color: white;
   text-align: center;
}


.button1 {padding: 10px 24px;}

.button1 {background-color: #4CAF50;} /* Green */

.button3 {background-color: #04A0FF  ;} /* Green */

.button4 {background-color: #FFBB04 ;} /* Green */
.button5 {background-color: #FF0404 ;} /* Green */
 

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
}
.button-success,
        .button-error,
        .button-warning,
        .button-secondary {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .button-success {
            background: rgb(28, 184, 65);
            /* this is a green */
        }

        .button-error {
            background: rgb(202, 60, 60);
            /* this is a maroon */
        }

        .button-warning {
            background: rgb(223, 117, 20);
            /* this is an orange */
        }

        .button-secondary {
            background: rgb(66, 184, 221);
            /* this is a light blue */
        }

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: right;
  width: 19%;
  height: 600px; /* only for demonstration, should be removed */
  background: #EDEDED  ;
  padding: 5px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: black;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}




</style>


<script>

<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>