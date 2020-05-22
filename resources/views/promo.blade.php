@extends('layout.app')

@section('body')


<div class="container fluid grid-list-xs">
    <div class="layout row wrap">
        <div class="flex xs12 md6 order-xs2 order-md1">
            <div class="pa-3 v-card theme--light" style="min-height: 400px;">
                <div class="v-subheader body-2 theme--light">Redeem Code</div>
                <h3 class="px-3 my-1 body-2">How do I get a RbxAdder promotional code?</h3>
                <p class="px-3 body-1">We Give codes regularly to our Youtuber Partners and our Discord server members. a valid promotion code will add robux to your RbxAdder account</p>
                <h3 class="px-3 my-1 body-2">How do I use my promotional code?</h3>
                <p class="px-3 body-1">This is the place to redeem your code. Enter the promo code in the section below and your free robux will be automatically added to your RbxAdder account. Remember that promo codes may expire or only be active for a short period of time, so make sure to use your code right away.</p>
                <div class="v-input px-3 v-text-field v-text-field--single-line theme--light">
                    <div class="v-input__control">
                        <div class="v-input__slot">
                            <div class="v-text-field__slot"><label aria-hidden="true" class="v-label theme--light" style="left: 0px; right: auto; position: absolute;">Enter a valid RbxAdder R$ Code!</label><input aria-label="Enter a valid RbxAdder R$ Code!" required="required" type="text"></div>
                        </div>
                        <div class="v-text-field__details">
                            <div class="v-messages theme--light">
                                <div class="v-messages__wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div><button type="button" class="v-btn v-btn--block theme--dark green">
                    <div class="v-btn__content">Redeem</div>
                </button>
            </div>
        </div>
        <div class="flex xs12 md6 order-xs1 order-md2">
            <div class="layout px-2 justify-start" style="margin: 0px;"><a target="_blank" href="https://lootprize.com/?utm_source=rbxadder&amp;utm_medium=banner_profile&amp;utm_campaign=ads"><img src="https://firebasestorage.googleapis.com/v0/b/lootprize-7a860.appspot.com/o/Ads%2F05.png?alt=media&amp;token=dd5ac560-ae74-48f9-8bb1-ee997beaf70c" style="height: 100%; width: 100%;"></a></div>
        </div>
        <div class="flex pa-2 xs12 order-xs3">
            <div class="layout justify-center" style="margin: 0px;"><a target="_blank" href="https://lootprize.com/?utm_source=rbxadder&amp;utm_medium=banner_profile&amp;utm_campaign=ads"><img src="https://firebasestorage.googleapis.com/v0/b/lootprize-7a860.appspot.com/o/Ads%2F09.png?alt=media&amp;token=9929541e-5ecf-4036-969f-e0862bb2309c" style="height: 100%; width: 100%;"></a></div>
        </div>
        <div class="flex xs12 order-xs4">
            <div class="pa-3 v-card theme--light">
                <div class="v-list v-list--dense v-list--subheader theme--light">
                    <div class="v-subheader theme--light">Rbx Earned</div>
                    <div>
                        <div class="v-list__tile v-list__tile--avatar theme--light">
                            <div class="v-list__tile__avatar">
                                <div class="v-avatar" style="height: 40px; width: 40px;"><img src="{{asset('/images/discord_circle.2a15b64a.png')}}"></div>
                            </div>
                            <div class="v-list__tile__content">
                                <div class="v-list__tile__title">You earned 0.25 Rbx from joining our Discord Group</div>
                            </div><span class="v-list__tile__action-text">8 days ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection