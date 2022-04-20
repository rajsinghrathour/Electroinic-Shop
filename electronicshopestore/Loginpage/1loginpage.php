<?php
$conn = mysqli_connect('localhost','root','') or die(mysali_error());
mysqli_select_db($conn,'electronicshop') or die(mysqli_error());


if(isset($_POST['usp']))
{
  $query=mysqli_query($conn,"SELECT `UserName`,`Password` from `userdetail` WHERE `UserName`='$_POST[username]' AND `Password`='$_POST[password]'");
    if(mysqli_num_rows($query)>0)
    { header('Location:http://localhost/electronicshopestore/Mainpage/2Main.php');
    }
    else{
      echo "wrong username or password( Try : username= Project Password= Project123)";
    }
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="cssdocs/1loginpage.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
    <link rel="stylesheet" href="../CSS ICONS/all.css">
    <link rel="stylesheet" href="1loginpage.css">
<style>
  body{background-image: url("iphone-gdf2aacf50_1920.jpg");}
</style>

  </head>
<body>
    <header id="header">
     <nav>
         <div id="head-cont">
       
   
             <div class="head-cont-child1">
         <div><i class="fab fa-erlang"></i></div>
         <div>-STORE</div>
         
          

             </div>

           



           <div id="head-cont-list" >
               <ul id="head-cont-list-ul">
                   <li><a href="#">Home</a></li>
                   <li><a href="#">About</a></li>
                   <li><a href="7contactus.php">Contact</a></li>
                   <li><a href="#">Blog</a></li>
                   
               </ul>
           </div>

          </div>
     </nav>
     <!-- for hamburger cross -->
     <button class="hamburg"onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
        <svg width="40" height="20" viewBox="0 0 100 100">
          <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
          <path class="line line2" d="M 20,50 H 80" />
          <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg>
      </button>
      <!-- for hamburger cross -->

    </header>
    <main>

     <div id="sign">
         <form action="1loginpage.php" method="post">
             <input type="text" class="input" id="username" name="username" value="Project" placeholder="Project">
             <input type="text" class="input" id="password" name="password"value="Project123" placeholder="Project123">
             <button name ="usp" type="submit">Log In</button>
             <p>Forgot password?</p>
            <button>Create New Account</button>
            </form>

     </div>


    </main>
    <footer id="footer">
      <div class="footer-div">
        <div><a><i class="fab fa-linkedin-in"></i></a></div>
       <div><a><i class="fab fa-whatsapp"></i></a></div>
       <div><a><i class="fab fa-twitter"></i></a></div>
       <div><a> <i class="fab fa-facebook-f"></i></a></div>
       <div><a> <i class="fas fa-envelope"></i></a></div>
      
    </div>    
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

   <script src="1loginpage.js"></script> 
</body>
</html>


