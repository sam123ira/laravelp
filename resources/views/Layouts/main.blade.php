<!--
=========================================================
* Material Kit 2 - v3.0.0
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">

    <title>
        Material Kit 2 by Creative Tim
    </title>



    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->



    <link id="pagestyle" href="{{asset('assets/css/material-kit.css?v=3.0.0')}}" rel="stylesheet" />

</head>

<body class="index-page bg-gray-200">


<!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
            <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid px-0">
                    <a class="navbar-brand font-weight-bolder ms-sm-3" href="https://demos.creative-tim.com/material-kit/index" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                        Laravel Roshdana Project
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
                    </button>
                    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover ms-auto">
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                                    Pages
                                    <img src="{{asset('assets/img/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                                    <div class="d-none d-lg-block">
                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                            Landing Pages
                                        </h6>
                                        <a href="{{asset('pages/about-us.html')}}" class="dropdown-item border-radius-md">
                                            <span>About Us</span>
                                        </a>
                                        <a href="{{asset('pages/contact-us.html')}}" class="dropdown-item border-radius-md">
                                            <span>Contact Us</span>
                                        </a>
                                        <a href="{{asset('pages/author.html')}}" class="dropdown-item border-radius-md">
                                            <span>Author</span>
                                        </a>
                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                            Account
                                        </h6>
                                        <a href="{{url('register')}}" class="dropdown-item border-radius-md">
                                            <span>Sign In</span>
                                        </a>
                                        <a href="{{url('login')}}" class="dropdown-item border-radius-md">
                                            <span>Sign Up</span>
                                        </a>
                                    </div>

                                    <div class="d-lg-none">
                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                            Landing Pages
                                        </h6>

                                        <a href="{{asset('pages/about-us.html')}}" class="dropdown-item border-radius-md">
                                            <span>About Us</span>
                                        </a>
                                        <a href="{{asset('pages/contact-us.html')}}" class="dropdown-item border-radius-md">
                                            <span>Contact Us</span>
                                        </a>
                                        <a href="{{asset('pages/author.html')}}" class="dropdown-item border-radius-md">
                                            <span>Author</span>
                                        </a>

                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                            Account
                                        </h6>
                                        <a href="{{asset('pages/sign-in.html')}}" class="dropdown-item border-radius-md">
                                            <span>Sign In</span>
                                        </a>

                                    </div>

                                </div>
                            </li>

                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                                    User panel tools
                                    <img src="{{asset('assets/img/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                                    <div class="d-none d-lg-block">
                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                            Posts
                                        </h6>
                                        <a href="{{asset('posts/create')}}" class="dropdown-item border-radius-md">
                                            <span>Add post</span>
                                        </a>
                                        <a href="{{url('/posts')}}" class="dropdown-item border-radius-md">
                                            <span>All posts</span>
                                        </a>
                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                            Account
                                        </h6>
                                        <a href="{{url('')}}" class="dropdown-item border-radius-md">
                                            <span>Logout</span>
                                        </a>
                                    </div>

                                    <div class="d-lg-none">
                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                            Landing Pages
                                        </h6>

                                        <a href="{{asset('pages/about-us.html')}}" class="dropdown-item border-radius-md">
                                            <span>About Us</span>
                                        </a>
                                        <a href="{{asset('pages/contact-us.html')}}" class="dropdown-item border-radius-md">
                                            <span>Contact Us</span>
                                        </a>
                                        <a href="{{asset('pages/author.html')}}" class="dropdown-item border-radius-md">
                                            <span>Author</span>
                                        </a>

                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                            Account
                                        </h6>
                                        <a href="{{asset('pages/sign-in.html')}}" class="dropdown-item border-radius-md">
                                            <span>Sign In</span>
                                        </a>

                                    </div>

                                </div>
                            </li>

                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons opacity-6 me-2 text-md">article</i>
                                    About us
                                </a>
                            </li>


                            <li class="nav-item my-auto ms-3 ms-lg-0">

                                <a href="{{url('login')}}" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Sing-in</a>

                            </li>
                            <li class="nav-item my-auto ms-3 ms-lg-0">

                                <a href="{{url('register')}}" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Sing-up</a>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </div></div></div>

@include('flash::message')





<header class="header-2">
    <div class="page-header min-vh-75 relative" style="background-image: url({{asset('assets/img/bg2.jpg')}})">
        <span class="mask bg-gradient-primary opacity-4"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center mx-auto">
                    <h2 class="text-white pt-3 mt-n5">Roshdana Backend</h2>
                    <p class="lead text-white mt-3">From programming to digital design and marketing; Businesses are waiting for you...</p>
                </div>
            </div>
        </div>
    </div>
</header>



<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 flex-row flex-wrap">

@yield('content')




<!--
aval safhe////////////////////////////////////////////////////////////////////////////
-->

</div>





<footer class="footer pt-5 mt-5">
    <div class="container">
        <div class=" row">
            <div class="col-md-3 mb-4 ms-auto">
                <div>
                    <a href="https://www.creative-tim.com/product/material-kit">
                        <img src="{{asset('assets/img/logo-ct-dark.png')}}" class="mb-3 footer-logo" alt="main_logo">
                    </a>
                    <h6 class="font-weight-bolder mb-4">Material Kit 2</h6>
                </div>
                <div>
                    <ul class="d-flex flex-row ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                                <i class="fab fa-facebook text-lg opacity-8"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                                <i class="fab fa-twitter text-lg opacity-8"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                                <i class="fab fa-dribbble text-lg opacity-8"></i>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                                <i class="fab fa-github text-lg opacity-8"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                                <i class="fab fa-youtube text-lg opacity-8"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>



            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Company</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                                Freebies
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                                Premium Tools
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                                Blog
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Resources</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://iradesign.io/" target="_blank">
                                Illustrations
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                                Bits & Snippets
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">
                                Affiliate Program
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Help & Support</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                                Contact Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                                Knowledge Center
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer" target="_blank">
                                Custom Development
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                                Sponsorships
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                <div>
                    <h6 class="text-sm">Legal</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/terms-of-service" target="_blank">
                                Terms & Conditions
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/privacy-policy" target="_blank">
                                Privacy Policy
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                                Licenses (EULA)
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12">
                <div class="text-center">
                    <p class="text-dark my-4 text-sm font-weight-normal">
                        All rights reserved. Copyright © <script>document.write(new Date().getFullYear())</script> Material Kit by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>







<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>


<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="{{asset('assets/js/plugins/countup.min.js')}}"></script>


<script src="{{asset('assets/js/plugins/choices.min.js')}}"></script>



<script src="{{asset('assets/js/plugins/prism.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/highlight.min.js')}}"></script>



<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="{{asset('assets/js/plugins/rellax.min.js')}}"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="{{asset('assets/js/plugins/tilt.min.js')}}"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="{{asset('assets/js/plugins/choices.min.js')}}"></script>


<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="{{asset('assets/js/plugins/parallax.min.js')}}"></script>


<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="{{asset('assets/js/material-kit.min.js?v=3.0.0')}}" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>

<script type="text/javascript">

    if (document.getElementById('state1')) {
        const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('state2')) {
        const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
        if (!countUp1.error) {
            countUp1.start();
        } else {
            console.error(countUp1.error);
        }
    }
    if (document.getElementById('state3')) {
        const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
        if (!countUp2.error) {
            countUp2.start();
        } else {
            console.error(countUp2.error);
        }
    }
</script>

</body>

</html>
