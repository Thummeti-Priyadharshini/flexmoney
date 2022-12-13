

<html>
    <head>
        <script>
            function validate(){

var reg2=/^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
if(reg2.test(document.forms["uform"]["email2"].value)){
                    document.getElementById("email").value="";
                    alert("Enter valid Email-ID");
                    return false;
                }
                if(document.forms["uform"]["batch1"].value=="default"){
                    alert("select any batch");
                    return false;
                }

            }
            </script>
            <style>
                input,select{

   
font-size: 20px;
height:30px;

border:2px solid black;
border-radius: 10px;
}
                .footer{
    margin-top: 150px;
}
.footer td{
    text-align:center;border:2px solid black;border-radius:15px;width: 250px;
}
                </style>
    </head>
    <body style="background-image: linear-gradient(to right top,rgb(221, 214, 215),yellow);">
        <form align="center" id="uform" name="uform" action="submit.php" method="post">
    <table border="2" align="center" style="background-image:url('yoga2.jpg');background-position:center;   

background-size: cover;

margin-top:200px;

align-items: center;

font-size: 25px;
height:30px;
color:aliceblue;
border:2px solid black;
border-radius: 10px;" >
        <th align="center" colspan="2" bgcolor="white" style="color:black;">UPDATE YOUR BATCH</th>
    <tr>
                    <td>
                        Email-ID
                    </td>
                    <td> <input type="email" id="email2" name="email2" placeholder="Enter your Email-ID" required></td>
    </tr>
    <tr>
                    <td>Select Batch</td>
                    <td>
                        <select name="batch1" id="batch1" required autofocus>
                            <option value="default">Default</option>
                            <option value="6-7">6AM-7AM</option>
                            <option value="7-8">7AM-8AM</option>
                            <option value="8-9">8AM-9AM</option>
                            <option value="5-6">5PM-6PM</option>
                        </select>
                    </td>
                </tr>
                
                         <tr>   
                            <td colspan="2" align="center"><input
                                type="submit"
                                id="update"
                                name="update"
                                value="Update" onclick="validate();">
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