<?php 
require 'products.html.twig';
$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

echo $twig->render('file.html.twig', [
    'products' => $products
]
);

