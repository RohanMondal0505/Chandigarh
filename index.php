<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chandigarh Traveling</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- Css -->
    <link rel="stylesheet" href="./css/owl.carousel.css">
    <link rel="stylesheet" href="./css/owl.theme.default.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- Main Container Start -->
    <div class="main-container">

        <!-- COVID-19 Pop-Up Start-->
        <!-- x COVID-19 Pop-Up End x-->



        <!-- Login Form Start -->

        <!-- x Login Form Start x -->



        <!-- Header Section Start -->
        <?php include "./pages/header.php" ?>
        <!-- x Header Section End x -->



        <!-- Main Section Start -->
        <main>
            <div class="row-1">
                <div class="headline">
                    <a href="#" class="1">Latest Info</a>
                    <a class="2">Tourist Guide</a>
                    <a href="https://www.google.com/maps/place/Chandigarh/@30.7896625,76.4429482,10z/data=!4m5!3m4!1s0x390fed0be66ec96b:0xa5ff67f9527319fe!8m2!3d30.7333148!4d76.7794179" target="_blank">Google Map</a>
                    <a href="./about chnd.php" target="_blank">About Chandigarh</a>
                </div>

                <div class="box box-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, debitis?
                </div>
                <div class="box box-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, debitis?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, debitis?
                </div>
                <div class="box box-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, debitis?
                </div>
                <div class="box box-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, debitis?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, debitis?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, debitis?
                </div>
            </div>

            <div class="row-2">
                <div class="background"></div>
                <div class="top">
                    <ul>
                        <li onclick="clickToShow(0);">
                            <i class="fas fa-building"></i>Hotels
                        </li>
                        <li onclick="clickToShow(1);">
                            <i class="fa fa-plane"></i>Flight
                        </li>
                        <li onclick="clickToShow(2);">
                            <i class="fas fa-train"></i>Train
                        </li>
                        <li onclick="clickToShow(3);">
                            <i class="fas fa-bus"></i>Bus
                        </li>
                        <li onclick="clickToShow(4);">
                            <i class="fas fa-car"></i>Cab/Car
                        </li>
                        <li onclick="clickToShow(5);">
                            <i class="fas fa-utensils"></i>Food
                        </li>
                    </ul>
                </div>
                <div class="bottom">
                    <div class="tab tab-1">
                        <form class="innerTab" id="hotel-form" action="" method="get">
                            <div class="details hotel-1">
                                <label for="hName">Destination/Hotel Name</label>
                                <select name="hName" id="hName">
                                    <option value="" selected disabled>Select One</option>
                                    <option value="option1">Option1</option>
                                    <option value="option2">Option2</option>
                                    <option value="option3">Option3</option>
                                    <option value="option4">Option4</option>
                                    <option value="option5">Option5</option>
                                </select>
                            </div>

                            <div class="details hotel-2">
                                <div class="date3">
                                    <label for="hDateFrom">Check-in</label>
                                    <input type="date" name="hDateFrom" id="hDateFrom">
                                </div>
                                <div class="date3">
                                    1 Night
                                </div>
                                <div class="date3">
                                    <label for="hDateTo">Check-out</label>
                                    <input type="date" name="hDateTo" id="hDateTo">
                                </div>
                            </div>

                            <div class="details hotel-3">
                                <label for="hRoomsFake">Rooms and Guests</label>
                                <input type="text" id="hRoomFake" value="1 Room, 1 Guest" readonly>
                                <input type="hidden" name="hRoom" id="hRoom" value="">
                                <input type="hidden" name="hGuest" id="hGuest" value="">
                                <i class="fas fa-chevron-down"></i>
                                <div class="roomCountMainDiv">
                                    <div class="roomCount">
                                        <p>Room</p>
                                        <p>
                                            <i onclick="clickMinusR()" class="fas fa-minus-circle"></i>
                                            <span id="rPlusCount">1</span>
                                            <i onclick="clickPlusR()" class="fas fa-plus-circle"></i>
                                        </p>
                                    </div>
                                    <div class="roomCount">
                                        <p>Guest</p>
                                        <p>
                                            <i onclick="clickMinusG()" class="fas fa-minus-circle"></i>
                                            <span id="gPlusCount">1</span>
                                            <i onclick="clickPlusG()" class="fas fa-plus-circle"></i>
                                        </p>
                                    </div>
                                    <div class="roomCount">
                                        <span id="roomDone">Done</span>
                                    </div>
                                </div>
                            </div>

                            <div class="details hotel-4" onclick="document.getElementById('hotel-form').submit();">
                                <i class="fas fa-search"></i>
                            </div>
                        </form>
                    </div>
                    <div class="tab tab-2">
                        <form class="innerTab" id="flight-form" action="" method="get">
                            <div class="details flight-1">
                                <div class="fLocation">
                                    <label for="fForm">From</label>
                                    <select name="fForm" id="fForm">
                                        <option value="" selected disabled>Select One</option>
                                        <option value="option1">Option1</option>
                                        <option value="option2">Option2</option>
                                        <option value="option3">Option3</option>
                                        <option value="option4">Option4</option>
                                        <option value="option5">Option5</option>
                                    </select>
                                </div>
                                <div class="fLocation">
                                    <label for="fTo">TO</label>
                                    <select name="fTo" id="fTo">
                                        <option value="" selected disabled>Select One</option>
                                        <option value="option1">Option1</option>
                                        <option value="option2">Option2</option>
                                        <option value="option3">Option3</option>
                                        <option value="option4">Option4</option>
                                        <option value="option5">Option5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="details flight-2">
                                <label for="fDate">Depart</label>
                                <input type="date" name="fDate" id="fDate">
                            </div>
                            <div class="details flight-3">
                                <div class="f32">
                                    <p><span id="fCount">1</span>&nbsp;Passenger</p>
                                    <p>
                                        <i onclick="fightClick('-')" class="fas fa-minus-circle"></i>
                                        <span id="fCount2">1</span>
                                        <i onclick="fightClick('+')" class="fas fa-plus-circle"></i>
                                    </p>
                                    <input type="hidden" name="fPassenger" id="fPassenger" value="1">
                                </div>
                                <div class="f32">
                                    <select name="fClass" id="fClass">
                                        <option value="Economy" selected>Economy Class</option>
                                        <option value="Option-1">Option-1</option>
                                        <option value="Option-2">Option-2</option>
                                        <option value="Option-3">Option-3</option>
                                        <option value="Option-4">Option-4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="details flight-4" onclick="document.getElementById('flight-form').submit();">
                                <i class="fas fa-search"></i>
                            </div>
                        </form>
                    </div>
                    <div class="tab tab-3">
                        <form class="innerTab" id="train-form" action="" method="get">
                            <div class="details train-1">
                                <div class="tLocation">
                                    <label for="tForm">From</label>
                                    <select name="tForm" id="tForm">
                                        <option value="" selected disabled>Select One</option>
                                        <option value="option1">Option1</option>
                                        <option value="option2">Option2</option>
                                        <option value="option3">Option3</option>
                                        <option value="option4">Option4</option>
                                        <option value="option5">Option5</option>
                                    </select>
                                </div>
                                <div class="tLocation">
                                    <label for="tTo">TO</label>
                                    <select name="tTo" id="tTo">
                                        <option value="" selected disabled>Select One</option>
                                        <option value="option1">Option1</option>
                                        <option value="option2">Option2</option>
                                        <option value="option3">Option3</option>
                                        <option value="option4">Option4</option>
                                        <option value="option5">Option5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="details train-2">
                                <label for="tDate">Depart Date</label>
                                <input type="date" name="tDate" id="tDate">
                            </div>
                            <div class="details train-3">
                                <div class="f32">
                                    <p><span id="tCount">1</span>&nbsp;Passenger</p>
                                    <p>
                                        <i onclick="trainClick('-')" class="fas fa-minus-circle"></i>
                                        <span id="tCount2">1</span>
                                        <i onclick="trainClick('+')" class="fas fa-plus-circle"></i>
                                    </p>
                                    <input type="hidden" name="tPassenger" id="tPassenger" value="1">
                                </div>
                                <div class="f32">
                                    <select name="tClass" id="tClass">
                                        <option value="SL" selected>SL Class</option>
                                        <option value="Option-1">Option-1</option>
                                        <option value="Option-2">Option-2</option>
                                        <option value="Option-3">Option-3</option>
                                        <option value="Option-4">Option-4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="details train-4" onclick="document.getElementById('train-form').submit();">
                                <i class="fas fa-search"></i>
                            </div>
                        </form>
                    </div>
                    <div class="tab tab-4">
                        <form class="innerTab" id="bus-form" action="" method="get">
                            <div class="details bus-1">
                                <div class="bLocation">
                                    <label for="bForm">From</label>
                                    <select name="bForm" id="bForm">
                                        <option value="" selected disabled>Select One</option>
                                        <option value="option1">Option1</option>
                                        <option value="option2">Option2</option>
                                        <option value="option3">Option3</option>
                                        <option value="option4">Option4</option>
                                        <option value="option5">Option5</option>
                                    </select>
                                </div>
                                <div class="bLocation">
                                    <label for="bTo">TO</label>
                                    <select name="bTo" id="bTo">
                                        <option value="" selected disabled>Select One</option>
                                        <option value="option1">Option1</option>
                                        <option value="option2">Option2</option>
                                        <option value="option3">Option3</option>
                                        <option value="option4">Option4</option>
                                        <option value="option5">Option5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="details bus-2">
                                <label for="bDate">Depart Date</label>
                                <input type="date" name="bDate" id="bDate">
                            </div>
                            <div class="details bus-3">
                                <div class="f32">
                                    <p><span id="bCount">1</span>&nbsp;Passenger</p>
                                    <p>
                                        <i onclick="busClick('-')" class="fas fa-minus-circle"></i>
                                        <span id="bCount2">1</span>
                                        <i onclick="busClick('+')" class="fas fa-plus-circle"></i>
                                    </p>
                                    <input type="hidden" name="bPassenger" id="bPassenger" value="1">
                                </div>
                                <div class="f32">
                                    <select name="bClass" id="bClass">
                                        <option value="AC" selected>AC Class</option>
                                        <option value="Option-1">Option-1</option>
                                        <option value="Option-2">Option-2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="details bus-4" onclick="document.getElementById('bus-form').submit();">
                                <i class="fas fa-search"></i>
                            </div>
                        </form>
                    </div>
                    <div class="tab tab-5">
                        <form class="innerTab" id="car-form" action="" method="get">
                            <div class="details car-1">
                                <div class="cLocation">
                                    <label for="cForm">From</label>
                                    <select name="cForm" id="cForm">
                                        <option value="" selected disabled>Select One</option>
                                        <option value="option1">Option1</option>
                                        <option value="option2">Option2</option>
                                        <option value="option3">Option3</option>
                                        <option value="option4">Option4</option>
                                        <option value="option5">Option5</option>
                                    </select>
                                </div>
                                <div class="cLocation">
                                    <label for="cTo">TO</label>
                                    <select name="cTo" id="cTo">
                                        <option value="" selected disabled>Select One</option>
                                        <option value="option1">Option1</option>
                                        <option value="option2">Option2</option>
                                        <option value="option3">Option3</option>
                                        <option value="option4">Option4</option>
                                        <option value="option5">Option5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="details car-2">
                                <label for="cDate">Depart Date</label>
                                <input type="date" name="cDate" id="cDate">
                            </div>
                            <div class="details car-3">
                                <div class="f32">
                                    <p><span id="cCount">1</span>&nbsp;Passenger</p>
                                    <p>
                                        <i onclick="carClick('-')" class="fas fa-minus-circle"></i>
                                        <span id="cCount2">1</span>
                                        <i onclick="carClick('+')" class="fas fa-plus-circle"></i>
                                    </p>
                                    <input type="hidden" name="cPassenger" id="cPassenger" value="1">
                                </div>
                                <div class="f32">
                                    <select name="cClass" id="cClass">
                                        <option value="AC" selected>AC Class</option>
                                        <option value="Non Ac">Non Ac</option>
                                    </select>
                                </div>
                            </div>
                            <div class="details car-4" onclick="document.getElementById('car-form').submit();">
                                <i class="fas fa-search"></i>
                            </div>
                        </form>
                    </div>
                    <div class="tab tab-6">
                        <form class="innerTab" id="food-form" action="" method="get">
                            <div class="details food-1"></div>
                            <div class="details food-2"></div>
                            <div class="details food-3"></div>
                            <div class="details food-4" onclick="document.getElementById('food-form').submit();">
                                <i class="fas fa-search"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row-3">
                <div class="blogHeading">
                    <div class="blogH-1">
                        <div class="aniBar"></div>
                        <span onclick="clickToOpenBlogTab(0)">Blogs</span>
                        <span onclick="clickToOpenBlogTab(1)">
                        <?php
                        if(isset($_SESSION['use'])){
                            echo 'My Blogs';
                        }
                        ?>
                        </span>
                    </div>
                    <div class="blogH-2">
                    <?php
                        if(isset($_SESSION['use'])){
                            echo '<a href="#"><i class="fa fa-plus-square"></i>Add</a>';
                        }                            
                    ?>
                    </div>
                </div>
                <div class="blogMainContainer">
                    <div class="blogContainer blog-1">
                        <div class="innerBlogContainer">
                            <a href="#" class="blog">
                                <div class="blogImg">
                                    <img src="./images/1.jpg" alt="">
                                </div>
                                <div class="blogData">
                                    <h1>1st Heading <span>12/12/2020</span></h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, veritatis. Lorem
                                        ipsum dolor sit amet consectetur adipisicing...</p>
                                    <div>
                                        <span><strong>by</strong> Xyz Abc</span>
                                        <img src="https://picsum.photos/id/237/50/60" alt="Profile Picture">
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="blog">
                                <div class="blogImg">
                                    <img src="./images/2.jpg" alt="">
                                </div>
                                <div class="blogData">
                                    <h1>1st Heading <span>12/12/2020</span></h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, veritatis. Lorem
                                        ipsum dolor sit amet consectetur adipisicing...</p>
                                    <div>
                                        <span><strong>by</strong> Xyz Abc</span>
                                        <img src="https://picsum.photos/id/237/50/60" alt="Profile Picture">
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="blog">
                                <div class="blogImg">
                                    <img src="./images/3.jpg" alt="">
                                </div>
                                <div class="blogData">
                                    <h1>1st Heading <span>12/12/2020</span></h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, veritatis. Lorem
                                        ipsum dolor sit amet consectetur adipisicing...</p>
                                    <div>
                                        <span><strong>by</strong> Xyz Abc</span>
                                        <img src="https://picsum.photos/id/237/50/60" alt="Profile Picture">
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="blog">
                                <div class="blogImg">
                                    <img src="./images/4.jpg" alt="">
                                </div>
                                <div class="blogData">
                                    <h1>1st Heading <span>12/12/2020</span></h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, veritatis. Lorem
                                        ipsum dolor sit amet consectetur adipisicing...</p>
                                    <div>
                                        <span><strong>by</strong> Xyz Abc</span>
                                        <img src="https://picsum.photos/id/237/50/60" alt="Profile Picture">
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="blog">
                                <div class="blogImg">
                                    <img src="./images/1.jpg" alt="">
                                </div>
                                <div class="blogData">
                                    <h1>1st Heading <span>12/12/2020</span></h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, veritatis. Lorem
                                        ipsum dolor sit amet consectetur adipisicing...</p>
                                    <div>
                                        <span><strong>by</strong> Xyz Abc</span>
                                        <img src="https://picsum.photos/id/237/50/60" alt="Profile Picture">
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="blog">
                                <div class="blogImg">
                                    <img src="./images/2.jpg" alt="">
                                </div>
                                <div class="blogData">
                                    <h1>1st Heading <span>12/12/2020</span></h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, veritatis. Lorem
                                        ipsum dolor sit amet consectetur adipisicing...</p>
                                    <div>
                                        <span><strong>by</strong> Xyz Abc</span>
                                        <img src="https://picsum.photos/id/237/50/60" alt="Profile Picture">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <span class="moreBtn">
                            <a href="#">
                                More <i class="fas fa-arrow-right"></i>
                            </a>
                        </span>
                    </div>
                    <div class="blogContainer blog-2">
                        <div class="innerBlogContainer">
                            <a href="#" class="blog">
                                <div class="blogImg">
                                    <img src="./images/1.jpg" alt="">
                                </div>
                                <div class="blogData">
                                    <h1>1st Heading <span>12/12/2020</span></h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, veritatis. Lorem
                                        ipsum dolor sit amet consectetur adipisicing...</p>
                                    <div>
                                        <span>by Xyz Abc</span>
                                        <img src="https://picsum.photos/id/237/50/60" alt="Profile Picture">
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="blog">
                                <div class="blogImg">
                                    <img src="./images/2.jpg" alt="">
                                </div>
                                <div class="blogData">
                                    <h1>1st Heading <span>12/12/2020</span></h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, veritatis. Lorem
                                        ipsum dolor sit amet consectetur adipisicing...</p>
                                    <div>
                                        <span>by Xyz Abc</span>
                                        <img src="https://picsum.photos/id/237/50/60" alt="Profile Picture">
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="blog">
                                <div class="blogImg">
                                    <img src="./images/3.jpg" alt="">
                                </div>
                                <div class="blogData">
                                    <h1>1st Heading <span>12/12/2020</span></h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, veritatis. Lorem
                                        ipsum dolor sit amet consectetur adipisicing...</p>
                                    <div>
                                        <span>by Xyz Abc</span>
                                        <img src="https://picsum.photos/id/237/50/60" alt="Profile Picture">
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="blog">
                                <div class="blogImg">
                                    <img src="./images/4.jpg" alt="">
                                </div>
                                <div class="blogData">
                                    <h1>1st Heading <span>12/12/2020</span></h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, veritatis. Lorem
                                        ipsum dolor sit amet consectetur adipisicing...</p>
                                    <div>
                                        <span>by Xyz Abc</span>
                                        <img src="https://picsum.photos/id/237/50/60" alt="Profile Picture">
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="blog">
                                <div class="blogImg">
                                    <img src="./images/3.jpg" alt="">
                                </div>
                                <div class="blogData">
                                    <h1>1st Heading <span>12/12/2020</span></h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, veritatis. Lorem
                                        ipsum dolor sit amet consectetur adipisicing...</p>
                                    <div>
                                        <span>by Xyz Abc</span>
                                        <img src="https://picsum.photos/id/237/50/60" alt="Profile Picture">
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="blog">
                                <div class="blogImg">
                                    <img src="./images/1.jpg" alt="">
                                </div>
                                <div class="blogData">
                                    <h1>1st Heading <span>12/12/2020</span></h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, veritatis. Lorem
                                        ipsum dolor sit amet consectetur adipisicing...</p>
                                    <div>
                                        <span>by Xyz Abc</span>
                                        <img src="https://picsum.photos/id/237/50/60" alt="Profile Picture">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <span class="moreBtn">
                            <a href="#">
                                More <i class="fas fa-arrow-right"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>




            <!-- <div class="row-33">
                <div class="owl-carousel owl-theme">
                    <div class="item item1">
                        <img src="./images/I Love Chandigarh.jpg" alt="I Love Chandigarh">
                    </div>
                    <div class="item item2">
                        <img src="./images/chandigarh-slider (1).jpg" alt="">
                    </div>
                    <div class="item item3">
                        <img src="./images/slide-image-1.jpg" alt="">
                    </div>
                    <div class="item item4">
                        <img src="./images/chandigarh-slider.jpg" alt="">
                    </div>
                </div>
            </div> -->

        </main>
        <!-- x Main Section End x -->



        <!-- Footer Section Start -->
        <footer>
        </footer>
        <!-- x Footer Section End x -->

    </div>
    <!-- x Main Container End x -->



    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./javascript/owl.carousel.min.js"></script>
    <script src="./javascript/main.js"></script>
    <script src="./javascript/log.js"></script>

</body>

</html>