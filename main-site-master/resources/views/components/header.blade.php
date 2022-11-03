<header class="page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap" style="height: 150.875px;">
        <nav class="rd-navbar rd-navbar-default rd-navbar-original rd-navbar-static" data-layout="rd-navbar-fixed"
             data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed"
             data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-device-layout="rd-navbar-fixed"
             data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
             data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static"
             data-xxl-device-layout="rd-navbar-static" data-xl-stick-up-offset="50px" data-xxl-stick-up-offset="50px">
            <!-- RD Navbar Top Panel-->
            <div class="rd-navbar-top-panel rd-navbar-top-panel-dark">
                <div class="rd-navbar-top-panel__main toggle-original-elements">
                    <div class="rd-navbar-top-panel__toggle rd-navbar-fixed__element-1 rd-navbar-static--hidden toggle-original"
                         data-rd-navbar-toggle=".rd-navbar-top-panel__main"><span></span></div>
                    <div class="rd-navbar-top-panel__content">
                        <div class="rd-navbar-top-panel__left">
                            <ul class="rd-navbar-items-list">
                                <li>
                                    <div class="unit flex-row align-items-center unit-spacing-xs">
                                        <div class="unit__left"><span
                                                    class="icon icon-sm icon-primary linear-icon-map-marker"></span>
                                        </div>
                                        <div class="unit__body">
                                            <p><a href="#">Address: Level 17 6750 Ayala Avenue, Makati City</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit flex-row align-items-center unit-spacing-xs">
                                        <div class="unit__left"><span
                                                    class="icon icon-sm icon-primary linear-icon-telephone"></span>
                                        </div>
                                        <div class="unit__body">
                                            <ul class="list-semicolon">
                                                <li><a href="tel:#">0991 666 5252</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit flex-row align-items-center unit-spacing-xs">
                                        <div class="unit__left"><span
                                                    class="icon icon-sm icon-primary linear-icon-envelope"></span>
                                        </div>
                                        <div class="unit__body">
                                            <ul class="list-semicolon">
                                                <li><a href="mailto:support@uxapps.ph">support@uxapps.ph</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="rd-navbar-top-panel__right">
                            <ul class="list-inline-xxs">
                                <li><a class="icon icon-xxs icon-gray-darker fa fa-facebook" href="https://www.facebook.com/uxapps.ph/"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rd-navbar-inner rd-navbar-search-wrap toggle-original-elements">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel rd-navbar-search-lg_collapsable">
                    <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                        <span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand">
                        <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark"
                                                                            src="{{ asset('/images/logo.png') }}" alt=""
                                                                            width="275" height="60" loading="lazy"><img
                                    class="brand-logo-light" src="{{ asset('/images/ux.png') }}" alt="" width="275"
                                    height="60" loading="lazy"></a>
                    </div>
                </div>
                <!-- RD Navbar Nav-->
                <div class="rd-navbar-nav-wrap rd-navbar-search_not-collapsable toggle-original-elements">
                    <div class="rd-navbar-search_collapsable">
                        <ul class="rd-navbar-nav">
                            <!-- <li class="rd-nav-item rd-navbar--has-megamenu rd-navbar-submenu"><a href='/' class="rd-nav-link">Solutions</a>
                                <ul class="rd-menu rd-navbar-megamenu rd-navbar-open-right">
                                    <li class="rd-megamenu-item">
                                        <p class="rd-megamenu-header">
                                            <img width='45' src="{{ asset('/images/logo/digitalcity.png') }}">
                                            DigitalCity PH
                                        </p>
                                        <ul class="rd-megamenu-list">
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                                                 href="{{ route('dc.lgu') }}">Local Government
                                                    System</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                                                 href="{{ route('dc.jail') }}">Jail Management
                                                    System</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                                                 href="{{ route('dc.school') }}">School
                                                    Management System</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                                                 href="/charmhealth">EHR Management
                                                    System</a></li>
                                        </ul>
                                    </li>
                                    <li class="rd-megamenu-item">
                                        <p class="rd-megamenu-header">
                                            <img width='45' src="{{ asset('/images/logo/petsfindway.png') }}">
                                            PetsFindWays PH
                                        </p>
                                        <ul class="rd-megamenu-list">
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                                                 href="{{ route('pfw.main') }}">One-Stop Shop Pet Services</a></li>
                                        </ul>
                                    </li>
                                    <li class="rd-megamenu-item">
                                        <p class="rd-megamenu-header">
                                            <img width='45' src="{{ asset('/images/logo/prizone.png') }}">
                                            PRIzONE PH
                                        </p>
                                        <ul class="rd-megamenu-list">
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                                                 href="{{ route('dc.jail') }}">Reformative Justice. Personal Dignity. Human Rights</a></li>
                                        </ul>
                                    </li>
                                    <li class="rd-megamenu-item">
                                        <p class="rd-megamenu-header">
                                            <img width='45' src="{{ asset('/images/logo/saluspopuli.png') }}">
                                            SalusPopuli PH
                                        </p>
                                        <ul class="rd-megamenu-list">
                                            <li class="rd-megamenu-list-item">
                                                <a class="rd-megamenu-list-link" href="{{ route('charmhealth') }}">
                                                    ChARM EHR
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="rd-megamenu-item">
                                        <p class="rd-megamenu-header">
                                            <img width='45' src="{{ asset('/images/logo/mactv.png') }}">
                                            MACTech
                                        </p>
                                        <ul class="rd-megamenu-list">
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                                                 href="{{ route('mactech.blockchain') }}">Blockchain Technology - Research and Development</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a class="rd-nav-link">Solutions</a>
                                <ul class="rd-menu rd-navbar-dropdown">
                                    <li class="rd-dropdown-item">
                                        <a class="rd-dropdown-link" href="{{ route('dc.lgu') }}">
                                             Digital City PH
                                        </a>
                                    </li>
                                    <li class="rd-dropdown-item">
                                        <a class="rd-dropdown-link" href="{{ route('pfw.main') }}">
                                             Pets Find Ways PH
                                        </a>
                                    </li>
                                    <li class="rd-dropdown-item">
                                        <a class="rd-dropdown-link" href="{{ route('dc.jail') }}">
                                             PrizOne PH
                                        </a>
                                    </li>
                                    <li class="rd-dropdown-item">
                                        <a class="rd-dropdown-link" href="{{ route('charmhealth') }}">
                                             SalusPopuli PH
                                        </a>
                                    </li>
                                    <li class="rd-dropdown-item">
                                        <a class="rd-dropdown-link" href="{{ route('mactech.blockchain') }}">
                                             MacTech PH
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a class="rd-nav-link">ZOHO</a>
                                <ul class="rd-menu rd-navbar-dropdown">
                                    <li class="rd-dropdown-item">
                                        <a class="rd-dropdown-link" href="{{ route('zoho.one') }}">
                                             Zoho One
                                        </a>
                                    </li>
                                    <li class="rd-dropdown-item">
                                        <a class="rd-dropdown-link" href="{{ route('zoho.crm') }}">
                                             Zoho CRM Suite
                                        </a>
                                    </li>
                                    <li class="rd-dropdown-item">
                                        <a class="rd-dropdown-link" href="{{ route('zoho.wp') }}">
                                             Zoho Workplace
                                        </a>
                                    </li>
                                    <li class="rd-dropdown-item">
                                        <a class="rd-dropdown-link" href="{{ route('zoho.connect') }}">
                                             Zoho Connect
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li class="rd-nav-item rd-navbar--has-megamenu rd-navbar-submenu"><a class="rd-nav-link">Zoho</a>
                                <ul class="rd-menu rd-navbar-megamenu rd-navbar-open-right">
                                    <li class="rd-megamenu-item" style="padding-bottom: 20px; padding-top: 20px">
                                        <p class="rd-megamenu-header">
                                            <img width="36" src="https://www.zohowebstatic.com/sites/default/files/one-logo.png">
                                            <a class="rd-megamenu-list-link"
                                               href="/zoho-one"> Zoho One</a>
                                        </p>
                                    </li>
                                    <li class="rd-megamenu-item" style="padding-bottom: 20px; padding-top: 20px">
                                        <p class="rd-megamenu-header">
                                            <img width="36" src="https://www.zohowebstatic.com/sites/default/files/crmplus-logo.png">
                                            <a class="rd-megamenu-list-link"
                                               href="/zoho-crm"> Zoho Crm Suite</a>
                                        </p>
                                    </li>
                                    <li class="rd-megamenu-item" style="padding-bottom: 20px; padding-top: 20px">
                                        <p class="rd-megamenu-header">
                                            <img width="36" src="https://www.zohowebstatic.com/sites/default/files/workplace-logo.png">
                                            <a class="rd-megamenu-list-link"
                                               href="/workplace"> Zoho Workplace</a>
                                        </p>
                                    </li>
                                    <li class="rd-megamenu-item" style="padding-bottom: 20px; padding-top: 20px">
                                        <p class="rd-megamenu-header">
                                            <img width='36' src="https://www.zohowebstatic.com/sites/default/files/styles/product-home-page/public/connect-icon_1.png?itok=s3N1b559">
                                            <a href="/zoho-connect"> Zoho Connect</a>
                                        </p>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a href="/services" class="rd-nav-link">Services</a>
                                <ul class="rd-menu rd-navbar-dropdown">
                                    <li class="rd-dropdown-item">
                                        <a class="rd-dropdown-link" href="{{ route('services.orm') }}">
                                             Reputation Management
                                        </a>
                                    </li>
                                    <li class="rd-dropdown-item">
                                        <a class="rd-dropdown-link" href="{{ route('zoho.wp') }}">
                                             Workplace and Collaboration
                                        </a>
                                    </li>
                                    <li class="rd-dropdown-item">
                                        <a class="rd-dropdown-link" href="{{ route('services.implementation') }}">
                                             Implementation Services
                                        </a>
                                    </li>
                                    <li class="rd-dropdown-item">
                                        <a class="rd-dropdown-link" href="{{ route('services.training') }}">
                                             Training and Development
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a class="rd-nav-link">Resources</a>
                                <ul class="rd-menu rd-navbar-dropdown">
                                    <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-list" href="/privacy-policy">Privacy Policy</a>
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-list" href="{{ route('terms') }}">Terms of Use</a>
                                        </li>
                                    </li>
                                </ul>
                            </li>
                            <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a class="rd-nav-link">Support</a>
                                <ul class="rd-menu rd-navbar-dropdown">
                                    <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-list" href="{{ route('careers') }}">Careers</a>
                                    </li>
                                </ul>
                            </li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>