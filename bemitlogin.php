<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bemit | Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .registration-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 700px;
        }
         .department {
            flex: 0 0 30%;
            margin: 10px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .registration-header {
            
            color: black;
            padding: 2px;
            text-align: center;
        }

        .registration-form {
            padding: 50px;
        }

        .registration-form input {
            height: 43px;
            width: 600px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
            font-size: 15px;
        }

        .registration-form input:valid {
            border-color: #2ecc71;
        }

        .registration-form input:invalid {
            border-color: #e74c3c;
        }

        .registration-form button {
            background-color:#2ecc71;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .registration-form button:hover {
            background-color: #2980b9;
        }

        .registration-form input {
            text-align: center;
            font-size: 14px;
        }

footer{
    text-align: center;
    background-color: black;
    color: white;
}




    </style>
</head>
<body>

<div class="registration-container">
    <div class="registration-header">
        <h3>Bemit || Login || Form </h3>
    </div>
    <div class="registration-form">
        <form method="post"> 
            <input type="text" name="user_name" placeholder="Registration Number" required><br><br>
            <input type="password" name="password" placeholder="Enter Password" required><br><br>
            <button type="submit">Login </button>
            <br> <br>
<b><a href="login.php" style="text-decoration: none; color:black;">  </a></b>
<a href="#" style="padding-right: 50px; position: relative; right: 300;">Forgot Password ? ,Reset Here</a>
        </form>
    </div>
    
</div>



</body>
</html>

       








