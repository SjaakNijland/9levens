
<?php
include 'views/head.php';
include 'views/menu.php';
$current_page = isset($_GET['action'])?$_GET['action']:'home';

switch ($current_page) {
    case 'home':
        include 'views/home.php';
        break;

    case 'keuze':
        include 'views/keuze.php';
        break;

    case 'poezen':
        include 'views/poezen.php';
        break;

    case 'katers':
        include 'views/katers.php';
        break;

    case 'nieuws':
        include 'views/nieuws.php';
        break;

    case 'ons':
        include 'views/ons.php';
        break;
    case 'contact':
        include 'views/contact.php';
        break;
    case 'links':
        include 'views/links.php';
        break;
    case 'verzonden':
        include 'views/verzonden.php';
        break;

    case 'kittens':
        include 'views/kittens.php';
        break;

    case 'memory':
        include 'views/kittens/memory/memory.php';
        break;

    case 'memory/etelka':
        include 'views/kittens/memory/fotos/etelka.php';
        break;
    case 'memory/gyula':
        include 'views/kittens/memory/fotos/gyula.php';
        break;
    case 'memory/katinka':
        include 'views/kittens/memory/fotos/katinka.php';
        break;
    case 'memory/sissy':
        include 'views/kittens/memory/fotos/sissy.php';
        break;

    case 'stable':
        include 'views/kittens/stable/stable.php';
        break;

    case 'stable/Fancy':
        include 'views/kittens/stable/fotos/Fancy.php';
        break;

    case 'stable/Fancy':
        include 'views/kittens/stable/fotos/Fancy.php';
        break;

    case 'stable/Herona':
        include 'views/kittens/stable/fotos/Herona.php';
        break;

    case 'stable/Udolla':
        include 'views/kittens/stable/fotos/Udolla.php';
        break;

    case 'stable/Hailey':
        include 'views/kittens/stable/fotos/Hailey.php';
        break;

}
include 'views/footer.php';
?>