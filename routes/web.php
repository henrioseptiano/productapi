<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->post('adduser', "UserController@store");
$router->put('edituser', "UserController@update");
$router->delete('deleteuser', "UserController@destroy");
$router->post('addcar', "CarsController@store");
$router->put('editcar', "CarsController@update");
$router->delete('deletecar', "CarsController@destroy");
$router->post('addrole', "RoleController@store");
$router->put('editrole', "RoleController@update");
$router->delete('deleterole', "RoleController@destroy");
$router->post('addcarbrand', "CarBrandsController@store");
$router->put('editcarbrand', "CarBrandsController@update");
$router->delete('deletecarbrand', "CarBrandsController@destroy");
$router->post('addcomments', "CommentsController@store");
$router->put('editcomments', "CommentsController@update");
$router->delete('deletecomments', "CommentsController@destroy");
$router->post('addcommentreplies', "CommentRepliesController@store");
$router->put('editcommentreplies', "CommentRepliesController@update");
$router->delete('deletecommentreplies', "CommentRepliesController@destroy");
$router->post('upvotecomments', "UpvoteCommentsController@store");
//$router->put('editvotecomments', "UpvoteCommentsController@update");
$router->post('upvotecommentreplies', "UpvoteCommentRepliesController@store");
//$router->put('editvotecommentreplies', "UpvoteCommentRepliesController@update");
$router->post('downvotecommentreplies', "DownvoteCommentRepliesController@store");
$router->post('downvvotecomments', "DownvoteCommentsController@store");
//$router->put('editvotecommentreplies', "DownvoteCommentRepliesController@update");

