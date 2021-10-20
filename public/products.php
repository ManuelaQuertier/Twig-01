<?php

$products = 
    [
        'guitare', 
        'bass',
        'bonjo', 
        'cithare', 
        'lyre',
        'harpe'
    ];
    echo var_dump($products);

    echo $twig->render('products.html.twig', ['products' => $products]);