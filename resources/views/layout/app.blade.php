<input type="text" value={{route('index')}} name="" id="indexlink" hidden>



<!doctype html>
<html lang="en">

<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=referrer content=no-referrer>
    <title>RbxAdder: Get FREE Robux Online</title>
    <meta name=Description content="Get Free Robux by installing apps and watching Videos, Min withdraw is only 1 Robux & Instant Payout. Join us and buy whatever you want in Roblox for Free!">
    <meta property=og:description content="Most Reliable way to get Free robux!">
    <meta property=og:title content="RbxAdder.com - Gain Free RBX">
    <meta property=og:image content=https://rbxadder.com/freerbx.jpg> <meta name=twitter:card content=summary_large_image>
    <meta name=twitter:title content="RbxAdder.com - Gain Free RBX">
    <meta name=twitter:description content="Gain Free Rbx by installing apps and completing surveys">
    <meta name=twitter:image content=https://rbxadder.com/freerbx.jpg> <meta name=propeller content=08a78b1eba469ca2041639952908f670>
    <meta name=ahrefs-site-verification content=645380b017556267467536cb9c634b0c816fb0ceba67d12346b27ee8081b4feb>
    <link rel=canonical href=https://www.rbxadder.com/> <link rel=icon href=favicon.ico>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100:300,400,500,700,900|Material+Icons" rel=stylesheet>

    <link href="{{asset('css/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Roboto:100:300,400,500,700,900|Material+Icons" rel=stylesheet>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <link rel="stylesheet" href="{{asset('css/chunk-vendors.fc9d4d64.css')}}">
    <style>
        body {
            font-size: 130%;

            font-family: Roboto, sans-serif;
            line-height: 1.5;

        }

        .secondary {
            background-color: #fa7e27 !important;
            border-color: #fa7e27 !important;
        }

        .bgImage {
            background-image: url(" {{asset('/images/cardbg.png')}}");
        }

        .subheading {
            font-size: 18px !important;
            font-weight: 400;
        }

        .application {
            font-family: Roboto, sans-serif;
            line-height: 1.5;
        }


        @media only screen and (min-width: 992px) {
            #sidebarCollapse {
                display: none;
            }
        }

        @media only screen and (max-width: 992px) {
            #sidebarCollapse {
                display: block;
            }
        }
    </style>
</head>

<body style=" background: rgb(239, 243, 246) none repeat scroll 0% 0%;">

    <div class="wrapper d-flex align-items-stretch ">
        <nav id="sidebar" class=" bg-white ">
            <div class="sticky-top">
                <div class="p-4 pt-5 bg-dark bgImage">

                    <div class="v-avatar secondary text-center img logo rounded-circle mb-2 " style="height: 48px; width: 48px;"><i aria-hidden="true" class="v-icon fas fa-user theme--dark"></i></div>

                    <h3 class="text-center text-white">{{$_SESSION["username"]}}</h3>
                    <h6 class="text-center text-white">Robux Earned : {{ App\people::find($_SESSION["id"])->earn}}</h6>

                </div>
                <div class="p-4 pt-5 bg-white ">
                    <ul class="list-unstyled components mb-5">

                        <li>
                            <a class=" text-dark nav-item active" href="{{route('index')}}"> <i aria-hidden="true" class="v-icon v-icon--left  fas fa-home theme--light primary--text pr-4   "></i>Earn Robux</a>
                        </li>

                        <li>
                            <a class=" text-dark" href="{{route('cashout')}}"> <i aria-hidden="true" class="v-icon v-icon--left  fas fa-money-bill-alt theme--light primary--text pr-4   "></i>Cash out </a>
                        </li>

                        <li>
                            <a class=" text-dark" href="{{route('invite')}}"> <i aria-hidden="true" class="v-icon v-icon--left  fas fa-bullhorn theme--light primary--text pr-4   "></i>Invite Friends</a>
                        </li>

                        <li>
                            <a class=" text-dark" href="{{route('help')}}"> <i aria-hidden="true" class="v-icon v-icon--left  fas fa-question-circle theme--light primary--text pr-4   "></i>Help</a>
                        </li>

                        <li>
                            <a class=" text-dark" href="{{route('promo')}}"> <i aria-hidden="true" class="v-icon v-icon--left  fas fa-user-alt theme--light primary--text pr-4   "></i>Promo Code</a>
                        </li>

                        <li>
                            <a class=" text-dark" href="{{route('media')}}"> <i aria-hidden="true" class="v-icon v-icon--left   fas fa-handshake  theme--light primary--text pr-4   "></i> Media Partners </a>
                        </li>


                    </ul>



                </div>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" style="margin-top: 0; padding:0;">

            <nav class="navbar navbar-expand-lg navbar-light bg-dark p-4 ">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <span class=" "></span>
                    <button class="btn-danger pl-4 pr-4 p-2   font-weight-bold  " id="logoutButton"><a class="text-light" href="{{route('logout')}}"> LOGOUT</a></button>

                </div>
            </nav>

            <!-- main body  start here  -->

            <div class="ml-4 mr-4 mt-0 ">
                @yield('body')
            </div>
            <!-- main body  end here  -->
            <br><br><br><br>

            <!-- footer  -->
            <footer class="v-footer v-footer--inset theme--light" style="height: auto;">
                <div class="text-xs-center v-card v-card--flat v-card--tile theme--light" style="width: 100%; background: rgb(239, 243, 246) none repeat scroll 0% 0%; color: rgb(136, 136, 136);">
                    <div class="v-card__text"><a href="#/privacy" class="mx-1">Privacy Policy</a>-
                        <a href="#/terms" class="mx-1">Terms of Service</a></div>
                    <div class="v-card__text pt-0">
                        We are not affiliated with any of the games or companies shown on
                        this website. Use of any logos or trademarks are for reference
                        purposes only. By utilizing the website, you agree to be bound by
                        the terms of service.
                    </div>
                    <hr class="v-divider theme--light">
                    <div class="v-card__text">
                        ©2020 —
                        <strong>RbxAdder</strong></div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <script>
        $(document).ready(function() {
            function totalRobuxChange() {
                var link = "{{route('robux')}}";

                console.log(Date.now());
                jQuery.get(link, function(data, status) {
                    console.log(data);
                    //  $("#totalRobux").text(data );
                    // alert($("#totalRobux").text() ); 

                });
                // alert('{{now()->format("Y-m-d H:i:s")}}'); 

            }

            function randomNumber(min, max) {
                return Math.floor(Math.random() * (max - min) + min);
            }

            setInterval(
                function() {
                    console.log(randomNumber(1200,1785));
                    $("#robuxEarn").text(parseInt(((Date.now() - 1590326001115) / 220)));
                    $("#robuxStock").text(parseInt(((Date.now() - 1590329001115) / 280)));
                    $("#robuxOnline").text(randomNumber(1200,1785));



                }

                , 3000);

        })
    </script>


</body>

</html>