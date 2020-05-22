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

<body>

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

      <div class="row p-3  ">
        <div class="col-12 col-md-3 col-l-3 col-xl-3">
          <nav class="navbar navbar-expand-lg navbar-light bg-danger pt-4 pb-4">
            <div class="p-3"><i class="v-icon fa" style="font-size: 48px; font-family: &quot;Roboto&quot;; font-weight: 800; color: rgba(0, 0, 0, 0.54);">R$</i></div>
            <div class="text-white">
              <div class=" display-1">1245373</div>
              <div class=" subheading">Total Robux Earned</div>
            </div>
          </nav>
        </div>
        <div class="col-12 col-md-3 col-l-3 col-xl-3">
          <nav class="navbar navbar-expand-lg navbar-light bg-success pt-4 pb-4">
            <div class="p-3"> <i aria-hidden="true" class="v-icon fas fa-coins theme--light" style="font-size: 64px;"></i></div>
            <div class="text-white">
              <div class=" display-1">1245373</div>
              <div class=" subheading">Robux Stock</div>
            </div>
          </nav>
        </div>
        <div class="col-12 col-md-3 col-l-3 col-xl-3">
          <nav class="navbar navbar-expand-lg navbar-light bg-dark pt-4 pb-4">
            <div class="p-3"><i aria-hidden="true" class="v-icon fas fa-globe-americas theme--light" style="font-size: 64px;"></i></div>
            <div class="text-white">
              <div class=" display-1">1245373</div>
              <div class=" subheading">Online Now</div>
            </div>
          </nav>
        </div>
        <div class="col-12 col-md-3 col-l-3 col-xl-3">
          <nav class="navbar navbar-expand-lg navbar-light bg-info pt-4 pb-4">
            <div class="p-3"><i aria-hidden="true" class="v-icon fas fa-star theme--light" style="font-size: 64px;"></i></div>
            <div class="text-white">
              <div class=" display-1">1245373</div>
              <div class=" subheading">Your Rank</div>
            </div>
          </nav>
        </div>
      </div>

      <!-- Offerwalls start here  -->

      <div data-v-2768d840="" class="v-alert deep-orange darken-2"><i aria-hidden="true" class="v-icon fas fa-exclamation-triangle theme--light v-alert__icon"></i>
        <div>Open Rbxadder.com on your mobile to see even more mobile offers!</div>
      </div>



      <div class="card">

        <nav class="navbar navbar-dark bg-dark bgImage ">
          <h3 class="navbar-brand pl-4 text-light ">Offerwalls </h3>

        </nav>



        <div class="card-body" style="padding-top: 0; margin-top :0; ">
          <div class="pb-2"><i aria-hidden="true" class="v-icon v-icon--left  fas fa-info-circle theme--light blue--text"></i>
            <h2 style="font-size: 16px; display: inline;">Click Open Offerwall and start completing free offers to earn Robux!</h2>
          </div>



          <div class="row p-4">




          <div data-v-2768d840="" class=" col-xl-2 col-l-3 col-md-6 col-12 offerwall-card v-card v-card--flat theme--light elevation-1 "> <a target="_blank" href="http://google.com">   
              <div data-v-2768d840="" class="v-responsive v-image white--text justify-center teal darken-1" style="height: 100px;">
                <div class="v-responsive__sizer" style="padding-bottom: 66.6667%;"></div>
                <div class="v-image__image v-image__image--contain" style="background-image: url(&quot;https://app.rbxadder.com/img/adgate.b0d26978.png&quot;); background-position: center center;"></div>
                <div class="v-responsive__content"></div>
              </div>
              <div data-v-2768d840="" class="v-card__actions pa-0"><button data-v-2768d840="" type="button" class="elevation-1 v-btn v-btn--block v-btn--flat theme--light" style="border-radius: 0px; position: relative;">
                  <div class="v-btn__content">Open Offerwall</div>
                </button></div>
                </a>
            </div>






            <div data-v-2768d840="" class=" col-xl-2 col-l-3 col-md-6 col-12 offerwall-card v-card v-card--flat theme--light elevation-1 "> <a target="_blank" href="http://google.com">   
              <div data-v-2768d840="" class="v-responsive v-image white--text justify-center teal darken-1" style="height: 100px;">
                <div class="v-responsive__sizer" style="padding-bottom: 66.6667%;"></div>
                <div class="v-image__image v-image__image--contain" style="background-image: url(&quot;https://app.rbxadder.com/img/adgate.b0d26978.png&quot;); background-position: center center;"></div>
                <div class="v-responsive__content"></div>
              </div>
              <div data-v-2768d840="" class="v-card__actions pa-0"><button data-v-2768d840="" type="button" class="elevation-1 v-btn v-btn--block v-btn--flat theme--light" style="border-radius: 0px; position: relative;">
                  <div class="v-btn__content">Open Offerwall</div>
                </button></div>
                </a>
            </div>






            <div data-v-2768d840="" class=" col-xl-2 col-l-3 col-md-6 col-12 offerwall-card v-card v-card--flat theme--light elevation-1 "> <a target="_blank" href="http://google.com">   
              <div data-v-2768d840="" class="v-responsive v-image white--text justify-center teal darken-1" style="height: 100px;">
                <div class="v-responsive__sizer" style="padding-bottom: 66.6667%;"></div>
                <div class="v-image__image v-image__image--contain" style="background-image: url(&quot;https://app.rbxadder.com/img/adgate.b0d26978.png&quot;); background-position: center center;"></div>
                <div class="v-responsive__content"></div>
              </div>
              <div data-v-2768d840="" class="v-card__actions pa-0"><button data-v-2768d840="" type="button" class="elevation-1 v-btn v-btn--block v-btn--flat theme--light" style="border-radius: 0px; position: relative;">
                  <div class="v-btn__content">Open Offerwall</div>
                </button></div>
                </a>
            </div>






            <div data-v-2768d840="" class=" col-xl-2 col-l-3 col-md-6 col-12 offerwall-card v-card v-card--flat theme--light elevation-1 "> <a target="_blank" href="http://google.com">   
              <div data-v-2768d840="" class="v-responsive v-image white--text justify-center teal darken-1" style="height: 100px;">
                <div class="v-responsive__sizer" style="padding-bottom: 66.6667%;"></div>
                <div class="v-image__image v-image__image--contain" style="background-image: url(&quot;https://app.rbxadder.com/img/adgate.b0d26978.png&quot;); background-position: center center;"></div>
                <div class="v-responsive__content"></div>
              </div>
              <div data-v-2768d840="" class="v-card__actions pa-0"><button data-v-2768d840="" type="button" class="elevation-1 v-btn v-btn--block v-btn--flat theme--light" style="border-radius: 0px; position: relative;">
                  <div class="v-btn__content">Open Offerwall</div>
                </button></div>
                </a>
            </div>






            <div data-v-2768d840="" class=" col-xl-2 col-l-3 col-md-6 col-12 offerwall-card v-card v-card--flat theme--light elevation-1 "> <a target="_blank" href="http://google.com">   
              <div data-v-2768d840="" class="v-responsive v-image white--text justify-center teal darken-1" style="height: 100px;">
                <div class="v-responsive__sizer" style="padding-bottom: 66.6667%;"></div>
                <div class="v-image__image v-image__image--contain" style="background-image: url(&quot;https://app.rbxadder.com/img/adgate.b0d26978.png&quot;); background-position: center center;"></div>
                <div class="v-responsive__content"></div>
              </div>
              <div data-v-2768d840="" class="v-card__actions pa-0"><button data-v-2768d840="" type="button" class="elevation-1 v-btn v-btn--block v-btn--flat theme--light" style="border-radius: 0px; position: relative;">
                  <div class="v-btn__content">Open Offerwall</div>
                </button></div>
                </a>
            </div>





            <div data-v-2768d840="" class=" col-xl-2 col-l-3 col-md-6 col-12 offerwall-card v-card v-card--flat theme--light elevation-1 "> <a target="_blank" href="http://google.com">   
              <div data-v-2768d840="" class="v-responsive v-image white--text justify-center teal darken-1" style="height: 100px;">
                <div class="v-responsive__sizer" style="padding-bottom: 66.6667%;"></div>
                <div class="v-image__image v-image__image--contain" style="background-image: url(&quot;https://app.rbxadder.com/img/adgate.b0d26978.png&quot;); background-position: center center;"></div>
                <div class="v-responsive__content"></div>
              </div>
              <div data-v-2768d840="" class="v-card__actions pa-0"><button data-v-2768d840="" type="button" class="elevation-1 v-btn v-btn--block v-btn--flat theme--light" style="border-radius: 0px; position: relative;">
                  <div class="v-btn__content">Open Offerwall</div>
                </button></div>
                </a>
            </div>




          </div>

        </div>
      </div>


            <!-- Offerwalls end here  -->



            <div class="row">



 




            <div data-v-2768d840="" class=" col-xl-3 col-3 col-md-4 cl-12 flex xs12 md4 lg3"><div data-v-2768d840="" class="v-card theme--light"><div data-v-2768d840="" class="v-card__title"><img data-v-2768d840="" contain="" src="{{asset('/images/youtube.png')}}" class="pa-2"><div data-v-2768d840="" class="headline ml-2">Youtube</div></div><div data-v-2768d840="" class="v-card__text"><div data-v-2768d840="" class="body-1">Subscribe to our Youtube channel to Get free promotion codes!</div></div><div data-v-2768d840="" class="v-card__text"><button data-v-2768d840="" type="button" class="v-btn v-btn--block theme--dark" style="background-color: rgb(0, 186, 79);"><div class="v-btn__content">+ 0.25 Robux</div></button></div></div></div>



            <div data-v-2768d840="" class=" col-xl-3 col-3 col-md-4 cl-12 flex xs12 md4 lg3"><div data-v-2768d840="" class="v-card theme--light"><div data-v-2768d840="" class="v-card__title"><img data-v-2768d840="" contain="" src="{{asset('/images/youtube.png')}}" class="pa-2"><div data-v-2768d840="" class="headline ml-2">Youtube</div></div><div data-v-2768d840="" class="v-card__text"><div data-v-2768d840="" class="body-1">Subscribe to our Youtube channel to Get free promotion codes!</div></div><div data-v-2768d840="" class="v-card__text"><button data-v-2768d840="" type="button" class="v-btn v-btn--block theme--dark" style="background-color: rgb(0, 186, 79);"><div class="v-btn__content">+ 0.25 Robux</div></button></div></div></div>



            <div data-v-2768d840="" class=" col-xl-3 col-3 col-md-4 cl-12 flex xs12 md4 lg3"><div data-v-2768d840="" class="v-card theme--light"><div data-v-2768d840="" class="v-card__title"><img data-v-2768d840="" contain="" src="{{asset('/images/youtube.png')}}" class="pa-2"><div data-v-2768d840="" class="headline ml-2">Youtube</div></div><div data-v-2768d840="" class="v-card__text"><div data-v-2768d840="" class="body-1">Subscribe to our Youtube channel to Get free promotion codes!</div></div><div data-v-2768d840="" class="v-card__text"><button data-v-2768d840="" type="button" class="v-btn v-btn--block theme--dark" style="background-color: rgb(0, 186, 79);"><div class="v-btn__content">+ 0.25 Robux</div></button></div></div></div>



            <div data-v-2768d840="" class=" col-xl-3 col-3 col-md-4 cl-12 flex xs12 md4 lg3"><div data-v-2768d840="" class="v-card theme--light"><div data-v-2768d840="" class="v-card__title"><img data-v-2768d840="" contain="" src="{{asset('/images/youtube.png')}}" class="pa-2"><div data-v-2768d840="" class="headline ml-2">Youtube</div></div><div data-v-2768d840="" class="v-card__text"><div data-v-2768d840="" class="body-1">Subscribe to our Youtube channel to Get free promotion codes!</div></div><div data-v-2768d840="" class="v-card__text"><button data-v-2768d840="" type="button" class="v-btn v-btn--block theme--dark" style="background-color: rgb(0, 186, 79);"><div class="v-btn__content">+ 0.25 Robux</div></button></div></div></div>
















            </div>


      <!-- main body  end here  -->


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