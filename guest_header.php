<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <p> new <a href="login.php">login</a> | <a href="register.php">register</a> </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">Breaking Books !</a>

         <nav class="navbar">
            <a href="home_guest.php">home</a>
            <a href="about_guest.php">about</a>
            <a href="shop_guest.php">shop</a>
           
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_guest.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> </a>
         </div>

         <div class="user-box">
            <a href="login.php" class="delete-btn">login</a>
         </div>
      </div>
   </div>

</header>