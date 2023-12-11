<?php
$route=$_SERVER["REQUEST_URI"];

switch($route) {
    case '/':require('./controlleurs/index.php');
        break;
    
        case '/about':require('./controlleurs/about.controlleurs.php');
        break;
        case '/blog':require('./controlleurs/blog.controlleurs.php');
        break;
        case '/checkout':require('./controlleurs/checkout.controlleurs.php');
        break;
        case '/contact':require('./controlleurs/contact.controlleurs.php');
        break;
        case '/services':require('./controlleurs/services.controlleurs.php');
        break;
        case '/shop':require('./controlleurs/shop.controlleurs.php');
        break;
        case '/thankyou':require('./controlleurs/thankyou.controlleurs.php');
        break;
        case '/cart':require('./controlleurs/cart.controlleurs.php');
        break;
    default:
        # code...
        break;
}

?>