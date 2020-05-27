@extends('layout.app')

@section('body')


<div class="container fluid grid-list-lg">
    <div class="flex xs12">
        <div class="v-alert deep-orange" style="display: none;"><i aria-hidden="true" class="v-icon fas fa-exclamation theme--light v-alert__icon"></i>
            <div>We are currently out of stock on Robux, so withdraw orders are disabled, please be patient and ckeck back later!</div>
        </div>
    </div>
    <div class="v-stepper v-stepper--vertical theme--light">


        <nav class="navbar navbar-dark bg-dark bgImage ">
                        <h2 class="navbar-brand pl-4 text-light ">Withdraw Robux </h2>

                    </nav>
        <div class="v-stepper__step v-stepper__step--active"><span class="v-stepper__step__step primary">1</span>
            <div class="v-stepper__label">Select RBX Amount to withdraw</div>
        </div>
        <div class="v-stepper__content">
            <div class="v-stepper__wrapper" style="height: auto;">
                <div class="flex xs12 sm6 md4 lg3">
                    <div class="v-subheader pl-0 theme--light">Robux Amount</div>
                    <div class="v-input mt-0 v-text-field v-input--is-label-active v-input--is-dirty theme--light">
                        <div class="v-input__control">
                            <div class="v-input__slot">
                                <div class="v-text-field__slot"><input type="number"></div>
                            </div>
                            <div class="v-text-field__details">
                                <div class="v-messages theme--light">
                                    <div class="v-messages__wrapper"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><button type="button" class="  v-btn theme--light primary bg-dark">
                    <div class="v-btn__content ">Continue</div>
                </button>
            </div>
        </div>
        <div class="v-stepper__step v-stepper__step--inactive"><span class="v-stepper__step__step">2</span>
            <div class="v-stepper__label">Join Group</div>
        </div>
        <div class="v-stepper__content">
            <div class="v-stepper__wrapper" style="height: 0px;">
                <h3>Click the "Open Group" button then join the group in roblox.</h3>
                <h3>We will send you the Rbx through the group so make sure you join using the Username you provided earlier</h3><button type="button" class="mb-3 v-btn v-btn--block theme--dark orange darken-1">
                    <div class="v-btn__content">Open Group</div>
                </button><button disabled="disabled" type="button" class="v-btn v-btn--disabled theme--light primary">
                    <div class="v-btn__content">Continue</div>
                </button><button type="button" class="v-btn v-btn--flat theme--light">
                    <div class="v-btn__content">Back</div>
                </button>
            </div>
        </div>
        <div class="v-stepper__step v-stepper__step--inactive"><span class="v-stepper__step__step">3</span>
            <div class="v-stepper__label">Finish!</div>
        </div>
        <div class="v-stepper__content">
            <div class="v-stepper__wrapper" style="height: 0px;">
                <div class="v-alert mb-3 success"><i aria-hidden="true" class="v-icon fas fa-check-circle theme--light v-alert__icon"></i>
                    <div>Successfully submitted widthraw order.</div>
                </div>
                <p class="subheading green--text">Share RbxAdder Link on Social Media to earn 1 extra Robux for free!</p>
                <div><button type="button" class="v-btn theme--dark" style="background-color: rgb(59, 89, 152); border-color: rgb(59, 89, 152);">
                        <div class="v-btn__content"><i aria-hidden="true" class="v-icon v-icon--left  fab fa-facebook-f theme--dark white--text"></i>Facebook
                        </div>
                    </button><button type="button" class="v-btn theme--dark" style="background-color: rgb(66, 156, 214); border-color: rgb(66, 156, 214);">
                        <div class="v-btn__content"><i aria-hidden="true" class="v-icon v-icon--left  fab fa-twitter theme--dark white--text"></i>Twitter
                        </div>
                    </button><button type="button" class="v-btn theme--dark" style="background-color: rgb(255, 69, 0); border-color: rgb(255, 69, 0);">
                        <div class="v-btn__content"><i aria-hidden="true" class="v-icon v-icon--left  fab fa-reddit-alien theme--dark white--text"></i>Reddit
                        </div>
                    </button></div>
            </div>
        </div>
    </div>
    <div class="flex pa-2">
        <div class="flex xs12">
            <div class="layout justify-center" style="margin: 0px;"><a target="_blank" href="https://lootprize.com/?utm_source=rbxadder&amp;utm_medium=banner_withdraw&amp;utm_campaign=ads"><img src="https://firebasestorage.googleapis.com/v0/b/lootprize-7a860.appspot.com/o/Ads%2F09.png?alt=media&amp;token=9929541e-5ecf-4036-969f-e0862bb2309c" style="height: 100%; width: 100%;"></a></div>
        </div>
    </div>
    <div class="mb-3 v-card theme--light">
        <div class="v-subheader pl-4 theme--light">Widthraw History</div>
        <div class="elevation-1">
            <div class="v-table__overflow">
                <table class="v-datatable v-table theme--light">
                    <thead>
                        <tr>
                            <th role="columnheader" scope="col" aria-label="ID: Not sorted." aria-sort="none" class="column text-xs-left">ID</th>
                            <th role="columnheader" scope="col" aria-label="Username: Not sorted." aria-sort="none" class="column text-xs-left">Username</th>
                            <th role="columnheader" scope="col" aria-label="Amount: Not sorted." aria-sort="none" class="column text-xs-left">Amount</th>
                            <th role="columnheader" scope="col" aria-label="Date: Not sorted." aria-sort="none" class="column text-xs-left">Date</th>
                            <th role="columnheader" scope="col" aria-label="Status: Not sorted." aria-sort="none" class="column text-xs-left">Status</th>
                        </tr>
                        <tr class="v-datatable__progress">
                            <th colspan="5" class="column"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" class="text-xs-center">No data available</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




@endsection