<?php

require_once __DIR__ . '/../config/twig.php';


$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

foreach($products as $product) {
 
    echo $twig->render('products.html.twig', ['product' => $product]);
}

