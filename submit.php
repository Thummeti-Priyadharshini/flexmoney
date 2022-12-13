<?php
session_start();
if(isset($_POST['pay'])){
    $conn = new mysqli('localhost','root','','flexmoney');
    $email = $_POST['email1'];
$acnum = $_POST['acnum'];
$expdate= $_POST['expdate'];
$cvvnum = $_POST['cvvnum'];
$chname = $_POST['chname'];
$sql = "SELECT email from register where email='$email'";
$query = mysqli_query($conn,$sql);
$sql1="SELECT email from pay where email='$email'";
$query1 = mysqli_query($conn,$sql1);
 if($query->num_rows==0){
    echo '<script> alert("You are not registered");window.location.href = "redirect.php";</script>';
   
   mysqli_close($conn);
       
 }
    if( $query1->num_rows>0){
        echo '<script> alert("You are already paid");
        window.location.href = "redirect.php";</script>';
        mysqli_close($conn);
           
        }
    
else{

    $sql = "INSERT INTO pay Values('$email','$acnum','$expdate','$cvvnum','$chname')";
    $query = mysqli_query($conn,$sql);
if($query){
    echo '<script> alert("succesfully payment done");window.location.href = "redirect.php";</script>';
   // header('location:redirect.php');
    
mysqli_close($conn);
}
else{
    echo '<script> alert(" payment not done correctly");window.location.href = "payment2.php";</script>';
    
    
mysqli_close($conn);
}
}
session_abort();
}

?>
<?php
//session_start();
if(isset($_POST['update'])){
    $conn = new mysqli('localhost','root','','flexmoney');
    $email2 = $_POST['email2'];
$batch1 = $_POST['batch1'];
$sql = "SELECT * from register where email='$email2'";
$query = mysqli_query($conn,$sql);
$mysql2= mysqli_fetch_array($query);
while ($row = mysqli_fetch_assoc($query)) {
    echo $row['batched'];
}
if($query->num_rows==0){
    echo '<script> alert("You are not registered");window.location.href = "registration.php";</script>';
    mysqli_close($conn);
}
else{
    $sql="SELECT DATE(joined) FROM register where email='$email2';";
   
  // $sql1= "SELECT DATE(batched) from register where email='$email2'";
   $query1 = mysqli_query($conn,$sql);
   


    //convert date1 string to DateTime object.
    $date1 = $row['joined'];

   
    $date=date("Ymd");
    //echo $x;
    $diff = strtotime($date) - strtotime($date1);
  
    // 1 day = 24 hours
    // 24 * 60 * 60 = 86400 seconds
    $abs_diff =abs(round($diff / 86400));
   // echo "<script>alert($x);</script> ";
    
 
    if($abs_diff>30){
        $sql="UPDATE register
SET batch='$batch1', batched='$date' where email='$email2'"
;
$query = mysqli_query($conn,$sql);
echo '<script>alert("Successfully updated the batch");window.location.href = "index.php";</script>';
mysqli_close($conn);
    }
    else{
        echo '<script>alert("Cannot update the batch...Possible only after 1month");window.location.href = "index.php";</script>';
        mysqli_close($conn);
    }
}

}
?>
