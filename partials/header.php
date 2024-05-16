<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title ?? '' ?> | LUXIMA.ID </title>

    <meta name="description"
    content="Experience the best wedding photography in Aceh with LUXIMA.ID. We offer professional wedding photography services at the best price." />
    <meta name="keywords"
    content="Wedding Photography, Photography Services, luxima.id, luxima-id, luxima photography, luxima studio, fotografer aceh, Wedding Organizer" />
    <meta name="author" content="LUXIMA.ID / Siddiq Achmad" />

    <!-- Basic stylesheet -->
        <!-- UIkit CSS -->
    <link rel="stylesheet" href="css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.ico">
    <link rel="icon" type="image/png" href="assets/images/favicon.ico">
    


</head>
<body>

    <div id="spinner" class="uk-container " >
        <div uk-spinner>
        </div>
        <progress id="js-progressbar" class="uk-progress" value="1" max="100"></progress>
    </div>

    <div id="app" class="page_wrapper">
        <!--Header PC-->
        <div id="page-header" class="page-header">
            <div id="page-header-inner" class="header-centered uk-light uk-container uk-container-large uk-text-center uk-visible@m uk-inline">
                <a itemprop="url" class="header-logo-link uk-position-center uk-overlay" href="./" rel="home">
                    <img src="assets/images/luxima.png" class="qodef-header-logo-image qodef--main" alt="logo main" 
                    itemprop="image" srcset="assets/images/luxima.png"> 
                </a>
                <div class="uk-position-absolute top_nav uk-position-center uk-overlay" uk-grid>
                    <div class="uk-width-1-4 ">
                        <div id="social_icons_group" class="widget" data-area="header-widget-two"> 
                            <div class="social-icons-group">
                                <a href="https://www.facebook.com/luxima.photo" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook" style="color:#a78656" target="_blank"></a>
                                <a href="https://www.instagram.com/luxima.id" class="uk-icon-button  uk-margin-small-right" uk-icon="instagram" style="color:#a78656" target="_blank"></a>
                                <a href="https://www.twitter.com/luximaid" class="uk-icon-button  uk-margin-small-right" uk-icon="twitter" style="color:#a78656" target="_blank"></a>
                                <a href="https://www.tiktok.com/@luxima.id" class="uk-icon-button  uk-margin-small-right" uk-icon="tiktok" style="color:#a78656" target="_blank"></a>
                                <a href="https://www.youtube.com/@luxima-id" class="uk-icon-button  uk-margin-small-right" uk-icon="youtube" style="color:#a78656" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <nav class="uk-navbar-container uk-navbar-transparent header-navigation uk-dropnav" uk-dropnav="align: center">
                            <ul id="menu-global" class="menu uk-tab uk-subnav uk-flex-center">
                                <li class="menu_item uk-active">
                                    <a href="index.php">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="menu_item">
                                    <a href>Pages <span uk-drop-parent-icon></span></a>
                                    <div class="uk-dropdown">
                                        <ul class="uk-nav uk-dropdown-nav">
                                            <li class="uk-active"><a href="about">About Us</a></li>
                                            <li><a href="gallery">Gallery</a></li>
                                            <li><a href="package">Package List</a></li>
                                            <li><a href="howto">How it Work</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu_item">
                                    <a href>Shop <span uk-drop-parent-icon></span></a>
                                    <div class="uk-dropdown">
                                        <ul class="uk-nav uk-dropdown-nav">
                                            <li class="uk-active"><a href="shops">Shop</a></li>
                                            <li><a href="shop-single">Layout</a></li>
                                            <li><a href="shop-single">Shop Single</a></li>
                                            <li><a href="shop-single">Shop Page</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu_item">
                                    <a href>Listings <span uk-drop-parent-icon></span></a>
                                    <div class="uk-dropdown">
                                        <ul class="uk-nav uk-dropdown-nav">
                                            <li class="uk-active"><a href="listing-detail">Listing Items</a></li>
                                            <li><a href="listing-maps">Listing Maps</a></li>
                                            <li><a href="listing-list">Listing List Compact</a></li>
                                            <li><a href="listings">404</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu_item">
                                    <a href>Blog <span uk-drop-parent-icon></span></a>
                                    <div class="uk-dropdown">
                                        <ul class="uk-nav uk-dropdown-nav">
                                            <li class="uk-active"><a href="blog-single">Blog single</a></li>
                                            <li><a href="sidebar-right">Right Sidebar</a></li>
                                            <li><a href="sidebar-left">Left Sidebar</a></li>
                                            <li><a href="no-sidebar">No Sidebar</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu_item">
                                    <a href="contact">
                                        <span>Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="uk-width-1-4">
                        <div class="widget uk-hidden">
                            <a href="#modal-login" class="login-opener" uk-toggle>
                                <span class="login-opener-text">Log In</span>
                                <span uk-icon="icon: users">
                                </span>
                            </a> 
                            
                            <div class="dropdown-cart uk-hidden">
                                <div class="dropdown-cart-inner m-inner">
                                    <a itemprop="url" class="" href="https://luxima-id.com/">
                                        <span class="">Cart</span>
                                        <span class="">(0)</span>
                                    </a>	
                                </div>    
                            </div>                           
                        </div>

                        <div class="widget">
                            <a class="" href="#modal-search"  uk-toggle aria-label="Open Search" role="button">
                                <span uk-icon="icon: menu">
                                </span>
                            </a>
                        </div>
                        

                        <div class="widget">
                            <div id="" class="uk-dark" data-area="header-widget-one">
                                <a href="javascript:void(0)" class="" type="button">
                                    <span class="search-opener-text">Search</span> 
                                    <span uk-icon="icon: search"></span>
                                </a>
                                <div uk-dropdown="mode: click" class="uk-padding-remove" style="color: #a78656; background: none;">
                                    <form id="form_search" action="search" method="get">
                                    <div class="uk-margin uk-margin-remove">
                                        <div class="uk-inline">
                                            <a class="uk-form-icon uk-form-icon-flip" href="javascript:void(0)" onclick="document.getElementById('form_search').submit();" uk-icon="icon: search"></a>
                                            <input class="uk-input" type="text" name="q" aria-label="Clickable icon" placeholder="Search ">
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Header Mobile-->
        <div class="header-mobile uk-position-relative uk-hidden@m">
        <div class="uk-child-width-expand uk-grid-small" uk-grid >
            <div class="uk-card uk-width-expand uk-margin-large-left">
                <a itemprop="url"  href="https://luxima.id" rel="home">
                    <img class="logo-mobile" src="assets/images/luxima.png" class="qodef-header-logo-image qodef--main" alt="logo main" 
                    itemprop="image" srcset="assets/images/luxima.png"> 
                </a>
            </div>
            <div class="uk-card uk-width-1-6 uk-margin-left uk-text-right uk-text-top">
                <a href="#modal-login" uk-icon="users" uk-toggle></a>
            </div>
            <div class="uk-card uk-width-1-6 uk-margin-left uk-text-center">
                <nav class="uk-navbar-container uk-navbar-transparent">
                    <div class="uk-container">
                        <div uk-navbar="dropbar: true; dropbar-anchor: !.header-mobile; target-y: !.header-mobile">
                
                            <div class="uk-navbar">
                                <a class="uk-navbar-toggle uk-navbar-toggle-animate nav-height" uk-navbar-toggle-icon href="#"></a>
                                <div class="uk-navbar-dropdown" uk-drop="boundary: !.header-mobile; stretch: x; flip: false; mode: click">
                                    
                                        <ul class="uk-nav-default" uk-nav>
                                            <li class="uk-active"><a href="index.html" class="uk-text-uppercase">HOME</a></li>
                                            
                                            <li class="uk-parent">
                                                <a href="#" class="uk-text-uppercase">Pages<span uk-nav-parent-icon></span></a>
                                                
                                                    <ul class="uk-nav-sub">
                                                        <li class="uk-active"><a href="about.html">About Us</a></li>
                                                        <li><a href="gallery.html">Gallery</a></li>
                                                        <li><a href="package.html">Package List</a></li>
                                                        <li><a href="howto.html">How it Work</a></li>
                                                    </ul>
                                                
                                            </li>
                                            <li class="uk-parent">
                                                <a href="#" class="uk-text-uppercase">Shop <span uk-nav-parent-icon></span></a>
                                                
                                                    <ul class="uk-nav-sub">
                                                        <li class="uk-active"><a href="shop.html">Shop</a></li>
                                                        <li><a href="layout.html">Layout</a></li>
                                                        <li><a href="shop-detail.html">Shop Single</a></li>
                                                        <li><a href="shop-page.html">Shop Page</a></li>
                                                    </ul>
                                                
                                            </li>
                                            <li class="uk-parent">
                                                <a href="#" class="uk-text-uppercase">Listings <span uk-nav-parent-icon></span></a>
                                                
                                                    <ul class="uk-nav-sub">
                                                        <li class="uk-active"><a href="listing-item.html">Listing Items</a></li>
                                                        <li><a href="listing-map.html">Listing Maps</a></li>
                                                        <li><a href="listing-compact.html">Listing List Compact</a></li>
                                                        <li><a href="listing-location.html">Location Filter</a></li>
                                                    </ul>
                                                
                                            </li>
                                            <li class="uk-parent">
                                                <a href="#" class="uk-text-uppercase">Blog <span uk-nav-parent-icon></span></a>
                                                
                                                <ul class="uk-nav-sub">
                                                    <li class="uk-active"><a href="Blog-single.html">Blog single</a></li>
                                                    <li><a href="sidebar-right.html">Right Sidebar</a></li>
                                                    <li><a href="sidebar-left.html">Left Sidebar</a></li>
                                                    <li><a href="no-sidebar.html">No Sidebar</a></li>
                                                </ul>
                                                
                                            </li>
                                            <li class="uk-parent">
                                                <a href="contact.html" class="uk-text-uppercase">
                                                    <span>Contact</span>
                                                </a>
                                            </li>

                                            <li class="uk-nav-header">OTHER</li>
                                            <li><a href="https://www.facebook.com/luxima.photo" target="_blank"><span class="uk-margin-small-right" uk-icon="icon: facebook"></span> Facebook</a></li>
                                            <li><a href="https://www.instagram.com/luxima.id/" target="_blank"><span class="uk-margin-small-right" uk-icon="icon: instagram"></span> Instagram</a></li>
                                            <li><a href="https://www.twitter.com/luximaid" target="_blank"><span class="uk-margin-small-right" uk-icon="icon: twitter"></span> Twitter</a></li>
                                            <li><a href="https://www.tiktok.com/@luxima.id" target="_blank"><span class="uk-margin-small-right" uk-icon="icon: tiktok"></span> Tiktok</a></li>
                                            <li><a href="https://www.youtube.com/@luxima-id" target="_blank"><span class="uk-margin-small-right" uk-icon="icon: youtube"></span> Youtube</a></li>
                                            <li class="uk-nav-divider"></li>
                                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: sign-in"></span> Register</a></li>
                                        </ul>
                                    
                                        
                                </div>
                            </div>
                
                        </div>
                    </div>
                </nav>
            </div>
            
        </div>
        
        
        </div>

        <!-- Page Outer -->
        <div class="page-outer">

            <!--Page Inner -->
            <div id="page-inner" class="page-inner">
                <main id="page-content" class="lxm_grid">
                    

                    <!-- CONTENT -->

                    <!--section page -->
                    <section  id="main-section-page" class="row full-width">
                        <div class="elemen_container">
                            <div  class="elemen_row">
                                <div class="banner-page uk-light">

                                    <!-- BANNER -->
                                    <!-- <div class="uk-position-cover uk-height-large">
                                        <img src="assets/images/banner/19.jpg" alt="" uk-cover>
                                    </div> -->
                                    <!-- TITLE -->
                                    <!-- <div class="uk-inline uk-margin uk-section uk-position-cover" >
                                        <div class="uk-position-bottom-center uk-overlay">
                                            <div class="uk-grid-small uk-child-width-auto">
                                                <div>
                                                    <h1 class="uk-text-nowrap@m uk-margin-remove slide-animasi tx_title uk-scrollspy-inview"><?php echo $title; ?></h1>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div> -->