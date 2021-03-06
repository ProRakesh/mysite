<?php
$page='book';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" />
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <script src="/js/validation.js"></script>

    <script>
        jQuery(function($){

$('#date').datepicker();
});


        </script>
          
    </script>

    <link rel="stylesheet" href="/css/style.css">


    <title>Aanjanacabs</title>
</head>

<body>

   


<div class="headerbook">



<nav class="navbar navbar-expand-xl navbar-dark fixed-top " id="navbar"
            style="background-color: rgba(0,0,0,0.8); ">
            <a class="navbar-brand animated slideInDown font-weight-bold" style="   color:yellow; text-transform: uppercase; padding-left: 10%;
            font-family: 'Patua One', cursive;" href="/index.php">            <i><img src="img/logo.png" style="width:6rem;"></i>
</a>
            <button class="navbar-toggler" style="color: black;" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon icon-bar " style="color: black; transition: 0.5 all;"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav  animated slideInDown  ml-auto p-1">
                    <li class="nav-item <?php if($page=='home'){echo 'active';} ?>">
                        <a class="navdsg" style="text-decoration: none;" class="nav-link" href="/index.php">Home </a>
                    </li>

                    <li class="nav-item">
                        <a class="navdsg" style="text-decoration: none;" class="nav-link" href="about.php">About </a>
                    </li>

                    <li class="nav-item">
                        <a class="navdsg" style="text-decoration: none;" class="nav-link" href="service.php">Services
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="navdsg" style="text-decoration: none;" class="nav-link" href="contactus.php">Contact us
                        </a>
                    </li>
                    <li class=" nav-item <?php if($page=='book'){echo 'active';} ?>">
                        <a class="navdsg" style="text-decoration: none;" class="nav-link" href="Booknow.php">Book now </a>
                    </li>






                </ul>

            </div>

        </nav>


<section class="maincall">
         <div class="container">
        <div class="row">
            <div class=" callus d-block m-auto text-center col-sm-10 col-10">
                <h1 >Call us 24/7</h1>

            </div>
</div>
<div class="row">

            <div class=" callus col-sm-10 col-10 d-clock m-auto text-center">
            <h1><i class="fa fa-phone"></i>+(91)9414294262 </h1> 

            </div>

</div>
          <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 col-10 d-block m-auto">
                <h5 class="rent-text "> For any query related to booking and car renteal</h5>
            </div>
            </div>
        
</div>          


    </section>
 <!-- book part  -->

 <section class="bookcars text-center" id="bookcar">
        <div class="container bookcar">
            <h1 id="book">BOOK cab online</h1>
            <p>easy and fast booking</p>
        </div>
        <form action="/bookcab.php" name="form" onsubmit="return bookvalidation()"   method="POST">
            <div class="container">
                <div class="row">
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10 offset-1 p-1 d-block m-auto">

                        <input type="text" name="Name" class="form-control" id="user" placeholder="Name"  autocomplete="off">

                    </div>
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10  offset-1 p-1 d-block m-auto">
                        <fieldset>
                            <input type="email" name="email"class="form-control" id="mail" placeholder="Email" autocomplete="off">
                        </fieldset>
                    </div>
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10  offset-1 p-1 d-block m-auto">
                        <fieldset>
                            <input type="text" name="pmobile" id="phone" placeholder="Mobile number">
                            
                        </fieldset>

                    </div>




                </div>
                <div class="row">

                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10  offset-1  p-1 d-block m-auto">
                        <fieldset>
                            <input type="text" name="pickup" id="pickup" placeholder="Pickup Point">
                        </fieldset>

                    </div>
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10   offset-1 p-1 d-block m-auto">
                        <fieldset>
                            <input type="text" name="date" id="date" placeholder="Date" >
                        </fieldset>
                    </div>
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10  offset-1 p-1  d-block m-auto">
                      
                        <fieldset>
                            <input type="time" name="time" placeholder=" Time" id="time" class="timepicker">
                        </fieldset>

                    </div>




                </div>
                <div class="row">

                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10 offset-1  p-1 d-block m-auto">
                       
                        <fieldset>
                            <input type="number" name="passage" id="passage" placeholder="Total Passanger">
                        </fieldset>
                    </div>
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10 offset-1  p-1 d-block m-auto">
                        <fieldset>
                            <select name="cars" id="cars">
                                <option value="select"> Select Car<i></option>
                                <option value="Swift Dzire">Swift Dzire</option>
                                <option value="Toyota Etios">Toyota Etios</option>

                                <option value="Innova">Innova</option>
                                <option value="Crysta">Crysta</option>
                                <option value="Tovera">Tovera</option>
                                <option value="Tempo Travellor">Tempo Travellor</option>



                            </select>
                        </fieldset>


                    </div>
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10 offset-1 p-1 d-block m-auto">
                        <fieldset>
                            <select name="req" id="req">
                                <option value="required Car"> Required Car</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5"> 5</option>
                                <option value="More Then 5">More Then 5</option>



                            </select>
                        </fieldset>

                    </div>




                </div>
                <div class="row">
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10 offset-1 p-1 d-block m-auto">

                    <fieldset>
                        <select name="trip" id="trip">
                            <option value="Trip"> Select Trip</option>
                            <option value="One Way">One Way</option>
                            <option value="Two Way">Two Way</option>

                            <option value=" Tour Package"> Tour Package</option>
                           



                        </select>
                    </fieldset>
                </div>

                 
                    <div class=" form-group col-lg-8 col-md-8 col-sm-10 col-10 offset-1 p-1 d-block m-auto">
                        
                    
                        <fieldset>
                            <textarea type="textarea" name="message" placeholder="Message"></textarea>
                        </fieldset>



                    </div>
                    <div class="text-center col-sm-12 col-12">
                        <input type="submit" name="submit" class="bookcabs btn" value="Book now">
                    </div>



                </div>

            </div>
        </form>
    </section>
    <!-- book part end  -->
 
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="inner-footer ">
                    <div class="footer-section  col-lg-4 col-md-6 col-12 aboutfoot">
                        <h1>About us</h1>
                        <p> We provide driven A/C and non-A/C Cabs at the best price.
                            Our Drivers are well-mannered and courteous in their interactions
                            and have thorough knowledge of the local routes and travel destinations.
                            We provide a complete and reliable cab services which make your journey enjoyable.We provide
                            services 24*7 for your cab.</p>
                    </div>
                    <div class="footer-section col-lg-4 col-md-6 col-12 link">

                        <h1>Quick links </h1>
                        <ul>
                            <a style="text-decoration: none;" href="../patelcabs/index.php">
                                <li>Home</li>
                            </a>
                            <a style="text-decoration: none;" href="#about">
                                <li>About us</li>
                            </a>
                            <a style="text-decoration: none;" href="#choose">
                                <li>services</li>
                            </a>
                            <a style="text-decoration: none;" href="#contactus">
                                <li>contact us</li>
                            </a>
                            <a style="text-decoration: none;" href="#bookcar">
                                <li>book cab</li>
                            </a>
                        </ul>



                    </div>
                    <div class="footer-section  col-lg-4 col-md-6 col-12 adress">
                        <h1> Address</h1>
                        <ul>

                            <li> <i class="fa fa-map-marker"></i> 25,Khodiyar Nagar,Kheme ka Kua ,Pal Road ,Jodhpur(Rajasthan)</li>
                            <br>
                            <li><i class="fa fa-phone"></i>+919414294262</li>
                            <li><i class="fa fa-envelope"></i>rakeshpatelrp583@gmail.com</li>

                        </ul>
                        <div class="social">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>

                        </div>
                    </div>


                </div>




            </div>
        </div>
        <div class="footer-bottom">
            &copy;2019 Humanrhy-All Rights Reserved
          
        </div>
       


    </footer>
    <script>
        $(document).ready(function () {
            $(".call").click(function () {
                $(".concall").toggle().css("transition", "0.5s", "all");

            });
        });

        $(function () {
            $("#date").datepicker();
        });
      

   $(document).ready(function () {

            $(".para").mouseenter(function () {
                $("#book").css('color', 'red');

            });

            $(".para").mouseleave(function () {
                $("#book").css('color', 'yellow');

            });


        });

        $('nav .navbar-nav a').on('click', function () {
            $('nav .navbar-nav').find('li.active').removeClass('active');
            $(this).parent('li').addClass('active');
        });
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function () {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-90px";
            }
            prevScrollpos = currentScrollPos;
        }






    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>