@yield('content')
<!DOCTYPE html>
<html lang="en">
<head>
<title>MyTukang</title>
    
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Flex Art Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->
    
    <!-- banner slider css -->
    <link href="css/minimal-slider.css" rel='stylesheet' type='text/css' />
    <!-- //banner slider css -->
    
    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
    <link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    
    <!--web font-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <!--//web font-->

</head>

<body>

<!-- header -->
<div class="header-top">
    <header>
        <div class="top-head ml-lg-auto text-center">
            <div class="row">
            </div>
        </div>

        

        <div class="clearfix"></div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="logo">
                <h1>
                    <a class="navbar-brand" href="index.html">
                        <i class="fas fa-gavel"></i>  MyTukang</a>
                </h1>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fas fa-bars"></i>
                </span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto text-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#Fitur">Fitur</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#Layanan">Layanan</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href= "{{ route('login') }}">
                        <i class="fas fa-lock"></i> Login</a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href= "{{ route('register') }}">
                        <i class="fas fa-lock"></i> Register</a>
                    </li>

                     <li class="nav-item">
                        <a href="{{url('user/jasa/form')}}" modal" data-target="#exampleModalCenter">
                        <button type="button" class="btn btn-primary">Daftar Jasa</button></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</div>
<!-- header -->

<!-- main image slider container -->
<section class="slide-window">
    <div class="slide-wrapper" style="width:300%;">
        <div class="slide">
            <div class="slide-caption text-center">
               <h3 class="text-uppercase">Desain</h3>
               <p class="my-4">Melakukan Desain sesuai dengan keinginanmu</p>   
            </div>
        </div>

        <div class="slide slide2">
            <div class="slide-caption text-center">
                <h3 class="text-uppercase">Perbaikan</h3>
               <p class="my-4">Dapat memperbaiki apapun dimanapun dan kapanpun sesuai dengan kebutuhan anda</p> 
            </div>
        </div>

        <div class="slide slide3">
            <div class="slide-caption text-center">
                <h3 class="text-uppercase">Pemasangan</h3>
               <p class="my-4">Melakukan pemasangan dengan menemukan penyediasa jasa yang tepat yang sesuai dengan kebtuhan</p>
            </div>
        </div>
    </div>

    <div class="slide-controller">
        <div class="slide-control-left">
            <div class="slide-control-line"></div>
            <div class="slide-control-line"></div>
        </div>
        <div class="slide-control-right">
            <div class="slide-control-line"></div>
            <div class="slide-control-line"></div>
        </div>
    </div>
</section>
<!-- end of main image slider container -->
    
<!-- welcome -->

<!-- welcome -->

<!-- welcome bottom -->

<!-- //welcome bottom -->

<!-- Features -->
<div id="Fitur">
<section class="features py-5">
    <div class="container py-sm-5">
        <div class="heading pb-4">
           <h3 class="heading mb-2 text-center text-black"> <span>Fitur </span> MyTukang </h3>
            <p class="para mb-5 text-center">Temukan kemudahan dalam melakukan pemesanan jasa</p>
        </div>
        <div class="feature-grids row">
            <div class="col-lg-4 col-md-6">
                <div class="f1 p-sm-5 p-4">
                    <h3 class="my-3 text-center">Pencarian Jasa</h3>
                    <p class="text-center">Kemudahan dalam melakukan pencarian jasa yang anda butuhkan.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-sm-5 mt-4">
                <div class="f1 p-sm-5 p-4">
                    <h3 class="my-3 text-center">Penyedia Jasa</h3>
                    <p class="text-center">Dapat mendaftar menjadi layanan penyedia jasa sesuai kemampuan.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-sm-5 mt-4">
                <div class="f1 p-sm-5 p-4">
                    <h3 class="my-3 text-center">Pemesanan Jasa</h3>
                    <p class="text-center">Memesan jasa sesuai kebutuhan yang sudah terdaftar pada aplikasi.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mt-sm-5 mt-4">
                
            </div>
            <div class="col-lg-4 col-md-6 mt-sm-5 mt-4">
                <div class="f1 p-sm-5 p-4">
                    <h3 class="my-3 text-center">Pembayaran</h3>
                    <p class="text-center">Pembayaran dilakukan pada saat pekerjaan telah selesai.</p>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!-- //Features -->

<!-- Layanan -->
<div id="Layanan">
<section class="bottom-last">
    <div class="bottom-bg py-5 bs-slider-overlay text-left">
        <div class="container py-md-5">
            <div class="heading pb-4">
                <h3 class="heading mb-2 text-center text-white"> <span>Pesan </span> Sekarang </h3>
                <p class="para mb-5 text-center">Pesan sesuai dengan kebutuhan anda</p>
            </div>
            <!-- Counter -->
                <div class="col-lg-6 p-sm-5 p-4 welcome_left Features-bottom">
                    <div class="layer p-sm-5 p-4 welcome_left_inner agile-info">
                            <div class="mt-sm-5 mt-3 agileits_w3layouts_about_counter_left w3-agile-grid">
                                <div class="countericon">
                                    <span class="fa fa-share" aria-hidden="true"></span>
                                    <h3>Buat Pesanan</h3>
                                </div>
                                <div class="counterinfo agile-info">
                                    <h3 class="text-center">Isi data pesanan dan pilih penyedia jasa sesuai dengan kebutuhan</h3> 
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <div class="mt-sm-5 mt-3 agileits_w3layouts_about_counter_left w3-agile-grid">
                                <div class="countericon">
                                    <span class="fa fa-share" aria-hidden="true"></span>
                                    <h3>Mulai Pekerjaan</h3>
                                </div>
                                <div class="counterinfo agile-info">
                                    <h3 class="text-center">Pekerjaan dimulai sesuai dengan pesanan anda</h3> 
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <div class="mt-sm-5 mt-3 agileits_w3layouts_about_counter_left w3-agile-grid">
                                <div class="countericon">
                                    <span class="fa fa-share" aria-hidden="true"></span>
                                    <h3>Pembayaran</h3>
                                </div>
                                <div class="counterinfo agile-info">
                                    <h3 class="text-center">Selesaikan Pembayaran Sesuai dengan pesanan kebutuhan anda</h3>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                    </div>
                </div>
                <!-- //Counter -->
        </div>
    </div>
</section>
</div>
<!-- //Layanan -->

<!-- Testimonials -->
<!-- //Testimonials -->

<!-- brands -->
<section class="partners bg-light py-5">
    <div class="container">
        <div class="row partner-grids text-center">
            <div class="col-md-2 col-4">
                <div class="brand bg-white">
                    <a href="#"><i class="fab fa-angrycreative"></i></a>
                </div>
            </div>
            <div class="col-md-2 col-4">
                <div class="brand bg-white">
                    <a href="#"><i class="fab fa-apper"></i></a>
                </div>
            </div>
            <div class="col-md-2 col-4">
                <div class="brand bg-white">
                    <a href="#"><i class="fab fa-apple-pay"></i></a>
                </div>
            </div>
            <div class="col-md-2 col-4 mt-md-0 mt-3">
                <div class="brand bg-white">
                    <a href="#"><i class="fab fa-aviato"></i></a>
                </div>
            </div>
            <div class="col-md-2 col-4 mt-md-0 mt-3">
                <div class="brand bg-white">
                    <a href="#"><i class="fab fa-aws"></i></a>
                </div>
            </div>
            <div class="col-md-2 col-4 mt-md-0 mt-3">
                <div class="brand bg-white">
                    <a href="#"><i class="fab fa-amazon-pay"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //brands -->

<!-- footer -->

    <!-- //footer bottom -->
<!-- //footer -->

<!-- copyright -->
<div class="cpy-right text-center">
    <p> copyright © 2018
        <a href="home">MyTukang</a>
    </p>
</div>
<!-- //copyright -->

    <!--model-forms-->
    <!--/Login-->
   
    <!--//Login-->
    <!--/Register-->
    
    <!--//Register-->
    <!--//model-form-->

    <!-- video Modal Popup -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Introduction Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body video">
                    <iframe src="https://player.vimeo.com/video/33531612"></iframe>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //video Model Popup -->

    <!-- Vertically centered Modal -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
      </div>
    </div>
    <!-- //Vertically centered Modal -->

    <!-- js -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
    <!-- //js -->
    
    <!-- search overlay -->
    <script src="js/modernizr-2.6.2.min.js"></script> 
    <!-- //search overlay -->
    
    <!--search jQuery-->
    <script src="js/classie-search.js"></script>
    <script src="js/demo1-search.js"></script>
    <!--//search jQuery-->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- banner slider js -->
    <script src="js/minimal-slider.js"></script>
    <!-- //banner slider js -->

    <!-- Stats-Number-Scroller-Animation-JavaScript -->
    <script src="js/waypoints.min.js"></script> 
    <script src="js/counterup.min.js"></script> 
    <script>
        jQuery(document).ready(function( $ ) {
            $('.counter').counterUp({
                delay: 100,
                time: 1000
            });
        });
    </script>
    <!-- //Stats-Number-Scroller-Animation-JavaScript -->

    <!-- start-smoth-scrolling -->
    <script src="js/SmoothScroll.min.js"></script>
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- here stars scrolling icon -->
    <script>
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
    <!-- //here ends scrolling icon -->
    <!-- start-smoth-scrolling -->

</body>
</html>