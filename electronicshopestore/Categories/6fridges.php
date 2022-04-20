<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refrigerators</title>

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
    <img src="Allimages/fridges/AmazonBasics 468 L Frost Free 41k.jpg"><div>AmazonBasics 468 L Frost Free<br><span><small><s>&#8377 41990  </s></small></span><span>&#8377 39900</span></div>
    <form action="../managecart/8managecart.php" method="post">
    <input type="hidden" name="addtocart">
    <div class="addremove"><input type="number" min="1" max="5" value="1" name="quantity">
    <button type="submit"><i class="fas fa-cart-plus"></i></button></div> 
    <input type="hidden" name="itemname" value="AmazonBasics 468 L Frost Free"><input type="hidden" name="OriginalPrice" value="41990"><input type="hidden" name="DiscountedPrice" value="39900"><input type="hidden" name="Imagelocation" value="../Categories/Allimages/fridges/AmazonBasics 468 L Frost Free 41k.jpg">
    </form>
    </div>


    <div class="itemsss">
    <img src="Allimages/fridges/AmazonBasics 564 L Side-by-Side Door 49k.jpg"><div>AmazonBasics 564 L Side-by-Side Door<br><span><small><s>&#8377 50000  </s></small></span><span>&#8377 45900</span></div>
    <form action="../managecart/8managecart.php" method="post">
    <input type="hidden" name="addtocart">
    <div class="addremove"><input type="number" min="1" max="5" value="1" name="quantity">
    <button type="submit"><i class="fas fa-cart-plus"></i></button></div> 
    <input type="hidden" name="itemname" value="AmazonBasics 564 L Side-by-Side Door"><input type="hidden" name="OriginalPrice" value="50000"><input type="hidden" name="DiscountedPrice" value="45900"><input type="hidden" name="Imagelocation" value="../Categories/Allimages/fridges/AmazonBasics 564 L Side-by-Side Door 49k.jpg">
    </form>
    </div>


    <div class="itemsss">
    <img src="Allimages/fridges/Hisense 507 L Inverter Frost-Free 72k.jpg">
    <div>Hisense 507 L Inverter Frost-Free<br><span><small><s>&#8377 72100  </s></small></span><span>&#8377 71999</span></div>
    <form action="../managecart/8managecart.php" method="post">
    <input type="hidden" name="addtocart">
    <div class="addremove"><input type="number" min="1" max="5" value="1" name="quantity">
    <button type="submit"><i class="fas fa-cart-plus"></i></button></div> 
    <input type="hidden" name="itemname" value="JBL T460BT by Harman"><input type="hidden" name="OriginalPrice" value="72100"><input type="hidden" name="DiscountedPrice" value="71999"><input type="hidden" name="Imagelocation" value="../Categories/Allimages/fridges/Hisense 507 L Inverter Frost-Free 72k.jpg">
    </form>
    </div>

    <div class="itemsss">
    <img src="Allimages/fridges/LG 437 L 2 Star Frost-Free  42k.jpg"><div>LG 437 L 2 Star Frost-Free<br><span><small><s>&#8377 41190  </s></small></span><span>&#8377 37800</span></div>
    <form action="../managecart/8managecart.php" method="post">
    <input type="hidden" name="addtocart">
    <div class="addremove"><input type="number" min="1" max="5" value="1" name="quantity">
    <button type="submit"><i class="fas fa-cart-plus"></i></button></div> 
    <input type="hidden" name="itemname" value="LG 437 L 2 Star Frost-Free"><input type="hidden" name="OriginalPrice" value="41190"><input type="hidden" name="DiscountedPrice" value="37800"><input type="hidden" name="Imagelocation" value="../Categories/Allimages/fridges/LG 437 L 2 Star Frost-Free  42k.jpg">
    </form>
    </div>


    <div class="itemsss">
    <img src="Allimages/fridges/Samsung 700 L Inverter Frost Free 81k.jpg"><div>Samsung 700 L Inverter Frost Free<br><span><small><s>&#8377 81000  </s></small></span><span>&#8377 77000</span></div>
    <form action="../managecart/8managecart.php" method="post">
    <input type="hidden" name="addtocart">
    <div class="addremove"><input type="number" min="1" max="5" value="1" name="quantity">
    <button type="submit"><i class="fas fa-cart-plus"></i></button></div> 
    <input type="hidden" name="itemname" value="Samsung 700 L Inverter Frost Free"><input type="hidden" name="OriginalPrice" value="81000"><input type="hidden" name="DiscountedPrice" value="77000"><input type="hidden" name="Imagelocation" value="../Categories/Allimages/fridges/Samsung 700 L Inverter Frost Free 81k.jpg">
    </form>
    </div>

    <div class="itemsss">
    <img src="Allimages/fridges/Whirlpool 265 L 3 Star Inverter Frost-Free 27k.jpg"><div>Whirlpool 265 L 3 Star Inverter Frost-Free<br><span><small><s>&#8377 27400  </s></small></span><span>&#8377 22200</span></div>
    <form action="../managecart/8managecart.php" method="post">
    <input type="hidden" name="addtocart">
    <div class="addremove"><input type="number" min="1" max="5" value="1" name="quantity">
    <button type="submit"> <i class="fas fa-cart-plus"></i></button></div> 
    <input type="hidden" name="itemname" value="Whirlpool 265 L 3 Star Inverter Frost-Free"><input type="hidden" name="OriginalPrice" value="27400"><input type="hidden" name="DiscountedPrice" value="22200"><input type="hidden" name="Imagelocation" value="../Categories/Allimages/fridges/Whirlpool 265 L 3 Star Inverter Frost-Free 27k.jpg">
    </form>
    </div>

     </div>

<script src="Header.js"></script>
    </body>
</html>