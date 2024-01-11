<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Ice cream Website</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- lightgallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <section class="header">

        <a href="#" class="logo"> <i class="fas fa-ice-cream"></i>Amanda Ice Cream </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
<!-- header -->
    <!-- home section -->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(images/header-1.png) no-repeat;">
                    <div class="content">
                        <h3>Temukan Ice Cream Favoritmu Disini!</h3>
                        <a href="#" class="btn">Mulai</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/header-2.png) no-repeat;">
                    <div class="content">
                        <h3>Temukan Ice Cream Favoritmu Disini!</h3>
                        <a href="#" class="btn">Mulai</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/header-3.png) no-repeat;">
                    <div class="content">
                        <h3>Temukan Ice Cream Favoritmu Disini!</h3>
                        <a href="#" class="btn">Mulai</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>


        </div>

    </section>

    <!-- home section -->

    <!-- about us -->

    <section class="about" id="about">

        <h1 class="heading">About Us</h1>

        <div class="row">

            <div class="image">
                <img src="images/WhatsApp Image 2023-11-07 at 20.28.13.jpeg" alt="">
            </div>
    
            <div class="content">
                <h3>Es Cream Spesial Untuk Anda!</h3>
                <p>Es krim memang tidak dapat bertahan lama di suhu yang panas apalagi setelah es krim tersebut dibuka. Tentunya, es krim tersebut akan cepat meleleh bukan? Ya, begitu dengan waktu dalam kehidupan manusia.</p>
                <p>Waktu memang tidak terasa selalu cepat berlalu ya, begitu juga manusia ketika lahir ke dunia. Tanpa terasa, kita perlahan-lahan 'meleleh' dalam waktu yang cepat berlalu. Jadi, selalu manfaatkan waktu dan kesempatanmu dengan baiki ya</p>
            </div>

        </div>

    </section>

    <!-- about us -->

    <!-- menu -->

    <section class="menu" id="menu">

        <h1 class="heading"> Menu</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/menu-1.png" alt="">
                </div>
                <div class="content">
                    <h3 class="title">ice cream strawberry</h3>
                    <div class="price">Rp. 20.000 <span>23.000</span></div>
                    <a href="order.php">Order</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-2.png" alt="">
                </div>
                <div class="content">
                    <h3 class="title"> ice cream vanilla</h3>
                    <div class="price">Rp. 18.000 <span>20.000</span></div>
                    <a href="order.php">Order</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-3.png" alt="">
                </div>
                <div class="content">
                    <h3 class="title">ice cream blueberry</h3>
                    <div class="price">Rp. 23.000<span>25.000</span></div>
                    <a href="order.php">Order</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-4.png" alt="">
                </div>
                <div class="content">
                    <h3 class="title"> ice cream lemon</h3>
                    <div class="price">Rp. 15.000<span>15.500</span></div>
                    <a href="order.php">Order</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-5.png" alt="">
                </div>
                <div class="content">
                    <h3 class="title">ice cream plum</h3>
                    <div class="price">Rp. 18.000<span>19.000</span></div>
                    <a href="order.php">Order</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-6.png" alt="">
                </div>
                <div class="content">
                    <h3 class="title">ice cream raspberry</h3>
                    <div class="price">Rp. 26.000 <span>19.000</span></div>
                    <a href="order.php">Order</a>
                </div>
            </div>

        </div>

    </section>

    <!-- menu -->

    <!-- footer -->

    <section class="footer">

        <div class="icons-container">

            <div class="icons">
                <i class="fas fa-map"></i>
                <h3>Alamat Kami</h3>
                <p>Jalan A.R Hakim <br>
                    Nomor 23 <br>
                    Tegal Kota</p>
            </div>

            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>Nomor Tlp</h3>
                <p>+6285728325976</p>
                <p>+6285728325976</p>
            </div>

            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <a href="#" class="link">amandaajah03@gmail.com</a>
            </div>

            <div class="icons">
                <i class="fas fa-clock"></i>
                <h3>Buka</h3>
                <p>Senin-Jumat: 08:00 - 18:00 <br> Sabtu-Minggu: 09:00 - 20:00</p>
            </div>

        </div>

        <div class="share">
            <a href="https://instagram.com/deamanda_ptri?igshid=MWwxaGh3ZG1wbTRxeA==" class="fab fa-instagram"></a>
        </div>

        <div class="credit">created by <span>Dea Amanda Putri</span> | all right reserved!</div>

    </section>

        
    <!-- swiper -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- lightgallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    
    <!-- custom js -->
    <script src="js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>

</body>
</html>    