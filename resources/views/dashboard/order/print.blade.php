@yield('css_link')
<body>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="../../index-2.html"></a>
            <a class="navbar-brand brand-logo-mini" href="../../index-2.html"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                <li class="nav-item">
                    <a href="#" class="nav-link">Schedule <span class="badge badge-primary ml-1">New</span></a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link"><i class="mdi mdi-elevation-rise"></i>Reports</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-message-text-outline"></i>
                        <span class="count bg-warning">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <div class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">You have 7 unread mails
                            </p>
                            <span class="badge badge-inverse-info badge-pill float-right">View all</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../../images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal text-dark mb-1">David Grey
                                    <span class="float-right font-weight-light small-text text-gray">1 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text mb-0">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../../images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal text-dark mb-1">Tim Cook
                                    <span class="float-right font-weight-light small-text text-gray">15 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text mb-0">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal text-dark mb-1"> Johnson
                                    <span class="float-right font-weight-light small-text text-gray">18 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text mb-0">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count bg-success">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
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
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-inverse-warning">
                                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                                <p class="font-weight-light small-text mb-0">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-inverse-info">
                                    <i class="mdi mdi-email-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                                <p class="font-weight-light small-text mb-0">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block color-setting">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-tune"></i>
                    </a>
                </li>
                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="mr-3">Hello, Sebastian !</span><img class="img-xs rounded-circle" src="../../images/faces/face1.jpg" alt="Profile image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <a class="dropdown-item p-0">
                            <div class="d-flex border-bottom">
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center"><i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i></div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right"><i class="mdi mdi-account-outline mr-0 text-gray"></i></div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center"><i class="mdi mdi-alarm-check mr-0 text-gray"></i></div>
                            </div>
                        </a>
                        <a class="dropdown-item mt-2">
                            Manage Accounts
                        </a>
                        <a class="dropdown-item">
                            Change Password
                        </a>
                        <a class="dropdown-item">
                            Check Inbox
                        </a>
                        <a class="dropdown-item">
                            Sign Out
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <div class="d-flex align-items-center justify-content-between border-bottom">
                    <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Template Skins</p>
                </div>
                <div class="sidebar-bg-options selected" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
                <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                <p class="settings-heading font-weight-bold mt-2">Header Skins</p>
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
                <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
            </div>
            <ul class="chat-list">
                <li class="list active">
                    <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">19 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
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
                    <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Daniel Russell</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">14 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                    <div class="info">
                        <p>James Richardson</p>
                        <p>Away</p>
                    </div>
                    <small class="text-muted my-auto">2 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Madeline Kennedy</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">5 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Sarah Graves</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">47 min</small>
                </li>
            </ul>
        </div>
        <!-- partial -->
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="profile-image"> <img src="../../images/faces/face1.jpg" alt="image"/> <span class="online-status online"></span> </div>
                        <div class="profile-name">
                            <p class="name">Sebastian Brayden</p>
                            <p class="designation">UI/UX Designer</p>
                        </div>
                        <div class="notification-panel mt-4">
                            <span><i class="mdi mdi-settings"></i></span>
                            <span class="count-wrapper"><i class="mdi mdi-bell"></i><span class="count top-right bg-warning">4</span></span>
                            <span><i class="mdi mdi-email"></i></span>
                        </div>
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="../../index-2.html"> <img class="menu-icon" src="../../images/menu_icons/01.png" alt="menu icon"> <span class="menu-title">Dashboard</span></a> </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts"> <img class="menu-icon" src="../../images/menu_icons/02.png" alt="menu icon"> <span class="menu-title">Page Layouts</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="page-layouts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../layout/boxed-layout.html">Boxed</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../layout/rtl-layout.html">RTL</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../layout/horizontal-menu.html">Horizontal Menu</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../layout/horizontal-menu-2.html">Horizontal Menu 2</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#apps-dropdown" aria-expanded="false" aria-controls="apps-dropdown"> <img class="menu-icon" src="../../images/menu_icons/09.png" alt="menu icon"> <span class="menu-title">Apps</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="apps-dropdown">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../apps/email.html">E-mail</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="../apps/calendar.html">Calendar</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="../apps/todo.html">Todo List</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="../apps/gallery.html">Gallery</a> </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="../widgets.html"> <img class="menu-icon" src="../../images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Widgets</span> </a> </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts"> <img class="menu-icon" src="../../images/menu_icons/04.png" alt="menu icon"> <span class="menu-title">Sidebar Layouts</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="sidebar-layouts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../layout/compact-menu.html">Compact menu</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-collapsed.html">Icon menu</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-fixed.html">Sidebar Fixed</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic"> <img class="menu-icon" src="../../images/menu_icons/17.png" alt="menu icon"> <span class="menu-title">Basic UI Elements</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/accordions.html">Accordions</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/buttons.html">Buttons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/badges.html">Badges</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/dropdowns.html">Dropdowns</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/modals.html">Modals</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/progress.html">Progress bar</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/pagination.html">Pagination</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/tabs.html">Tabs</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/typography.html">Typography</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/tooltips.html">Tooltips</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced"> <img class="menu-icon" src="../../images/menu_icons/07.png" alt="menu icon"> <span class="menu-title">Advanced Elements</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="ui-advanced">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/dragula.html">Dragula</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/clipboard.html">Clipboard</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/context-menu.html">Context menu</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/slider.html">Sliders</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/carousel.html">Carousel</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/colcade.html">Colcade</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/loaders.html">Loaders</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements"> <img class="menu-icon" src="../../images/menu_icons/19.png" alt="menu icon"> <span class="menu-title">Form elements</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="../forms/basic_elements.html">Basic Elements</a></li>
                            <li class="nav-item"><a class="nav-link" href="../forms/advanced_elements.html">Advanced Elements</a></li>
                            <li class="nav-item"><a class="nav-link" href="../forms/validation.html">Validation</a></li>
                            <li class="nav-item"><a class="nav-link" href="../forms/wizard.html">Wizard</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors"> <img class="menu-icon" src="../../images/menu_icons/18.png" alt="menu icon"> <span class="menu-title">Editors</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="editors">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="../forms/text_editor.html">Text editors</a></li>
                            <li class="nav-item"><a class="nav-link" href="../forms/code_editor.html">Code editors</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts"> <img class="menu-icon" src="../../images/menu_icons/03.png" alt="menu icon"> <span class="menu-title">Charts</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../charts/chartjs.html">ChartJs</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../charts/morris.html">Morris</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../charts/flot-chart.html">Flot</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../charts/google-charts.html">Google charts</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../charts/sparkline.html">Sparkline js</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../charts/c3.html">C3 charts</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../charts/chartist.html">Chartists</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../charts/justGage.html">JustGage</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables"> <img class="menu-icon" src="../../images/menu_icons/06.png" alt="menu icon"> <span class="menu-title">Tables</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="tables">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../tables/basic-table.html">Basic table</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../tables/data-table.html">Data table</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../tables/js-grid.html">Js-grid</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../tables/sortable-table.html">Sortable table</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/popups.html"> <img class="menu-icon" src="../../images/menu_icons/20.png" alt="menu icon"> <span class="menu-title">Popups</span> </a> </li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/notifications.html"> <img class="menu-icon" src="../../images/menu_icons/13.png" alt="menu icon"> <span class="menu-title">Notifications</span> </a> </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons"> <img class="menu-icon" src="../../images/menu_icons/10.png" alt="menu icon"> <span class="menu-title">Icons</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../icons/flag-icons.html">Flag icons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../icons/font-awesome.html">Font Awesome</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../icons/simple-line-icon.html">Simple line icons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../icons/themify.html">Themify icons</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps"> <img class="menu-icon" src="../../images/menu_icons/12.png" alt="menu icon"> <span class="menu-title">Maps</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="maps">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../maps/mapeal.html">Mapeal</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../maps/vector-map.html">Vector Map</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../maps/google-maps.html">Google Map</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth"> <img class="menu-icon" src="../../images/menu_icons/01.png" alt="menu icon"> <span class="menu-title">User Pages</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="login.html"> Login </a></li>
                            <li class="nav-item"> <a class="nav-link" href="login-2.html"> Login 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="register.html"> Register </a></li>
                            <li class="nav-item"> <a class="nav-link" href="register-2.html"> Register 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="lock-screen.html"> Lockscreen </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error"> <img class="menu-icon" src="../../images/menu_icons/16.png" alt="menu icon"> <span class="menu-title">Error pages</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="error">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="error-404.html"> 404 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="error-500.html"> 500 </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="../../images/menu_icons/15.png" alt="menu icon"> <span class="menu-title">General Pages</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="general-pages">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="blank-page.html"> Blank Page </a></li>
                            <li class="nav-item"> <a class="nav-link" href="landing-page.html"> Landing Page </a></li>
                            <li class="nav-item"> <a class="nav-link" href="profile.html"> Profile </a></li>
                            <li class="nav-item"> <a class="nav-link" href="faq.html"> FAQ </a></li>
                            <li class="nav-item"> <a class="nav-link" href="faq-2.html"> FAQ 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="news-grid.html"> News grid </a></li>
                            <li class="nav-item"> <a class="nav-link" href="timeline.html"> Timeline </a></li>
                            <li class="nav-item"> <a class="nav-link" href="search-results.html"> Search Results </a></li>
                            <li class="nav-item"> <a class="nav-link" href="portfolio.html"> Portfolio </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce"> <img class="menu-icon" src="../../images/menu_icons/14.png" alt="menu icon"> <span class="menu-title">E-commerce</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="e-commerce">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="invoice.html"> Invoice </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pricing-table.html"> Pricing Table </a></li>
                            <li class="nav-item"> <a class="nav-link" href="orders.html"> Orders </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="../documentation.html"> <img class="menu-icon" src="../../images/menu_icons/05.png" alt="menu icon"> <span class="menu-title">Documentation</span> </a> </li>
                <li class="nav-item">
                    <div class="sidebar-sticker">
                        <div class="d-flex align-items-center text-primary">
                            <h6 class="mb-1">Need Help</h6><i class="mdi ml-2 mdi-bell-ring-outline"></i>
                        </div>
                        <a class="d-block text-gray my-2" href="#">hello@website.com</a>
                        <a class="d-block" href="#">Visit FAQ</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card px-2">
                            <div class="card-body">
                                <div class="container-fluid">
                                    <h3 class="text-right my-5">Invoice&nbsp;&nbsp;#INV-17</h3>
                                    <hr>
                                </div>
                                <div class="container-fluid d-flex justify-content-between">
                                    <div class="col-lg-3 pl-0">
                                        <p class="mt-5 mb-2"><b>Radiant Admin</b></p>
                                        <p>104,<br>Minare SK,<br>Canada, K1A 0G9.</p>
                                    </div>
                                    <div class="col-lg-3 pr-0">
                                        <p class="mt-5 mb-2 text-right"><b>Invoice to</b></p>
                                        <p class="text-right">Gaala & Sons,<br> C-201, Beykoz-34800,<br> Canada, K1A 0G9.</p>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-between">
                                    <div class="col-lg-3 pl-0">
                                        <p class="mb-0 mt-5">Invoice Date : 23rd Jan 2016</p>
                                        <p>Due Date : 25th Jan 2017</p>
                                    </div>
                                </div>
                                <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                                    <div class="table-responsive w-100">
                                        <table class="table">
                                            <thead>
                                            <tr class="bg-dark text-white">
                                                <th>#</th>
                                                <th>Description</th>
                                                <th class="text-right">Quantity</th>
                                                <th class="text-right">Unit cost</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-right">
                                                <td class="text-left">1</td>
                                                <td class="text-left">Brochure Design</td>
                                                <td>2</td>
                                                <td>$20</td>
                                                <td>$40</td>
                                            </tr>
                                            <tr class="text-right">
                                                <td class="text-left">2</td>
                                                <td class="text-left">Web Design Packages(Template) - Basic</td>
                                                <td>05</td>
                                                <td>$25</td>
                                                <td>$125</td>
                                            </tr>
                                            <tr class="text-right">
                                                <td class="text-left">3</td>
                                                <td class="text-left">Print Ad - Basic - Color</td>
                                                <td>08</td>
                                                <td>$500</td>
                                                <td>$4000</td>
                                            </tr>
                                            <tr class="text-right">
                                                <td class="text-left">4</td>
                                                <td class="text-left">Down Coat</td>
                                                <td>1</td>
                                                <td>$5</td>
                                                <td>$5</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="container-fluid mt-5 w-100">
                                    <p class="text-right mb-2">Sub - Total amount: $12,348</p>
                                    <p class="text-right">vat (10%) : $138</p>
                                    <h4 class="text-right mb-5">Total : $13,986</h4>
                                    <hr>
                                </div>
                                <div class="container-fluid w-100">
                                    <a href="#" class="btn btn-primary float-right mt-4 ml-2"><i class="mdi mdi-printer mr-1"></i>Print</a>
                                    <a href="#" class="btn btn-success float-right mt-4"><i class="mdi mdi-telegram mr-1"></i>Send Invoice</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@yield('js_link')
</body>
