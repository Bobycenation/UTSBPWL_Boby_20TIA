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
            <li class="side-nav-menu-item side-nav-has-menu active">
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
                <ul id="subComponents" class="side-nav-menu side-nav-menu-second-level mb-0" style="display:block;">
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
                    <li class="side-nav-menu-item active">
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
            <li class="side-nav-menu-item side-nav-has-menu">
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
                <ul id="subUtils" class="side-nav-menu side-nav-menu-second-level mb-0">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="background.php">Background</a>
                    </li>
                    <li class="side-nav-menu-item">
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
                <div class="h3 mb-0">Modals</div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="border-bottom pb-3 mb-6">
                                <p class="lead">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
                            </div>

                            <div id="how-it-works" class="mb-9">
                                <h2 class="h4">How it works <a class="anchorjs-link" href="#how-it-works" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <ul>
                                    <li>Modals are built with HTML, CSS, and JavaScript. They’re positioned over everything else in the document and remove scroll from the <code>&lt;body&gt;</code> so that modal content scrolls instead.</li>
                                    <li>Clicking on the modal “backdrop” will automatically close the modal.</li>
                                    <li>Bootstrap only supports one modal window at a time. Nested modals aren’t supported as we believe them to be poor user experiences.</li>
                                    <li>Modals use <code>position: fixed</code>, which can sometimes be a bit particular about its rendering. Whenever possible, place your modal HTML in a top-level position to avoid potential interference from other elements. You’ll likely run into issues when nesting a <code>.modal</code> within another fixed element.</li>
                                    <li>Once again, due to <code>position: fixed</code>, there are some caveats with using modals on mobile devices. <a href="https://getbootstrap.com/docs/4.3/getting-started/browsers-devices/#modals-and-dropdowns-on-mobile">See our browser support docs</a> for details.</li>
                                    <li>Due to how HTML5 defines its semantics, <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#attr-autofocus">the autofocus HTML attribute</a> has no effect in Bootstrap modals. To achieve the same effect, use some custom JavaScript:</li>
                                </ul>

<pre>
<code class="language-js" data-lang="js">
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})
</code>
</pre>

                                <p>Keep reading for demos and usage guidelines.</p>
                            </div>

                            <div id="example" class="mb-9">
                                <h2 class="h4">Example <a class="anchorjs-link" href="#example" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>

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
                                            <a class="btn btn-outline-primary" href="#"
                                               data-toggle="modal"
                                               data-target="#exampleModal">Launch demo modal</a>
                                        </div>
                                        <div class="tab-pane fade" id="pills-html-1" role="tabpanel" aria-labelledby="pills-html-tab-1">
<pre>
<code class="language-markup" data-lang="html">
&lt;!-- Modal --&gt;
&lt;div id="exampleModal" class="modal fade" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
&lt;div class="modal-dialog rounded py-5" role="document"&gt;
  &lt;div class="modal-content py-5"&gt;
    &lt;header class="modal-header flex-column justify-content-center border-0 mb-3 mb-xl-5"&gt;
      &lt;h4 id="exampleModalLabel" class="modal-title mx-auto"&gt;Modal title&lt;/h4&gt;
    &lt;/header&gt;

    &lt;div class="modal-body pt-3 mb-5 mb-md-7 text-center"&gt;
      &lt;p&gt;Modal body text goes here.&lt;/p&gt;
    &lt;/div&gt;

    &lt;footer class="modal-footer justify-content-between border-0"&gt;
      &lt;p&gt;Modal footer text goes here.&lt;/p&gt;
    &lt;/footer&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- End Modal --&gt;
</code>
</pre>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>

                            <div id="usage" class="mb-9">
                                <h2 class="h4">Usage <a class="anchorjs-link" href="#usage" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>The modal plugin toggles your hidden content on demand, via data attributes or JavaScript. It also adds <code>.modal-open</code> to the <code>&lt;body&gt;</code> to override default scrolling behavior and generates a <code>.modal-backdrop</code> to provide a click area for dismissing shown modals when clicking outside the modal.</p>
                            </div>

                            <div id="via-data-attributes" class="mb-9">
                                <h2 class="h4">Via data attributes <a class="anchorjs-link" href="#via-data-attributes" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Activate a modal without writing JavaScript. Set <code>data-toggle="modal"</code> on a controller element, like a button, along with a <code>data-target="#foo"</code> or <code>href="#foo"</code> to target a specific modal to toggle.</p>

<pre>
<code class="language-html" data-lang="html">
&lt;button type="button" data-toggle="modal" data-target="#myModal"&gt;Launch modal&lt;/button&gt;
</code>
</pre>
                            </div>

                            <div id="via-data-javaScript" class="mb-9">
                                <h2 class="h4">Via JavaScript <a class="anchorjs-link" href="#via-data-javaScript" aria-label="Anchor" data-anchorjs-icon="#"></a></h2>
                                <p>Call a modal with id <code>myModal</code> with a single line of JavaScript:</p>

<pre>
<code class="language-js" data-lang="js">
$('#myModal').modal(options)
</code>
</pre>
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
<!-- Modal -->
<div id="exampleModal" class="modal fade" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Modal content..
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<script src="../assets/js/graindashboard.js"></script>
<script src="../assets/js/graindashboard.vendor.js"></script>

</body>
</html>