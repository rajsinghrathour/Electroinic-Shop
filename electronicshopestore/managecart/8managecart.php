 <?php
$conn = mysqli_connect('localhost','root','') or die(mysali_error());
mysqli_select_db($conn,'electronicshop') or die(mysqli_error());

if(isset($_POST['addtocart'])){
    $query=mysqli_query($conn,"SELECT `Itemname` from `incart` WHERE `Itemname`='$_POST[itemname]'");
    if(mysqli_num_rows($query)>0)
    { 
    $sqlqry="UPDATE `incart` SET `Quantity`='$_POST[quantity]' WHERE `ItemName`='$_POST[itemname]'";
     $itemupdation=mysqli_query($conn,$sqlqry);
    
    }
    else{
    $sql="INSERT INTO `incart` (`ItemName`, `imageaddress`, `OriginalPrice`, `DiscountPrice`, `Quantity`) VALUES ('$_POST[itemname]', '$_POST[Imagelocation]', '$_POST[OriginalPrice]', '$_POST[DiscountedPrice]', '$_POST[quantity]')";
    $queryfire=mysqli_query($conn,$sql);
}


}
?>


<?php


    if(isset($_POST['emptycart']))
    {
        $truncate_table=mysqli_query($conn,"TRUNCATE TABLE incart");
    }



$GLOBALS['total']=0;
$GLOBALS['saved']=0;
    
    
    
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
.allitems{
    margin-right: 10vw;
    display: grid;
    grid-template-columns: auto auto auto;
    gap: 20px;
    /* border: 10px solid green; */
}
.itemsandcheckout{
  margin-top: 10vh;
  display:flex;
  /* border:10px solid red; */
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  padding: 5vw;
}
.checkout{
  border-radius: 20px;
  height: 20vh;
  width: 40vw;
  /* border:5px solid yellow; */
  background-color: rgb(140, 189, 231);
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction:column;
}
.checkout button{
  background-color: aliceblue;
  width: 90%;
}

.itemsss{
    font-size: 0.8rem;
        box-shadow: 0px 0px 10px white;
        background-color: rgb(255, 255, 255);
        display: flex;
        flex-direction: column;
        justify-content:space-around;
        align-items: center;
        border-radius:10px;
        width:180px;
        height:60vh;
        text-align: center;
        /* border: 2px solid red; */
    }

    .itemsss img{
        height:60%;
        width:70%;
    }

    .checkout{
        position: sticky;
        top: 20vh;
        right: 0px;
        bottom: 20vh;
    }
    .emptycart button{
        position: fixed;
        top:0.7vh;
        right:3vw;
        width: 90px;
        background-color: rgb(255, 255, 255);
    }

    .emptycart button:hover{
        box-shadow: 0px 0px 10px white;
    }

@media only screen and (min-width:768px) and (max-width:991px)
{
    .allitems{
    grid-template-columns: auto auto;
    gap: 30px;

}
    .itemsandcheckout{
        font-size:0.9rem;
    }  
    button{font-size:0.9rem;
    } 

    .itemsss{
        font-size:0.9rem;
            height: 55vh;
            width:180px;
    }

    .emptycart button{
    font-size:0.7rem;
    height: 20px;
        top:0.8vh;
        right:0vw;
        width: 70px;
        background-color: rgb(255, 255, 255);
    }
   
}

@media only screen and (min-width:600px) and (max-width:767px)
{
    .itemsandcheckout{
        font-size:0.7rem;
    }  
    button{font-size:0.7rem;
    } 

    .itemsss{
        font-size:0.7rem;
        height: 50vh;
        width: 150px;
        border-radius: 20px;
    }
    .allitems{
        gap: 20px;
    grid-template-columns: auto;
}
.emptycart button{
    font-size:0.6rem;
        top:10vh;
        left:0vw;
        width: 60px;
        background-color: rgb(255, 255, 255);
    }
}
@media only screen and (min-width:300px) and (max-width:599px)
{
    .itemsandcheckout{
        font-size:0.6rem;
    }  
    button{font-size:0.6rem;
    } 

    .itemsss{
        font-size:0.6rem;
        height: 40vh;
        width: 120px;
        border-radius: 15px;
        
    }
    .itemsss img{
        height:60%
    }
    .allitems{
        margin-left: 5vw;
        gap: 20px;
    grid-template-columns: auto;
}
.emptycart button{
    font-size:0.6rem;
        top:3.5vh;
        right:25vw;
        width: 60px;
        background-color: rgb(255, 255, 255);
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

       <div class="itemsandcheckout">



        <form action="../managecart/8managecart.php" method="post" target="header">
            <input type="hidden" name="emptycart">
            <div class="emptycart">
            <button type="submit">Empty Cart</button>
            </div>
        </form>




           <div class="allitems">
<?php

$conn = mysqli_connect('localhost','root','') or die(mysali_error());
mysqli_select_db($conn,'electronicshop') or die(mysqli_error());
// if($conn){
//     echo "connection Successful ";
// }
// else{
//     echo "no connection";
// }
// if(isset($_REQUEST['submit']));

$sql="SELECT  `ItemName`, `imageaddress`, `OriginalPrice`, `DiscountPrice`,`Quantity`FROM `incart`";

 


$result=mysqli_query($conn,$sql);


$num=mysqli_num_rows($result);


if($num==0){
    echo "No items Added";
}
else
{
    while($product=mysqli_fetch_assoc($result))
    {  ?>

        <div class="itemsss">
        <img src="<?php echo $product['imageaddress'] ?>" alt="not available"><div><?php echo $product['ItemName'] ?><br><span><small><s>&#8377 <?php echo $product['OriginalPrice'] ?>  </s></small></span><span>&#8377 <?php echo $product['DiscountPrice'] ?></span></div>
        <div>Qty : <?php echo $product['Quantity']; ?> </div>
        <div>Total : <?php echo $product['DiscountPrice']*$product['Quantity']; ?></div>
        <?php $GLOBALS['total']+=$product['DiscountPrice']*$product['Quantity'];
              $GLOBALS['saved']+=$product['OriginalPrice']*$product['Quantity'];
        ?>
    </div>
        <!-- </div> -->
<!-- now i was trying to increase or decrease the cart value and change it in database accordingly -->
        <?php
    }
}

?>
</div>
<div class="checkout">
    <div>
<?php
echo "Grand Total : <span>&#8377</span> ". $GLOBALS['total'];
echo "<br>";
echo "You Saved : <span>&#8377</span> ". $GLOBALS['saved']-$GLOBALS['total'];
?>
</div>
<button>CHECKOUT</button>
</div>
</div>
<script src="Header.js"></script>
</body>
</html>