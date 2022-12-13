
<html>
    <head>
        <title>Registration Page</title>
        <style>
            th{
                margin-top: 70;
                font-size: 40px;
                font-style: italic;
            }
            td{
                font-size: 25px;
                text-align: center;
            }
            table {

   
   align-items: center;

font-size: 15px;
height:30px;

border:2px solid black;
border-radius: 10px;

}
input,button,select{

   
font-size: 15px;
height:30px;

border:2px solid black;
border-radius: 10px;
}
button a{
text-decoration: none;


}
.footer{
    margin-top: 50px;
}
.footer td{
    text-align:center;border:2px solid black;border-radius:15px;width: 250px;
}
        </style>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
             var reg1=/\d/;
             var reg2=/^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
            var reg3=/^[a-zA-Z]+$/;
            function vfname(){
               
                if(reg1.test(document.forms["form"]["fname"].value)){
                    document.getElementById("fname").value="";
                   alert("Enter valid first name");
                   
                return false;
                }
                
            }
            function vlname(){
                
                if(reg1.test(document.forms["form"]["lname"].value)){
                    document.getElementById("lname").value="";
                    alert("Enter valid last name");
                    return false;
                }
            }
            function vemail(){
                
                if(reg2.test(document.forms["form"]["email"].value)){
                    document.getElementById("email").value="";
                    alert("Enter valid Email-ID");
                    return false;
                }

            }
            function vcnum(){
               
                if(reg3.test(document.forms["form"]["cnum"].value)){
                    document.getElementById("cnum").value="";
                    alert("Phone number cannot be alphabets");
                    return false;
                }
                else if(document.forms["form"]["cnum"].value.length>10 ||document.forms["form"]["cnum"].value.length<10){
                    document.getElementById("cnum").value="";
                    alert("enter valid 10 digits phone-number");
                    return false;

            }
        }
        function vcity(){
                
                if(reg1.test(document.forms["form"]["city"].value)){
                    document.getElementById("city").value="";
                   alert("Enter valid city name");
                   
                return false;
                }
                
            }
            function vstate(){
                
                if(reg1.test(document.forms["form"]["state"].value)){
                    document.getElementById("state").value="";
                   alert("Enter valid state name");
                   
                return false;
                }
                
            }
            function vpcode(){
                
                if(reg3.test(document.forms["form"]["pcode"].value)){
                    document.getElementById("pcode").value="";
                    alert("Postal Code cannot be alphabets");
                    return false;
                }
            }
            function validation(form){

                if ( ( form.gender[0].checked == false ) && ( form.gender[1].checked == false ) )
{
alert ( "Please choose your Gender: Male or Female" );
return false;
}
              
               
                if(document.forms["form"]["batch"].value=="default"){
                    alert("select any batch");
                    return false;
                }
                var reg1=/\d/;
             var reg2=/^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
            var reg3=/^[a-zA-Z]+$/;
            if(reg1.test(document.forms["form"]["fname"].value)){
                    document.getElementById("fname").value="";
                   alert("Enter valid first name");
                   
                return false;
                }
                if(reg3.test(document.forms["form"]["pcode"].value)){
                    document.getElementById("pcode").value="";
                    alert("Postal Code cannot be alphabets");
                    return false;
                }
                if(reg1.test(document.forms["form"]["state"].value)){
                    document.getElementById("state").value="";
                   alert("Enter valid state name");
                   
                return false;
                }
                
                if(reg3.test(document.forms["form"]["cnum"].value)){
                    document.getElementById("cnum").value="";
                    alert("Phone number cannot be alphabets");
                    return false;
                }
                else if(document.forms["form"]["cnum"].value.length>10 ||document.forms["form"]["cnum"].value.length<10){
                    document.getElementById("cnum").value="";
                    alert("enter valid 10 digits phone-number");
                    return false;

            }
            if(reg2.test(document.forms["form"]["email"].value)){
                    document.getElementById("email").value="";
                    alert("Enter valid Email-ID");
                    return false;
                }
                if(reg1.test(document.forms["form"]["fname"].value)){
                    document.getElementById("fname").value="";
                   alert("Enter valid first name");
                   
                return false;
                }
                if(reg1.test(document.forms["form"]["lname"].value)){
                    document.getElementById("lname").value="";
                   alert("Enter valid last name");
                   
                return false;
                }
                var dob = document.forms["form"]["dob"].value;
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
                
                return true;
            }
          else{
            alert("you are not eligible to register for yoga classes");
return false;
          }
                
            }
           
</script>
        
        <style>
            #payment {

display:none;

}

        </style>
    </head>
    <body style="background-image:url('yoga2.jpg');background-position:center;   

background-size: cover;


height:40vh;">
       
        <div>
        <div>
      
        <center><h1 style="color:white"><b><i><marquee>Pay Registration fee Rs.500/-</marquee></i></b></h1></center>
        </div>
        
        </div>

        <center><form id="form" action="payment2.php" method="POST">
            <table border="2" style="background-image: linear-gradient(to right top,rgb(221, 214, 215),white);">
                <th colspan="3" align="center">Registration Page</th>
                <tr>
                    <td>
                        First Name
                    </td>
                    <td><input type="text" id="fname" name="fname" placeholder="Enter your First Name" required></td>
                    <td align="center"><button onclick="return vfname()">Validate</button></td>
                </tr>
                <tr>
                    <td>
                        Last Name
                    </td>
                    <td><input type="text" id="lname" name="lname" placeholder="Enter your Last Name" required></td>
                    <td align="center"><button onclick="return vlname()">Validate</button></td>
                </tr>
                <tr>
                    <td>
                        Email-ID
                    </td>
                    <td> <input type="email" id="email" name="email" placeholder="Enter your Email-ID" required></td>
                   <td align="center"><button onclick="return vemail()">Validate</button></td>
                </tr>
                <tr>
                    <td>
                        Phone Number
                    </td>
                    <td> <input type="tel" id="cnum" name="cnum" placeholder="Enter your Contact Number" required></td>
                    <td align="center"><button onclick="return vcnum()">Validate</button></td>

                </tr>
                <tr>
                    <td>
                        Gender
                    </td>
                    <td> <input type="radio" id="male" name="gender" value="male">Male &nbsp; <input type="radio" id="female" name="gender" value="female">Female</td>
                   
                </tr>
                <tr>
                    <td>
                        H:NO
                    </td>
                    <td><input type="text" id="hno" name="hno" placeholder="Enter House Number" required autofocus></td>
                    

                </tr>
                <tr>
                    <td>
                        City
                    </td>
                    <td><input type="text" id="city" name="city" placeholder="Enter your City-Name" required></td>
                   <td align="center"><button onclick="return vcity()">Validate</button></td>
                    

                </tr>
                <tr>
                    <td>
                        State
                    </td>
                    <td><input type="text" id="state" name="state" placeholder="Enter your state" required></td>
                    <td align="center"><button onclick="return vstate()">Validate</button></td>
                    

                </tr>
                <tr>
                    <td>
                        Postal-code
                    </td>
                    <td><input type="text" id="pcode" name="pcode" placeholder="Enter your Postal code" required></td>
                    <td align="center"><button onclick="return vpcode()">Validate</button></td>
                    

                </tr>
                <tr>
                <tr>
                <td>Enter your date of birth</td>
                <td><input type="date" id='dob' name="dob" required autofocus></td>
            </tr>
            <tr>
                <td>Joining Date</td>
                <td><input type="date" id='joind' name="joined" required autofocus></td>
            </tr>
            <tr>
                    <td>Select Batch</td>
                    <td>
                        <select name="batch" id="batch" required autofocus>
                            <option value="default">Default</option>
                            <option value="6-7">6AM-7AM</option>
                            <option value="7-8">7AM-8AM</option>
                            <option value="8-9">8AM-9AM</option>
                            <option value="5-6">5PM-6PM</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td align="center" ><input type='submit' id='submit' name='submit' value="Register" onClick="return validation(this.form)"></td>
                    <td align="center"><input type='reset' id='reset' name='reset' value="reset"></td>
                    <td align="center" ><button><a href='index.php'>Check eligibility</a></button></td>
                </tr>
             
            </table>
        </form></center>


      
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