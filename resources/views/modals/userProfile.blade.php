
<div id="userProfileModal" class="modal">
    <div class="modal-content">
        <body>
        <br/>
        <br/>
        <br/>
        <div class="row">
            <div class="column1">
                <div class="slds-scope">
                    <section aria-describedby="modal-content-id-1" aria-labelledby="modal-heading-01" aria-modal="true"
                             class="slds-modal slds-fade-in-open" role="dialog" tabindex="-1">
                        <article class="slds-card" style="Width:40%; margin: 8% auto;">
                            <div class="slds-card__header slds-grid">
                                <button class="slds-button slds-button__icon_left">
                                    <span class="closeU">X</span>
                                </button>
                                <div style="background-color: rgb(244, 246, 249);">
                                    <div class="slds-text-heading_small slds-text-body_regular slds-text-align_center slds-m-top_medium">
                                        Upvotes<br>10<br></div>
                                </div>
                                <span class="slds-align_absolute-center slds-avatar slds-avatar_circle slds-avatar_large">
                                    <img alt="Person name" src="/assets/images/avatar2.jpg" title="User avatar"/>
                                </span>
                                <div class="slds-text-heading_small slds-text-body_regular slds-text-align_center slds-m-top_medium">
                                    Answers<br>20<br></div>
                            </div>
                            <div class="slds-media__body">
                                <div class="slds-align_absolute-center">
                                    <div class="slds-split-view_container">
                                        <dl class="slds-list_horizontal slds-wrap">
                                            <dt class="slds-p-top_xx-large slds-text-align_center slds-text-heading_medium slds-item_label slds-text-color_weak slds-truncate"
                                                title="First Label">Username:
                                            </dt>
                                            <dd class="slds-p-top_xx-large slds-text-align_left slds-text-heading_medium slds-item_detail slds-truncate"
                                                title="Description for first label">{{\App\Http\Controllers\ClientControllerHelper::getFromDB('username')}}
                                            </dd>
                                            <dt class="slds-text-align_center slds-text-heading_medium slds-item_label slds-text-color_weak slds-truncate"
                                                title="Second Label">Email:
                                            </dt>
                                            <dd class="slds-text-align_left slds-text-heading_medium slds-item_detail slds-truncate"
                                                title="Description for second label">{{\App\Http\Controllers\ClientControllerHelper::getFromDB('email')}}
                                            </dd>
                                            <dt class="slds-text-align_center slds-text-heading_medium slds-item_label slds-text-color_weak slds-truncate"
                                                title="Second Label">Password:
                                            </dt>
                                            <dd class="slds-text-align_left slds-text-heading_medium slds-item_detail slds-truncate"
                                                title="Description for second label">**********
                                            </dd>
                                        </dl>
                                        <div style="padding: 0.5rem; background-color: rgb(244, 246, 249); padding-left: 13cm;">
                                            <button class="slds-button slds-button_icon slds-button_icon-border-filled">
                                                <svg class="slds-button__icon_small slds-button__icon"
                                                     aria-hidden="false">
                                                    <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#edit"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"/>
                                                </svg>
                                                <span class="slds-assistive-text">Edit user profile</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </section>
                    <div class="slds-backdrop slds-backdrop_open"></div>
                </div>
            </div>
        </div>
        </body>
    </div>
</div>
<link class="user" href="{{URL::asset('css/salesforce-lightning-design-system-vf.min.css')}}" rel="stylesheet"
      type="text/css">
<link class="user" href="{{URL::asset('css/mainpage.css')}}" rel="stylesheet" type="text/css">
<link class="user" href="{{URL::asset('css/ourstyle.css')}}" rel="stylesheet" type="text/css">
<link rel="icon" type="image/x-icon">
<script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/mainpage.js')}}"></script>
<script src="{{ URL::asset('js/register.js') }}" type="text/javascript"></script>
