<?php include 'db.php';
	$match='';
	if(isset($_POST['submit_user'])){
		 $filename = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "./image/" . $filename;
	 if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
			
			$ins_sql = "INSERT INTO user (username, email, password, about, pt1, pd1, pt2, pd2, pt3, pd3,image) VALUES ('$_POST[uname]', '$_POST[email]', '$_POST[psw]', '$_POST[about]', '$_POST[pt1]', '$_POST[pd1]', '$_POST[pt2]', '$_POST[pd2]', '$_POST[pt3]', '$_POST[pd3]','$filename')";
			$run_sql = mysqli_query($conn,$ins_sql);
		$match = '<div style="color: green;">Registered</div>';
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(image3.png);;
            font-family: Arial, sans-serif;
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
        .form-create{
            display: flex;
            flex-direction: column;
            max-width: 300px;
            padding: 36px;
            background-color: white;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid black;
            border-radius: 4px;
            margin-left: 900px;
            top: 5px;
            margin: 0 auto;
        }
        input[type=text]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        
    </style>
</head>
<body>

<h2>Create Form</h2>

<form class="form-create" action="create.php" method="post" enctype="multipart/form-data">
<?php echo $match; ?>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="about"><b>About</b></label>
    
    <textarea  placeholder="About me" name="about" required></textarea>


    <label for="uname"><b>My Work</b></label>
    <input type="text" placeholder="Project 1" name="pt1" required>
    <textarea  placeholder="Description" name="pd1" required></textarea>

    <input type="text" placeholder="Project 2" name="pt2" required>
    <textarea  placeholder="Description" name="pd2" required></textarea>

    <input type="text" placeholder="Project 3" name="pt3" required>
    <textarea  placeholder="Description" name="pd3" required></textarea>

    <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*" name="img">

    <button type="submit" name="submit_user">Done</button>
    <p>Already have an account? <a href="./login.php" class="Login-link">Login</a></p>
    
</div>
            
            

</div>


</body>
</html>