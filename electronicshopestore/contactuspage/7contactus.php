<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

<style>
    .contactestor{
        margin-top: 5vh;
        height: 40vh;
        background-size: cover;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color:rgba(0, 25, 80, 0.918) ;
        /* border: 10px solid blueviolet; */
    }
    .contactestor img{
        position: absolute;
        width: 100%;
        height: 60%;
        opacity: 0.3;
        z-index: -2;
    }

.mapfonaddress
    {    align-items: center;
         display:flex;
         flex-direction: row; 
         background-color: rgb(255, 255, 255);  
         justify-content: center;
         gap: 10px;
         background-color: rgba(6, 6, 122, 0.329);
         height:50vh;
         /* border: 10px solid yellow; */
    }
    .fonaddress{
             display: flex;
            flex-direction: row;
            height: 100%;
            width: 50%;
            /* border: 5px solid red; */
        }
.address,.fon{
    display: flex;
    flex-direction: column;
    justify-content:center;
    align-items: center;
    width:100%;
    height:100%;
    color: white;
    /* border: 10px solid red; */
    background-color: rgba(1, 26, 80, 0.507);
    border-radius: 50%;
}
.map{
    /* border: 5px solid salmon; */
    background-color: rgba(0, 25, 80, 0.507);
    /* width:30vw; */
    /* border-radius: 10%;  */
    height: 100%;
    width: 30%;
    display: flex;
    flex-direction: column;
    justify-content:space-around;
    align-items: center;
    border-radius: 50%;
}
.address i,.fon i,.map i{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;
    color: rgb(255, 255, 255);
}
.fa-map-marker-alt,.fa-phone-alt,.fa-address-card{
    display: flex;
    height: 50px;
    width: 50px;
    /* border:5px solid green; */
    background-color: rgba(0, 25, 80, 0.651);
    border-radius: 50%;

}
 /* text area and query submit part */

 textarea{
    background-color: rgba(0, 25, 80, 0.219);
    width:60vw;
    height:30vh;
    border-radius: 30px;
    border: 2px solid rgb(0, 30, 95);

        }

  .emailus{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
  }      

  .emailus button{
      margin-top: 10px;
      border: none;
      color: white;
      background-color: rgba(0, 25, 80, 0.918);
      height: 30px;
      width:60px;
      border-radius: 10px;
      margin-bottom: 10px;
  }
  .emailus button:hover{
      color: rgb(0, 0, 77);
      background-color: rgba(0, 104, 196, 0.473);
  }

iframe{
    width:80%;
    height:80%;
    border-radius: 50%; 
    border: 10px solid green;
}

.footer{
    display: flex;
    justify-content: center;
    height:10%;
    width:100%;
    background-color: rgb(0, 30, 95);;
    color: white;
    font-size:0.8rem
}


</style>
<link rel="stylesheet" href="../CSS ICONS/all.css">
<link rel="stylesheet" href="7contactus.css">
</head>
<body>
                        
                            <!-- navigation part -->
    <header id="header">
        <nav>
            <div id="head-cont">
          
      
                <div class="head-cont-child1">
            <div><i class="fab fa-erlang"></i></div>
            <div>-STORE</div>
            
             
   
                </div>
   
              
   
   
   
              <div id="head-cont-list" >
                  <ul id="head-cont-list-ul">
                      <li id="home"><a href="../Mainpage/2Main.php">Home</a></li>
                      <li id="about"><a href="#">About</a></li>
                      <!-- <li><a href="#">Back</a></li> -->
                      
                  </ul>
              </div>
   
           
            
   
       
   
   
   
               </div>
        </nav>
        <!-- for hamburger cross -->
        <!-- <button class="hamburg"onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
           <svg width="60" height="30" viewBox="0 0 100 100">
             <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
             <path class="line line2" d="M 20,50 H 80" />
             <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
           </svg>
         </button> -->
         <!-- for hamburger cross -->
   
       </header>
        
                            <!-- navigation part -->
    <div class="contactestor">
        <img src="contact-banner.jpg" alt="">
        <div><h1>CONTACT E-STORE (24 X 7)</h1></div>
        <div><h3>123456789</h3></div>
        <div><h4>While we are good with smoke signals,There are simpler ways for us to get in touch and answer your questions.</h4></div>
        
    </div>

    <div class="mapfonaddress">
        <div class="fonaddress">
        <div class="address">
            <i class="fas fa-address-card"></i>
            
            <div>Bangalore</div>
            <div>Bangalore,Bangalore</div>
            <div>Bangalore</div>
            <div>645746</div>
        </div>

        

        <div class="fon">
            <i class="fas fa-phone-alt"></i>
            <div>Office : 12345679</div>
            <div>fax : 12345</div>
            <div>Mob : 1234567899</div>
        </div>
    </div>
        <div class="map">
            <!-- <i class="fas fa-map-marker-alt"></i> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d497699.69832593104!2d77.63093949999997!3d12.953997400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1644131709078!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <div class="emailus">
        <div><h5>Post Your Query</h5></div>
        <textarea>
            Type your Query........
        </textarea>
        <button>POST</button>

    </div>
    <div class="footer">mail us @ : xyz@gmail.com </div>
</body>
</html>