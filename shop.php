<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

$sortby = 'name';
$sorttype = 'asc';

// jika ada request sorting dari pengguna
if(isset($_GET['sort'])){
    $sortby = $_GET['sortby'];
    $sorttype = $_GET['sorttype'];
}

// query untuk mengambil data produk dari database dengan urutan yang diinginkan
$select_products = mysqli_query($conn, "SELECT * FROM `products` ORDER BY $sortby $sorttype") or die('query failed');

// tampilkan data produk yang sudah diurutkan
if(mysqli_num_rows($select_products) > 0){
    while($fetch_products = mysqli_fetch_assoc($select_products)){
        // kode untuk menampilkan data produk
    }
} else {
    echo '<p class="empty">tidak ada produk ditambahkan!</p>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shop</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<style>
   label 
{font-size: 20px

}
</style>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>our shop</h3>
   <p> <a href="index.php">home</a> / shop </p>
</div>

<section class="products">

   <h1 class="title">Produk terbaru</h1>
   <form action="" method="get" style="margin-left: 900px;">
    <label for="sortby">Urutkan berdasarkan:</label>
    <select name="sortby" id="sortby">
        <option value="name" <?php if($sortby == 'name') echo 'selected'; ?>>Nama</option>
        <option value="price" <?php if($sortby == 'price') echo 'selected'; ?>>Harga</option>
    </select>
    <select name="sorttype" id="sorttype">
        <option value="asc" <?php if($sorttype == 'asc') echo 'selected'; ?>>Ascending</option>
        <option value="desc" <?php if($sorttype == 'desc') echo 'selected'; ?>>Descending</option>
    </select>
    <button type="submit" name="sort">Urutkan</button>
</form>
<br>
<br>
   <div class="box-container">
<!-- form untuk memilih opsi sorting -->

 
<?php
   // cek apakah ada request untuk melakukan sorting
if(isset($_GET['sort'])){
   $sortby = $_GET['sortby'];
   $sorttype = $_GET['sorttype'];

   // query untuk mengambil data dari tabel products dan diurutkan berdasarkan kolom yang dipilih
   $query = "SELECT * FROM `products` ORDER BY `$sortby` $sorttype";
}else{
   // jika tidak ada request sorting, tampilkan semua data produk tanpa sorting
   $query = "SELECT * FROM `products`";
}

// eksekusi query
$select_products = mysqli_query($conn, $query) or die('query failed');

// tampilkan data produk
if(mysqli_num_rows($select_products) > 0){
   while($fetch_products = mysqli_fetch_assoc($select_products)){
?>
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
   </form>
<?php
   }
}else{
   echo '<p class="empty">tidak ada produk ditambahkan!</p>';
}
?>

   </div>

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>