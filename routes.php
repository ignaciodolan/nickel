<?php

$router->get('', 'PagesController@index');

$router->get('product', 'PagesController@product');

$router->post('contact', 'PagesController@contact');
