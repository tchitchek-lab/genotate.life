<?php
ini_set('max_execution_time', '0');
?>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/includes/config_file.php");
include($_SERVER['DOCUMENT_ROOT'] . '/includes/connect_database.php');
include($_SERVER['DOCUMENT_ROOT'] . '/includes/tooltips.php');
?>

<?php
$connexion = connect_database();

$paths = read_configfile();
$paths['USER_MODE'] = "normal";

?>

<!doctype html>
<html>
<head>

    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <!--[if IE]>
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/><![endif]-->

    <script src="/js/jquery-2.2.2.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/create_svg.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/button.css">
    <link rel="stylesheet" type="text/css" href="../css/div.css">
    <link rel="stylesheet" type="text/css" href="../css/element.css">
    <link rel="stylesheet" type="text/css" href="../css/input.css">
    <link rel="stylesheet" type="text/css" href="../css/table.css">
    <link rel="stylesheet" type="text/css" href="../css/slider.css">
    <link rel="stylesheet" type="text/css" href="../css/range.css">

    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=11; IE=9; IE=8; IE=7"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

    <script src="/js/matomo.js"></script>

</head>
<body id="body">

<div id="header" >
    <div id="header" style="float: none;display:block;max-width:60em;margin: 0px auto;">
        <a class="header_genotate" href='/root'>Genotate</a>
        <a class="header_link" href="/root/index.php?page=manage_annotations">Manage annotations</a>
        <li class="dropdown"><a href="#" class="header_dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Homology references<span
                        style='margin-left:7px;' class="caret"></span></a>
            <ul class="dropdown-menu">
                <a class="header_dropdown_link" href="/root/index.php?page=create_reference">Create reference</a>
                <a class="header_dropdown_link" href="/root/index.php?page=manage_references">Manage references</a>
                <a class="header_dropdown_link" href="/root/index.php?page=import_references">Import references</a>
            </ul>
        </li>
        <li class="dropdown"><a href="#" class="header_dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Configuration<span style='margin-left:7px;'
                                                                                              class="caret"></span></a>
            <ul class="dropdown-menu">
                <a class="header_dropdown_link" href="/root/index.php?page=configure_platform">Platform
                    configuration<span class="sr-only"/></a>
                <a class="header_dropdown_link" href="/root/index.php?page=configure_database">Database
                    configuration<span class="sr-only"/></a>
            </ul>
        </li>

        <li class="dropdown" style="float:right"><a href="#" class="header_dropdown-toggle" data-toggle="dropdown"
                                                    role="button"
                                                    aria-haspopup="true" aria-expanded="false">Help<span
                        style='margin-left:7px;'
                        class="caret"></span></a>
            <ul class="dropdown-menu">
                <a class="header_dropdown_link" href="/root/index.php?page=tutorial">Tutorial<span
                            class="sr-only"/></a>
                <a class="header_dropdown_link" href="/root/index.php?page=about">About<span class="sr-only"/></a>
            </ul>
            <a style="vertical-align: middle;float:right;font-size:16px;background-color:black;height:40px;width:40px;padding:10px;"
               href="/index.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a>
        </li>


    </div>
</div>

<div id="content_scroll">
    <script>
        $(document).ready(function () {
            const resizeDelay = 200;
            let doResize = true;
            const resizer = function () {
                if (doResize) {
                    const heightSlider = $('#header').height();
                    $('#content_scroll').css({height: $(window).height() - heightSlider});
                    const widthInner = $('#content').width();
                    ($(window).width() - widthInner) / 2;
                    doResize = false;
                }
            };
            setInterval(resizer, resizeDelay);
            resizer();
            $(window).resize(function () {
                doResize = true;
            });
        });
    </script>

    <div id="content" style='float: none;display:block;max-width:60em;margin: 0 auto;'>
        <div id="content-top-margin" style='width:100%;height:0;padding:15px;'></div>

        <?php
        if ($paths['USER_MODE'] == "restricted") {
            echo '<div class="alert alert-warning" style="width:100%">';
            echo 'You are running Genotate in a restricted administration mode. None of your modification will be commited.';
            echo '</div>';
        }
        ?>

        <?php
        $PAGES = array();
        $PAGES['home'] = '/admin/pages/home.php';
        $PAGES['manage_annotations'] = '/admin/pages/manage_annotations.php';
        $PAGES['manage_annotation_details'] = '/admin/pages/manage_annotation_details.php';
        $PAGES['create_reference'] = '/admin/pages/create_reference.php';
        $PAGES['manage_references'] = '/admin/pages/manage_references.php';
        $PAGES['manage_reference_details'] = '/admin/pages/manage_reference_details.php';
        $PAGES['view_annotations'] = '/admin/pages/view_annotations.php';
        $PAGES['import_references'] = '/admin/pages/import_references.php';
        $PAGES['configure_database'] = '/admin/pages/configure_database.php';
        $PAGES['configure_platform'] = '/admin/pages/configure_platform.php';
        $PAGES['about'] = '/admin/pages/about.php';
        $PAGES['tutorial'] = '/admin/pages/tutorial.php';

        $page = "";
        if (isset($_GET ['page'])) {
            $page = $_GET ['page'];
        }
        if (array_key_exists($page,$PAGES)) {
            include($_SERVER['DOCUMENT_ROOT'] . $PAGES[$page]);
        } else {
            include($_SERVER['DOCUMENT_ROOT'] . "/admin/pages/home.php");
        }
        ?>

        <div id="content-bottom-margin" style='width:100%;padding-top:15px;padding-bottom:15px;'>
            Genotate is supported by the IDMIT infrastructure and funded by the ANR.
            <br><a href="http://www.idmitcenter.fr/">IDMIT</a> is part of the French Alternative Energies and Atomic
            Energy Commission (CEA) | <a href="http://www.genotate.life/index.php?page=gpl3">Terms of use (GPL
                license)</a>
        </div>
    </div>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip({trigger: 'hover'});
        })
    </script>
</div>

</body>
</html>
