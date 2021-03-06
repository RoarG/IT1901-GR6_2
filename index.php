<?php include_once 'base.php'; ?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Etc START -->
    <base href="<?php echo $base->getBaseUrl(); ?>" />
    <title>Sheep Locator</title>
    <!-- Etc END -->
    
    <!-- Meta / Mobileapp START -->
    <meta name="viewport" content="width=640,user-scalable=false;initial-scale=1.0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <!-- Meta / Mobileapp END -->
    
    <!-- iPhone icons START -->
    <link rel="apple-touch-startup-image" href="assets/css/icons/splash.png" />  
    <link rel="apple-touch-icon" href="assets/css/icons/icon-57-precomposed.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/css/icons/icon-72-precomposed.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/css/icons/icon-114-precomposed.png" />
    <!-- iPhone icons END -->
    
    <!-- Styling START -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- Styling END -->
    
    <!-- Google Libs START -->
    <script type="text/javascript" src="http://www.google.com/jsapi"></script> 
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=geometry&amp;key=AIzaSyCQFPTSj0WHj_zgEmLxbQk3METKu5q8bRA&amp;sensor=false&amp;language=no"></script>
    <!-- Google Libs END -->
    
    <!-- Libraries START -->
    <script type="text/javascript" src="assets/js/lib/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/js/lib/jquery-ui-1.10.3.min.js"></script>
    <script type="text/javascript" src="assets/js/lib/underscore-1.5.2.min.js"></script>
    <script type="text/javascript" src="assets/js/lib/moment-2.3.1.min.js"></script>
    <!-- Libraries END -->
    
    <!-- Plugins START -->
    <script type="text/javascript" src="assets/js/plugins/jquery.ba-outside-events.min.js"></script>
    <!-- Plugins END -->
    
    <!-- System START -->
    <script type="text/javascript" src="assets/js/base.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <!-- System END -->
</head>
<body>
<div id="wrapper">
    <div id="logo"><img src="assets/css/gfx/logo-head.jpg" alt="Sheep Locator" /></div>
    <div id="nav">
        <div id="back">
            <h2>Tilbake</h2>
            <div class="image-overlay-back"><a id="back-button" href="#"><img src="assets/css/gfx/blank2x2.png" alt="" height="69" width="177" /></a></div>
        </div>
        <div id="notifications"><a href="#">0</a></div>
    </div>
    <div id="main">
        <div id="main-1">
            <div class="main-menu">
                <div class="block">
                    <div class="block-top">
                        <h2>Laster...</h2>
                    </div>
                    <div class="block-body block-init">
                        <img src="assets/css/gfx/ajax-loader-big.gif" alt="Loading" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="notification-window-overlay"></div>
    <div id="notification-window">
        <div id="notifications-top"><div class="block-icon" id="block-icon-notification"></div>
            <h2>Notifications<span> (0)</span></h2>
        </div>
        <div id="notifications-body" data-hasinitialvalue="0">
            <div id="notification-body-loading"><p>Laster...</p></div>
        </div>
        <div id="notifications-bottom">
            <h2>Se alle</h2>
            <div class="image-overlay-notification"><a id="notification-all" href="#"><img src="assets/css/gfx/blank2x2.png" alt="" height="105" width="583" /></a></div>
        </div>
    </div>
</div>
</body>
</html>