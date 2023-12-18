<header class="global-header">
    <nav class="global-header__content">
        <div class="global-header__content__buttons">
            <a href="<?php echo url_for('index'); ?>" class="header__home">
                <svg width="200" height="60" xmlns="http://www.w3.org/2000/svg">
                    <!-- Letter S -->
                    <path d="M10 10 Q 25 0, 40 10 T 70 20 Q 70 30, 60 40 Q 45 50, 30 40 T 0 30" fill="none" stroke="black" stroke-width="2" />
                    <!-- Letter E -->
                    <path d="M80 10 L 100 10 L 100 20 L 80 20 M 80 25 L 100 25 M 80 30 L 100 30 L 100 40 L 80 40" fill="none" stroke="black" stroke-width="2" />
                    <path d="M120 10 L 140 10 L 140 20 L 120 20 M 120 25 L 140 25 M 120 30 L 140 30 L 140 40 L 120 40" fill="none" stroke="black" stroke-width="2" />
                    <!-- Letter K -->
                    <path d="M160 10 L 160 40 M 160 25 L 180 10 M 160 25 L 180 40" fill="none" stroke="black" stroke-width="2" />
                </svg>

            </a>
        </div>
        <div class="global-search">
            <input type="text" placeholder="Search" id="main-search">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.669 21.6543C21.8625 21.4622 21.863 21.1494 21.6703 20.9566L17.3049 16.5913C18.7912 14.9327 19.7017 12.7525 19.7017 10.3508C19.7017 5.18819 15.5135 1 10.3508 1C5.18819 1 1 5.18819 1 10.3508C1 15.5135 5.18819 19.7017 10.3508 19.7017C12.7624 19.7017 14.9475 18.7813 16.606 17.2852L20.9739 21.653C21.1657 21.8449 21.4765 21.8454 21.669 21.6543ZM1.9843 10.3508C1.9843 5.7394 5.7394 1.9843 10.3508 1.9843C14.9623 1.9843 18.7174 5.7394 18.7174 10.3508C18.7174 14.9623 14.9623 18.7174 10.3508 18.7174C5.7394 18.7174 1.9843 14.9623 1.9843 10.3508Z" fill="#A5A5A5" stroke="#A5A5A5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div id="search-show" style="position:relative;">
                <div class="search-result" style="position:absolute;top:28px;left:-253px;"></div>
            </div>
        </div>
        <div class="global-header__content__buttons header--desktop">
            <a href="<?php echo url_for('index'); ?>">
                <?php if (strpos($_SERVER['REQUEST_URI'], '/index')) : ?>
                    <svg aria-label="Home" class="_8-yf5" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                        <path d="M22 23h-6.001a1 1 0 01-1-1v-5.455a2.997 2.997 0 10-5.993 0V22a1 1 0 01-1 1H2a1 1 0 01-1-1V11.543a1.002 1.002 0 01.31-.724l10-9.543a1.001 1.001 0 011.38 0l10 9.543a1.002 1.002 0 01.31.724V22a1 1 0 01-1 1z"></path>
                    </svg>
                <?php else : ?>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.45307 11.751L11.9773 2.02175L21.5015 11.751C21.7906 12.0463 21.9545 12.4468 21.9545 12.8711V20.4556C21.9545 20.7747 21.7037 21 21.4427 21H15.964C15.713 21 15.4721 20.7849 15.4721 20.476V15.8886C15.4721 13.9497 13.9267 12.34 11.9773 12.34C10.0279 12.34 8.48244 13.9497 8.48244 15.8886V20.476C8.48244 20.7849 8.24157 21 7.99053 21H2.51187C2.25085 21 2 20.7747 2 20.4556V12.8711C2 12.4468 2.16397 12.0463 2.45307 11.751Z" stroke="var(--text-dark)" stroke-width="2" />
                    </svg>
                <?php endif; ?>
            </a>
            <a href="<?php echo url_for('direct/inbox'); ?>">
                <?php if (strpos($_SERVER['REQUEST_URI'], 'direct/inbox')) : ?>
                    <svg aria-label="Direct" class="_ab6-" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                        <path d="M22.91 2.388a.69.69 0 00-.597-.347l-20.625.002a.687.687 0 00-.482 1.178L7.26 9.16a.686.686 0 00.778.128l7.612-3.657a.723.723 0 01.937.248.688.688 0 01-.225.932l-7.144 4.52a.69.69 0 00-.3.743l2.102 8.692a.687.687 0 00.566.518.655.655 0 00.103.008.686.686 0 00.59-.337L22.903 3.08a.688.688 0 00.007-.692" fill-rule="evenodd"></path>
                    </svg>
                <?php else : ?>
                    <svg aria-label="Direct" class="_ab6-" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                        <line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2" x1="22" x2="9.218" y1="3" y2="10.083"></line>
                        <polygon fill="none" points="11.698 20.334 22 3.001 2 3.001 9.218 10.084 11.698 20.334" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></polygon>
                    </svg>
                <?php endif; ?>
            </a>
            <div class="icon_container cursor-pointer" id="postModal">
                <svg aria-label="New post" class="_ab6-" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                    <path d="M2 12v3.45c0 2.849.698 4.005 1.606 4.944.94.909 2.098 1.608 4.946 1.608h6.896c2.848 0 4.006-.7 4.946-1.608C21.302 19.455 22 18.3 22 15.45V8.552c0-2.849-.698-4.006-1.606-4.945C19.454 2.7 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.547 2 5.703 2 8.552z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="6.545" x2="17.455" y1="12.001" y2="12.001"></line>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12.003" x2="12.003" y1="6.545" y2="17.455"></line>
                </svg>
            </div>
            <a href="<?php echo url_for('explore'); ?>" class="icon_container">
                <?php if (strpos($_SERVER['REQUEST_URI'], '/explore')) : ?>
                    <svg aria-label="Find People" class="_ab6-" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                        <path d="M13.173 13.164l1.491-3.829-3.83 1.49zM12.001.5a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012.001.5zm5.35 7.443l-2.478 6.369a1 1 0 01-.57.569l-6.36 2.47a1 1 0 01-1.294-1.294l2.48-6.369a1 1 0 01.57-.569l6.359-2.47a1 1 0 011.294 1.294z"></path>
                    </svg>
                <?php else : ?>
                    <svg aria-label="Find People" class="_ab6-" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                        <polygon fill="none" points="13.941 13.953 7.581 16.424 10.06 10.056 16.42 7.585 13.941 13.953" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon>
                        <polygon fill-rule="evenodd" points="10.06 10.056 13.949 13.945 7.581 16.424 10.06 10.056"></polygon>
                        <circle cx="12.001" cy="12.005" fill="none" r="10.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                    </svg>
                <?php endif; ?>
            </a>
            <button class="profile-button cursor-pointer" style="position:relative;">
                <div class="profile--container">
                    <img src="<?php echo url_for($user->profileImage); ?>" alt="<?= $user->fullName; ?>">
                </div>
                <div class="menu-container" style="display: none;">
                    <ul class="menu-bar">
                        <li class="menu_me_wrap">
                            <a href="<?php echo url_for('profile'); ?>">
                                <svg aria-label="Profile" class="_ab6-" color="#262626" fill="#262626" height="16" role="img" viewBox="0 0 24 24" width="16">
                                    <circle cx="12.004" cy="12.004" fill="none" r="10.5" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"></circle>
                                    <path d="M18.793 20.014a6.08 6.08 0 00-1.778-2.447 3.991 3.991 0 00-2.386-.791H9.38a3.994 3.994 0 00-2.386.791 6.09 6.09 0 00-1.779 2.447" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"></path>
                                    <circle cx="12.006" cy="9.718" fill="none" r="4.109" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"></circle>
                                </svg>
                                <span class="menu-text">Profile</span>
                            </a>
                        </li>
                        <li class="menu_me_wrap">
                            <a href="<?php echo url_for('saved'); ?>">
                                <svg aria-label="Saved" class="_ab6-" color="#262626" fill="#262626" height="16" role="img" viewBox="0 0 24 24" width="16">
                                    <polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon>
                                </svg>
                                <span class="menu-text">Saved</span>
                            </a>
                        </li>
                        <li class="menu_me_wrap">
                            <a href="<?php echo url_for('settings'); ?>">
                                <svg aria-label="Settings" class="_ab6-" color="#262626" fill="#262626" height="16" role="img" viewBox="0 0 24 24" width="16">
                                    <circle cx="12" cy="12" fill="none" r="8.635" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                    <path d="M14.232 3.656a1.269 1.269 0 01-.796-.66L12.93 2h-1.86l-.505.996a1.269 1.269 0 01-.796.66m-.001 16.688a1.269 1.269 0 01.796.66l.505.996h1.862l.505-.996a1.269 1.269 0 01.796-.66M3.656 9.768a1.269 1.269 0 01-.66.796L2 11.07v1.862l.996.505a1.269 1.269 0 01.66.796m16.688-.001a1.269 1.269 0 01.66-.796L22 12.93v-1.86l-.996-.505a1.269 1.269 0 01-.66-.796M7.678 4.522a1.269 1.269 0 01-1.03.096l-1.06-.348L4.27 5.587l.348 1.062a1.269 1.269 0 01-.096 1.03m11.8 11.799a1.269 1.269 0 011.03-.096l1.06.348 1.318-1.317-.348-1.062a1.269 1.269 0 01.096-1.03m-14.956.001a1.269 1.269 0 01.096 1.03l-.348 1.06 1.317 1.318 1.062-.348a1.269 1.269 0 011.03.096m11.799-11.8a1.269 1.269 0 01-.096-1.03l.348-1.06-1.317-1.318-1.062.348a1.269 1.269 0 01-1.03-.096" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                                <span class="menu-text">Settings</span>
                            </a>
                        </li>
                        <li class="menu_me_wrap">
                            <a href="#">
                                <svg aria-label="Switch accounts" class="_ab6-" color="#262626" fill="#262626" height="16" role="img" viewBox="0 0 24 24" width="16">
                                    <path d="M8 8.363a1 1 0 00-1-1H4.31a8.977 8.977 0 0114.054-1.727 1 1 0 101.414-1.414A11.003 11.003 0 003 5.672V3.363a1 1 0 10-2 0v5a1 1 0 001 1h5a1 1 0 001-1zm14 6.274h-5a1 1 0 000 2h2.69a8.977 8.977 0 01-14.054 1.727 1 1 0 00-1.414 1.414A11.004 11.004 0 0021 18.33v2.307a1 1 0 002 0v-5a1 1 0 00-1-1z"></path>
                                </svg>
                                <span class="menu-text">Switch Account</span>
                            </a>
                        </li>
                        <li class="menu_me_wrap border-separator">
                            <a href="<?php echo url_for('logout'); ?>">
                                <span class="menu-text logout-text">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </button>

        </div>
    </nav>
</header>