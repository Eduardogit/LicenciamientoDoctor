<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Umega App - Responsive web app kit</title>
    <!-- PACE-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ Html::style('/plugins/PACE/themes/blue/pace-theme-flash.css') }}">
    <script type="text/javascript" src="../plugins/PACE/pace.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="../plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="../plugins/themify-icons/themify-icons.css">
    <!-- Malihu Scrollbar-->
    <link rel="stylesheet" type="text/css" href="../plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css">
    <!-- Animo.js-->
    <link rel="stylesheet" type="text/css" href="../plugins/animo.js/animate-animo.min.css">
    <!-- Flag Icons-->
    <link rel="stylesheet" type="text/css" href="../plugins/flag-icon-css/css/flag-icon.min.css">
    <!-- Bootstrap Progressbar-->
    <link rel="stylesheet" type="text/css" href="../plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
    <!-- Toastr-->
    <link rel="stylesheet" type="text/css" href="../plugins/toastr/toastr.min.css">
    <!-- SpinKit-->
    <link rel="stylesheet" type="text/css" href="../plugins/SpinKit/css/spinners/7-three-bounce.css">
    <!-- Jvector Map-->
    <link rel="stylesheet" type="text/css" href="../plugins/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- Morris Chart-->
    <link rel="stylesheet" type="text/css" href="../plugins/morris.js/morris.css">
    <!-- DataTables-->
    <link rel="stylesheet" type="text/css" href="../plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../plugins/datatables.net-buttons-bs/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../plugins/datatables.net-colreorder-bs/css/colReorder.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../plugins/datatables.net-responsive-bs/css/responsive.bootstrap.min.css">
    <!-- Weather Icons-->
    <link rel="stylesheet" type="text/css" href="../plugins/weather-icons/css/weather-icons-wind.min.css">
    <link rel="stylesheet" type="text/css" href="../plugins/weather-icons/css/weather-icons.min.css">
    <!-- FullCalendar-->
    <link rel="stylesheet" type="text/css" href="../plugins/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="../plugins/fullcalendar/dist/fullcalendar.print.css" media="print">
    <!-- jQuery MiniColors-->
    <link rel="stylesheet" type="text/css" href="../plugins/jquery-minicolors/jquery.minicolors.css">
    <!-- Bootstrap Date Range Picker-->
    <link rel="stylesheet" type="text/css" href="../plugins/bootstrap-daterangepicker/daterangepicker.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="../build/css/second-layout.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://--> 
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-sidebar-color="sidebar-light" class="sidebar-light">
  <header>
    @include('includes.header')
  </header>
    <div class="main-container">
      <!-- Main Sidebar start-->
      <aside data-mcs-theme="minimal-dark" class="main-sidebar mCustomScrollbar">
        <div class="user">
          <div id="esp-user-profile" data-percent="65" style="height: 104px; width: 104px; line-height: 80px; padding: 12px;" class="easy-pie-chart"><img src="../build/images/users/04.jpg" alt="" class="avatar img-circle"><span class="status bg-success"></span></div>
          <h4 class="fs-14 text-muted mt-15 mb-5 fw-300">Matthew Gonzalez</h4>
          <p class="fs-13 mb-0 text-muted">Designer</p>
        </div>
        <ul class="list-unstyled navigation mb-0">
          <li class="sidebar-category">Main</li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse1" aria-expanded="false" aria-controls="collapse1" class="bubble active collapsed"><i class="ti-home"></i><span class="sidebar-title">Dashboard</span><span class="badge bg-danger">2</span></a>
            <ul id="collapse1" class="list-unstyled collapse">
              <li><a href="index.html" class="active">Dashboard v1</a></li>
              <li><a href="index-v2.html">Dashboard v2</a></li>
            </ul>
          </li>
          <li class="panel"><a href="widgets.html"><i class="ti-panel"></i><span class="sidebar-title">Widgets </span><span class="label label-outline label-danger">Updated</span></a></li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse3" aria-expanded="false" aria-controls="collapse3" class="collapsed"><i class="ti-shopping-cart"></i><span class="sidebar-title">E-commerce</span></a>
            <ul id="collapse3" class="list-unstyled collapse">
              <li><a href="ecommerce-dashboard.html">Dashboard</a></li>
              <li><a href="product-list.html">Product list</a></li>
              <li><a href="edit-product.html">Edit product</a></li>
              <li><a href="order-list.html">Order list</a></li>
              <li><a href="edit-order.html">Edit order</a></li>
              <li><a href="customer-list.html">Customer list</a></li>
              <li><a href="edit-customer.html">Edit customer</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse4" aria-expanded="false" aria-controls="collapse4" class="collapsed"><i class="ti-paint-bucket"></i><span class="sidebar-title">Color system</span></a>
            <ul id="collapse4" class="list-unstyled collapse">
              <li><a href="green-system.html">Green</a></li>
              <li><a href="blue-system.html">Blue</a></li>
              <li><a href="purple-system.html">Purple</a></li>
              <li><a href="red-system.html">Red</a></li>
              <li><a href="yellow-system.html">Yellow</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse5" aria-expanded="false" aria-controls="collapse5" class="collapsed"><i class="ti-brush-alt"></i><span class="sidebar-title">Skins</span></a>
            <ul id="collapse5" class="list-unstyled collapse">
              <li><a href="green-dashboard.html">Green</a></li>
              <li><a href="blue-dashboard.html">Blue</a></li>
              <li><a href="purple-dashboard.html">Purple</a></li>
              <li><a href="red-dashboard.html">Red</a></li>
              <li><a href="yellow-dashboard.html">Yellow</a></li>
            </ul>
          </li>
          <li class="sidebar-category">Menu Levels</li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse20" aria-expanded="false" aria-controls="collapse20" class="collapsed"><i class="ti-folder"></i><span class="sidebar-title">Menu levels</span></a>
            <ul id="collapse20" class="list-unstyled collapse">
              <li><a role="button" data-toggle="collapse" data-parent="#collapse20" href="#collapse201" aria-expanded="false" aria-controls="collapse201" class="collapsed">Menu level 2.1</a>
                <ul id="collapse201" class="list-unstyled collapse">
                  <li><a href="#">Menu level 3.1</a></li>
                  <li><a href="#">Menu level 3.2</a></li>
                  <li><a href="#">Menu level 3.3</a></li>
                </ul>
              </li>
              <li><a role="button" data-toggle="collapse" data-parent="#collapse20" href="#collapse202" aria-expanded="false" aria-controls="collapse202" class="collapsed">Menu level 2.2</a>
                <ul id="collapse202" class="list-unstyled collapse">
                  <li><a href="#">Menu level 3.4</a></li>
                  <li><a role="button" data-toggle="collapse" data-parent="#collapse202" href="#collapse302" aria-expanded="false" aria-controls="collapse302" class="collapsed">Menu level 3.5</a>
                    <ul id="collapse302" class="list-unstyled collapse">
                      <li><a href="#">Menu level 4.1</a></li>
                      <li><a role="button" data-toggle="collapse" data-parent="#collapse302" href="#collapse402" aria-expanded="false" aria-controls="collapse402" class="collapsed">Menu level 4.2</a>
                        <ul id="collapse402" class="list-unstyled collapse">
                          <li><a href="#">Menu level 5.1</a></li>
                          <li><a href="#">Menu level 5.2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Menu level 3.6</a></li>
                </ul>
              </li>
              <li><a role="button" data-toggle="collapse" data-parent="#collapse20" href="#collapse203" aria-expanded="false" aria-controls="collapse203" class="collapsed">Menu level 2.3</a>
                <ul id="collapse203" class="list-unstyled collapse">
                  <li><a href="#">Menu level 3.7</a></li>
                  <li><a href="#">Menu level 3.8</a></li>
                  <li><a href="#">Menu level 3.9</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="sidebar-category">Components</li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse6" aria-expanded="false" aria-controls="collapse6" class="collapsed"><i class="ti-receipt"></i><span class="sidebar-title">Basic</span></a>
            <ul id="collapse6" class="list-unstyled collapse">
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="carousels.html">Carousels</a></li>
              <li><a href="containers.html">Containers</a></li>
              <li><a href="dialogs.html">Dialogs</a></li>
              <li><a href="basic-inputs.html">Inputs</a></li>
              <li><a href="navigations.html">Navigations</a></li>
              <li><a href="progress-bars.html">Progress bars</a></li>
              <li><a href="typography.html">Typography</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse7" aria-expanded="false" aria-controls="collapse7" class="collapsed"><i class="ti-ruler-pencil"></i><span class="sidebar-title">Editors</span></a>
            <ul id="collapse7" class="list-unstyled collapse">
              <li><a href="summernote.html">Summernote</a></li>
              <li><a href="bootstrap-markdown.html">Bootstrap markdown</a></li>
              <li><a href="code-prettify.html">Code prettify</a></li>
              <li><a href="ckeditor.html">CKEditor</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse8" aria-expanded="false" aria-controls="collapse8" class="collapsed"><i class="ti-location-arrow"></i><span class="sidebar-title">Pickers</span></a>
            <ul id="collapse8" class="list-unstyled collapse">
              <li><a href="color-picker.html">Color picker</a></li>
              <li><a href="datetime-picker.html">Datetime picker</a></li>
              <li><a href="clock-picker.html">Clock picker</a></li>
              <li><a href="date-range-picker.html">Date range picker</a></li>
              <li><a href="multi-select.html">Multi select</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse9" aria-expanded="false" aria-controls="collapse9" class="collapsed"><i class="ti-layers-alt"></i><span class="sidebar-title">Forms</span></a>
            <ul id="collapse9" class="list-unstyled collapse">
              <li><a href="forms-layouts.html">Layouts</a></li>
              <li><a href="forms-validation.html">Validation</a></li>
              <li><a href="forms-wizard.html">Wizard</a></li>
              <li><a href="other-plugins.html">Other plugins</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse10" aria-expanded="false" aria-controls="collapse10" class="collapsed"><i class="ti-face-smile"></i><span class="sidebar-title">Icons</span></a>
            <ul id="collapse10" class="list-unstyled collapse">
              <li><a href="glyphicons.html">Glyphicons</a></li>
              <li><a href="font-awesome.html">Font awesome</a></li>
              <li><a href="material-design.html">Material design</a></li>
              <li><a href="themify.html">Themify</a></li>
              <li><a href="weather-icons.html">Weather</a></li>
              <li><a href="flag-icons.html">Flag</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse11" aria-expanded="false" aria-controls="collapse11" class="collapsed"><i class="ti-layout-grid2"></i><span class="sidebar-title">Tables</span></a>
            <ul id="collapse11" class="list-unstyled collapse">
              <li><a href="basic-tables.html">Basic tables</a></li>
              <li><a href="data-tables.html">Data tables</a></li>
              <li><a href="pricing-tables.html">Pricing tables</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse12" aria-expanded="false" aria-controls="collapse12" class="collapsed"><i class="ti-control-forward"></i><span class="sidebar-title">Animations</span></a>
            <ul id="collapse12" class="list-unstyled collapse">
              <li><a href="basic-animations.html">Basic</a></li>
              <li><a href="loading-animations.html">Loading</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse13" aria-expanded="false" aria-controls="collapse13" class="collapsed"><i class="ti-upload"></i><span class="sidebar-title">File uploads</span></a>
            <ul id="collapse13" class="list-unstyled collapse">
              <li><a href="dropzone-js.html">Dropzone</a></li>
              <li><a href="bootstrap-file-input.html">Bootstrap file input</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse14" aria-expanded="false" aria-controls="collapse14" class="collapsed"><i class="ti-info-alt"></i><span class="sidebar-title">Indicators</span></a>
            <ul id="collapse14" class="list-unstyled collapse">
              <li><a href="toastr.html">Toastr</a></li>
              <li><a href="sweet-alert.html">Sweet alert</a></li>
            </ul>
          </li>
          <li class="sidebar-category">Data visualization</li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse15" aria-expanded="false" aria-controls="collapse15" class="collapsed"><i class="ti-bar-chart"></i><span class="sidebar-title">Charts</span></a>
            <ul id="collapse15" class="list-unstyled collapse">
              <li><a href="flot-charts.html">Flot charts</a></li>
              <li><a href="morris-charts.html">Morris charts</a></li>
              <li><a href="chart-js.html">Chart.js</a></li>
              <li><a href="chartist.html">Chartist</a></li>
              <li><a href="other-charts.html">Other charts</a></li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse16" aria-expanded="false" aria-controls="collapse16" class="collapsed"><i class="ti-location-pin"></i><span class="sidebar-title">Maps</span></a>
            <ul id="collapse16" class="list-unstyled collapse">
              <li><a href="vector-maps.html">Vector maps</a></li>
              <li><a href="google-maps.html">Google maps</a></li>
            </ul>
          </li>
          <li class="sidebar-category">Page kits</li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse17" aria-expanded="false" aria-controls="collapse17" class="collapsed"><i class="ti-alert"></i><span class="sidebar-title">Error pages</span></a>
            <ul id="collapse17" class="list-unstyled collapse">
              <li class="panel"><a role="button" data-toggle="collapse" data-parent="#collapse17" href="#collapse171" aria-expanded="false" aria-controls="collapse171" class="collapsed">Error pages v1</a>
                <ul id="collapse171" class="list-unstyled collapse">
                  <li><a href="error-400.html">Error 400</a></li>
                  <li><a href="error-401.html">Error 401</a></li>
                  <li><a href="error-403.html">Error 403</a></li>
                  <li><a href="error-404.html">Error 404</a></li>
                  <li><a href="error-500.html">Error 500</a></li>
                  <li><a href="error-503.html">Error 503</a></li>
                </ul>
              </li>
              <li class="panel"><a role="button" data-toggle="collapse" data-parent="#collapse17" href="#collapse172" aria-expanded="false" aria-controls="collapse172" class="collapsed">Error pages v2</a>
                <ul id="collapse172" class="list-unstyled collapse">
                  <li><a href="error-400-v2.html">Error 400</a></li>
                  <li><a href="error-401-v2.html">Error 401</a></li>
                  <li><a href="error-403-v2.html">Error 403</a></li>
                  <li><a href="error-404-v2.html">Error 404</a></li>
                  <li><a href="error-500-v2.html">Error 500</a></li>
                  <li><a href="error-503-v2.html">Error 503</a></li>
                </ul>
              </li>
              <li class="panel"><a role="button" data-toggle="collapse" data-parent="#collapse17" href="#collapse173" aria-expanded="false" aria-controls="collapse173" class="collapsed">Error pages v3</a>
                <ul id="collapse173" class="list-unstyled collapse">
                  <li><a href="error-400-v3.html">Error 400</a></li>
                  <li><a href="error-401-v3.html">Error 401</a></li>
                  <li><a href="error-403-v3.html">Error 403</a></li>
                  <li><a href="error-404-v3.html">Error 404</a></li>
                  <li><a href="error-500-v3.html">Error 500</a></li>
                  <li><a href="error-503-v3.html">Error 503</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse18" aria-expanded="false" aria-controls="collapse18" class="collapsed"><i class="ti-user"></i><span class="sidebar-title">User pages</span></a>
            <ul id="collapse18" class="list-unstyled collapse">
              <li class="panel"><a role="button" data-toggle="collapse" data-parent="#collapse18" href="#collapse181" aria-expanded="false" aria-controls="collapse181" class="collapsed">User pages v1</a>
                <ul id="collapse181" class="list-unstyled collapse">
                  <li><a href="login.html">Login</a></li>
                  <li><a href="register.html">Register</a></li>
                  <li><a href="forgot-password.html">Forgot password</a></li>
                  <li><a href="lock-screen.html">Lock screen</a></li>
                  <li><a href="profile.html">Profile</a></li>
                </ul>
              </li>
              <li class="panel"><a role="button" data-toggle="collapse" data-parent="#collapse18" href="#collapse182" aria-expanded="false" aria-controls="collapse182" class="collapsed">User pages v2</a>
                <ul id="collapse182" class="list-unstyled collapse">
                  <li><a href="login-v2.html">Login</a></li>
                  <li><a href="register-v2.html">Register</a></li>
                  <li><a href="forgot-password-v2.html">Forgot password</a></li>
                  <li><a href="lock-screen-v2.html">Lock screen</a></li>
                  <li><a href="profile-v2.html">Profile</a></li>
                </ul>
              </li>
              <li class="panel"><a role="button" data-toggle="collapse" data-parent="#collapse18" href="#collapse183" aria-expanded="false" aria-controls="collapse183" class="collapsed">User pages v3</a>
                <ul id="collapse183" class="list-unstyled collapse">
                  <li><a href="login-v3.html">Login</a></li>
                  <li><a href="register-v3.html">Register</a></li>
                  <li><a href="forgot-password-v3.html">Forgot password</a></li>
                  <li><a href="lock-screen-v3.html">Lock screen</a></li>
                  <li><a href="profile-v3.html">Profile</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse19" aria-expanded="false" aria-controls="collapse19" class="collapsed"><i class="ti-blackboard"></i><span class="sidebar-title">Extra pages </span><span class="label label-outline label-success">Updated</span></a>
            <ul id="collapse19" class="list-unstyled collapse">
              <li><a href="chat-dashboard.html">Chat dashboard</a></li>
              <li><a href="mailbox.html">Mailbox</a></li>
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="image-cropper.html">Image cropper</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="timeline.html">Timeline</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="search-results.html">Search results</a></li>
              <li><a href="blank-template.html">Blank template</a></li>
            </ul>
          </li>
          <li class="sidebar-category">Help</li>
          <li class="panel"><a href="documentation.html"><i class="ti-help-alt"></i><span class="sidebar-title">Documentation</span></a></li>
        </ul>
        <div class="sidebar-category">Server Status</div>
        <div class="sidebar-widget">
          <ul class="list-unstyled pl-20 pr-20">
            <li class="mb-20">
              <div class="block clearfix mb-10"><span class="pull-left fs-12 text-muted">CPU Used</span><span class="pull-right label label-outline label-warning">65%</span></div>
              <div class="progress progress-xs bg-light mb-0">
                <div role="progressbar" data-transitiongoal="65" class="progress-bar progress-bar-warning"></div>
              </div>
            </li>
            <li class="mb-20">
              <div class="block clearfix mb-10"><span class="pull-left fs-12 text-muted">Bandwidth</span><span class="pull-right label label-outline label-danger">80%</span></div>
              <div class="progress progress-xs bg-light mb-0">
                <div role="progressbar" data-transitiongoal="80" class="progress-bar progress-bar-danger"></div>
              </div>
            </li>
          </ul>
        </div>
      </aside>
      <!-- Main Sidebar end-->
      <div class="page-container">
        <div class="page-header clearfix">
            <div class="row">
                @yield('content')
            </div>
        </div>
      </div>
      <!-- Right Sidebar start-->
      <aside class="right-sidebar closed">
        <ul role="tablist" class="nav nav-tabs nav-justified nav-sidebar">
          <li role="presentation" class="active"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab"><i class="ti-comment-alt"></i></a></li>
          <li role="presentation"><a href="#announcement" aria-controls="announcement" role="tab" data-toggle="tab"><i class="ti-announcement"></i></a></li>
          <li role="presentation"><a href="#ticket" aria-controls="ticket" role="tab" data-toggle="tab"><i class="ti-bookmark-alt"></i></a></li>
          <li role="presentation"><a href="#setting" aria-controls="setting" role="tab" data-toggle="tab"><i class="ti-settings"></i></a></li>
        </ul>
        <div data-mcs-theme="minimal-dark" class="tab-content nav-sidebar-content mCustomScrollbar">
          <div id="chat" role="tabpanel" class="tab-pane fade in active">
            <form>
              <div class="form-group has-feedback">
                <input type="text" aria-describedby="inputChatSearch" placeholder="Chat with..." class="form-control rounded"><span aria-hidden="true" class="ti-search form-control-feedback"></span><span id="inputChatSearch" class="sr-only">(default)</span>
              </div>
            </form>
            <ul class="chat-list mb-0 fs-12 media-list">
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../build/images/users/20.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Jane Curtis</h6>
                    <p class="text-muted mb-0">Where are you from?</p>
                  </div>
                  <div class="media-right"><span class="badge bg-danger">2</span></div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../build/images/users/01.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Edward Garcia</h6>
                    <p class="text-muted mb-0">Nice to meet you.</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../build/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Bruce Olson</h6>
                    <p class="text-muted mb-0">What do you want to do?</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../build/images/users/03.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Martha Rodriguez</h6>
                    <p class="text-muted mb-0">I'm hungry.</p>
                  </div>
                  <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../build/images/users/05.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Hannah Williamson</h6>
                    <p class="text-muted mb-0">Do you know the address?</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../build/images/users/06.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Anthony Mills</h6>
                    <p class="text-muted mb-0">No problem.</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../build/images/users/07.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Ethan Stanley</h6>
                    <p class="text-muted mb-0">Hello?</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../build/images/users/08.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Jonathan Castro</h6>
                    <p class="text-muted mb-0">OK. Thanks.</p>
                  </div>
                  <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../build/images/users/09.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Denise Rose</h6>
                    <p class="text-muted mb-0">Bye bye.</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;" class="conversation-toggle">
                  <div class="media-left avatar"><img src="../build/images/users/10.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Eugene Meyer</h6>
                    <p class="text-muted mb-0">How are you?</p>
                  </div></a></li>
            </ul>
          </div>
          <div id="announcement" role="tabpanel" class="tab-pane fade">
            <ul class="media-list mb-0 fs-12">
              <li class="media">
                <div class="media-left"><i class="ti-bar-chart-alt media-object mo-xs img-circle bg-primary text-center"></i></div>
                <div class="media-body">
                  <h6 class="media-heading">Market Trend Data</h6>
                  <p class="text-muted mb-0">Mattis nam fringilla dui nostra, ad fames fusce venenatis massa.</p>
                </div>
              </li>
              <li class="media">
                <div class="media-left"><i class="ti-package media-object mo-xs img-circle bg-success text-center"></i></div>
                <div class="media-body">
                  <h6 class="media-heading">Change Your Password!</h6>
                  <p class="text-muted mb-0">Varius dolor condimentum hendrerit eleifend est urna neque fames faucibus?</p>
                </div>
              </li>
              <li class="media">
                <div class="media-left"><i class="ti-gift media-object mo-xs img-circle bg-warning text-center"></i></div>
                <div class="media-body">
                  <h6 class="media-heading">We Apologize</h6>
                  <p class="text-muted mb-0">Justo at mauris ridiculus conubia penatibus dis varius proin porttitor!</p>
                </div>
              </li>
              <li class="media">
                <div class="media-left"><i class="ti-harddrives media-object mo-xs img-circle bg-info text-center"></i></div>
                <div class="media-body">
                  <h6 class="media-heading">Content Policy Update</h6>
                  <p class="text-muted mb-0">Quis ante imperdiet a volutpat quam tellus condimentum blandit elementum.</p>
                </div>
              </li>
              <li class="media">
                <div class="media-left"><i class="ti-mobile media-object mo-xs img-circle bg-purple text-center"></i></div>
                <div class="media-body">
                  <h6 class="media-heading">Mobile Apps</h6>
                  <p class="text-muted mb-0">Ad iaculis at feugiat integer lobortis vivamus hac egestas venenatis.</p>
                </div>
              </li>
              <li class="media">
                <div class="media-left"><i class="ti-alarm-clock media-object mo-xs img-circle bg-danger text-center"></i></div>
                <div class="media-body">
                  <h6 class="media-heading">New Features</h6>
                  <p class="text-muted mb-0">Primis elementum facilisi tristique faucibus feugiat enim rutrum id himenaeos.</p>
                </div>
              </li>
            </ul>
          </div>
          <div id="ticket" role="tabpanel" class="tab-pane fade">
            <form>
              <div class="form-group">
                <input type="text" placeholder="Username" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" placeholder="Email" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" placeholder="Subject" class="form-control">
              </div>
              <div class="form-group">
                <textarea rows="6" placeholder="Description" class="form-control"></textarea>
              </div>
              <button type="submit" class="btn btn-block btn-success">Create Ticket</button>
            </form>
          </div>
          <div id="setting" role="tabpanel" class="tab-pane fade">
            <form class="form-horizontal fs-12">
              <div class="clearfix">
                <h6 class="pull-left">Maintenance Mode</h6>
                <div class="switch pull-right">
                  <input id="setting-1" type="checkbox" checked="">
                  <label for="setting-1" class="switch-success"></label>
                </div>
              </div>
              <p class="text-muted">Ipsum non tempor non nullam nisi congue nisi amet enim.</p>
              <div class="clearfix">
                <h6 class="pull-left">Location Services</h6>
                <div class="switch pull-right">
                  <input id="setting-2" type="checkbox" checked="">
                  <label for="setting-2" class="switch-success"></label>
                </div>
              </div>
              <p class="text-muted">Eleifend suscipit erat cursus viverra commodo nostra sit commodo mollis.</p>
              <div class="clearfix">
                <h6 class="pull-left">Display Errors</h6>
                <div class="switch pull-right">
                  <input id="setting-3" type="checkbox" checked="">
                  <label for="setting-3" class="switch-success"></label>
                </div>
              </div>
              <p class="text-muted">Amet per tortor adipiscing risus dolor orci diam curabitur senectus.</p>
              <div class="clearfix">
                <h6 class="pull-left">Use SEO URLs</h6>
                <div class="switch pull-right">
                  <input id="setting-4" type="checkbox" checked="">
                  <label for="setting-4" class="switch-success"></label>
                </div>
              </div>
              <p class="text-muted">Ullamcorper dignissim facilisis fames proin a leo diam amet urna.</p>
              <div class="clearfix">
                <h6 class="pull-left">Enable History</h6>
                <div class="switch pull-right">
                  <input id="setting-5" type="checkbox" checked="">
                  <label for="setting-5" class="switch-success"></label>
                </div>
              </div>
              <p class="text-muted">Consectetur cubilia varius vulputate fermentum non dolor cubilia torquent risus.</p>
            </form>
          </div>
        </div>
      </aside>
      <aside class="conversation closed">
        <h5 class="text-center m-0 p-20">Edward Garcia<a href="javascript:;" class="conversation-toggle pull-left"><i class="ti-arrow-left text-muted"></i></a><a href="javascript:;" class="pull-right"><i class="ti-pencil text-muted"></i></a></h5>
        <ul data-mcs-theme="minimal-dark" class="media-list chat-content fs-12 pl-20 pr-20 mCustomScrollbar">
          <li class="media">
            <div class="media-left avatar"><img src="../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <p>Hello.</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:45 PM <i class="ti-check text-success"></i></time>
            </div>
          </li>
          <li class="media other">
            <div class="media-body">
              <p>Hi.</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:46 PM <i class="ti-check text-success"></i></time>
            </div>
            <div class="media-right avatar"><img src="../build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          </li>
          <li class="media">
            <div class="media-left avatar"><img src="../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <p>How are you?</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:47 PM <i class="ti-check text-success"></i></time>
            </div>
          </li>
          <li class="media other">
            <div class="media-body">
              <p>I'm good. How are you?</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:50 PM <i class="ti-check text-success"></i></time>
            </div>
            <div class="media-right avatar"><img src="../build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          </li>
          <li class="media">
            <div class="media-left avatar"><img src="../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <p>Good. Do you speak English?</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:55 PM <i class="ti-check text-success"></i></time>
            </div>
          </li>
          <li class="media other">
            <div class="media-body">
              <p>A little. Are you American?</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:56 PM <i class="ti-check text-success"></i></time>
            </div>
            <div class="media-right avatar"><img src="../build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          </li>
          <li class="media">
            <div class="media-left avatar"><img src="../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <p>Yes.</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:00 PM <i class="ti-check text-success"></i></time>
            </div>
          </li>
          <li class="media other">
            <div class="media-body">
              <p>Where are you from?</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">10:01 PM <i class="ti-check text-success"></i></time>
            </div>
            <div class="media-right avatar"><img src="../build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          </li>
          <li class="media">
            <div class="media-left avatar"><img src="../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <p>I'm from California.</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:03 PM <i class="ti-check text-success"></i></time>
            </div>
          </li>
          <li class="media other">
            <div class="media-body">
              <p>Nice to meet you.</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">10:04 PM <i class="ti-check text-success"></i></time>
            </div>
            <div class="media-right avatar"><img src="../build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          </li>
          <li class="media">
            <div class="media-left avatar"><img src="../build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <p>Nice to meet you too.</p>
              <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:05 PM <i class="ti-check text-success"></i></time>
            </div>
          </li>
        </ul>
        <form class="pl-20 pr-20">
          <div class="form-group has-feedback mb-0">
            <input type="text" aria-describedby="inputSendMessage" placeholder="Sent a message" class="form-control rounded"><span aria-hidden="true" class="ti-pencil-alt form-control-feedback"></span><span id="inputSendMessage" class="sr-only">(default)</span>
          </div>
        </form>
      </aside>
      <!-- Right Sidebar end-->
    </div>
    <!-- Demo Settings start-->
    <div class="setting closed"><a href="javascript:;" class="setting-toggle fs-16"><i class="ti-palette text-muted"></i></a>
      <h5 class="fs-16 mt-0 mb-20">Header Colors</h5>
      <ul class="list-inline">
        <li><a href="javascript:;" data-color="header-primary" class="mo-xs bg-primary inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-green" class="mo-xs bg-success inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-purple" class="mo-xs bg-purple inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-yellow" class="mo-xs bg-warning inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-red" class="mo-xs bg-danger inline-block img-circle header-color"></a></li>
      </ul>
      <h5 class="fs-16 mt-0 mb-20">Sidebar Colors</h5>
      <ul class="list-inline">
        <li><a href="javascript:;" data-color="sidebar-dark" class="sidebar-color mo-xs bg-black inline-block img-circle"></a></li>
        <li><a href="javascript:;" data-color="sidebar-light" class="sidebar-color mo-xs bg-default inline-block img-circle"></a></li>
      </ul>
    </div>
    <!-- Demo Settings end-->
    <!-- jQuery-->
    <script type="text/javascript" src="../plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Malihu Scrollbar-->
    <script type="text/javascript" src="../plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Animo.js-->
    <script type="text/javascript" src="../plugins/animo.js/animo.min.js"></script>
    <!-- Bootstrap Progressbar-->
    <script type="text/javascript" src="../plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- jQuery Easy Pie Chart-->
    <script type="text/javascript" src="../plugins/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- Toastr-->
    <script type="text/javascript" src="../plugins/toastr/toastr.min.js"></script>
    <!-- MomentJS-->
    <script type="text/javascript" src="../plugins/moment/min/moment.min.js"></script>
    <!-- jQuery BlockUI-->
    <script type="text/javascript" src="../plugins/blockUI/jquery.blockUI.js"></script>
    <!-- jQuery Counter Up-->
    <script type="text/javascript" src="../plugins/jquery-waypoints/waypoints.min.js"></script>
    <script type="text/javascript" src="../plugins/Counter-Up/jquery.counterup.min.js"></script>
    <!-- Jvector Map-->
    <script type="text/javascript" src="../plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script type="text/javascript" src="../plugins/jvectormap/maps/jquery-jvectormap-world-mill.js"></script>
    <!-- Flot Charts-->
    <script type="text/javascript" src="../plugins/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="../plugins/flot/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="../plugins/flot.curvedlines/curvedLines.js"></script>
    <script type="text/javascript" src="../plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <!-- Morris Chart-->
    <script type="text/javascript" src="../plugins/raphael/raphael-min.js"></script>
    <script type="text/javascript" src="../plugins/morris.js/morris.min.js"></script>
    <!-- DataTables-->
    <script type="text/javascript" src="../plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="../plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="../plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="../plugins/jszip/dist/jszip.min.js"></script>
    <script type="text/javascript" src="../plugins/pdfmake/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="../plugins/pdfmake/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="../plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="../plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="../plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
    <script type="text/javascript" src="../plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="../plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <!-- jQuery UI-->
    <script type="text/javascript" src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- FullCalendar-->
    <script type="text/javascript" src="../plugins/fullcalendar/dist/fullcalendar.min.js"></script>
    <!-- jQuery MiniColors-->
    <script type="text/javascript" src="../plugins/jquery-minicolors/jquery.minicolors.min.js"></script>
    <!-- Bootstrap Date Range Picker-->
    <script type="text/javascript" src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom JS-->
    <script type="text/javascript" src="../build/js/second-layout/app.js"></script>
    <script type="text/javascript" src="../build/js/second-layout/demo.js"></script>
    <script type="text/javascript" src="../build/js/page-content/dashboard/index.js"></script>
  </body>
</html>