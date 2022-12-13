<?php 
session_start();


if(isset($_POST['submit']))
{
$conn = new mysqli('localhost','root','','flexmoney');
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
$cnum=$_POST['cnum'];
$gender=$_POST['gender'];
$hno=$_POST['hno'];
$city=$_POST['city'];
$state=$_POST['state'];
$pcode=$_POST['pcode'];
$batch=$_POST['batch'];
$dob=$_POST['dob'];
$join=$_POST['joined'];
$batched=$_POST['joined'];

$sql = "SELECT email from register where email='$email'";
$result = mysqli_query($conn,$sql);

if($result->num_rows > 0){
    echo '<script> alert("You are already registered! Try with other email-id");window.location.href = "registration.php";</script>';
    //header('location:redirect.php');
   // echo "<a href='registration.php'>Please click here to register with other email-id</a>";
    mysqli_close($conn);
}
else{

$sql=mysqli_query($conn,"insert into register values ('$firstname', '$lastname', '$email', '$cnum', '$gender', '$hno', '$city', '$state','$pcode', '$batch','$dob','$join','$batched')");
if($sql){
  echo '<script> alert("Thank you for registering---You are registered successfully");window.location.href = "payment2.php";</script>';
  mysqli_close($conn);
}

else
{
  echo '<script> alert("Sorry! You cannot register");window.location.href = "index.php";</script>';
  //header('location:redirect.php');
  mysqli_close($conn);
}

}

}

?>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
            function pay(){
                if(document.forms["form1"]["pay"].value=="paylater"){
                    document.getElementById("form1").style.display = "none";
                    document.getElementById("select").style.display = "none";
                   alert("Thank you for registering, Pay your money later");
                    //document.getElementById('header1').innerHTML="Thank you for registering , Pay your money later";
                    window.location.href = "index.php";
                    
                }
              if(document.forms["form1"]["pay"].value=="paynow"){
              
                    document.getElementById("form1").style.display = "none";
                    document.getElementById("select").style.display = "none";
                    document.getElementById("form2").style.display = "block";
                   
                  
                    
                }

            }
            function pay1(){
                document.getElementById("form2").style.display = "none";
                document.getElementById("form3").style.display = "block";
                document.getElementById("opt").style.display = "none";
            }
            function details(){
                var reg1=/\d/;
                var reg3=/^[a-zA-Z]+$/;
                var reg2=/^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
                if(reg3.test(document.forms["form3"]["acnum"].value)){
                    document.getTElementById("acnum").value="";
                   alert("Enter valid account number");
                   
                return false;
                }
                if(reg3.test(document.forms["form3"]["cvvnum"].value)){
                    document.getElementById("cvvnum").value="";
                   alert("Enter valid cvv number");
                   
                return false;
                }
                if(reg1.test(document.forms["form3"]["chname"].value)){
                    document.getElementById("chname").value="";
                   alert("Enter valid card holder name");
                   
                return false;
                }
                if(reg2.test(document.forms["form"]["email"].value)){
                    document.getElementById("email").value="";
                    alert("Enter valid Email-ID");
                    return false;
                }
                var dob = document.forms["form3"]["expdate"].value;
                var dob1 = new Date(dob);


                var year = dob1.getFullYear();
                
                 var today = new Date();
                 var now = today.getFullYear();
                 if(now>year){
                    alert("Select Valid Expiry Date")
                 }

            }
        </script>
        <style>
             th{
                margin-top: 70;
                font-size: 40px;
                font-style: italic;
                color:black;
            }
            td{
                font-size: 35px;
                text-align: center;
                color: black;
                font-weight: bold;
                font-style: italic;
                
            }
           #form3 td{
                font-size: 35px;
                text-align: center;
                color: whitesmoke;
                font-weight: bold;
                font-style: italic;
                
            }
            .footer{
    margin-top: 200px;
}
.footer td{
    text-align:center;border:2px solid black;border-radius:15px;width: 250px;
}
            table {

    margin-top: 80;
    
   align-items: center;
/*width:100px;

height:50px;

border-radius: 10px;
*/
}
input,select{

   
font-size: 30px;
height:40px;

border:2px solid black;
border-radius: 10px;
}
button{
    background-image: linear-gradient(to right top,rgb(221, 214, 215),green);
    font-size: 25px;

/*border:2px solid black;
border-radius: 10px;*/
}
button a{
text-decoration: none;


}     
            #form3{
                display: none;
            }
            #form2{
                border:"2" ;
                align-items:center;
                margin-left: 600;
                display: none;

            }
            
        </style>
    </head>
    <body style="background-image: linear-gradient(to right top,rgb(221, 214, 215),white);">
    <center><h1 style="color:black" id="opt"><b><i><marquee direction="right">Select Any Option</marquee></i></b></h1></center>
   
        <center><form id="form1">
    
        <table border="2" style="background-image: linear-gradient(to right top,rgb(221, 214, 215),yellow);">
            <tr>
                <td >Payment</td>
                <td>
                    <select name="pay" id="pay" required autofocus>
                        <option value="paylater">Pay-Later</option>
                        <option value="paynow">Pay-Now</option>
                        
                    </select>
                </td>
               </tr>
        </table>
        </form></center>
        <center><input type='submit' id='select' name='select' value="submit" onClick="pay()" style=" background-image: linear-gradient(to right top,rgb(221, 214, 215),green);"></center>
        <table class="last-content" id="form2" align="center">
        <tr></tr>
        <tr><td>
            <button type="button" id="pay-now-btn-ac">
            Apply Coupons
            </button><br></td></tr>
            <tr><td>
            <button type="button" id="pay-now-btn-nb">
            Pay with Netbanking

            </button><br></td></tr>
            <tr><td>
            <button type="button" id="pay-now-btn-cd" onclick="return pay1()">
                Pay with Credit or Debit card   </button></td></tr>
        </table>
        <form id="form3" onsubmit="return details()" method="post" action='submit.php'>
       
    <table border="2" align="center" style="background-image:url('yoga2.jpg');background-position:center;   

background-size: cover;



align-items: center;

font-size: 25px;
height:30px;
color:aliceblue;
border:2px solid black;
border-radius: 10px;" >
        <th align="center" colspan="2" bgcolor="white">PAYMENT DETAILS</th>
    <tr>
                    <td>
                        Email-ID
                    </td>
                    <td> <input type="email" id="email1" name="email1" placeholder="Enter your Email-ID" required></td>
                   
                </tr>
            <tr>
            <td> Card Number </td>
            <td><input
                type="text"
                id="acnum" name="acnum"
                placeholder="enter account number" required/>
            </td>
            </tr>
            <tr>
                <td> ExpiryDate </td>
                <td><input
                    type="date" name="expdate"
                    id="expdate" required
                   autofocus />
                </td>
                </tr>
                <tr>
                    <td> Cvv Number </td>
                    <td><input
                        type="number"
                        id="cvvnum" name="cvvnum"
                        placeholder="enter cvv number" required/>
                    </td>
                    </tr>

                    <tr>
                        <td>Card Holder Name </td>
                        <td><input
                            type="text"
                            id="chname" name="chname"
                            placeholder="enter card holder name" required/>
                        </td>
                        </tr>
                        <tr>
                            
                            <td colspan="2"><input
                                type="submit"
                                id="pay"
                                name="pay"
                                value="pay" />
                            </td>
                            </tr>
            
        </table>
        </form>
        <center><div class="footer">
<table border="5" align="center" style="background-color:aliceblue;font-size:25;">
        <tr><td><a href="registration.php">Registration Page</a> </td>
       <td > <a href="home.php">Check Eligibility</a> </td>
       <td ><a href="payment2.php">Payment Page</a></td>
       <td > <a href="index.php">Home Page</a></td>
       <td > <a href="update.php">Update</a></td>
        </tr>
</table>
</div>
        </center>
    </body>
</html>