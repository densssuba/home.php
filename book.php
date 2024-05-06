<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>




    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css"/>

</head>
<body>
        <!-- header section start -->

        <section class="header">
            <a  class="logo">Azure Horizon Hotel.</a>

            <nav  class="navbar">
                <a href="home.php">home</a>
                <a href="about.php">about</a>
                <a href="package.php">package</a>
                <a href="food and beverage.php">food and beverage</a>
                <a href="book.php">book</a>
            </nav>
           
        </section>

        <!-- header section end -->

        <div class="heading" style="background:url(https://media.licdn.com/dms/image/C511BAQHMO-_xvBJgYQ/company-background_10000/0/1583195224024/lotte_hotels_and_resorts_cover?e=2147483647&v=beta&t=Xj7kQeCL9zTYl9wWh0R-btvq2N2ONz08uede4eRaXWk)no-repeat">
            <h1>BOOK</h1>
        </div>

        <!-- booking section start -->

        <section class="booking">
            <h1 class ="heading-title">ENJOY!!!</h1>

            <form action="book_form.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>room :</span>
                    <input type="number" placeholder="enter room number" name="room">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="text" placeholder="enter your number" name="phone">
                <div class="inputBox">
                    <span>email :</span>
                    <input type="text" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>location :</span>
                    <input type="text" placeholder="where are you from" name="location">
                </div>
                <div class="inputBox">
                    <span> guests :</span>
                    <input type="number"placeholder="how many guest" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">
            

        </section>

        <!-- booking section end -->