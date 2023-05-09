<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/logo.png" alt="">
      </div>

      <div class="content">
         <h3>Kenapa harus disini?</h3>
         <p>Jika Anda seorang pecinta buku, mengunjungi toko buku online pasti patut dipertimbangkan. Toko buku online buka 24/7, yang berarti Anda dapat berbelanja buku kapan pun Anda mau dari kenyamanan rumah Anda sendiri. Mereka sering memiliki pilihan buku yang jauh lebih luas daripada toko batu bata dan mortir tradisional, sehingga Anda dapat menemukan hampir semua buku yang Anda cari. Selain itu, toko buku online sering kali menawarkan harga buku yang kompetitif, sehingga Anda dapat menghemat uang dibandingkan dengan membeli dari toko fisik.</p>
         <p>Selain itu, toko buku online biasanya memiliki ulasan pengguna yang dapat membantu Anda membuat keputusan tentang buku mana yang akan dibeli. Banyak dari mereka juga menggunakan algoritme untuk merekomendasikan buku berdasarkan riwayat penelusuran dan pembelian Anda, yang dapat membantu Anda menemukan buku baru yang mungkin tidak Anda temukan sebelumnya. Oleh karena itu, mengunjungi situs web toko buku online dapat menjadi pengalaman yang nyaman dan bermanfaat bagi para pecinta buku.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<!-- <section class="reviews">

   <h1 class="title">review pelanggan</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/orang11.jpg" alt="">
         <p>Bukunya sangat membantu aku untuk mencari referensi kerja.. buku nya sangat aman dan bebas dari iklan terimakasih Breaking Books.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Syahrul Ramadhana</h3>
      </div>

      <div class="box">
         <img src="images/orang2.jpg" alt="">
         <p>Bukunya sangat membantu aku untuk mencari referensi kerja.. buku nya sangat aman dan bebas dari iklan terimakasih Breaking Books.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rahmad Fitrianto</h3>
      </div>

      <div class="box">
         <img src="images/orang3.jpg" alt="">
         <p>Bukunya sangat membantu aku untuk mencari referensi kerja.. buku nya sangat aman dan bebas dari iklan terimakasih Breaking Books.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Albob</h3>
      </div>

      <div class="box">
         <img src="images/orang4.jpg" alt="">
         <p>Bukunya sangat membantu aku untuk mencari referensi kerja.. buku nya sangat aman dan bebas dari iklan terimakasih Breaking Books.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jidan</h3>
      </div>

      <div class="box">
         <img src="images/orang7.jpg" alt="">
         <p>Bukunya sangat membantu aku untuk mencari referensi kerja.. buku nya sangat aman dan bebas dari iklan terimakasih Breaking Books.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bella L</h3>
      </div>

      <div class="box">
         <img src="images/orang6.jpg" alt="">
         <p>Bukunya sangat membantu aku untuk mencari referensi kerja.. buku nya sangat aman dan bebas dari iklan terimakasih Breaking Books.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nabila</h3>
      </div>

   </div>

</section> -->

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/orang16.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Hikmat Darmawan</h3>
      </div>

      <div class="box">
         <img src="images/orang12.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Buya Hamka</h3>
      </div>

      <div class="box">
         <img src="images/orang15.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Tere Liye</h3>
      </div>

      <div class="box">
         <img src="images/orang1.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sohn Won-Pyong</h3>
      </div>

      <div class="box">
         <img src="images/orang14.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Teresa San</h3>
      </div>

      <div class="box">
         <img src="images/orang3.jpg" alt="">
         <div class="share">
            <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fid.pinterest.com%2Fpin%2F176836722856968314%2F&psig=AOvVaw0nsFnfU2eHzmZf5M1YAhC-&ust=1683724233598000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCOC1wdin6P4CFQAAAAAdAAAAABAE" target="_blank" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Albyob</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>