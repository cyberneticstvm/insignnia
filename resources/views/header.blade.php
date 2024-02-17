<!-- header area start -->
<header class="heder-two header-five header--sticky">
    <div class="header-two-container">
        <div class="row">
            <div class="col-12">
                <div class="header-main-wrapper">
                    <div class="logo-area">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="image-logo">
                        </a>
                    </div>
                    <!-- header right start -->
                    <div class="rts-header-right">
                        <div class="menu-area" id="menu-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                <rect width="18" height="2" fill="#0C0A0A" />
                                <rect y="7" width="18" height="2" fill="#0C0A0A" />
                                <rect y="14" width="18" height="2" fill="#0C0A0A" />
                            </svg>
                        </div>
                        <!-- top header -->
                        <div class="top">
                            <div class="start-top">
                                <div class="icon"><i class="fa-sharp fa-solid fa-bolt"></i></div>
                                <p>We bring happiness in your home</p>
                            </div>
                            <div class="end-top">
                                <div class="single-info">
                                    <div class="icon"><i class="fa-thin fa-location-dot"></i> </div>
                                    <p>Reg No. 20/224, K.S Road, Kovalam PO</p>
                                </div>
                                <div class="single-info">
                                    <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                                    <a href="mailto:insignniahomes@gmail.com">insignniahomes@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <!-- top header end -->
                        @include("menu")
                    </div>
                    <!-- header right end -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->