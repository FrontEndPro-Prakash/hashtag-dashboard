<!DOCTYPE html>
<html>
<head>
    <?php $base_url = "https://think360.in/work/hashtag-dashboard/" ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HASHTAG | Dashboard</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url ?>favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_url ?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url ?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $base_url ?>favicon/site.webmanifest">
    <!-- /favicon -->

    <!-- libraries -->
    <link href="<?php echo $base_url ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url ?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $base_url ?>css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
    <link href="<?php echo $base_url ?>css/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="<?php echo $base_url ?>css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- /libraries -->

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- /fonts -->

    <!-- stylesheet -->
    <link href="<?php echo $base_url ?>css/animate.css" rel="stylesheet">
    <link href="<?php echo $base_url ?>css/style.css?v=1.2" rel="stylesheet">
    <link href="<?php echo $base_url ?>css/custom.css?v=1.2" rel="stylesheet">
    <!-- /stylesheet -->
<style>
.nav.metismenu > li .arrow {
    margin-right: 0;
    margin-left: auto;
}
.nav-second-level li a {
    background: #fff;
}
.nav-second-level li {
    padding-bottom:0 !important;
}
</style> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <a href="<?php echo $base_url ?>" class="brand_logo">
                            <img class="d-lg-block d-none" src="<?php echo $base_url ?>img/hashtag-logo.svg" alt="Hashtag Dashboard">
                            <img class="d-lg-none d-block" src="<?php echo $base_url ?>img/hash-sml.svg" alt="Hashtag Dashboard">
                        </a>
                        <a class="navbar-minimalize minimalize-styl-2" href="javascript:void(0);"><img src="<?php echo $base_url ?>img/close-the-menu.svg" alt="Hamburger"></a>
                    </li>
                    <li class="admin-info">
                        <div class="admin-row">
                            <img src="<?php echo $base_url ?>img/admin-pic.jpg" alt="Admin">
                            <div class="admin-name">
                                <h5>Victoria Diglio</h5>
                                <p>ADMIN</p>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <a href="index.php" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Group_13400" data-name="Group 13400" transform="translate(-13 -186)">
                                    <g id="Rectangle_9900" data-name="Rectangle 9900" transform="translate(13 186)" fill="#fff" stroke="#707070" stroke-width="1" opacity="0">
                                      <rect width="24" height="24" stroke="none"/>
                                      <rect x="0.5" y="0.5" width="23" height="23" fill="none"/>
                                  </g>
                                  <g id="Icon_feather-users" data-name="Icon feather-users" transform="translate(12.5 186.682)">
                                      <path id="Path_575" data-name="Path 575" d="M13.136,26.864V25.409A2.909,2.909,0,0,0,10.227,22.5H4.409A2.909,2.909,0,0,0,1.5,25.409v1.455" transform="translate(0 -9.273)" fill="none" stroke="#d1c2b4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                      <path id="Path_576" data-name="Path 576" d="M13.318,7.409A2.909,2.909,0,1,1,10.409,4.5a2.909,2.909,0,0,1,2.909,2.909Z" transform="translate(-3.091)" fill="none" stroke="#d1c2b4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                      <path id="Path_577" data-name="Path 577" d="M32.182,26.964V25.51A2.909,2.909,0,0,0,30,22.7" transform="translate(-14.682 -9.373)" fill="none" stroke="#d1c2b4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                      <path id="Path_578" data-name="Path 578" d="M24,4.7a2.909,2.909,0,0,1,0,5.636" transform="translate(-11.591 -0.1)" fill="none" stroke="#d1c2b4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                  </g>
                              </g>
                          </svg>
                          <span class="nav-label">USERS</span><span class="fa arrow"></span>
						</a>
						<ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
							<li><a href="#">Dashboard v.1</a></li>
							<li><a href="#">Dashboard v.2</a></li>
						</ul>
                  </li>
                  <li>
                    <a href="gems-folder.php">
                        <svg class="gems" xmlns="http://www.w3.org/2000/svg" width="19.056" height="15.141" viewBox="0 0 19.056 15.141">
                          <path id="Path_6937" data-name="Path 6937" d="M18.889-9.166q.26.26,0,.779L10.242.223a4.653,4.653,0,0,1-.779.223A1.709,1.709,0,0,1,8.795.223L.148-8.387a.5.5,0,0,1,0-.779l4.23-5.307a.641.641,0,0,1,.445-.223h9.389a.641.641,0,0,1,.445.223Zm-1.781-.223-3.229-4.119H11.689l1.15,4.119ZM6.234-8.275H1.93L8.313-1.93Zm5.418,0H7.273L9.463-1.744ZM7.311-9.389h4.3l-1.15-4.119h-2Zm5.641,1.113-2,6.049L17-8.275Zm-7.9-5.232L1.818-9.389h4.49l1.15-4.119Z" transform="translate(0.037 14.695)" fill="#d1c2b4"/>
                      </svg>
                      <span class="nav-label pl-1">GEMS FOLDER</span>
                  </a>
              </li>
              <li>
                <a href="albums.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <g id="Group_13398" data-name="Group 13398" transform="translate(-13 -265)">
                            <g id="Rectangle_9901" data-name="Rectangle 9901" transform="translate(13 265)" fill="#fff" stroke="#707070" stroke-width="1" opacity="0">
                              <rect width="24" height="24" stroke="none"/>
                              <rect x="0.5" y="0.5" width="23" height="23" fill="none"/>
                          </g>
                          <g id="album" transform="translate(13.306 269)">
                              <g id="Group_1473" data-name="Group 1473">
                                <path id="Path_372" data-name="Path 372" d="M14.5,4H14V3.5A1.5,1.5,0,0,0,12.5,2H12V1.5A1.5,1.5,0,0,0,10.5,0h-9A1.5,1.5,0,0,0,0,1.5v9A1.5,1.5,0,0,0,1.5,12H2v.5A1.5,1.5,0,0,0,3.5,14H4v.5A1.5,1.5,0,0,0,5.5,16h9A1.5,1.5,0,0,0,16,14.5v-9A1.5,1.5,0,0,0,14.5,4ZM1,8.3V1.5A.5.5,0,0,1,1.5,1h9a.5.5,0,0,1,.5.5V6.295L9.855,5.15a.5.5,0,0,0-.705,0L7,7.3,4.855,5.145a.5.5,0,0,0-.7,0ZM3.5,13a.5.5,0,0,1-.5-.5V12h7.5A1.5,1.5,0,0,0,12,10.5V3h.5a.5.5,0,0,1,.5.5v9a.5.5,0,0,1-.5.5ZM15,14.5a.5.5,0,0,1-.5.5h-9a.5.5,0,0,1-.5-.5V14h7.5A1.5,1.5,0,0,0,14,12.5V5h.5a.5.5,0,0,1,.5.5Z" fill="#d1c2b4"/>
                            </g>
                        </g>
                    </g>
                </svg>
                <span class="nav-label">ALBUMS</span>
            </a>
        </li>
    </ul>
</div>
</nav>

<div id="page-wrapper" class="gray-bg">
    <div class="row">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
            <ul class="nav navbar-top-links navbar-right ml-auto mr-4">
                <li>
                    <a href="javascript:void(0);" title="Notifications">
                        <img src="<?php echo $base_url ?>img/bell-icon.svg" alt="Notification">
                        <span class="indicator"></span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown">
                      <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownMenuButton" class="dropdown-toggle" href="javascript:void(0);" title="Logout">
                        <img src="<?php echo $base_url ?>img/logout-icon.svg" alt="Logout">
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo $base_url ?>change-password.php">Change Password</a>
                        <a class="dropdown-item" href="<?php echo $base_url ?>login.php">Logout</a>
                      </div>
                    </div>
                    
                </li>
            </ul>

        </nav>
    </div>


<!-- icon variable -->
<?php 

    $edit_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="11.734" height="11.857" viewBox="0 0 11.734 11.857"><path id="Icon_feather-edit-2" data-name="Icon feather-edit-2" d="M11.12,3.706a1.531,1.531,0,0,1,2.165,2.165L5.977,13.179,3,13.991l.812-2.977Z" transform="translate(-2.5 -2.634)" fill="none" stroke="#333" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>';
    $block_icon = '<svg id="ban_1_" data-name="ban (1)" xmlns="http://www.w3.org/2000/svg" width="12.227" height="12.227" viewBox="0 0 12.227 12.227"> <g id="Group_13687" data-name="Group 13687"> <g id="Group_13686" data-name="Group 13686"> <path id="Path_6930" data-name="Path 6930" d="M6.113,0a6.113,6.113,0,1,0,6.113,6.113A6.12,6.12,0,0,0,6.113,0Zm0,11.336a5.223,5.223,0,1,1,5.223-5.223A5.229,5.229,0,0,1,6.113,11.336Z" fill="#333"/> </g></g>
    <g id="Group_13689" data-name="Group 13689" transform="translate(1.896 1.911)"> <g id="Group_13688" data-name="Group 13688"> <rect id="Rectangle_9937" data-name="Rectangle 9937" width="11.038" height="0.89" transform="translate(0 7.805) rotate(-45)" fill="#333"/></g> </g> </svg>';
    $info_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="13.289" height="13.289" viewBox="0 0 13.289 13.289"> <g id="Icon_feather-info" data-name="Icon feather-info" transform="translate(-2.5 -2.5)"> <path id="Path_6931" data-name="Path 6931" d="M15.289,9.145A6.145,6.145,0,1,1,9.145,3a6.145,6.145,0,0,1,6.145,6.145Z" transform="translate(0 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/> <path id="Path_6932" data-name="Path 6932" d="M18,20.458V18" transform="translate(-8.855 -8.855)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/> <path id="Path_6933" data-name="Path 6933" d="M18,12h0" transform="translate(-8.855 -5.313)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/> </g></svg>';
    $delete_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="12.359" height="14" viewBox="0 0 12.359 14"> <path id="Path_6938" data-name="Path 6938" d="M11.949-9.789a1.18,1.18,0,0,1,.861.369,1.211,1.211,0,0,1,.369.889v1.641a.412.412,0,0,1-.123.273.376.376,0,0,1-.287.137h-.41V-.3a1.975,1.975,0,0,1-.6,1.449,2.007,2.007,0,0,1-1.477.6H3.719a2.007,2.007,0,0,1-1.477-.6A1.975,1.975,0,0,1,1.641-.3V-6.48H1.23a.363.363,0,0,1-.41-.41V-8.531a1.211,1.211,0,0,1,.369-.889,1.18,1.18,0,0,1,.861-.369h2.9v-1.23a1.18,1.18,0,0,1,.369-.861,1.18,1.18,0,0,1,.861-.369H7.82a1.18,1.18,0,0,1,.861.369,1.18,1.18,0,0,1,.369.861v1.23ZM5.77-11.02v1.23H8.23v-1.23a.363.363,0,0,0-.41-.41H6.18A.363.363,0,0,0,5.77-11.02ZM11.539-.3V-6.48H2.461V-.3A1.18,1.18,0,0,0,2.83.561,1.211,1.211,0,0,0,3.719.93h6.563A1.211,1.211,0,0,0,11.17.561,1.18,1.18,0,0,0,11.539-.3Zm.82-7v-1.23q0-.438-.41-.437h-9.9q-.41,0-.41.438V-7.3Zm-7.41,6.18a.363.363,0,0,1-.41.41.363.363,0,0,1-.41-.41V-4.43a.363.363,0,0,1,.41-.41.363.363,0,0,1,.41.41Zm2.461,0A.363.363,0,0,1,7-.711a.363.363,0,0,1-.41-.41V-4.43A.363.363,0,0,1,7-4.84a.363.363,0,0,1,.41.41Zm2.461,0a.363.363,0,0,1-.41.41.363.363,0,0,1-.41-.41V-4.43a.363.363,0,0,1,.41-.41.363.363,0,0,1,.41.41Z" transform="translate(-0.82 12.25)" fill="#333"/></svg>';
    $view_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="15.284" height="11.443" viewBox="0 0 15.284 11.443"> <g id="Icon_feather-eye" data-name="Icon feather-eye" transform="translate(-0.9 -5.4)"> <path id="Path_6935" data-name="Path 6935" d="M1.5,11.122S4.061,6,8.542,6s7.042,5.122,7.042,5.122-2.561,5.122-7.042,5.122S1.5,11.122,1.5,11.122Z" fill="none" stroke="#333" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/> <path id="Path_6936" data-name="Path 6936" d="M17.341,15.421A1.921,1.921,0,1,1,15.421,13.5,1.921,1.921,0,0,1,17.341,15.421Z" transform="translate(-6.878 -4.299)" fill="none" stroke="#333" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/> </g></svg>';

?>
<!-- /icon variable -->