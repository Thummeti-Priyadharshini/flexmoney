<?php
session_start();
if(isset($_POST['update'])){
    $conn = new mysqli('localhost','root','','flexmoney');
    $email2 = $_POST['email2'];
$batch1 = $_POST['batch1'];
$sql = "SELECT email from register where email='$email2'";
$query = mysqli_query($conn,$sql);
if($query->num_rows==0){
    echo '<script> alert("You are not registered")</script>';
}
else{
    $sql = "SELECT joined from register where email='$email2'";
    $query = mysqli_query($conn,$sql);
    
    $earlier = new DateTime($query);
    $later = new DateTime(date("Y-m-d"));

    $abs_diff = $later->diff($earlier)->format("%a"); //3
    if($abs_diff>30){
        $sql="UPDATE register
SET batch='$batch1' where email='$email2'"
;
$query = mysqli_query($conn,$sql);
echo '<script>alert("Successfully updated the batch");</script>';
    }
    else{
        echo '<script>alert("Cannot update the batch...Possible only after 1month");</script>';
    }
}

}
?>


<html>
    <head>
        <style>
            .footer{
    margin-top: 200px;
}
.footer td{
    text-align:center;border:2px solid black;border-radius:15px;width: 400px;
}
        
            </style>
    </head>
    <body style="background-image:url('yoga2.jpg');background-position:center;   

background-size: cover;



align-items: center;

font-size: 25px;
height:30px;
color:aliceblue;
">
    <center><div class="footer">
<table border="5" align="center" style="background-color:aliceblue;font-size:25;">
        <tr><td><a href="registration.php">Registration Page</a> </td></tr>
       <tr><td > <a href="home.php">Check Eligibility</a> </td></tr>
       <tr><td ><a href="payment2.php">Payment Page</a></td></tr>
       <tr><td > <a href="index.php">Home Page</a></td></tr>
       <tr><td > <a href="update.php">Update</a></td></tr>
        
</table>
</div>
        </center>
    </body>
</html>