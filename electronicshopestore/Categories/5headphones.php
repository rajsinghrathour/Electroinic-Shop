<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headphones</title>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
   
    

    .container{
        margin-top: 15vh;
        /* border: 10px solid saddlebrown; */
        display:grid;
        grid-template-columns: auto auto auto;
        row-gap: 5vh;
        align-items: center;
        justify-content: space-evenly;
        height: 100vh;
    }
    .itemsss{
        box-shadow: 0px 0px 20px white;
        background-color: rgb(255, 255, 255);
        display: flex;
        flex-direction: column;
        justify-content:space-around;
        align-items: center;
        border-radius: 20px;
        height:60vh;
        text-align: center;
        /* border: 2px solid red; */
    }
    .itemsss img{
        height:60%;
        border-radius:10%;
        /* width:80%; */
    }

    .itemsss :hover{
        box-shadow: 0px 0px 40px white;
    }

    @media only screen and (min-width:768px) and (max-width:991px)
    {
        .container{
            margin-top: 15vh;
            grid-template-columns: auto auto;
        }

    }
    @media only screen and (min-width:600px) and (max-width:767px)
    {
        .container{
            margin-top: 15vh;
            grid-template-columns: auto auto auto;
            font-size: 0.7rem; 
        }
        .itemsss{
            height: 40vh;
             width: 120px;
    }

    }
    @media only screen and (min-width:300px) and (max-width:599px)
    {

        .container{
            margin-top: 15vh;
            grid-template-columns: auto auto;
            font-size: 0.5rem; 
        }
        .itemsss{
            height: 30vh;
             width: 100px;
    }
    }

</style>

<link rel="stylesheet" href="Headerforremaining.css">
<link rel="stylesheet" href="../CSS ICONS/all.css">

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
                  <li><a href="../Mainpage/2Main.php">Home</a></li>
                   <li><a href="#">About</a></li>
                   <li><a href="../contactuspage/7contactus.php">Contact</a></li>
                      <li><a href="#">Blog</a></li>
                      
                  </ul>
              </div>
   
           
            
   
       
   
   
   
               </div>
        </nav>
        <!-- for hamburger cross -->
        <button class="hamburg"onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
           <svg width="60" height="30" viewBox="0 0 100 100">
             <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
             <path class="line line2" d="M 20,50 H 80" />
             <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
           </svg>
         </button>
         <!-- for hamburger cross -->
   
       </header>

    <div class="cart">
<a href="../managecart/8managecart.php"><i class="fas fa-shopping-cart fa"></i></a>        
    </div>


    <div class="container">
    <div class="itemsss">
    <img src="Allimages/headphones/boAt Rockerz 370 1k.jpg"><div>boAt Rockerz 370<br><span><small><s>&#8377 990  </s></small></span><span>&#8377 900</span></div>
    <form action="../managecart/8managecart.php" method="post">
    <input type="hidden" name="addtocart">
    <div class="addremove"><input type="number" min="1" max="5" value="1" name="quantity">
    <button type="submit"><i class="fas fa-cart-plus"></i></button></div> 
    <input type="hidden" name="itemname" value="boAt Rockerz 370"><input type="hidden" name="OriginalPrice" value="990"><input type="hidden" name="DiscountedPrice" value="900"><input type="hidden" name="Imagelocation" value="../Categories/Allimages/headphones/boAt Rockerz 370 1k.jpg">
    </form>
    </div>


    <div class="itemsss">
    <img src="Allimages/headphones/JBL Live 650BTNC 9k.jpg"><div>JBL Live 650BTNC<br><span><small><s>&#8377 8500  </s></small></span><span>&#8377 7900</span></div>
    <form action="../managecart/8managecart.php" method="post">
    <input type="hidden" name="addtocart">
    <div class="addremove"><input type="number" min="1" max="5" value="1" name="quantity">
    <button type="submit"><i class="fas fa-cart-plus"></i></button></div> 
    <input type="hidden" name="itemname" value="JBL Live 650BTNC"><input type="hidden" name="OriginalPrice" value="8500"><input type="hidden" name="DiscountedPrice" value="7900"><input type="hidden" name="Imagelocation" value="../Categories/Allimages/headphones/JBL Live 650BTNC 9k.jpg">
    </form>
    </div>


    <div class="itemsss">
    <img src="Allimages/headphones/JBL T460BT by Harman 2100.jpg">
    <div>JBL T460BT by Harman<br><span><small><s>&#8377 2100  </s></small></span><span>&#8377 1999</span></div>
    <form action="../managecart/8managecart.php" method="post">
    <input type="hidden" name="addtocart">
    <div class="addremove"><input type="number" min="1" max="5" value="1" name="quantity">
    <button type="submit"><i class="fas fa-cart-plus"></i></button></div> 
    <input type="hidden" name="itemname" value="JBL T460BT by Harman"><input type="hidden" name="OriginalPrice" value="2100"><input type="hidden" name="DiscountedPrice" value="1999"><input type="hidden" name="Imagelocation" value="../Categories/Allimages/headphones/JBL T460BT by Harman 2100.jpg">
    </form>
    </div>

    <div class="itemsss">
    <img src="Allimages/headphones/URBN Thump 550 HD 1k.jpg"><div>URBN Thump 550 HD<br><span><small><s>&#8377 1190  </s></small></span><span>&#8377 1100</span></div>
    <form action="../managecart/8managecart.php" method="post">
    <input type="hidden" name="addtocart">
    <div class="addremove"><input type="number" min="1" max="5" value="1" name="quantity">
    <button type="submit"><i class="fas fa-cart-plus"></i></button></div> 
    <input type="hidden" name="itemname" value="URBN Thump 550 HD"><input type="hidden" name="OriginalPrice" value="1190"><input type="hidden" name="DiscountedPrice" value="1100"><input type="hidden" name="Imagelocation" value="../Categories/Allimages/headphones/URBN Thump 550 HD 1k.jpg">
    </form>
    </div>


    <div class="itemsss">
    <img src="Allimages/headphones/ZEBRONICS Zeb-Bang 800.jpg"><div>ZEBRONICS Zeb-Bang<br><span><small><s>&#8377 800  </s></small></span><span>&#8377 700</span></div>
    <form action="../managecart/8managecart.php" method="post">
    <input type="hidden" name="addtocart">
    <div class="addremove"><input type="number" min="1" max="5" value="1" name="quantity">
    <button type="submit"><i class="fas fa-cart-plus"></i></button></div> 
    <input type="hidden" name="itemname" value="ZEBRONICS Zeb-Bang"><input type="hidden" name="OriginalPrice" value="800"><input type="hidden" name="DiscountedPrice" value="700"><input type="hidden" name="Imagelocation" value="../Categories/Allimages/headphones/ZEBRONICS Zeb-Bang 800.jpg">
    </form>
    </div>

    <div class="itemsss">
    <img src="Allimages/headphones/ZEBRONICS Zeb-Duke 1400.jpg"><div>ZEBRONICS Zeb-Duke<br><span><small><s>&#8377 1400  </s></small></span><span>&#8377 1200</span></div>
    <form action="../managecart/8managecart.php" method="post">
    <input type="hidden" name="addtocart">
    <div class="addremove"><input type="number" min="1" max="5" value="1" name="quantity">
    <button type="submit"> <i class="fas fa-cart-plus"></i></button></div> 
    <input type="hidden" name="itemname" value="ZEBRONICS Zeb-Duke"><input type="hidden" name="OriginalPrice" value="1400"><input type="hidden" name="DiscountedPrice" value="1200"><input type="hidden" name="Imagelocation" value="../Categories/Allimages/headphones/ZEBRONICS Zeb-Duke 1400.jpg">
    </form>
    </div>

     </div>

<script src="Header.js"></script>
    </body>
</html>