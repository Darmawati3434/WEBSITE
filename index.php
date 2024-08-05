<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beranda</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>


<?php include 'components/user_header.php'; ?>



<section class="hero">

   <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <span>Pesan Online</span>
               <h3>Kopi Espresso Late</h3>
               <!-- <a href="menu.html" class="btn">Lihat Menu</a> -->
            </div>
            <div class="image">
               <img src="images/Kopi Espresso Late.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Pesan Online</span>
               <h3>Kue coklat</h3>
               <!-- <a href="menu.html" class="btn">Lihat Menu</a> -->
            </div>
            <div class="image">
               <img src="images/Kue coklat.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Pesan Online</span>
               <h3>Kopi Coklat putih</h3>
               <!-- <a href="menu.html" class="btn">Lihat Menu</a> -->
            </div>
            <div class="image">
               <img src="images/Kopi Coklat putih.png" alt="">
            </div>
         </div>

                  <div class="swiper-slide slide">
            <div class="content">
               <span>Pesan Online</span>
               <h3>Sandwich Sayuran</h3>
               <!-- <a href="menu.html" class="btn">Lihat Menu</a> -->
            </div>
            <div class="image">
               <img src="images/Sandwich Sayuran.png" alt="">
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="category">

   <h1 class="title">Kategori Menu</h1>

   <div class="box-container">

      <a href="category.php?category=Nugget Roti" class="box">
         <img src="images/coffee.png" alt="">
         <h3>Kopi Espresso Late</h3>
      </a>
      <a href="category.php?category=Kopi Seduh" class="box">
         <img src="images/cat-4.png" alt="">
         <h3>Kue coklat</h3>
      </a>

      <a href="category.php?category=Kopi Bubuk" class="box">
         <img src="images/coffee-beans.png" alt="">
         <h3>Kopi Coklat putih</h3>
      </a>

      <a href="category.php?category=Kopi Bubuk" class="box">
         <img src="images/cat-1.png" alt="">
         <h3>Sandwich Sayuran</h3>
      </a>

   </div>

</section>


      <?php
         $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
         $select_products->execute();
         if($select_products->rowCount() > 0){
            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
      ?>
      <!--<form action="" method="post" class="box">
         <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
         <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
         <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
         <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
         <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
         <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
         <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
         <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
         <div class="name"><?= $fetch_products['name']; ?></div>
         <div class="flex">
            <div class="price"><span>$</span><?= $fetch_products['price']; ?></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
         </div>
      </form> -->
      <?php
            }
         }else{
         }
      ?>

   </div>

   <div class="more-btn">
      <a href="menu.php" class="btn">Lihat Semua</a>
   </div>

</section>


















<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>

</body>
</html>