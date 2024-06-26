<!--==================================
              Overlay Start Here
    ===================================-->

@php
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
@endphp

<div class="overlay-content">
    <div class="modal-content-inr">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="logo-main">
                <div class="logo-otr"></div>
                <div class="close-icon-otr">
                    <i class="ri-close-line close-icon"></i>
                </div>
            </div>
            <div class="linkk-otr">
                <a href="/" class="linkk-home heading-h4">Home 🏛</a>
            </div>

            <div class="linkk-otr">
                <a href="/blog" class="linkk-home heading-h4">Blog 📝</a>
            </div>

            <div class="linkk-otr">
                <a href="/project" class="linkk-home heading-h4">Project 👨‍💻</a>
            </div>
            <div class="linkk-otr">
                <a href="/code" class="linkk-home heading-h4">SourceCode 🕵🏻‍♀️</a>
            </div>

            <div class="linkk-otr">
                <a href="/about" class="linkk-home heading-h4">About 🙌🏻</a>
            </div>
        </div>
    </div>
</div>

<!--==================================
        Overlay End Here
===================================-->

<!--==================================
              Navbar Start Here
    ===================================-->

<div class="navbar-main">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="logo-otr">
                <a href="/" class="logo-a">
                    <img src="../../../assets/img/logo.jpg" alt="brand-logo" width="100px">
                </a>
            </div>
            <div class="navigation-otr">
                <ul class="navigation-inr">
                    <li class="navigation-li nav-li1">
                        <a href="/" class="nav-a heading-SB">Home 🏛</a>
                    </li>

                    <li class="navigation-li nav-li2">
                        <a href="/blog" class="nav-a heading-SB">Blog 📝</a>
                    </li>
                    <li class="navigation-li nav-li5">
                        <a href="/about" class="nav-a heading-SB">About 🙌🏻</a>
                    </li>
                </ul>
            </div>
            <div class="search-main right-space">
                <input type="text" class="input heading-SB" placeholder="Search" />
                <i class="ri-search-line search-icon"></i>
            </div>
        </div>
    </div>
</div>

<!--==================================
              Navbar End Here
    ===================================-->