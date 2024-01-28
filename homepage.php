<?php 
session_start();
include('connection.php');
 $query3="SELECT * FROM school_students";
?>
<div id="all">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bemit</title>
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<style>

    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header {
    background-color: #3498db;
    color: #fff;
    text-align: center;
    padding: 20px;
    display: flex;
    justify-content: space-around;
}

.logo img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}

nav {
    background-color: #2c3e50;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
}

nav a {
    text-decoration: none;
    color: #ecf0f1;
    padding: 15px 20px;
    display: block;
}

nav a:hover {
    background-color: #1a252f;
}

.hero-section {
    text-align: center;
    padding: 50px 20px;
    background-color: #ecf0f1;
}

.cta-button {
    display: inline-block;
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
}

.features-section {
    display: flex;
    justify-content: space-around;
    padding: 50px 20px;
    background-color: #ecf0f1;
}

.feature {
    text-align: center;
}

.feature img {
    width: 300px;
    height: 300px;
}

footer {
    background-color: #2c3e50;
    color: #ecf0f1;
    text-align: center;
    padding: 10px 0;
}

 #sidebar {
            height: 90%;
            width:0;
            position: absolute;
            z-index: 1;
            top: 10;
            left: 0;
            background-color:  #123456;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            color: #f4f4f4;
            line-height: 1.1;
            border: 1px solid white;
            margin-right:200px ;
        }

        #sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 16px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        #sidebar a:hover {
            color: blue;
        }

         .closebtn {
            position: absolute;
            top: 0;
            right: 20px;
            font-size: 34px;
            cursor: pointer;
            color: white;
        }

        

        #openNavIcon {
            font-size: 20px;
            cursor: pointer;
            position: fixed;
            top: 50px;
            left: 20px;
            color: white;
        }

       
       

        #sidebar h3{
            color: white;
            text-align: center;
        }

        #registeredlist {
            display: none; /* Hide the list by default */
        
        }
        #registeredlist li{
            list-style: none;
             color: darkorange;
            
        }

        #listi{
            display: none;
            

        }
        #listi li{
            list-style: none;
             color: white;

             

        }

        #leave{
            display: none;
        
        }
        
        #leave li{
            list-style: none;
            color: white;
        
        }
        #resources{
            display: none;

        }
        #resources li{
            list-style: none;
           color: white;

        }
        #account{
            display: none;
            background: black;
        }
        #account li{
            list-style: none;
            color: white;
            
        }

        #form1{
            display: none;
            color: white;
            

        }
        #form1 li{
            list-style: none;
            color: white;
            
        }

        #form2{
            display: none;
          \
            color: white;
        }
        #form2 li{
            list-style: none;
            color: white;
        
        }

        #form3{
            display: none;
           \
            color: white;
        }
        #form3 li{
            list-style: none;
            color: white;
           
        }

        #form4{
            display: none;
          ]
            color: white;
        }
        #form4 li{
            list-style: none;
            color: white;
            
        }

        #form5{
            display: none;
          ]
            color: white;
        }
        #form5 li{
            list-style: none;
            color: white;
            
        }

        #form6{
            display: none;
           ]
            color: white;
        }
        #form6 li{
            list-style: none;
            color: white;
           
        }
    #modules,#kikoba,#kikobaregistration{
        display: none;
    }

    #modules,#kikoba li {
        list-style: none;
    }
    #semester2modules,#semester1modules{
        display: none;
    }
        
th,td{
    color: blue;
}


</style>

</head>
<body>
<div id="sidebar">
    <div class="closebtn" onclick="closeNav()" style="color:white;">×</div>
    
    <ul id="listi">
    <li><a href="parentdetails.php">➤ My Details</a></li>
    <li><a href="#">➤ Change Password</a></li>
    </ul>
    <a href="#" onclick="kikoba()" >Bemit Kikoba</a>
    <ul id="kikoba" >
        <li><a href="#" onclick="kikobaregistration()" style="color: #2ecc71;">➤ Register </a></li>
         <li><a href="#" onclick="kikobaregisteredlist()" >➤ See Members </a></li>
    </ul>
    <a href="#" onclick="listi()" >Bemit Sport </a>

    
    <a href="#" onclick="modules()">Bemit Modules</a>
    <ul id ="modules">
    <li><a href="#" onclick="semester1modules()">➤ Semester 1 modules</a></li>
    <li><a href="#"  onclick="semester2modules()">➤ Semester 2 Modules</a></li>
   </ul>

    <a href="#" >Past papers 2023</a>
    <a href="#" >Timetable for semester 2</a>
    <a href="#" >University calender</a>
    
    

</div>


    <div id="openNavIcon" onclick="openNav()">☰</div>
    
<script>
    function openNav() {
        document.getElementById("sidebar").style.width = "300px";
        
    }

    function closeNav() {
        document.getElementById("sidebar").style.width = "0";
    
    }
</script>




<script>

function listi(){

var listy = document.getElementById("listi");
if (listy.style.display === "none"){
    listy.style.display = "block";
}

else{
    listy.style.display = "none";
}

}

</script>






<script>
function accounts(){

    var acc = document.getElementById("account");
     if(acc.style.display === "none"){
        acc.style.display = "block";
     }
     else{
        acc.style.display = "none";
     }
}

</script>

    <header>
        <div class="logo">
            <img src="images/benjamin.jpg" alt="Future Bright">
            <p>ADMIN</p>
        </div>
         
    
        <div class="school-name">
            <h1>National Institute of Transport</h1>
            <p>Empowering Minds, Shaping Futures of Mathematics Teachers</p>
        </div>
    </header>

    <nav>


        <ul><li><a style="float:left; position:absolute; left:0;">
           



          <?php  
          include('connection.php');
          ?>
                 </a> </li>
            <li><a href="modules.php">Our Modules</a></li>
            <ul id="account" onclick="accounts()">
                <li><a href="#"> My Details </a> </li>
                <li><a href="#" > Change Password  </a> </li>
            </ul>

            <li><a href="bemitsport.php">Bemit Sport</a></li>
            <li><a href="assignments.php">Assignments</a></li>
            <li><a href="bemitlogout.php">Log out</a></li>
           
        </ul>
    </nav>

    <section class="hero-section">
        <h2>Welcome to Bemit Management System</h2>
        <p>Easy to get access to achieve full potentials</p>
            </section>

    <section class="features-section">
        <div class="feature">
            <img src="images/picha1.jpg" alt="Feature 1 Icon">
            <h3>Quality Education</h3>
            <p>Providing high-quality education to nurture young minds.</p>
        </div>
        <div class="feature">
            <img src="images/picha2.jpg" alt="Feature 2 Icon">
            <h3>Experienced Faculty</h3>
            <p>Our dedicated and experienced teachers guide students to success.</p>
        </div>
        <div class="feature">
            <img src="images/picha.jpg" alt="Feature 3 Icon">
            <h3>Modern Facilities</h3>
            <p>State-of-the-art facilities for a conducive learning environment.</p>
        </div>
    </section>

    <footer>
        &copy; <?php echo date('Y'); ?> Created and  Designed by Geofrey  | Bemit 2
    </footer>


</body>
</html>
</div>





<script>

function modules(){
    var modules = document.getElementById('modules');
   if(modules.style.display === "none"){
    modules.style.display ="block";
   }else 
   modules.style.display = "none";
}  

</script>





<script>

function semester1modules(){
    document.getElementById('semester1modules').style.display="block";
    document.getElementById('all').style.display="none";
}

</script>







<script>

function semester2modules(){
    document.getElementById('semester2modules').style.display="block";
    document.getElementById('all').style.display="none";
}

</script>




<script>

function kikoba(){
    var kikoba = document.getElementById('kikoba');
   if(kikoba.style.display === "none"){
    kikoba.style.display ="block";
   }else 
   kikoba.style.display = "none";
}  

</script>




<script>

function kikobaregistration(){
    document.getElementById('kikobaregistration').style.display="block";
    document.getElementById('all').style.display="none";
}

</script>













    <div id="semester2modules">
<header>
        <div class="logo">
            <img src="images/benjamin.jpg" alt="Future Bright">
            <p>ADMIN</p>
        </div>
         
    
        <div class="school-name">
            <h1>National Institute of Transport</h1>
            <p>Empowering Minds, Shaping Futures of Mathematics Teachers</p>
        </div>
    </header>
<body>
    <h2 style="color: blue;"> BEMIT MODULES SEMESTER 2  </h2>
<table cellpadding="20" cellspacing="0" border="1">
<tr>
<th>  S/NO   </th>
<th>  MODULE NAME  </th>
<th>  MODULE CODE  </th>
<th>  CREDIT    </th>
</tr>


<tr>
<td>     1     </td>
<td>    INTERNET PROGRAMMING      </td>
<td>     ITU 07405M     </td>
<td>      9           </td>
</tr>

<tr>
<td>     2     </td>
<td>    INFORMATION RETRIEVAL      </td>
<td>     ITU 07405M     </td>
<td>      9           </td>
</tr>

<tr>
<td>     3    </td>
<td>    DATABASE TECHNILOGIES      </td>
<td>     ITU 07404M     </td>
<td>      9           </td>
</tr>

<tr>
<td>     4    </td>
<td>   ORDINARY DIFFERENTIAL EQUATIONS     </td>
<td>     MTU 07405M     </td>
<td>      9           </td>
</tr>

<tr>
<td>     5     </td>
<td>    INTERNET PROGRAMMING      </td>
<td>     ITU 07405M     </td>
<td>      9           </td>
</tr>

<tr>
<td>     6   </td>
<td>    INTERNET PROGRAMMING      </td>
<td>     ITU 07405M     </td>
<td>      9           </td>
</tr>

<tr>
<td>     7     </td>
<td>    INTERNET PROGRAMMING      </td>
<td>     ITU 07405M     </td>
<td>      9           </td>
</tr>

<tr>
<td>     8     </td>
<td>    INTERNET PROGRAMMING      </td>
<td>     ITU 07405M     </td>
<td>      9           </td>
</tr>


<tr style="padding-bottom: 120px;">
<td>        </td>
<td>        </td>
<td>         </td>
<td>      400           </td>
</tr>

</table>


</body>

    <footer>
        &copy; <?php echo date('Y'); ?> Created and  Designed by Geofrey  | Bemit 2
    </footer>

    </div>






    <div id="semester1modules">
<header>
        <div class="logo">
            <img src="images/benjamin.jpg" alt="Future Bright">
            <p>ADMIN</p>
        </div>
         
    
        <div class="school-name">
            <h1>National Institute of Transport</h1>
            <p>Empowering Minds, Shaping Futures of Mathematics Teachers</p>
        </div>
    </header>
<body>
    <h2 style="color: blue;"> BEMIT MODULES SEMESTER 1 </h2>
<table cellpadding="20" cellspacing="0" border="1">
<tr>
<th>  S/NO   </th>
<th>  MODULE NAME  </th>
<th>  MODULE CODE  </th>
<th>  CREDIT    </th>
</tr>
<tr>
<td>     1     </td>
<td>    FUNCTIONS OF SEVERAL VARIABLES     </td>
<td>    MTU 07405M     </td>
<td>      9           </td>
</tr>

<tr>
<td>     2     </td>
<td>    MATHEMATICAL STATISTICS     </td>
<td>     MTU 07405M     </td>
<td>      9           </td>
</tr>

<tr>
<td>     3    </td>
<td>    DATABASE CONCEPT     </td>
<td>     ITU 07404M     </td>
<td>      9           </td>
</tr>
<tr>
<td>     4    </td>
<td>   LINEAR PROGRAMMING    </td>
<td>     MTU 07405M     </td>
<td>      9           </td>
</tr>

<tr>
<td>     5     </td>
<td>    SCHOOL GOVERNANCE     </td>
<td>     EDU 07405M     </td>
<td>      9           </td>
</tr>

<tr>
<td>     6   </td>
<td>    CURRICULUM DEVELOPMENT AND TEACHING     </td>
<td>     ITU 07405M     </td>
<td>      9           </td>
</tr>

<tr>
<td>     7     </td>
<td>    EDUCATIONAL RESEARCH     </td>
<td>     ITU 07405M     </td>
<td>      9           </td>
</tr>

<tr>
<td>     8     </td>
<td>    INTRODUCTION TO GRAPHICS DESIGN AND IMAGE PROCESSSING     </td>
<td>     ITU 07405M     </td>
<td>      9           </td>
</tr>


<tr style="padding-bottom: 120px;">
<td>        </td>
<td>        </td>
<td>         </td>
<td>      400           </td>
</tr>

</table>
</body>

    <footer>
        &copy; <?php echo date('Y'); ?> Created and  Designed by Geofrey  | Bemit 2
    </footer>

    </div>



<div id="kikobaregistration">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect Form</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.form-container, .result-container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-container h2, .result-container h2 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin: 10px 0;
}

input, select, textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    display: block;
    margin: 20px auto;
    width: 600px;
    height: 40px;
}

button:hover {
    background-color: #555;
}
</style>
</head>
<body>

    <div class="form-container">
        <a href="" onclick="all()" style="color:black; padding: 10px; float:right; text-decoration: none; font-size: 17px;"> x </a>
        <h2>Bemit Kikoba Registration</h2>

        <form action="redirect2.php" method="post">
            <label for="firstName">First Name:</label>
            <input type="text" name="first_name" required><br>

            <label for="lastName">Last Name:</label>
            <input type="text" name="last_name" required><br>

             <label for="regno">Registration Number:</label>
            <input type="text" name="reg_number"><br>

            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" name="phone_number" pattern="[0-9]{10}" required><br>

            <label for="permission">Gender:</label>
            <select name="permission" required>
                 <option value="Not selected"> Select Gender</option>
                <option value="yes">Male</option>
                <option value="no">Female</option>
            </select><br>

            <button type="submit">Register</button>
        </form>
    </div>

</body>
</html>
</div>
