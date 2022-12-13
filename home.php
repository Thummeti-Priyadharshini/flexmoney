<html>
    <head>
        <title>Registration</title>
        <style>
            th{
                margin-top: 70;
                font-size: 40px;
                font-style: italic;
            }
            td{
                font-size: 40px;
                text-align: center;
            }
            table {

    margin-top: 80;
    margin-left: 250;
   align-items: center;
width:1000px;
font-size: 25px;
height:50px;

border:2px solid black;
border-radius: 10px;

}
input,button{

    width:500px;
font-size: 25px;
height:50px;

border:2px solid black;
border-radius: 10px;
}
button a{
text-decoration: none;


}
.footer{
    margin-top: 200px;
}
.footer td{
    text-align:center;border:2px solid black;border-radius:15px;width: 450px;
}
        </style>

        <script>
          function eligibility(){
                var dob = document.forms["formeligible"]["age"].value;
                var dob1 = new Date(dob);


                var year = dob1.getFullYear();
    
                var month = dob1.getMonth()+1;
        
                var day = dob1.getDate();
                
                 var today = new Date();
                 var age = today.getFullYear() - year;
                if (today.getMonth() < month || (today.getMonth() == month && today.getDate() < day)) {
                           age--;
                        }
                    
            if(age>=18 && age<=65){
                alert("you are eligible to register for yoga classes");
                return true;
            }
          else{
            alert("you are not eligible to register for yoga classes");
return false;
          }

            }

        </script>
    </head>
    <body style="background-image: linear-gradient(to right top,rgb(221, 214, 215),purple);">
        <form  name="formeligible" onsubmit="return eligibility();">
        <table border="2px" align="center" style="background-image:url('yoga1.jpg');background-position:center;   

background-size: cover;
width: 100px;

height:50vh;">
            <th colspan="2" align="center">CHECK FOR ELIGIBILITY</th>
            <tr>
                <td>Enter your date of birth</td>
                <td><input type="date" id='age' name="age" required autofocus></td>
            </tr>
<tr><td  align="center"><input type="submit" id='submit' name='submit' value="check"></td>
<td align="center"><button><a href='registration.php'>Register</a></button></td>
<tr><td align="center" colspan="2"><button><a href='index.php'>Go to Home Page</a></button></td></tr>
      </tr>  </table>
        </form>
        <div class="footer">
<table border="5" align="center" style="background-color:aliceblue;font-size:25;">
        <tr><td><a href="registration.php">Registration Page</a> </td>
       <td > <a href="home.php">Check Eligibility</a> </td>
       <td ><a href="payment2.php">Payment Page</a></td>
       <td > <a href="index.php">Home Page</a></td>
       <td > <a href="update.php">Update</a></td>
        </tr>
</table>
</div>
        
    </body>
</html>