<?php


use core\router\App;
$router = array();

if (App::get('config')['options']['array_routing']) {
    $router->getArray([
        //'' => 'PagesController@home',
        //'user/delete/{id}' => 'UsersController@delete'
    ]);
    $router->postArray([
        //'users' => 'UsersController@store',
        //'user/update/{id}' => 'UsersController@update',
    ]);
}
else {
    //$router->get('', 'PagesController@home');
    //$router->get('post/delete/{id}', 'BlogController@delete');
    //$router->post('post/update/{id}', 'BlogController@update');
}

?>
