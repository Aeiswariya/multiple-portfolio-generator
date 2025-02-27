<?php 
session_start();
include 'db.php';

if(isset($_SESSION['user']) && isset($_SESSION['password']) == true)
{
	
	$sql = "SELECT * FROM user WHERE email = '$_SESSION[user]' AND password = '$_SESSION[password]'";
	if($result = mysqli_query($conn,$sql)){

			
				while($rows = mysqli_fetch_assoc($result)){
					if(mysqli_num_rows($result) != 0){
						$about=$rows['about'];
						$pt1=$rows['pt1'];
						$pd1=$rows['pd1'];
						$pt2=$rows['pt2'];
						$pd2=$rows['pd2'];
						$pt3=$rows['pt3'];
						$pd3=$rows['pd3'];
						$img=$rows['image'];
						
					} 
				}
				
			}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-eqiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;  
        }

html{
    height: 100%;
}
        

        body {
            background-color: rgb(28, 124, 120);
            color: white;
            font-family: 'poppins', sans-serif;
            height: 100%;
            
            

        }
        
        

        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 50px;
            background: rgb(19, 51, 50);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 0rem 3%;

        }

        nav ul {
            display: flex;
            justify-content: center;

        }

        nav ul li {
            list-style: none;
            margin: 0 45px;

        }

        nav ul li a{
            text-decoration: none;
            color: white;

        }
        nav ul li a:hover,
        nav ul li a.active {
            color: #0ef;
            font-size: 1.2rem;
        }

        .left {
            font-size: 1.5rem;
        }
        .home{
            display: flex;
            justify-content: space-around;
            margin: 23vh 0;
        }
        .home >div{
            width: 30%;
        }
        .leftsection{
            font-size: 2.5rem;
            margin: 10vh 0;
        }
        
        .rightsection  img{
            width: 130%;
            margin:-60px  ;
            

         }
         .purple{
            color: rgb(94, 7, 7);
            font-size: 2.5rem;
         }
        #element{
            color: black;
        }
        
.left-sci a{
      display: inline-flex;
      justify-content: center;
      align-items: center;
      width: 30px;
      height: 30px;
      background: transparent;
      border: 2px solid #0ef;
      border-radius: 50%;
      font-size: 20px;
      color: white;
      text-decoration: none;
      margin: 20px 10px 20px 0;
}
.left-sci a :hover {
background: white;
color: #0ef;
box-shadow: 0 0 20px white;
}
.btn-box {
    display: inline-block;
    padding: 12px 28px;
    background: rgb(34, 132, 139);
    border-radius: 40px;
    font-size: 16px;
    color: white;
    letter-spacing: 1px;
text-decoration: none;
font-weight: 600;
cursor: pointer;
transition: .5s ease;
}
.btn-box :hover {
    background-color: white;

}

.search{
    width: 330px;
    float: left;
    margin-left: 90px;
}

.srch{
    font-family: 'Times New Roman';
    width: 200px;
    height: 40px;
    background: transparent;
    border: 2px solid rgb(28, 124, 120);
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
    color: white;
    font-size: 15px;
}

.btn{
    width: 100px;
    height: 40px;
    background: rgb(28, 124, 120);
    border: 2px solid rgb(28, 124, 120);
    color: white;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px;

}
.form{
    width: 250px;
    height: 380px;
    background: linear-gradient(to top, rgb(40, 87, 85)50%,rgb(40, 87, 85)50%);
    position: absolute;
    top: 100px;
    left: 1200px;
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: rgb(28, 124, 120);
    font-size: 22px;
    background-color: white;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    margin: 10px;
    border-bottom: 1px solid rgb(28, 124, 120);
    border-top: none;
    border-right: none;
    border-left: none;
    color: white;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: white;
    font-family: Arial;
}
.btnn{
    width: 240px;
    height: 40px;
    background: rgb(28, 124, 120);
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    margin: 10px;
    cursor: pointer;
    color: white;
    transition: 0.4s ease;
}
.btnn:hover{
    background: white;
    color: rgb(28, 124, 120);
}
.btnn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}
.form .link{
    font-family: Arial, sans-serif;
    font-size: 17px;
    padding-top: 10px;
    text-align: center;
}

.form .link a{
    text-decoration: none;
    color: black;
}

.liw{
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: center;
}
.icon a{
    text-decoration: none;
    color: white;
}
.icon ion-icon{
    color: white;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0,3s ease;
}
.icon ion-icon:hover{
    color: rgb(28, 124, 120);
}


.about{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    background: rgb(40, 87, 85);
    margin: 33vh 0;

}
.about-img {
    width: 65vw;
    margin: 10vh;
}
.heading {
   text-align: left;
    font-size: 2.5rem;

}
.about-content h2 {
    text-align: left;
    line-height: 1.2;

}
.about-content h3 {
    font-size: 1.6rem;
    color: red;
}
.about-content p {
    font-size: 1rem;
    margin: 2rem 0 3rem;
    
}
.work{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 10px;
}
h1{
    font-size: 38px;
    font-weight: 600;

}
p{
    color: white;
    font-size: 14px;
    font-weight: 300;
    line-height: 22px;
    padding: 10px;

}
.row{
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
}
.work-col{
    flex-basis: 31%;
    background-image: url('background.png');
    background-size: cover;
    border-radius: 10px;
    margin-bottom: 5%;
    padding: 20px 12px;
    box-sizing: border-box;
}
.work-col h3{
    color: black;
    font-weight: bolder;
    font-size: 26px;
    text-align: center;
}
.work-col:hover{
    box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
}

.contact{
    display:flex;
    align-items: center;
    padding-top: 90px;
    padding-left: 490px;
    margin-top: 100px;
    width: 80%;
    gap: 5rem;
    height: 80%;


}
.contact-text h1{
    font-size: 40px;
    line-height: 5;
    text-align: center;
}



   
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="left">student's portfolio</div>
            <div class="right">
                <ul>
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#contact">Contact us</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">search</button></a>
            </div>

           
        </nav>
    </header>

    
        <section class="home" id="home">
            <div class="leftsection">
                Hii, 
                <span class="purple">We The Bond Of Three</span>
                <div>Web Developers</div>
                <span id="element"></span>
                
                <div class="left-sci">
                    <a href="https://github.com/Aeiswariya">
                        <ion-icon name="logo-github"></ion-icon>
                      </a>
                      <a href="https://www.linkedin.com/in/aeiswariya-panigrahi-7b8ba022b">
                        <ion-icon name="logo-linkedin"></ion-icon>
                      </a>
                </div>
                <a href="https://novoresume.com/editor/resume/7b87a980-fbc9-11ed-bc03-c97b3fb2dd20" class="btn-box">View Resume</a>
            </div>
            <div class="rightsection">
<img src="bg.png" alt="">
            </div>

        </section>
        


        <section class="about" id="about">
            <div class="about-img">
              <img src="./image/<?php echo $img; ?>" alt="">
				
            </div>
            <div class="about-content">
                <h2 class="heading">About <spam>Me</spam></h2>
                <h3>Frontend Developer</h3>
				<p>
				<?php
				echo $about;
				?>
				</p>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae mollitia dicta vero. Fuga maxime libero tempore debitis facere quidem eveniet reiciendis neque error? Sunt, autem? Nesciunt soluta perferendis dignissimos consequuntur necessitatibus fugiat, nisi laudantium sed vel deserunt animi adipisci porro iusto iste numquam ipsum explicabo minus beatae natus. Labore magnam exercitationem nihil sequi, animi, incidunt maiores aliquam distinctio sed dolor a, molestias delectus quod quos!</p> -->
                    
                <a href="#" class="btn-box">Read More</a>
            </div>
            
            </section>

           <!--work section design-->
           <section class="work" id="work">
              <h1>My Work</h1>
              <p></p>

              <div class="row">
                <div class="work-col">
                    <h3><?php echo $pt1; ?></h3>
                    <p><?php echo $pd1; ?></p>
                </div>
                <div class="work-col">
                    <h3><?php echo $pt2; ?></h3>
                  <p><?php echo $pd2; ?></p>
                </div>
                <div class="work-col">
                    <h3><?php echo $pt3; ?></h3>
                    <p><?php echo $pd3; ?></p>
                </div>
              </div>

           </section>
           <!---contact section design--->
           <section class="contact" id="contact">
            <div class="contact-text">
            <h1>Contact Me</h1>
            <h2>Let's Work Together</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, sint!</p>
            <div class="contact-list">
                <li><i class="fa-solid fa-envelope"></i>contact@gmail.com</li>
                <li><i class='bx bxs-phone-call'></i>0123456789</li>
            </div>
            <div class="contact-icons">
                <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
            
            </div>
            </div>
            
           </section>

    
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('#element', {
          strings: ['Welcome to Portfolio'],
          typeSpeed: 50,
        });
      </script>

      
      
      
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>

</html>