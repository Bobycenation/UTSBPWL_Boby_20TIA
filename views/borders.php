<?php 
include '../models/database.php';
$db = new database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Documentation | Graindashboard UI Kit</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico">

    <!-- Template -->
    <link rel="stylesheet" href="../assets/css/graindashboard.css">
</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
<!-- Header -->
<header class="header bg-body">
    <nav class="navbar flex-nowrap p-0">
        <div class="navbar-brand-wrapper d-flex align-items-center col-auto">
            <!-- Logo For Mobile View -->
            <a class="navbar-brand navbar-brand-mobile" href="
                <?php if(isset($_SESSION['name'])){
                    echo 'home.php';
                } else {
                    echo '../controllers/proses.php?aksi=logout';
                }?>">
                <img class="img-fluid w-100" src="../assets/img/logo-mini.png" alt="Graindashboard">
            </a>
            <!-- End Logo For Mobile View -->

            <!-- Logo For Desktop View -->
            <a class="navbar-brand navbar-brand-desktop" href="
                <?php if(isset($_SESSION['name'])){
                    echo 'home.php';
                } else {
                    echo '../controllers/proses.php?aksi=logout';
                }?>">
                <img class="side-nav-show-on-closed" src="../assets/img/logo-mini.png" alt="Graindashboard" style="width: auto; height: 33px;">
                <img class="side-nav-hide-on-closed" src="../assets/img/logo.png" alt="Graindashboard" style="width: auto; height: 33px;">
            </a>
            <!-- End Logo For Desktop View -->
        </div>

        <div class="header-content col px-md-3">
            <div class="d-flex align-items-center">
                <!-- Side Nav Toggle -->
                <a  class="js-side-nav header-invoker d-flex mr-md-2" href="#"
                    data-close-invoker="#sidebarClose"
                    data-target="#sidebar"
                    data-target-wrapper="body">
                    <i class="gd-align-left"></i>
                </a>
                <!-- End Side Nav Toggle -->

                    <!-- User Notifications -->
                    <div class="dropdown ml-auto">
                        <a id="notificationsInvoker" class="header-invoker" href="#" aria-controls="notifications"
                            aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                            data-unfold-target="#notifications" data-unfold-type="css-animation"
                            data-unfold-duration="300" data-unfold-animation-in="fadeIn"
                            data-unfold-animation-out="fadeOut">
                            <span
                                class="indicator indicator-bordered indicator-top-right indicator-primary rounded-circle"></span>
                            <i class="gd-bell"></i>
                        </a>

                        <div id="notifications"
                            class="dropdown-menu dropdown-menu-center py-0 mt-4 w-18_75rem w-md-22_5rem unfold-css-animation unfold-hidden"
                            aria-labelledby="notificationsInvoker" style="animation-duration: 300ms;">
                            <div class="card">
                                <div class="card-header d-flex align-items-center border-bottom py-3">
                                    <h5 class="mb-0">Notifications</h5>
                                    <a class="link small ml-auto" href="#">Clear All</a>
                                </div>

                                <div class="card-body p-0">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center text-nowrap mb-2">
                                                <i class="gd-info-alt icon-text text-primary mr-2"></i>
                                                <h6 class="font-weight-semi-bold mb-0">New Update</h6>
                                                <span class="list-group-item-date text-muted ml-auto">just now</span>
                                            </div>
                                            <p class="mb-0">
                                                Order <strong>#10000</strong> has been updated.
                                            </p>
                                            <a class="list-group-item-closer text-muted" href="#"><i
                                                    class="gd-close"></i></a>
                                        </div>
                                        <div class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center text-nowrap mb-2">
                                                <i class="gd-info-alt icon-text text-primary mr-2"></i>
                                                <h6 class="font-weight-semi-bold mb-0">New Update</h6>
                                                <span class="list-group-item-date text-muted ml-auto">just now</span>
                                            </div>
                                            <p class="mb-0">
                                                Order <strong>#10001</strong> has been updated.
                                            </p>
                                            <a class="list-group-item-closer text-muted" href="#"><i
                                                    class="gd-close"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End User Notifications -->
                    <!-- User Avatar -->
                    <div class="dropdown mx-3 dropdown ml-2">
                        <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu"
                            aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                            data-unfold-target="#profileMenu" data-unfold-type="css-animation"
                            data-unfold-duration="300" data-unfold-animation-in="fadeIn"
                            data-unfold-animation-out="fadeOut">
                            <!--img class="avatar rounded-circle mr-md-2" src="#" alt="John Doe"-->
                            <span class="d-none d-md-block">
                                <?php if(isset($_SESSION['name'])){
                                    echo $_SESSION['name'];
                                } else {
                                    echo ' ';
                                }?>
                            </span>
                            <i class="gd-angle-down d-none d-md-block ml-2"></i>
                        </a>

                        <ul id="profileMenu"
                            class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4 unfold-css-animation unfold-hidden fadeOut"
                            aria-labelledby="profileMenuInvoker" style="animation-duration: 300ms;">
                            <?php if(isset($_SESSION['name'])){
                            echo '<li class="unfold-item">
                                <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                                    <span class="unfold-item-icon mr-3">
                                        <i class="gd-user"></i>
                                    </span>
                                    My Profile
                                </a>
                            </li>
                            <li class="unfold-item unfold-item-has-divider">';
                            } else {
                            echo '<li class="unfold-item">';
                            } ?>
                                <a class="unfold-link d-flex align-items-center text-nowrap" href="
                                    <?php if(isset($_SESSION['name'])){
                                        echo '../controllers/proses.php?aksi=logout';
                                    } else {
                                        echo '../views';
                                    } ?>">
                                    <span class="unfold-item-icon mr-3">
                                        <i class="gd-power-off"></i>
                                    </span>
                                    <?php if(isset($_SESSION['name'])){
                                        echo 'Sign Out';
                                    } else {
                                        echo 'Sign In';
                                    } ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End User Avatar -->
            </div>
        </div>
    </nav>
</header>
<!-- End Header -->

<main class="main">
    <!-- Sidebar Nav -->
    <aside id="sidebar" class="js-custom-scroll side-nav">
        <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
            <!-- Title -->
            <li class="sidebar-heading h6">Documentation</li>
            <!-- End Title -->

            <!-- Getting Started -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="home.php">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-home"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Getting Started</span>
                </a>
            </li>
            <!-- End Getting Started -->

            <!-- UI Components -->
            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="#"
                   data-target="#subComponents">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-panel"></i>
                  </span>
                    <span class="side-nav-fadeout-on-closed media-body">UI Components</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- UI Components: subComponents -->
                <ul id="subComponents" class="side-nav-menu side-nav-menu-second-level mb-0">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="avatars.php">Avatars</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="alerts.php">Alerts</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="buttons.php">Buttons</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="breadcrumbs.php">Breadcrumbs</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="badges.php">Badges</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="cards.php">Cards</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="collapse.php">Collapse</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="dropdowns.php">Dropdowns</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="forms.php">Forms</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="icons.php">Icons</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="modals.php">Modals</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="navs.php">Navs</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="progress.php">Progress</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="pagination.php">Pagination</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="spinners.php">Spinners</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="toasts.php">Toasts</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="tables.php">Tables</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="typography.php">Typography</a>
                    </li>
                </ul>
                <!-- End UI Components: subComponents -->
            </li>
            <!-- End UI Components -->

            <!-- Utils -->
            <li class="side-nav-menu-item side-nav-has-menu active">
                <a class="side-nav-menu-link media align-items-center" href="#"
                   data-target="#subUtils">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-desktop"></i>
                  </span>
                    <span class="side-nav-fadeout-on-closed media-body">Utils</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Utils: subUtils -->
                <ul id="subUtils" class="side-nav-menu side-nav-menu-second-level mb-0" style="display:block;">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="background.php">Background</a>
                    </li>
                    <li class="side-nav-menu-item active">
                        <a class="side-nav-menu-link" href="borders.php">Borders</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="colors.php">Colors</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="links.php">Links</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="positions.php">Positions</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="spacing.php">Spacing</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="transitions.php">Transitions</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="other.php">Other</a>
                    </li>
                </ul>
                <!-- End Utils: subUtils -->
            </li>
            <!-- End Utils -->

        </ul>
    </aside>
    <!-- End Sidebar Nav -->

    <div class="content">
        <div class="py-4 px-3 px-md-4">

            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Borders</div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="border-bottom pb-3 mb-6">
                                <p class="lead">You can use border utilities for quick styling of border and border-radius of an element. They are great for images, buttons or any other elements.</p>
                            </div>

                            <div id="border" class="mb-5">
                                <h2 class="h4">Border <a class="anchorjs-link" href="#border" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>You can use border utilities to add or remove an element’s borders. For that you should choose from all borders or one at a time.</p>
                            </div>

                            <div id="additive" class="mb-5">
                                <h2 class="h4">Additive <a class="anchorjs-link" href="#additive" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="pills-tab-1" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="pills-result-tab-1" data-toggle="pill" href="#pills-result-1" role="tab" aria-controls="pills-result-1" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="pills-html-tab-1" data-toggle="pill" href="#pills-html-1" role="tab" aria-controls="pills-html-1" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="pills-tabContent-1">
                                        <div class="tab-pane fade p-4 show active" id="pills-result-1" role="tabpanel" aria-labelledby="pills-result-tab-1">
                                            <span class="border bg-white border-primary d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                            <span class="border-top bg-white border-primary d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                            <span class="border-right bg-white border-primary d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                            <span class="border-bottom bg-white border-primary d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                            <span class="border-left bg-white border-primary d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                        </div>
                                        <div class="tab-pane fade" id="pills-html-1" role="tabpanel" aria-labelledby="pills-html-tab-1">
<pre>
<code class="language-markup" data-lang="html">
  &lt;span class="border"&gt;&lt;/span&gt;
  &lt;span class="border-top"&gt;&lt;/span&gt;
  &lt;span class="border-right"&gt;&lt;/span&gt;
  &lt;span class="border-bottom"&gt;&lt;/span&gt;
  &lt;span class="border-left"&gt;&lt;/span&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="subtractive" class="mb-9">
                                <h2 class="h4">Subtractive <a class="anchorjs-link" href="#subtractive" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="pills-tab-2" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="pills-result-tab-2" data-toggle="pill" href="#pills-result-2" role="tab" aria-controls="pills-result-2" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="pills-html-tab-2" data-toggle="pill" href="#pills-html-2" role="tab" aria-controls="pills-html-2" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="pills-tabContent-2">
                                        <div class="tab-pane fade p-4 show active" id="pills-result-2" role="tabpanel" aria-labelledby="pills-result-tab-2">
                                            <span class="border-0 bg-white border-primary d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                            <span class="border border-top-0 bg-white border-primary d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                            <span class="border border-right-0 bg-white border-primary d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                            <span class="border border-bottom-0 bg-white border-primary d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                            <span class="border border-left-0 bg-white border-primary d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                        </div>
                                        <div class="tab-pane fade" id="pills-html-2" role="tabpanel" aria-labelledby="pills-html-tab-2">
<pre>
<code class="language-markup" data-lang="html">
  &lt;span class="border-0"&gt;&lt;/span&gt;
  &lt;span class="border border-top-0"&gt;&lt;/span&gt;
  &lt;span class="border border-right-0"&gt;&lt;/span&gt;
  &lt;span class="border border-bottom-0"&gt;&lt;/span&gt;
  &lt;span class="border border-left-0"&gt;&lt;/span&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="border-color" class="mb-9">
                                <h2 class="h4">Border color <a class="anchorjs-link" href="#border-color" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Change the border color using utilities built on our theme colors.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="pills-tab-3" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="pills-result-tab-3" data-toggle="pill" href="#pills-result-3" role="tab" aria-controls="pills-result-3" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="pills-html-tab-3" data-toggle="pill" href="#pills-html-3" role="tab" aria-controls="pills-html-3" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="pills-tabContent-3">
                                        <div class="tab-pane fade p-4 show active" id="pills-result-3" role="tabpanel" aria-labelledby="pills-result-tab-3">
                                            <span class="border border-primary bg-white d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                            <span class="border border-secondary bg-white d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                            <span class="border border-success bg-white d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                            <span class="border border-danger bg-white d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                            <span class="border border-warning bg-white d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                            <span class="border border-info bg-white d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                            <span class="border border-light bg-white d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                            <span class="border border-dark bg-white d-inline-block mr-3 mb-3" style="width: 75px; height: 75px;"></span>
                                        </div>
                                        <div class="tab-pane fade" id="pills-html-3" role="tabpanel" aria-labelledby="pills-html-tab-3">
<pre>
<code class="language-markup" data-lang="html">
  &lt;span class="border border-primary"&gt;&lt;/span&gt;
  &lt;span class="border border-secondary"&gt;&lt;/span&gt;
  &lt;span class="border border-success"&gt;&lt;/span&gt;
  &lt;span class="border border-danger"&gt;&lt;/span&gt;
  &lt;span class="border border-warning"&gt;&lt;/span&gt;
  &lt;span class="border border-info"&gt;&lt;/span&gt;
  &lt;span class="border border-light"&gt;&lt;/span&gt;
  &lt;span class="border border-dark"&gt;&lt;/span&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="border-radius" class="mb-5">
                                <h2 class="h4">Border radius <a class="anchorjs-link" href="#border-radius" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Add classes to an element to easily round its corners.</p>

                                <div class="mb-3">
                                    <!-- Nav Classic -->
                                    <ul class="nav nav-v2 nav-primary d-block d-xl-flex" id="pills-tab-4" role="tablist">
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3 active" id="pills-result-tab-4" data-toggle="pill" href="#pills-result-4" role="tab" aria-controls="pills-result-4" aria-selected="true">Result</a>
                                        </li>
                                        <li class="nav-item border-bottom border-xl-bottom-0">
                                            <a class="nav-link d-flex align-items-center py-2 px-3" id="pills-html-tab-4" data-toggle="pill" href="#pills-html-4" role="tab" aria-controls="pills-html-4" aria-selected="false">HTML</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Classic -->

                                    <!-- Tab Content -->
                                    <div class="tab-content bg-lighter" id="pills-tabContent-4">
                                        <div class="tab-pane fade p-4 show active" id="pills-result-4" role="tabpanel" aria-labelledby="pills-result-tab-4">
                                            <img src="img/avatar-1.jpg" class="rounded mr-3 mb-3" alt="Example rounded image" width="48">

                                            <img src="img/avatar-1.jpg" class="rounded-top mr-3 mb-3" alt="Example top rounded image" width="48">
                                            <img src="img/avatar-1.jpg" class="rounded-right mr-3 mb-3" alt="Example right rounded image" width="48">
                                            <img src="img/avatar-1.jpg" class="rounded-bottom mr-3 mb-3" alt="Example bottom rounded image" width="48">
                                            <img src="img/avatar-1.jpg" class="rounded-left mr-3 mb-3" alt="Example left rounded image" width="48">

                                            <img src="img/avatar-1.jpg" class="rounded-circle mr-3 mb-3" alt="Completely round image" width="48">

                                            <img src="img/avatar-1.jpg" class="rounded-0 mr-3 mb-3" alt="Example non-rounded image (overrides rounding applied elsewhere)" width="48">

                                            <img src="img/avatar-1.jpg" class="rounded-top-pill mr-3 mb-3" alt="Example top pilled image" width="48">
                                            <img src="img/avatar-1.jpg" class="rounded-right-pill mr-3 mb-3" alt="Example right pilled image" width="48">
                                            <img src="img/avatar-1.jpg" class="rounded-bottom-pill mr-3 mb-3" alt="Example bottom pilled image" width="48">
                                            <img src="img/avatar-1.jpg" class="rounded-left-pill mr-3 mb-3" alt="Example left pilled image" width="48">

                                            <img src="img/avatar-1.jpg" class="rounded-top-left-pill mr-3 mb-3" alt="Example top left pilled image" width="48">
                                            <img src="img/avatar-1.jpg" class="rounded-bottom-left-pill mr-3 mb-3" alt="Example bottom left pilled image" width="48">
                                        </div>
                                        <div class="tab-pane fade" id="pills-html-4" role="tabpanel" aria-labelledby="pills-html-tab-4">
<pre>
<code class="language-markup" data-lang="html">
  &lt;img src="img/avatar-1.jpg" class="rounded" alt="..."&gt;

  &lt;img src="img/avatar-1.jpg" class="rounded-top" alt="..."&gt;
  &lt;img src="img/avatar-1.jpg" class="rounded-right" alt="..."&gt;
  &lt;img src="img/avatar-1.jpg" class="rounded-bottom" alt="..."&gt;
  &lt;img src="img/avatar-1.jpg" class="rounded-left" alt="..."&gt;

  &lt;img src="img/avatar-1.jpg" class="rounded-circle" alt="..."&gt;

  &lt;img src="img/avatar-1.jpg" class="rounded-0" alt="..."&gt;

  &lt;img src="img/avatar-1.jpg" class="rounded-top-pill" alt="..."&gt;
  &lt;img src="img/avatar-1.jpg" class="rounded-right-pill" alt="..."&gt;
  &lt;img src="img/avatar-1.jpg" class="rounded-bottom-pill" alt="..."&gt;
  &lt;img src="img/avatar-1.jpg" class="rounded-left-pill" alt="..."&gt;

  &lt;img src="img/avatar-1.jpg" class="rounded-top-left-pill" alt="..."&gt;
  &lt;img src="img/avatar-1.jpg" class="rounded-bottom-left-pill" alt="..."&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- Footer -->
        <footer class="small p-3 px-md-4 mt-auto">
            <div class="row justify-content-between">
                <div class="col-lg text-center text-lg-left mb-3 mb-lg-0">
                    <ul class="list-dot list-inline mb-0">
                        <li class="list-dot-item list-dot-item-not list-inline-item mr-lg-2"><a class="link-dark" href="https://graindashboard.com/documentation/" target="_blank">Online Documentation</a></li>
                        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="mailto:support@graindashboard.com">Support</a></li>
                        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="changelog.php">Changelog</a></li>
                    </ul>
                </div>


                <div class="col-lg text-center text-lg-right">
                    &copy; 2019 <a href="https://graindashboard.com" target="_blank">Graindashboard</a>. All Rights Reserved.
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
</main>


<script src="../assets/js/graindashboard.js"></script>
<script src="../assets/js/graindashboard.vendor.js"></script>

</body>
</html>