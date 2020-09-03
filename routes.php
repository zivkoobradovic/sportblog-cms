<?php

// Homepage
$router->get('/', '\App\Controllers\HomepageController@index');

$router->get('/admin', function() {
    echo twig()->render('layouts/admin/admin-index.html');
});

// Posts
// Routes for anonymous visitors
$router->get('/posts', '\App\Controllers\PostsController@index');
$router->get('/posts/{id}', '\App\Controllers\PostsController@show');
// Route for Admins and post owners only
$router->get('/posts/create', '\App\Controllers\PostsController@create');
$router->post('/posts', '\App\Controllers\PostsController@store');
$router->get('/editPost/{id}', '\App\Controllers\PostsController@edit');
$router->post('/updatePost/{id}', '\App\Controllers\PostsController@update');
$router->post('/deletePost/{id}', '\App\Controllers\PostsController@delete');

//Comments
// Route for Admins and post owners only
$router->get('/comments', '\App\Controllers\CommentsController@index');
$router->get('/comments/{id}', '\App\Controllers\CommentsController@show');
// Route for admins and comment owners
$router->get('/editComment/{id}', '\App\Controllers\CommentsController@edit');
$router->post('/updateComment/{id}', '\App\Controllers\CommentsController@update');
$router->post('/deleteComment/{id}', '\App\Controllers\CommentsController@delete');
$router->get('/comments/create', '\App\Controllers\CommentsController@create');
$router->post('/comments/{id}', '\App\Controllers\CommentsController@store');


//Users
// Route for Adnmins only !!!
$router->get('/users', '\App\Controllers\UsersController@index');
// Routes for Adnmins and profile owners only !!!
$router->get('/users/{id}/edit', '\App\Controllers\UsersController@show');
$router->get('/users/{id}', '\App\Controllers\UsersController@edit');
$router->post('/users/{id}', '\App\Controllers\UsersController@update');
$router->delete('/users/{id}', '\App\Controllers\UsersController@delete');
// Routes for Adnmins only !!!
$router->get('/users', '\App\Controllers\UsersController@create');
$router->post('/users', '\App\Controllers\UsersController@store');

// Auth
$router->get('/login', '\App\Controllers\AuthController@loginForm');
$router->post('/login', '\App\Controllers\AuthController@login');
$router->post('/logout', '\App\Controllers\AuthController@logout');
$router->get('/register', '\App\Controllers\AuthController@registerForm');
