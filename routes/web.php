<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//GET

Route::get('/', function(){
    return view('pages.homepage');
});


Route::get('/newpost', function () {
    return view('pages.newquestion');
});

Route::get('/logout', function() {
    session()->flush();
    return redirect('/');
});

Route::get('/userProfile', function() {
    session()->flush();
    return view('pages.userProfile');
});

Route::get('/post/{id}/upvote', 'ClientController@upvote');
Route::get('/post/{id}/downvote', 'ClientController@downvote');
Route::get('/post/{id}/{id2}/upvoteA', 'ClientController@upvoteA');
Route::get('/post/{id}/{id2}/downvoteA', 'ClientController@downvoteA');
Route::get('/post/{id}/delete', 'ClientController@deleteQuestion');
Route::get('/post/bestanswer/{qid}/{aid}/', 'ClientController@setBestAnswer');
Route::get('/post/unbestanswer/{qid}/{aid}/', 'ClientController@unsetBestAnswer');


//POST
Route::get('/login', 'ClientController@authenticate');
Route::get('/newpost/do', 'ClientController@postQuestion');
Route::get('/register', 'ClientController@register');
Route::get('/post/{id}/newanswer', 'ClientController@postAnswer');
Route::get('/edit', 'ClientController@editQuestion');
Route::get('/editProfile', 'ClientController@updateUserProfile');
