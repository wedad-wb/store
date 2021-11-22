@extends('layouts.link')
@section('link')

    <div class="container-scroller">
        {{--        up navbar--}}
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <h2 class=p-5>Store</h2>

            </div>


            <div class="navbar-menu-wrapper d-flex align-items-center">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">
                    {{--                  message--}}
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                           data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-message-text-outline"></i>
                            <span class="count bg-warning">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                             aria-labelledby="messageDropdown">
                            <div class="dropdown-item py-3">
                                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails
                                </p>
                                <span class="badge badge-inverse-info badge-pill float-right">View all</span>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('back/images/faces/face4.jpg')}}" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-normal text-dark mb-1">David Grey
                                        <span
                                            class="float-right font-weight-light small-text text-gray">1 Minutes ago</span>
                                    </h6>
                                    <p class="font-weight-light small-text mb-0">
                                        The meeting is cancelled
                                    </p>
                                </div>
                            </a>

                        </div>
                    </li>
                    {{--                  nofication--}}
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                           data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="count bg-success">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                             aria-labelledby="notificationDropdown">
                            <a class="dropdown-item py-3">
                                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications
                                </p>
                                <span class="badge badge-pill badge-inverse-info float-right">View all</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-inverse-success">
                                        <i class="mdi mdi-alert-circle-outline mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0">
                                        Just now
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    {{--                 color --}}
                    <li class="nav-item d-none d-lg-block color-setting">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-tune"></i>
                        </a>
                    </li>
                </ul>

                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>


        <!-- color setting panel -->
        <div class="container-fluid page-body-wrapper">

            <div class="theme-setting-wrapper">
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close mdi mdi-close"></i>
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">
                            Template Color</p>
                    </div>
                    <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                        Dark
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>
                        Light
                    </div>
                    <p class="settings-heading font-weight-bold mt-2">Header Color</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles primary"></div>
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles pink"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <div class="d-flex align-items-center justify-content-between border-bottom">
                    <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">
                        Friends</p>
                </div>
                <ul class="chat-list">
                    <li class="list active">
                        <div class="profile"><img src="{{asset('back/images/faces/face1.jpg')}}" alt="image"><span
                                class="online"></span></div>
                        <div class="info">
                            <p>Thomas Douglas</p>
                            <p>Available</p>
                        </div>
                        <small class="text-muted my-auto">19 min</small>
                    </li>
                    <li class="list">
                        <div class="profile"><img src="{{asset('back/images/faces/face2.jpg')}}" alt="image"><span
                                class="offline"></span></div>
                        <div class="info">
                            <div class="wrapper d-flex">
                                <p>Catherine</p>
                            </div>
                            <p>Away</p>
                        </div>
                        <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                        <small class="text-muted my-auto">23 min</small>
                    </li>
                    <li class="list">
                        <div class="profile"><img src="{{asset('back/images/faces/face3.jpg')}}" alt="image"><span
                                class="online"></span></div>
                        <div class="info">
                            <p>Daniel Russell</p>
                            <p>Available</p>
                        </div>
                        <small class="text-muted my-auto">14 min</small>
                    </li>
                    <li class="list">
                        <div class="profile"><img src="{{asset('back/images/faces/face4.jpg')}}" alt="image"><span
                                class="offline"></span></div>
                        <div class="info">
                            <p>James Richardson</p>
                            <p>Away</p>
                        </div>
                        <small class="text-muted my-auto">2 min</small>
                    </li>
                    <li class="list">
                        <div class="profile"><img src="{{asset('back/images/faces/face5.jpg')}}" alt="image"><span
                                class="online"></span></div>
                        <div class="info">
                            <p>Madeline Kennedy</p>
                            <p>Available</p>
                        </div>
                        <small class="text-muted my-auto">5 min</small>
                    </li>
                    <li class="list">
                        <div class="profile"><img src="{{asset('back/images/faces/face6.jpg')}}" alt="image"><span
                                class="online"></span></div>
                        <div class="info">
                            <p>Sarah Graves</p>
                            <p>Available</p>
                        </div>
                        <small class="text-muted my-auto">47 min</small>
                    </li>
                </ul>
            </div>
            {{--side_navbar--}}
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <div class="nav-link">
                            <div class="profile-image"><img src="{{asset('back/images/faces/face1.jpg')}}" alt="image"/>
                                <span class="online-status online"></span></div>
                            <div class="profile-name">
                                {{--                            <p class="name">{{$user->user->name}}</p>--}}

                            </div>

                        </div>
                    </li>
                    {{--                index_pag--}}
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <img class="menu-icon"
                                                           src="{{asset('back/images/menu_icons/01.png')}}"
                                                           alt="menu icon"> <span
                                class="menu-title">Dashboard</span></a></li>
                    {{--             category_pages--}}
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false"
                           aria-controls="category"> <img class="menu-icon"
                                                          src="{{asset('back/images/menu_icons/14.png')}}"
                                                          alt="menu icon"> <span class="menu-title">Category</span><i
                                class="menu-arrow"></i></a>
                        <div class="collapse" id="category">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('category.create')}}"> add category </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{route('category.index')}}">
                                        All Category </a></li>

                            </ul>
                        </div>
                    </li>
                    {{--             product_pages--}}
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false"
                           aria-controls="product">
                            <img class="menu-icon" src="{{asset('back/images/menu_icons/14.png')}}" alt="menu icon">
                            <span class="menu-title">E-commerce</span><i class="menu-arrow"></i></a>
                        <div class="collapse" id="product">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="pages/samples/invoice.html"> Invoice </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/pricing-table.html">
                                        Pricing Table </a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/orders.html"> Orders </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{--             order_pages--}}
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#orders" aria-expanded="false"
                           aria-controls="orders">
                            <img class="menu-icon" src="{{asset('back/images/menu_icons/14.png')}}" alt="menu icon">
                            <span class="menu-title">E-commerce</span><i class="menu-arrow"></i></a>
                        <div class="collapse" id="orders">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="pages/samples/invoice.html"> Invoice </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/pricing-table.html">
                                        Pricing Table </a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/orders.html"> Orders </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{--                wrong_pages--}}
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false"
                           aria-controls="error"> <img class="menu-icon"
                                                       src="{{asset('back/images/menu_icons/16.png')}}" alt="menu icon">
                            <span class="menu-title">Error pages</span><i class="menu-arrow"></i></a>
                        <div class="collapse" id="error">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>

            {{--            for extends pages--}}
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                {{--          end  for extends pages--}}

                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2021 <a
                                href="http://www.bootstrapdash.com/"
                                target="_blank">Stroe</a>. All rights reserved.</span>

                    </div>
                </footer>

            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
@endsection
