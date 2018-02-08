<!DOCTYPE html>
<html xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
   <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link class="user" href="{{URL::asset('css/zen-componentsCompatible.css')}}" rel="stylesheet" type="text/css">
      <link class="user" href="{{URL::asset('css/elements.css')}}" rel="stylesheet" type="text/css">
      <link class="user" href="{{URL::asset('css/common.css')}}" rel="stylesheet" type="text/css">
      <link class="user" href="{{URL::asset('css/dStandard.css')}}" rel="stylesheet" type="text/css">
      <link class="user" href="{{URL::asset('css/extended.css')}}" rel="stylesheet" type="text/css">
      <link class="user" href="{{URL::asset('css/setup.css')}}" rel="stylesheet" type="text/css">
      <link class="user" href="{{URL::asset('css/salesforce-lightning-design-system-vf.min.css')}}" rel="stylesheet" type="text/css">
	  <link class="user" href="{{URL::asset('css/Main_Page.css')}}" rel="stylesheet" type="text/css">
      <link rel="icon" type="image/x-icon">
	  <script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
      <script src="{{URL::asset('js/Main_Page.js')}}"></script>
	  
   </head>
   <body>
      <div class="slds-scope">
         <div class="demo-only" style="height: 28.571rem;">
            <header class="slds-global-header_container">
               <a class="slds-assistive-text slds-assistive-text_focus" href="javascript:void(0);">Skip to Navigation</a><a class="slds-assistive-text slds-assistive-text_focus" href="javascript:void(0);">Skip to Main Content</a>
               <div class="slds-global-header slds-grid slds-grid_align-spread">
                  <div class="slds-global-header__item">
                     <ul class="slds-global-header__item slds-grid slds-grid_vertical-align-center">
                           <li class="slds-grid">
                              <div class="slds-global-header__logo">
								<img src="../assets/images/logo.svg" alt="Smiley face" height="30" width="30">
					 </div>
                           </li>
                           <li class="slds-dropdown-trigger slds-dropdown-trigger_click">
						   
						   <div class="slds-button-group" role="group">
<button class="slds-button slds-button_neutral">Home</button>
<button class="slds-button slds-button_neutral">Register</button>
<button class="slds-button slds-button_neutral">Login</button>

</div>
						   
						   
                              
                           </li>
						   
						  
                          
                        </ul>
					 
                  </div>
                  <div class="slds-global-header__item slds-global-header__item_search">
                     <div aria-expanded="false" aria-haspopup="listbox" class="slds-form-element slds-lookup" role="combobox">
                        <label class="slds-assistive-text" for="global-search-01">Search here</label>
                        <div class="slds-form-element__control slds-input-has-icon slds-input-has-icon_left-right">
                                 <input aria-autocomplete="list" aria-controls="global-search-list-01" autocomplete="off" class="slds-input slds-lookup__search-input" id="global-search-01" placeholder="Search" role="textbox" type="text">
                        </div>
                           </div>
                        </div>
                        <ul class="slds-global-header__item slds-grid slds-grid_vertical-align-center">
                           <li class="slds-grid">
                              <span class="slds-dropdown-trigger slds-dropdown-trigger_click">
                              <button class="slds-button slds-button_icon slds-button_icon slds-button_icon-container slds-button_icon-small slds-global-header__button_icon slds-m-left_none" title="View Favorites">
                              <img src="../assets/icons/utility/favorite_60.png" alt="Smiley face" height="17" width="17">
                              <span class="slds-assistive-text">View Favorites</span>
                              </button>
                              </span>
                           </li>
                           <li class="slds-dropdown-trigger slds-dropdown-trigger_click">
                              <button class="slds-button slds-button_icon slds-button_icon slds-button_icon-container slds-button_icon-small slds-global-header__button_icon" title="Help and Training">
                              <img src="../assets/icons/utility/help_60.png" alt="Smiley face" height="17" width="17">
                              <span class="slds-assistive-text">Help and Training</span>
                              </button>
                           </li>
                           <li class="slds-dropdown-trigger slds-dropdown-trigger_click">
                              <button class="slds-button slds-button_icon slds-button_icon slds-button_icon-container slds-button_icon-small slds-global-header__button_icon" title="Notifications" id="Notifications">
                              <img src="../assets/icons/utility/notification_60.png" alt="Smiley face" height="17" width="17">
                              <span class="slds-assistive-text">Notifications</span>
                              </button>
                           </li>
                           <li class="slds-dropdown-trigger slds-dropdown-trigger_click slds-m-left_x-small">
                              <button aria-haspopup="true" class="slds-button" title="person name">
                              <span class="slds-avatar slds-avatar_circle slds-avatar_medium">
                              <img alt="Person name" src="../assets/images/avatar2.jpg" title="User avatar">
                              </span>
                              </button>
                           </li>
						   
						   <li class="slds-dropdown-trigger slds-dropdown-trigger_click">
                              <button class="slds-button slds-button_icon slds-button_icon slds-button_icon-container slds-button_icon-small slds-global-header__button_icon" title="Logout" id="Logout">
                              <img src="../assets/icons/utility/logout_60.png" alt="Smiley face" height="17" width="17">
                              <span class="slds-assistive-text">Logout</span>
                              </button>
                           </li>
                        </ul>
                     </div>
                     <section aria-describedby="notifications-container" aria-label="Notifications" class="slds-popover slds-popover_large slds-nubbin_top-right" role="dialog" style="position: absolute; right: 5.125rem;" id="notifications-container">
                        <div class="slds-popover__body slds-p-around_none" id="notifications-container">
                           <ul>
                              <li class="slds-global-header__notification slds-p-around_xx-small slds-global-header__notification_unread">
                                 <div class="slds-media slds-has-flexi-truncate slds-p-around_x-small">
                                    <div class="slds-media__figure">
                                       <span class="slds-avatar slds-avatar_small slds-avatar_circle">
                                       <img alt="Kelly Chan" src="../assets/images/avatar3.jpg" title="Kelly Chan avatar">
                                       </span>
                                    </div>
                                    <div class="slds-media__body">
                                       <div class="slds-grid slds-grid_align-spread">
                                          <a class="slds-text-link_reset slds-has-flexi-truncate" href="javascript:void(0);">
                                             <h3 class="slds-truncate" title="Kelly Chan mentioned you in a comment:">
                                                <strong>Kelly Chan mentioned you in a comment:</strong>
                                             </h3>
                                             <p class="slds-truncate" title="I need you to review this for me @Paulina">I need you to review this for me @Paulina</p>
                                             <p class="slds-m-top_x-small slds-text-color_weak">10m ago</p>
                                          </a>
                                          <div class="slds-no-flex slds-grid slds-grid_vertical">
                                             <div class="slds-dropdown-trigger slds-dropdown-trigger_click slds-is-open">
                                                <button aria-haspopup="true" class="slds-button slds-button_icon slds-button_icon-border-filled slds-button_icon-x-small" title="Show More">
                                                <img src="../assets/icons/utility/down_60.png" alt="Smiley face" height="17" width="17">
                                                <span class="slds-assistive-text">Show More</span>
                                                </button>
                                             </div>
                                             <div class="slds-align-middle">
                                                <abbr class="slds-required slds-text-link" title="unread">●</abbr>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="slds-global-header__notification slds-p-around_xx-small">
                                 <div class="slds-media slds-has-flexi-truncate slds-p-around_x-small">
                                    <div class="slds-media__figure">
                                       <span class="slds-avatar slds-avatar_small slds-avatar_circle">
                                       <img alt="Kelly Chan" src="../assets/images/avatar3.jpg" title="Kelly Chan avatar">
                                       </span>
                                    </div>
                                    <div class="slds-media__body">
                                       <div class="slds-grid slds-grid_align-spread">
                                          <a class="slds-text-link_reset slds-has-flexi-truncate" href="javascript:void(0);">
                                             <h3 class="slds-truncate" title="Kelly Chan mentioned you in a comment:">
                                                <strong>Kelly Chan mentioned you in a comment:</strong>
                                             </h3>
                                             <p class="slds-truncate" title="I need you to review this for me @Paulina">I need you to review this for me @Paulina</p>
                                             <p class="slds-m-top_x-small slds-text-color_weak">10m ago</p>
                                          </a>
                                          <div class="slds-no-flex slds-grid slds-grid_vertical">
                                             <div class="slds-dropdown-trigger slds-dropdown-trigger_click slds-is-open">
                                                <button aria-haspopup="true" class="slds-button slds-button_icon slds-button_icon-border-filled slds-button_icon-x-small" title="Show More">
                                                <img src="../assets/icons/utility/down_60.png" alt="Smiley face" height="17" width="17">
                                                <span class="slds-assistive-text">Show More</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="slds-global-header__notification slds-p-around_xx-small">
                                 <div class="slds-media slds-has-flexi-truncate slds-p-around_x-small">
                                    <div class="slds-media__figure">
                                       <span class="slds-avatar slds-avatar_small slds-avatar_circle">
                                       <img alt="Kelly Chan" src="../assets/images/avatar3.jpg" title="Kelly Chan avatar">
                                       </span>
                                    </div>
                                    <div class="slds-media__body">
                                       <div class="slds-grid slds-grid_align-spread">
                                          <a class="slds-text-link_reset slds-has-flexi-truncate" href="javascript:void(0);">
                                             <h3 class="slds-truncate" title="Kelly Chan mentioned you in a comment:">
                                                <strong>Kelly Chan mentioned you in a comment:</strong>
                                             </h3>
                                             <p class="slds-truncate" title="I need you to review this for me @Paulina">I need you to review this for me @Paulina</p>
                                             <p class="slds-m-top_x-small slds-text-color_weak">10m ago</p>
                                          </a>
                                          <div class="slds-no-flex slds-grid slds-grid_vertical">
                                             <div class="slds-dropdown-trigger slds-dropdown-trigger_click slds-is-open">
                                                <button aria-haspopup="true" class="slds-button slds-button_icon slds-button_icon-border-filled slds-button_icon-x-small" title="Show More">
                                                <img src="../assets/icons/utility/down_60.png" alt="Smiley face" height="17" width="17">
                                                <span class="slds-assistive-text">Show More</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </section>
                  </header>
               </div>
               <div style="height: 50px;">
                  <div class="slds-docked-form-footer">
				  <ul class="slds-global-header__item slds-grid slds-grid_vertical-align-center">
                           <li class="slds-grid">
                              <div class="slds-global-header__logo">
								<img src="../assets/images/logo.svg" alt="Smiley face" height="30" width="30">
					 </div>
                           </li>
                           <li class="slds-dropdown-trigger slds-dropdown-trigger_click">
						   
						   <div class="slds-button-group" role="group">
<button class="slds-button slds-button_neutral">About Us</button>
<button class="slds-button slds-button_neutral">Contact Us</button>

</div>
						   
						   
                              
                           </li>
						   
						  
                          
                        </ul>
                  </div>
               </div>
            </div>
         </span>
         </div>
      </div>
   </body>
</html>