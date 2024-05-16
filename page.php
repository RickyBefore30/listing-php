<?php
 
 $title='';
 $bg = '15.jpg';


include "partials/header.php";


if(isset($_GET['pages'])){
    $page = $_GET['pages'];

    switch ($page) {
        case 'about':
            $title='About Page';
            $bg = '19.jpg';
            include "pages/about.php";
            break;
        case 'contact':
            $title='Contact';
            $bg = 'blog-title-area-img.jpg';
            include "pages/contact.php";
            break;			
        case 'gallery':
            $title='Gallery';
            $bg = 'p3-title-are-img.jpg';
            include "pages/gallery.php";
            break;
        case 'package':
            $title='Package';
            $bg = 'about-us.jpg';
            include "pages/package.php";
            break;
        case 'howto':
            $title='How It Work';
            $bg = '23.jpg';
            include "pages/how-it-work.php";
            break;		
        case 'shops':
            $title='Shop';
            $bg = 'about-us.jpg';
            include "pages/shop/shops.php";
            break;			
        case 'shop-single':
            $title='Shop Single';
            $bg = 'about-us.jpg';
            include "pages/shop/shop-single.php";
            break;
        
            
        case 'blog':
            $title='Blog Page 1';
            $bg = '7.jpg';
            include "pages/blogs/blog.php";
            break;
        case 'blog-single':
            $title='Blog Single';
            $bg = '7.jpg';
            include "pages/blogs/blog-single.php";
            break;
        case 'no-sidebar':
            $title='No Sidebar';
            $bg = '7.jpg';
            include "pages/blogs/no-sidebar.php";
            break;
        case 'sidebar-left':
            $title='Sidebar Left';
            $bg = '7.jpg';
            include "pages/blogs/sidebar-left.php";
            break;
        case 'sidebar-right':
            $title='Sidebar Right';
            $bg = '7.jpg';
            include "pages/blogs/sidebar-right.php";
            break;

        case 'listing':
            $title='Listing';
            $bg = 'blog-title-area-img.jpg';
            include "pages/listings/listing.php";
            break;

        case 'listing-detail':
            $title='Listings';
            $bg = '1.jpg';
            include "pages/listings/listing-detail.php";
            break;
        case 'listing-list':
            $title='Listing List';
            $bg = '1.jpg';
            include "pages/listings/listing-list.php";
            break;
        case 'listing-maps':
            $title='Listing Maps';
            $bg = '1.jpg';
            include "pages/listings/listing-maps.php";
            break;
        case 'auth':
            $title='Register';
            $bg = 'blog-title-area-img.jpg';
            include "Auth.php";
            break;
        default:
            $title='Error Page !';
            $bg = '1.jpg';
            include "pages/404.php";
            break;
    }
}else{
    ?>
    <script>
    window.location.href = "./";
    </script>
    <?php
}

include "partials/footer.php";

?>