<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(image3.png);;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 300px;
            padding: 16px;
            background-color: white;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid black;
            border-radius: 4px;
        }

        input[type=email], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
        }
        .login-create{
            margin-left: 650px;
            top: 50%;
            color: white;
        

        }
        .login-create .create-link{
            color: cyan;
        }
        .login-create .create-link:hover{
            color: #f44336;
        }
        
        
        
    </style>
</head>
<body>

<h2>Login Form</h2>

<div class="container">
<form class="form-create" action="./process.php" method="post">
    <label for="uname"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="login">Login</button>
</form>
</div>
<div class="login-create">
    <p>Don't have an account? <a href="./create.php" class="create-link">Create</a></p>
</div>

            
            

</div>


</body>
</html>