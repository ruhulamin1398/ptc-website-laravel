<!doctype html>
<html lang="en">

<head>
    <title>Ptc Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="{{asset('css/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Roboto:100:300,400,500,700,900|Material+Icons" rel=stylesheet>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <link rel="stylesheet" href="{{asset('css/chunk-vendors.fc9d4d64.css')}}">
    <style>
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
	font-family: Roboto,sans-serif;
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

                    <h3 class="text-center text-white">Hasnain_Nom</h3>
                    <h6 class="text-center text-white">Robux Earned: 0.75</h6>

                </div>
                <div class="p-4 pt-5 bg-white ">
                    <ul class="list-unstyled components mb-5">

                        <li>
                            <a class=" text-dark nav-item active" href="#"> <i aria-hidden="true" class="v-icon v-icon--left  fas fa-home theme--light primary--text pr-4   "></i>Earn Robux</a>
                        </li>

                        <li>
                            <a class=" text-dark" href="#"> <i aria-hidden="true" class="v-icon v-icon--left  fas fa-money-bill-alt theme--light primary--text pr-4   "></i>Cash out </a>
                        </li>

                        <li>
                            <a class=" text-dark" href="#"> <i aria-hidden="true" class="v-icon v-icon--left  fas fa-bullhorn theme--light primary--text pr-4   "></i>Invite Friends</a>
                        </li>

                        <li>
                            <a class=" text-dark" href="#"> <i aria-hidden="true" class="v-icon v-icon--left  fas fa-question-circle theme--light primary--text pr-4   "></i>Help</a>
                        </li>

                        <li>
                            <a class=" text-dark" href="#"> <i aria-hidden="true" class="v-icon v-icon--left  fas fa-user-alt theme--light primary--text pr-4   "></i>Promo Code</a>
                        </li>

                        <li>
                            <a class=" text-dark" href="#"> <i aria-hidden="true" class="v-icon v-icon--left   fas fa-handshake  theme--light primary--text pr-4   "></i> Media Partners </a>
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
                    <button class="btn-danger pl-4 pr-4 p-2 text-light  font-weight-bold ">LOGOUT</button>

                </div>
            </nav>

  <!-- main body  start here  -->
@yield('body')

  <!-- main body  end here  -->
<br><br><br><br>

  <!-- footer  -->
  <footer class="v-footer v-footer--inset theme--light" style="height: auto;"><div class="text-xs-center v-card v-card--flat v-card--tile theme--light" style="width: 100%; background: rgb(239, 243, 246) none repeat scroll 0% 0%; color: rgb(136, 136, 136);"><div class="v-card__text"><a href="#/privacy" class="mx-1">Privacy Policy</a>-
          <a href="#/terms" class="mx-1">Terms of Service</a></div><div class="v-card__text pt-0">
          We are not affiliated with any of the games or companies shown on
          this website. Use of any logos or trademarks are for reference
          purposes only. By utilizing the website, you agree to be bound by
          the terms of service.
        </div><hr class="v-divider theme--light"><div class="v-card__text">
          ©2020 —
          <strong>RbxAdder</strong></div></div></footer>
        </div>
    </div>
    <i class="fas fa-user">
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>




        </script>
</body>

</html>