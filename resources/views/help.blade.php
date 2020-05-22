@extends('layout.app')

@section('body')




<div class="container grid-list-xs fluid">
    <div class="layout row wrap">
        <div class="flex xs12">
            <div class="v-card theme--light">

                <nav class="navbar navbar-dark bg-dark bgImage ">
                    <h2 class="navbar-brand pl-4 text-light ">Become a RbxAdder Media Partner </h2>

                </nav>


          

                <ul class="v-expansion-panel theme--light">
                    <li tabindex="0" class="v-expansion-panel__container">
                        <div class="v-expansion-panel__header">
                            <h2 class="btn btn-link text-dark" data-toggle="collapse" data-target="#headingThreee" aria-expanded="true" aria-controls="headingThreee" style="text-align: left; font-size:20px; font-weight : 600;  ">What Is RbxAdder?</h2>
                            <div class="v-expansion-panel__header__icon"><i aria-hidden="true" class="v-icon fas fa-chevron-down theme--light"></i></div>
                        </div>
                        <div id="headingThreee" class="collapse" aria-labelledby="headingThreee" >
                            <div class="card-body " style=" font-size:16px; font-weight: 500; ">
                            RbxAdder is the most reliable service to earn free robux! we
                                    provide multiple options to our users by letting them complete
                                    offers, watch videos, install apps and invite friends to get
                                    robux!
                            </div>
                        </div>
                    
                    </li>




                    <li tabindex="0" class="v-expansion-panel__container">
                        <div class="v-expansion-panel__header">
                            <h2 class="btn btn-link text-dark" data-toggle="collapse" data-target="#headingThreee12" aria-expanded="true" aria-controls="headingThreee12" style="text-align: left; font-size:20px; font-weight : 600;  ">How to earn robux?</h2>
                            <div class="v-expansion-panel__header__icon"><i aria-hidden="true" class="v-icon fas fa-chevron-down theme--light"></i></div>
                        </div>
                        <div id="headingThreee12" class="collapse" aria-labelledby="headingThreee12" >
                            <div class="card-body " style=" font-size:16px; font-weight: 500; ">
                            You earn robux by completing offers and installing apps, then
                                    you withdraw them to your roblox account.
                                    <br>Watch this video to learn more!
                                    <div id="player"></div>
                                    <div id="player" style="padding: 10px;"><video controls="controls" width="480" height="315">
                                            <source src="/media/rbxadder.com.537a78c4.mp4" type="video/mp4"></video></div>
                            </div>
                        </div>




                    </li>



                    <li tabindex="0" class="v-expansion-panel__container">
                        <div class="v-expansion-panel__header">
                            <h2 class="btn btn-link text-dark" data-toggle="collapse" data-target="#headingThreeesdsd" aria-expanded="true" aria-controls="headingThreeesdsd" style="text-align: left; font-size:20px; font-weight : 600;  ">Is this site legit?</h2>
                            <div class="v-expansion-panel__header__icon"><i aria-hidden="true" class="v-icon fas fa-chevron-down theme--light"></i></div>
                        </div>
                        <div id="headingThreeesdsd" class="collapse" aria-labelledby="headingThreeesdsd" >
                            <div class="card-body " style=" font-size:16px; font-weight: 500; ">
                            Yes, we have already paid more than 500k R$ to our users! We
                                    do not require any sensitive informations from you except for
                                    your Roblox name(to send you rbx when you withdraw). so your
                                    account is 100% Safe
                            </div>
                        </div>



            
                    </li>


                    <li tabindex="0" class="v-expansion-panel__container">
                        <div class="v-expansion-panel__header">
                            <h2 class="btn btn-link text-dark" data-toggle="collapse" data-target="#headingww" aria-expanded="true" aria-controls="headingww" style="text-align: left; font-size:20px; font-weight : 600;  ">I completed an offer but did not earn points</h2>
                            <div class="v-expansion-panel__header__icon"><i aria-hidden="true" class="v-icon fas fa-chevron-down theme--light"></i></div>
                        </div>
                        <div id="headingww" class="collapse" aria-labelledby="headingww" >
                            <div class="card-body " style=" font-size:16px; font-weight: 500; ">
                            This may happen due to:
                                    <ul>
                                        <li>
                                            You have already had the app sometime prior to doing the
                                            offer on our site.
                                        </li>
                                        <li>
                                            You messed up sometime while doing the offer. This
                                            includes not following ANY of the steps that were given to
                                            you on our website, such as not completing the tutorial of
                                            a certain app, not reaching a certain level, etc.
                                        </li>
                                        <li>
                                            If you didn't receive robux from a SURVEY this could be
                                            due to the fact that you put in false information(only
                                            people that put in 100% accurate information will be
                                            awarded robux. The website has a very strong anti-fraud
                                            system), you don't qualify for any surveys, etc
                                        </li>
                                        <li>
                                            EVEN IF YOU MIGHT HAVE DONE EVERYTHING CORRECTLY, THE
                                            ADVERTISER COULD POSSIBLY STILL DECLINE YOUR REQUEST. This
                                            does not happen often, but it is a possibility. if this
                                            happen, please contact the offerwalls support Team.
                                        </li>
                                    </ul>
                            </div>
                        </div>

                    
                    </li>
                    <li tabindex="0" class="v-expansion-panel__container">


                    <div class="v-expansion-panel__header">
                            <h2 class="btn btn-link text-dark" data-toggle="collapse" data-target="#headingThreee" aria-expanded="true" aria-controls="headingThreee" style="text-align: left; font-size:20px; font-weight : 600;  ">I submitted a Withdraw Order, when can i get my robux?</h2>
                            <div class="v-expansion-panel__header__icon"><i aria-hidden="true" class="v-icon fas fa-chevron-down theme--light"></i></div>
                        </div>
                        <div id="headingThreee" class="collapse" aria-labelledby="headingThreee" >
                            <div class="card-body " style=" font-size:16px; font-weight: 500; ">
                            Usually you will receive your robux within the next couple of
                                    hours. but sometimes it may take up to 24 hours cause we have
                                    to restock.
                            </div>
                        </div>



                   
                    </li>
                    <li tabindex="0" class="v-expansion-panel__container">


                    <div class="v-expansion-panel__header">
                            <h2 class="btn btn-link text-dark" data-toggle="collapse" data-target="#headingThreeewewe" aria-expanded="true" aria-controls="headingThreeewewe" style="text-align: left; font-size:20px; font-weight : 600;  ">I submitted a Withdraw Order, but it was rejected? </h2>
                            <div class="v-expansion-panel__header__icon"><i aria-hidden="true" class="v-icon fas fa-chevron-down theme--light"></i></div>
                        </div>
                        <div id="headingThreeewewe" class="collapse" aria-labelledby="headingThreeewewe" >
                            <div class="card-body " style=" font-size:16px; font-weight: 500; ">
                            This can happen due to 2 reasons:
                                    <ul>
                                        <li>
                                            You did not join our Group, on the 3rd Step of the
                                            withdraw process, you must click Open Group Button THEN
                                            JOIN THE GROUP.
                                        </li>
                                        <li>
                                            You used a VPN or Proxy when completing offers, Using
                                            proxies is not allowed and doing it again will lead to
                                            suspension of the account!
                                        </li>
                                    </ul>
                            </div>
                        </div>


                    
                    </li>
                    <li tabindex="0" class="v-expansion-panel__container">


                    <div class="v-expansion-panel__header">
                            <h2 class="btn btn-link text-dark" data-toggle="collapse" data-target="#headingThreeewwwwwwww" aria-expanded="true" aria-controls="headingThreeewwwwwwww" style="text-align: left; font-size:20px; font-weight : 600;  ">Can i earn Rbx without completing surveys or offers?</h2>
                            <div class="v-expansion-panel__header__icon"><i aria-hidden="true" class="v-icon fas fa-chevron-down theme--light"></i></div>
                        </div>
                        <div id="headingThreeewwwwwwww" class="collapse" aria-labelledby="headingThreeewwwwwwww" >
                            <div class="card-body " style=" font-size:16px; font-weight: 500; ">
                            
                            Absolutely! if you dont see any offers, you can invite your
                                    friends to use our website using your referral link. and you
                                    will earn robux whenever someone signs up using your link!
                                    <br>To get your referral link go
                                    <a href="#/referrals" class="">HERE</a></div>
                            </div>
                       



                    </li>
                </ul>
            </div>
            <hr class="v-divider theme--light">
            <div class="mt-1 v-card theme--light">
                <div class="v-card__text">
                    if you still have more questions or need support, please contact
                    us in our discord server
                    <a href="https://discord.gg/f94dR8W">HERE</a></div>
            </div>
        </div>
        <div class="flex pa-2"></div>
    </div>
</div>


@endsection