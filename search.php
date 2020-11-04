<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>查询URL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Huge selection of charts created with the React ChartJS Plugin">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" rel="stylesheet">
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
        </div>      

        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">布局选项
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">固定网页头部
                                                </div>
                                                <div class="widget-subheading">使标题顶部固定，始终可见。
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">固定网页侧栏
                                                </div>
                                                <div class="widget-subheading">使侧边栏保持固定，始终可见。
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                网页头部选项
                            </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                恢复默认
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">选择配色
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>网页侧栏选项</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                恢复默认
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">选择配色
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>    

        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">我的URL库</li>
                                <li>
                                    <a href="index.php">
                                        <i class="metismenu-icon pe-7s-browser">
                                        </i>个人中心
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">URL库操作</li>
                                <li>
                                    <a href="add.html">
                                        <i class="metismenu-icon pe-7s-mouse">
                                        </i>增加URL
                                    </a>
                                </li>
                                <li>
                                    <a href="search.html" class="mm-active">
                                        <i class="metismenu-icon pe-7s-display2">
                                        </i>查询URL
                                    </a>
                                </li>
                                <li>
                                    <a href="change.html">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>修改URL
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="tab-content">
                            <div class="app-page-title">
                                <div class="page-title-wrapper">
                                    <div class="page-title-heading">
                                        <div class="page-title-icon">
                                            <i class="pe-7s-search icon-gradient bg-happy-itmeo">
                                            </i>
                                        </div>
                                        <div>查询URL
                                            <div class="page-title-subheading">在你的收藏夹中查询URL链接
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div> 
                            <div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__content card">
                                    <div class="bg-white">
                                        <div class="table-responsive">
                                            <table class="text-nowrap table-lg mb-0 table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="widget-heading"><h5 class="card-title">URL名称</h5></div>
                                                        </td>
                                                        <td class="text-left"><h5 class="card-title">URL链接</h5></td>
                                                        <td class="text-left"><h5 class="card-title">URL标签</h5>
                                                        </td>
                                                        <td class="text-right"><h5 class="card-title">URL评论</h5>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        $urlName = $_POST["urlName"];
                                                        $urlLable = $_POST["urlLable"];
                                                        session_start();
                                                        $usernm = $_SESSION['user'];
                                                        if($urlName == '' && $urlLable == ''){
                                                            echo "<script>alert('请至少输入一项查询条件！');window.location.href='search.html'</script>";
                                                        }else{
                                                            $servername = "localhost";
                                                            $username = "root";
                                                            $password = "cui,logic";
                                                            $dbname = "urlusersdb";
                                                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                                                            mysqli_query($conn, "set names utf8");
                                                            $case = 0;
                                                            if($urlName == ''){
                                                                $case = 1;
                                                            }
                                                            if($urlLable == ''){
                                                                $case = 2;
                                                            }
                                                            switch($case){
                                                                case 1:
                                                                    $sql = "SELECT * FROM urllables WHERE username = '$usernm' AND urllable = '$urlLable'";
                                                                    $result = $conn->query($sql);
                                                                    $num = mysqli_num_rows($result);
                                                                    if($num){
                                                                        while($row = mysqli_fetch_array($result)){
                                                                            $href = 'https://'.$row['urlstr'];
                                                                            $sql2 = "SELECT * FROM urls WHERE username = '$usernm' AND urlstr = '{$row['urlstr']}'";
                                                                            $result2 = $conn->query($sql2);
                                                                            $row2 = mysqli_fetch_array($result2);
                                                                            echo "<tr>
                                                                                    <td>
                                                                                        <div class='widget-heading'>{$row2['urlname']}</div>
                                                                                    </td>
                                                                                    <td class='text-left'><a href={$href}>{$row['urlstr']}</a></td>
                                                                                    <td class='text-left'><i class='fa fa-tags'></i>&nbsp{$row['urllable']}<br>
                                                                                    </td><td class='text-right'>";
                                                                            $sql3 = "SELECT * FROM urlcomments WHERE username = '$usernm' AND urlstr = '{$row['urlstr']}'";
                                                                            $result3 = $conn->query($sql3);
                                                                            while($row3 = mysqli_fetch_array($result3)){
                                                                                echo "<i class='fa fa-paper-plane'></i>&nbsp{$row3['urlcomment']}<br>";
                                                                            }
                                                                            echo "</td></tr>";
                                                                        }
                                                                    }else{
                                                                        echo "<script>alert('url标签不存在，查询失败！');window.location.href='search.html'</script>";
                                                                    }
                                                                    break;
                                                                case 2:
                                                                    $sql = "SELECT * FROM urls WHERE username = '$usernm' AND urlname = '$urlName'";
                                                                    $result = $conn->query($sql);
                                                                    $num = mysqli_num_rows($result);
                                                                    if($num){
                                                                        while($row = mysqli_fetch_array($result)){
                                                                            $href = 'https://'.$row['urlstr'];
                                                                            echo "<tr>
                                                                                    <td>
                                                                                        <div class='widget-heading'>{$row['urlname']}</div>
                                                                                    </td>
                                                                                    <td class='text-left'><a href={$href}>{$row['urlstr']}</a></td>
                                                                                    <td class='text-left'>";
                                                                            $sql2 = "SELECT * FROM urllables WHERE username = '$usernm' AND urlstr = '{$row['urlstr']}'";
                                                                            $result2 = $conn->query($sql2);
                                                                            while($row2 = mysqli_fetch_array($result2)){
                                                                                echo "<i class='fa fa-tags'></i>&nbsp{$row2['urllable']}<br>";
                                                                            }
                                                                            echo "</td><td class='text-right'>";
                                                                            $sql3 = "SELECT * FROM urlcomments WHERE username = '$usernm' AND urlstr = '{$row['urlstr']}'";
                                                                            $result3 = $conn->query($sql3);
                                                                            while($row3 = mysqli_fetch_array($result3)){
                                                                                echo "<i class='fa fa-paper-plane'></i>&nbsp{$row3['urlcomment']}<br>";
                                                                            }
                                                                            echo "</td></tr>";
                                                                        }
                                                                    }else{
                                                                        echo "<script>alert('url名称不存在，查询失败！');window.location.href='search.html'</script>";
                                                                    }
                                                                    break;
                                                                case 0:
                                                                    $sql = "SELECT * FROM urls WHERE username = '$usernm' AND urlname = '$urlName'";
                                                                    $result = $conn->query($sql);
                                                                    $num = mysqli_num_rows($result);
                                                                    if($num){
                                                                        while($row = mysqli_fetch_array($result)){
                                                                            $href = 'https://'.$row['urlstr'];
                                                                            echo "<tr>
                                                                                    <td>
                                                                                        <div class='widget-heading'>{$row['urlname']}</div>
                                                                                    </td>
                                                                                    <td class='text-left'><a href={$href}>{$row['urlstr']}</a></td>
                                                                                    <td class='text-left'>";
                                                                            $sql2 = "SELECT * FROM urllables WHERE username = '$usernm' AND urlstr = '{$row['urlstr']}' AND urllable = '{$urlLable}'";
                                                                            $result2 = $conn->query($sql2);
                                                                            while($row2 = mysqli_fetch_array($result2)){
                                                                                echo "<i class='fa fa-tags'></i>&nbsp{$row2['urllable']}<br>";
                                                                            }
                                                                            echo "</td><td class='text-right'>";
                                                                            $sql3 = "SELECT * FROM urlcomments WHERE username = '$usernm' AND urlstr = '{$row['urlstr']}'";
                                                                            $result3 = $conn->query($sql3);
                                                                            while($row3 = mysqli_fetch_array($result3)){
                                                                                echo "<i class='fa fa-paper-plane'></i>&nbsp{$row3['urlcomment']}<br>";
                                                                            }
                                                                            echo "</td></tr>";
                                                                        }
                                                                    }else{
                                                                        echo "<script>alert('url名称不存在，查询失败！');window.location.href='search.html'</script>";
                                                                    }
                                                                    break;
                                                            }
                                                        }
                                                        ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>