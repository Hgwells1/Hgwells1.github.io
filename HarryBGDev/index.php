<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="Rob5Underscores"/>
    <!-- <base href="https://piston.modrealms.net/"/>  -->

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css"/>

    <link rel="stylesheet" href="css/responsive.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Document Title
    ============================================= -->
    <title>ModRealms' Piston</title>

</head>

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#3c404d",
      "text": "#d6d6d6"
    },
    "button": {
      "background": "#8bed4f"
    }
  },
  "position": "bottom-right",
  "content": {
    "href": "https://modrealms.net/tos.html"
  }
})});
</script>
<!-- Adding Mobile Home Menu Icon Functionality -->
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="applogo.png" />


<body class="stretched side-header">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    


    <!-- Content
    ============================================= -->
    <section id="content">

        <?php

        if (empty($_GET)) {
            include 'home.php';

        } else if (isset($_GET['features'])) {
            include 'features.php';

        } else if (isset($_GET['whatis'])) {
            include 'whatis.php';

        } else if (isset($_GET['forums'])) {
            //include 'forum';
            echo '<iframe id="forumsFrame" height="100%" width="100%" src="forum/index.php" frameborder="0" ></iframe>';
            //include_once $_SERVER['DOCUMENT_ROOT'].'/forum/index.php';

        } else if (isset($_GET['stats'])) {
            include 'stats.php';
        } else if (isset($_GET['tickets'])) {
            include 'tickets.php';
            // echo '<iframe id="ticketsFrame" height="100%" width="100%" src="tickets/" frameborder="0" ></iframe>';

        } else if (isset($_GET['store'])) {
            include 'store.php';

        } else {
            #404
            include '404.html';
        }

        ?>

    </section><!-- #content end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>

<!-- Optionals
============================================= -->
<?php

if (empty($_GET)) {
    echo '<script type="text/javascript" src="js/jquery.particleground.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#particles").particleground({
            dotColor: "#1ABC9C",
            lineColor: "#1ABC9C"
        });

    });
</script>';

} else if (isset($_GET['feature'])) {

} else if (isset($_GET['forums'])) {
    echo '<script type="text/javascript">$("#forumsFrame").load(function() { $(this).height( $(this).contents().find("body").height()-5 );});</script>';
} else if (isset($_GET['stats'])) {

} else if (isset($_GET['tickets'])) {
    echo '<script type="text/javascript">$("#ticketsFrame").load(function() { $(this).height( $(this).contents().find("body").height()-5 );});</script>';
} else if (isset($_GET['store'])) {

} else {

}

?>
</body>
</html>